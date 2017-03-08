<<<<<<< Updated upstream
<html>
    <head>
        <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    </head>
        <body>
            <div class="container">
                <div id="poll">
                    <h3>Which disease are you going to choose?</h3>
                        <div class="row">

                        <form>
                            <?php
                                $sth = $db->prepare("SELECT Leading_Cause FROM Death_Cause order by RAND() LIMIT 1");
                                $sth->execute();
                                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($result as $row){?>
                                        <div class="col offset-s1 s5 valign-wrapper to_know">
                                            <p class="valign center-align">
                                                <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
                                                <div class="prefere_disease"><?php echo $row["Leading_Cause"]; ?></div>
                                            </p>
                                        </div>
                                    <?php }

                                $sth = $db->prepare("SELECT Leading_Cause FROM Death_Cause order by RAND() LIMIT 1");
                                $sth->execute();
                                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($result as $row){?>
                                        <div class="col s5 valign-wrapper orange lighten-5 to_chose  ">
                                            <p class="valign center-align">
                                                <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
                                                <div class="prefere_disease"><?php echo $row["Leading_Cause"]; ?></div>
                                            </p>
                                        </div>
                                    <?php }
                            ?>

                            <script>
                                function getVote(int) {
                                    if (window.XMLHttpRequest) {
                                    // code for IE7+, Firefox, Chrome, Opera, Safari
                                    xmlhttp=new XMLHttpRequest();
                                    } else {  // code for IE6, IE5
                                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                    xmlhttp.onreadystatechange=function() {
                                        if (this.readyState==4 && this.status==200) {
                                          document.getElementById("poll").innerHTML=this.responseText;
                                        }
                                    }
                                xmlhttp.open("GET","view/poll.php?vote="+int,true);
                                xmlhttp.send();
                                }
                            </script>
                        </form>
                    </div>
                </div>
            </div>

        </body>
=======
<?php

    ini_set('display_errors',1);
    error_reporting(E_ALL|E_STRICT);

    include('controller/functions.php');
	unset($_SESSION['answered']);
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Rather than</title>
  <meta name="generator" content="">

  <meta name="keywords" content="">
  <meta name="description" content="">
  <link href="style.css" rel="stylesheet" type="text/css"/>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
 </head>
 <body>
   <div class="container">
       <div class="row">
           <h3 align="center">Which disease are you going to choose?</h3>
           <div class="col-sm-4 col-sm-offset-4">
               <div class="panel panel-primary">
                   <div class="panel-heading">
                   </div>
                       <div class="panel-body">
                          <div class="col-sm-12"> <div class="poll">Loading...</div></div>
                           <ul class="list-group">


                           </ul>
                       </div>

                       <div class="panel-footer">
                           <div class="row"><div class="col-sm-6"> <a href="#"></a> <button type="button" class="btn btn-primary btn-sm button">
                                       Vote</button></a></div> <div class="col-sm-6"><a href="javascript:;" onClick="javascript:get_poll();"><div class="btn btn-primary btn-sm pull-right"> Next Question</div></a></div></div>

                   </div>




	   </div>
   </div>
       </div>

 </body>
>>>>>>> Stashed changes
</html>
