<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Prueba PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                background-color: black;
                font-family: monospace;
                font-size: 32px;
            }
            .title {
                color: white;
            }
            .container{
                position: absolute;
                width: 700px;
                height: 300px;
                top: 50%;
                left: 50%;
                margin-top: -150px;
                margin-left: -350px;
            }
            p{
                color: #55ff55;
                text-align: center;
                font-weight: bolder;
            }
            h1{
                margin:0;
                text-align: center;
            }
        </style>
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <h1 class="title">AWS Demo Santander - DevOps</h1>
            <p><?php
                //Metadata
                $url = "http://169.254.169.254/latest/meta-data/public-hostname";

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                echo sprintf('%s',$response);
            ?></p>
        </div>
    </body>

</html>
