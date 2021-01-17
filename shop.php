<?php
include_once("functions.php");
$bdd = new PDO('mysql:host=localhost;dbname=xtunesme_userdata;charset=utf8','xtunesme_Mehrshad','M8809394m');

if ($bdd->connect_error) {
    die("Connection failed: " . $bdd->connect_error);
}
        if( isset($_POST['fullName']) AND isset($_POST['email']) AND isset($_POST['phoneNum']) AND isset($_POST['amount']))
        {


        $userFullName = $_POST['fullName'];
        $userPhoneNum = intval("0098" . $_POST['phoneNum']);
        $userEmail = $_POST['email'];
        $userAmount = intval($_POST['amount']);
        $req = $bdd->prepare('INSERT INTO userdata(nom, email, phone, amount) VALUES(?, ?, ?, ?)');
        $req->execute(array($userFullName,$userEmail,$userPhoneNum,$userAmount));

         $api = '5a3d644dd59e1c84ee5330b10a682236';
         $amount =$userAmount;
         $mobile = $userPhoneNum;
         $factorNumber = "FactorNumber (optional)";
         $description = "Description (optional)";
         $redirect = 'http://xtunes.me/redirect.php';
         $result = send($api, $amount, $redirect, $mobile, $factorNumber, $description);
         $result = json_decode($result);
         if($result->status) {
                 $go = "https://pay.ir/pg/$result->token";
                 header("Location: $go");
 } else {
 	echo $result->errorMessage;
 }
      
        
















}
        else{
                echo "فرم را به درستی کامل کنید";
        }
?>
