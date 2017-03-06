<?php 
require "../model/pdo.php";
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="view/materialize/css/materialize.min.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="view/style.css"  media="screen,projection"/>
     <title>Document</title>
 </head>
 <body>

     <!--<header>
         <nav>
             <div class="nav-wrapper brown lighten-3">
                 <a href="#" class="brand-logo center">Logo</a>
            </div>
         </nav>
     </header>
     <main>
         <div class="container">
             <div class="row">
                 <div class="col s5">
                     <div class="row valign-wrapper brown lighten-2 z-depth-2 cadre">                        <form method="post" action="" class="col offset-s2 s8">
                            <input type="text" name="name" class="validate" placeholder="Full name">
                             <div class="input-field col s12">
                                 <select name="sex" id="">
                                     <option value="" disabled selected>Gender</option>
                                     <option value="">Woman</option>
                                     <option value="">Man</option>
                                     <option value="">Other</option>
                                 </select>
                             </div>
                             <div class="input-field col s12">
                                 <select name="age" id="">
                                     <option value="" disabled selected>Age</option>
                                     <option value="">13 to 17</option>
                                     <option value="">18 to 24</option>
                                     <option value="">25 to 34</option>
                                     <option value="">35 to 44</option>
                                     <option value="">45 to 54</option>
                                     <option value="">55 to 65</option>
                                     <option value="">Older</option>
                                 </select>
                             </div>
                             <div class="input-field col s12">
                                 <select name="" id="">
                                     <option value="" disabled selected>Ethnicity</option>
                                     <option value=""></option>
                                     <option value=""></option>
                                     <option value=""></option>
                                 </select>
                             </div>
                             <button type="submit" class="col offset-s2 s8 btn waves-effect waves-light brown lighten-3" onclick="getExplanations()">Your death !</button>
                         </form>
                     </div>
                 </div>
                <div class="col offset-s2 s5">
                     <div class="row valign-wrapper brown lighten-2 z-depth-2 cadre">
                         wesh
                     </div>
                </div>
             </div>
             <div id="plus" class="row valign-wrapper" style="display: none" >
                 Vous pouvez en apprendre plus sur la maladie que vous avez eu !
             </div>
         </div>
     </main>
     <footer></footer>

     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="view/materialize/js/materialize.min.js"></script>
     <script>

    var explain = document.getElementById("plus");

     function getExplanations(){
         explain.style.display = "block";
     }

     //Materialize stuff
     $(document).ready(function() {
         $('select').material_select();
    });
     </script> -->
     
     <form action="" method="post">
         
        <input type="text" name="disease">name  
         
        <input type="submit" value="submit">
         
     </form>

 </body>
 </html>



<?php
  
if(isset($_POST))
{
    
$nameDisease = $_POST['disease'];

echo $nameDisease;
    
}
  

?>
