<?php

$district = strtoupper($_GET['district']);
$crop = ucfirst($_GET['crop']);
$area = $_GET['area'];
$soil = $_GET['soil'];

// $res = exec("python Crop-yield-prediction.py '$district' '$crop' '$area' '$soil'");
// $res = exec("python RF_predict.py $district $crop $area $soil 2>&1", $output, $error);
// $res = shell_exec("python3 -m venv .");
// $res=shell_exec("\myenv\Scripts\activate.bat");
// echo $res;
// $res = shell_exec("python -m pip install -U -r requirements.txt");
// echo $res;
$res = shell_exec("python3 RF_predict.py $district $crop $area $soil 2>&1");

#$res= $res.substr($res,strpos($res,"The predicted"),$res-strpos($res,"The predicted"));
$resout= substr($res,strpos($res,"The predicted"));
// echo $resout;
echo $resout;
// echo (float)substr($resout,strpos($resout,": "))."<br>";
// var_dump($output);
// var_dump($error);
// var_dump($res);  

?>