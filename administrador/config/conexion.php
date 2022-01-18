<?php



$conn = mysqli_connect(
  'sql201.epizy.com',
  'epiz_30770958',
  '8Mriz760I8NLNIH',
  'epiz_30770958_pruebaphp'
);

//or die(mysqli_erro($mysqli));
if(mysqli_connect_errno())
{
    echo "error grave";
    exit();

}


?>