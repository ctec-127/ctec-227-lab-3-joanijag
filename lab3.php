<!DOCTYPE html>
<?php

if (isset($_POST['countries'])) {
  $countries = $_POST['countries'];
}else{
  $countries = '';
} //end if

if (isset($_POST['steates'])) {
  $states = $_POST['states'];
}else{
  $states = '';
}///end if

setcookie("countries", $_POST['countries'], time() + (36000));
setcookie("states", $_POST['states'], time() + (36000));

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <label for="country">Country:</label>
  <select name="countries" id="country">
    <option value="--Select--"<?php if($countries == "--Select--") echo 'select="selected"';?>>--Select--</option>
    <option value="unitedStates"<?php if($countries == "unitedStates") echo 'select="selected"';?>>United States</option>
    <option value="canada"<?php if($countries == "canada") echo 'select="selected"';?>>Canada</option>
    <option value="ireland"<?php if($countries == "ireland") echo 'select="selected"';?>>Ireland</option>
    <option value="france"<?php if($countries == "france") echo 'select="selected"';?>>France</option>
    <option value="germany"<?php if($countries == "germany") echo 'select="selected"';?>>Germany</option>
  </select>
  <label for="state">State:</label>
  <select name="states" id="state">
  <option value="--Select--"<?php if($states == "--Select--") echo 'select="selected"';?>>--Select--</option>
    <option value="washington"<?php if($states == "washington") echo 'select="selected"';?>>Washington</option>
    <option value="onterio"<?php if($states == "onterio") echo 'select="selected"';?>>Onterio</option>
    <option value="dublin"<?php if($states == "dublin") echo 'select="selected"';?>>Dublin</option>
    <option value="normandy"<?php if($states == "normandy") echo 'select="selected"';?>>Normandy</option>
    <option value="berlin"<?php if($states == "berlin") echo 'select="selected"';?>>Berlin</option>
  </select>
  <br>
		<input type="submit" value="Submit">
  </form>
  
</body>
</html>
