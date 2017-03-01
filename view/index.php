<!DOCTYPE html>

<html>

<head>

</head>

<body>

  <form action="" method="post">

    <label for="name">Name or pseudo</label>
    <input type="text" name="name"> <br />

    <input type="radio" name="gender" value="male"> Male <br />
    <input type="radio" name="gender" value="female">Female <br />

    <label for="age">Age</label>
    <select id="age" name="age">
      <option value="25">0-25</option>
      <option value="50">25-50</option>
      <option value="75">50-75</option>
      <option value="100">75-100</option>
    </select>

    <label for="ethnicity">Ethnicity</label>
    <select id="ethncity" name="ethncity">
      <option value="25">0-25</option>
      <option value="50">25-50</option>
      <option value="75">50-75</option>
      <option value="100">75-100</option>
    </select>

  </form>

  <?php

  $query = $db->prepare("SELECT Leading_Cause FROM Death_Cause
    ORDER BY RAND()
    LIMIT 1");

  $query->execute();


  while ($row = $query->fetch())
  { ?>
    <span><?php echo $row['Leading_Cause']; ?></span><?php
  }


  ?>

</body>

</html>
