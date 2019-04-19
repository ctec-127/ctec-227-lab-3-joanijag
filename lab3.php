<!DOCTYPE html>
<?php

setcookie("cookie[countries]", "Country", time() + 7200);
setcookie("cookie[states]", "State", time() + 7200);
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php 
  if (isset($_POST['countries'])) {
    $countries = $_POST['countries'];
  }else{
    $countries = '';
  } //end if

  if (isset($_POST['states'])) {
    $states = $_POST['states'];
  }else{
    $states = '';
  }///end if

?>
  <form name="countryState" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" >
  <label for="country">Country:</label>
  <select name="countries" id="country">
    <option value="--Select--"<?=($countries == "--Select--") ? ' selected':'';?>>--Select--</option>
    <option value="unitedStates"<?=($countries == "unitedStates") ? ' selected':'';?>>United States</option>
    <option value="canada"<?=($countries == "canada") ? ' selected':'';?>>Canada</option>
    <option value="ireland"<?=($countries == "ireland") ? ' selected':'';?>>Ireland</option>
    <option value="france"<?=($countries == "france") ? ' selected':'';?>>France</option>
    <option value="germany"<?=($countries == "germany") ? ' selected':'';?>>Germany</option>
  </select>

  <label for="state">State:</label>
  <select name="states" id="state">
  <option value="--Select--"<?=($states == "--Select--") ? ' selected':'';?>>--Select--</option>
    <option value="washington"<?=($states == "washington") ? ' selected':'';?>>Washington</option>
    <option value="onterio"<?=($states == "onterio") ? ' selected':'';?>>Onterio</option>
    <option value="dublin"<?=($states == "dublin") ? ' selected':'';?>>Dublin</option>
    <option value="normandy"<?=($states == "normandy") ? ' selected':'';?>>Normandy</option>
    <option value="berlin"<?=($states == "berlin") ? ' selected':'';?>>Berlin</option>
  </select>
  <br>
		<input type="submit" value="Submit">
  </form>
  
</body>
</html>
