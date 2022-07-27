<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hahaha</title>
    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            background-color: black;
            color: white;
        }

        .bg {
            animation: slide 3s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
            bottom: 0;
            left: -50%;
            opacity: .5;
            position: fixed;
            right: -50%;
            top: 0;
            z-index: -1;
        }

        .bg2 {
            animation-direction: alternate-reverse;
            animation-duration: 4s;
        }

        .bg3 {
            animation-duration: 5s;
        }

        .content {
            background-color: #09f;
            border-radius: .25em;
            box-shadow: 0 0 .25em rgba(0, 0, 0, .25);
            box-sizing: border-box;
            left: 50%;
            padding: 10vmin;
            position: fixed;
            text-align: center;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            font-family: monospace;
        }

        @keyframes slide {
            0% {
                transform: translateX(-25%);
            }

            100% {
                transform: translateX(25%);
            }
        }

        img {
            /* opacity: .50; */
            transition: opacity .5s ease-in-out;
            max-height: 400px;
            max-width: 400px;

        }

        img:hover {
            opacity: 1;
        }

        .reload-link {
            text-align: center;
            padding: 5px;
            background-color: greenyellow;
        }
    </style>
</head>

<body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">
        <div>
            <a class="reload-link" href="">Reload</a>
        </div>
        <hr />
        <h1>{{ $quote }}</h1>
        <img src="{{ asset('storage/laravel-fun/images/'.$fileName) }}" alt="Fun">
    </div>
</body>

</html>