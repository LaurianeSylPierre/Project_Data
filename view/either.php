<?php

    ini_set('display_errors',1);
    error_reporting(E_ALL|E_STRICT);

    include('../controller/functions.php');
	unset($_SESSION['answered']);
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Rather than</title>
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
</html>
