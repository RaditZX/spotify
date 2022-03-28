<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>NITFLIX</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Trebuchet MS;
            }
            body{
                background-size: 100% auto, cover;
                background-color:black;
            }
            .gambar{
                position: relative;
                width: 100%;
                min-height: 100vh;
                padding: 0 100px;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                color: #FFFFFF;
            }
            .gambar .bg{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            h1{
                font-size: 170px;
            }
            p{
                font-size: 20px;
            }
            a.button{
                display:inline-block;
                padding:0.35em 1.2em;
                border:0.1em solid #FFFFFF;
                margin:0 0.3em 0.3em 0;
                border-radius:0.12em;
                box-sizing: border-box;
                text-decoration:none;
                font-weight:300;
                color:#FFFFFF;
                text-align:center;
                transition: all 0.2s;
                font-size: 17px;
            }

            a.button:hover{
                color:black;
                background-color:#FFFFFF;
            }
            hr{
                height: 150px;
                border-right: 6px solid white;
                margin-left: -3px;
                margin-right: auto;
                position: absolute;
                left: 80px;
                margin-top: -176px;
            }
        </style>
    </head>
    <body>
        <div class="gambar">
            <div class="tulisan">
                <p>Welcome to</p>
                <h1 style="color:#7CFC00;">GOFY</h1>
                <hr>
                <div class="vertical"></div>
                <a href="/login" class="button">Login</a>
                <a href="/register" class="button">Register</a>
            </div>
        </div>
    </body>
</html>