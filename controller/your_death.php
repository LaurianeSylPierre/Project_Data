<?php

require_once '../model/pdo.php';

if($_POST){
    if(empty($_POST['name'])){
      echo "Please just indicate a name";
    }
    else{
        $name = $_POST['name'];

        $query = $db->prepare("SELECT Leading_Cause, Contents FROM Death_Cause
            ORDER BY RAND()
            LIMIT 1");
        $query->execute();

        while ($row = $query->fetch()): ?>
        <div class="container" style="width: 500px; height: 500px; margin: 0 auto; padding : 5px; overflow-y: scroll; overflow-x: hidden;">
            <div class="row">
                <div class="col s12">
                    <h2 style="font-size: 150%;"><?php echo $row['Leading_Cause']; ?></h2> <br />
                    <h3 style="font-size: 125%;">Learn more about what killed you !</h3>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <span style="text-align: justify;"><?php echo $row['Contents']; ?></span>
                </div>
            </div>
        </div>
            <?php
            $leadingCause = $row['Leading_Cause'];
        endwhile;

        $req = $db->prepare('INSERT INTO last_death(name, leading_cause) VALUES(:name, :leading_cause)');
        $req->execute(array(
            'name' => $name,
            'leading_cause' => $leadingCause
        ));
    }
}

?>
