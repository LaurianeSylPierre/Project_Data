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
</html>
