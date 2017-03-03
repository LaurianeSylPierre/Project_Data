<?php include '../model/pdo.php'; ?>

<select class="form-control" name="select_ethni" id="select_ethni">
    <option value="ETHNICITY" >Ethnicity</option>
    <?php
$sth = $db->prepare("SELECT Ethnicity FROM Death_Cause GROUP BY Ethnicity ORDER BY Ethnicity ASC");
 $sth->execute();
 $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row)
      {?>
    <option value="<?php print $row["Ethnicity"]?>"><?php print $row["Ethnicity"]."<br>";?></option>
    <?php }?>
</select>


    <div value="ETHNICITY">Disease</div>
    <?php
    include '../model/pdo.php';
$sth = $db->prepare("SELECT Leading_Cause FROM Death_Cause GROUP BY Leading_Cause ORDER BY Leading_Cause ASC");
 $sth->execute();
 $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row)
      {?>
    <div value="<?php print $row["Leading_Cause"]?>"><?php print $row["Leading_Cause"]."<br>";?></div>

    <?php }?>
