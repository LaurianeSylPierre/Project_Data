<?php
session_start();
require("../model/pdo.php");
error_reporting(0);
function get_questions(){
	global $conn;
	$notIn = "";
	if(isset($_SESSION['answered']) && count($_SESSION['answered'])){
		$answered = implode(",",$_SESSION['answered']);
		$notIn = " where id not in (".$answered.")";
	}

	//echo "SELECT * FROM `questions` $notIn limit 1";
	$stmt = $conn->prepare("SELECT * FROM `questions` $notIn limit 1");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$question = $stmt->fetch();

	// add question id to session so we can ignore this question
	$_SESSION['answered'][] = $question["id"];
	$_SESSION['question']   = $question["id"];

	$stmt = $conn->prepare("SELECT * FROM `answers` where question_id = ?");
	$stmt->execute(array($question['id']));
	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	while($info = $stmt->fetch()){
		$answers[$info["id"]] = $info["answer"];
	}
	echo '{"id":"'.$question["id"].'","question":"'.$question["question"].'","answers":'.json_encode($answers).'}';
}

function save_answer($post){
	global $conn;

	$ans  = $post['ans'];
	$ques = $_SESSION['question'];

	$stmt = $conn->prepare("insert into poll_answers(question_id,answer_id,user_ip) values(:qid,:aid,:ip)");
	$success = $stmt->execute(array(
			":qid" => $ques,
			":aid" => $ans,
			":ip" => $_SERVER['REMOTE_ADDR']
		   ));

	if($success){
		// fetch and send details back
		echo get_all_answers($ques);

	}else echo json_encode(array("success"=>"0","error"=>"Unexpected error occurred"));

}

function get_all_answers($qid){
	global $conn;
	// get all available answers
	$answer_count = 0;
	$count = array();
	$ans = answer_options($qid);
	$stmt = $conn->prepare("SELECT * FROM `poll_answers` where question_id = ?");
	$stmt->execute(array($qid));
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	while($info = $stmt->fetch()){
		$answer_count++;
		$count[$info['answer_id']] += 1;
	}
	return json_encode(array("success" => "1","total" => "$answer_count","details" => $count,"opt"=>$ans));
}

function answer_options($qid){
	global $conn;

	$stmt = $conn->prepare("SELECT * FROM answers where question_id = ?");
	$stmt->execute(array($qid));
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	while($info = $stmt->fetch()){
		$ans[$info['id']] = $info['answer'];
	}
	return $ans;
}

?>
