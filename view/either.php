<?php include '../model/pdo.php'; ?>
<html>
    <head>
        <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    </head>
        <body>
            <div id="poll">
                <h3>Which disease are you going to choose?</h3>

                <form>
<?php
$sth = $db->prepare("SELECT Leading_Cause FROM Death_Cause order by RAND() LIMIT 1");
 $sth->execute();
 $result = $sth->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row){

      ?>
<p><?php echo $row["Leading_Cause"]; ?><input type="radio" name="vote" value="0" onclick="getVote(this.value)"></p>
<?php }?>

<?php
$sth = $db->prepare("SELECT Leading_Cause FROM Death_Cause order by RAND() LIMIT 1");
 $sth->execute();
 $result = $sth->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row){

      ?>
<p><?php echo $row["Leading_Cause"]; ?><input type="radio" name="vote" value="1" onclick="getVote(this.value)"></p>
<?php }?>
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
                      xmlhttp.open("GET","poll.php?vote="+int,true);
                      xmlhttp.send();
                    }
                    </script>
                </form>
            </div>

        </body>
</html>
