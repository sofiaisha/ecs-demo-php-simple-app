<html>
    <head>
        <title>Prueba de PHP</title>
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
    </head>
    <body>
        <div class="container">
            <h1 class="title">AWS Demo - DevOps hola</h1>
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
