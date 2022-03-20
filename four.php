<!DOCTYPE html>
<html>
<body>

<?php
$symbol = "([])";

switch ($symbol) {
  case "()":
    echo "true";
    break;
  case "{}":
    echo "true";
    break;
  case "[]":
    echo "true";
    break;
  default:
    echo "false";
}
?>
 
</body>
</html>