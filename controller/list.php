<?php include '../model/pdo.php'; ?>

    <div value="disease">Disease</div>
    <?php
$sth = $db->prepare("SELECT Leading_Cause FROM Death_Cause GROUP BY Leading_Cause ORDER BY Leading_Cause ASC");
 $sth->execute();
 $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row)
      {?>
    <div value="<?php print $row["Leading_Cause"]?>"><?php print $row["Leading_Cause"]."<br>";?></div>

    <?php }?>
