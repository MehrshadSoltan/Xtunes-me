
<?php
include_once("functions.php");
$bdd = new PDO('mysql:host=localhost;dbname=xtunesme_userdata;charset=utf8','xtunesme_Mehrshad','M8809394m');

if ($bdd->connect_error) {
    die("Connection failed: " . $bdd->connect_error);
}
    $api = '5a3d644dd59e1c84ee5330b10a682236';
    $token = $_GET['token'];
    $result = json_decode(verify($api,$token));
    // if(isset($result->status)){
    //     if($result->status == 1) {
    //         $emails = $bdd->query('SELECT email FROM userdata');
    //         while ($send = $emails->fetch()) {
    //             $mail = new PHPMailer(TRUE);
    //             $mail->setFrom('soltanmehrshad02@gmail.com');
    //             $mail->addAddress('mehrshad.1381.sm@gmail.com');
    //             $mail->Subject = 'Pre order';
    //             $mail->Body = 'some text';
    //             $mail->addAttachment('./radMishe.mp3');
    //             $mail->isSMTP();
    //             $mail->SMTPAuth = TRUE;
    //             $mail->Host = 'mail.xtunes.me';
    //             $mail->SMTPSecure = 'tls';
    //             $mail->Username = 'contact@xtunes.me';
    //             $mail->Password = 'w2QJ96FqZrw!0:';
    //             $mail->Port = '465';
    //             $mail->send();
    //         }
    //     } else {
    //         echo "<h1>Failed</h1>";
    //     }
    //         }
    // else {
    //       if($_GET['status'] == 0){
    //               echo "<h1>Failed</h1>";
    //         }
    // }
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>xxXxx</title>
    <script src="https://kit.fontawesome.com/323e25ad0c.js" crossorigin="anonymous"></script>
    <script src="three.r95.min.js"></script>
    <script src="vanta.net.min.js"></script>
</head>

<body>
<header>
    <div id="showcase">
        <div class="showcase-top">
            <img src="img/xlogo2.gif" alt="logo" class="logo">
            <!-- <a href="" class="btn">Sign in</a> -->
        </div>

        <div class="showcase-content">

            <h1 >ممنون از خرید شما</h1>
            <h3 >قطعه به ایمیل شما ارسال خواهد شد</h3>

        </div>
    </div>
</header>

<footer class="footer">
    <div class="container">
        <ul>
            <li class="telegram">
                <a href="https://t.me/x_wheredarknessloved"><img src="img/telegram.png" alt="">Telegram</a></li>
            <li class="instagram"><a href="https://www.instagram.com/x.wheredarknessloved"><img
                        src="img/instagram.png" alt="">Instagram</a></li>
            <li class="soundcloud"><a href="https://soundcloud.com/x-liel"><img src="img/soundcloud.png"
                                                                                alt="">Soundcloud</a></li>
        </ul>
        <p class="copyright text-md">Copyright© XTunes.me .All rights reserved</p>
    </div>
</footer>
<script src="script.js"></script>

</body>

</html>





