<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $data->user->name}} -
        {{ $data->user->title }}
    </title>


    <link rel="shortcut icon" href="{{asset(path: "/statics/logo.png")}}" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
    <style>
        :root {
            --background-color: #1c1c1c;
            --text-color: #ffffff;
            --button-color: #fbbf24;
            --button-hover-color: #f59e0b;
        }

        body {
            font-family: Arial, sans-serif;
            /* background-color: var(--background-color); */
            color: var(--text-color);
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: hidden;
        }

        .container {
            margin-top: 15px;
            width: fit-content;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 2px;
            z-index: 99999;
            min-height: 90vh;
            border-radius: 6px;
            overflow: hidden;
            max-width: 100%;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        }

        .cover {
            background-color: #ffffff3e;
            max-width: 100%;
            width: 500px;
            text-align: center;
            background-image: url("{{asset($data->user->cover_image)}}");
            background-position: center center;
            background-size: cover;
            position: relative;
        }

        /* .cover-after{
        position: absolute;
        width: 100%;
        height: 100%;
        background: #ff00006e;
        top:0;
        left:0;
        z-index: 1;
    } */

        .profile {
            display: flex;
            z-index: 999;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }

        .profile-image {
            background: #fff;
            width: 120px;
            z-index: 999;
            height: 120px;
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin: 10px 0 5px;
            font-size: 24px;
        }

        h2 {
            margin: 0;
            font-size: 18px;
            font-weight: normal;
            text-transform: uppercase;
        }

        .links {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
            max-width: 500px;
        }

        .link-button {
            display: flex;
            align-items: center;
            background-color: var(--button-color);
            color: var(--text-color);
            padding: 5px 20px;
            border-radius: 50px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .link-button:hover {
            background-color: var(--button-hover-color);
        }

        .link-icon {
            width: 40px;
            height: 40px;
            background-color: #f59e0b;
            border: 1px solid #ffffff;
            border-radius: 50%;
            margin-right: 15px;
        }


        footer {
            margin-top: 30px;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .profile-image {
                width: 100px;
                height: 100px;
            }

            h1 {
                font-size: 20px;
            }

            h2 {
                font-size: 16px;
            }

            .link-button {
                padding: 12px 15px;
            }

            .link-icon {
                width: 25px;
                height: 25px;
                margin-right: 10px;
            }
        }


        .visit-websit {
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 99999999;
            border-radius: 50%;
            background-color: #ffffff;
            padding: 1px;
            display: flex;
            align-items: baseline;
            justify-content: center;
            cursor: pointer;
        }

        .visit-websit::before {
            content: "visit web site";
            position: absolute;
            color: #ffffff;
            width: max-content;
            top: -15px;
            right: 0;
            font-weight: bold;
            /* background-color: #ffffff; */
        }




        /* ======================================= */
        * {
            margin: 0;
            padding: 0;
        }

        .wrapper {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            background: linear-gradient(180deg, #04fafd, 5%, #119dff, 50%, #030423);
            position: absolute;
        }

        .wrapper h1 {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            font-family: sans-serif;
            letter-spacing: 1px;
            word-spacing: 2px;
            color: #fff;
            font-size: 40px;
            font-weight: 888;
            text-transform: uppercase;
        }

        .wrapper div {
            height: 60px;
            width: 60px;
            border: 2px solid rgba(255, 255, 255, 0.7);
            border-radius: 50px;
            position: absolute;
            top: 10%;
            left: 10%;
            animation: 4s linear infinite;
        }

        div .dot {
            height: 10px;
            width: 10px;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.5);
            position: absolute;
            top: 20%;
            right: 20%;
        }

        .wrapper div:nth-child(1) {
            top: 20%;
            left: 20%;
            animation: animate 8s linear infinite;
        }

        .wrapper div:nth-child(2) {
            top: 60%;
            left: 80%;
            animation: animate 10s linear infinite;
        }

        .wrapper div:nth-child(3) {
            top: 40%;
            left: 40%;
            animation: animate 3s linear infinite;
        }

        .wrapper div:nth-child(4) {
            top: 66%;
            left: 30%;
            animation: animate 7s linear infinite;
        }

        .wrapper div:nth-child(5) {
            top: 90%;
            left: 10%;
            animation: animate 9s linear infinite;
        }

        .wrapper div:nth-child(6) {
            top: 30%;
            left: 60%;
            animation: animate 5s linear infinite;
        }

        .wrapper div:nth-child(7) {
            top: 70%;
            left: 20%;
            animation: animate 8s linear infinite;
        }

        .wrapper div:nth-child(8) {
            top: 75%;
            left: 60%;
            animation: animate 10s linear infinite;
        }

        .wrapper div:nth-child(9) {
            top: 50%;
            left: 50%;
            animation: animate 6s linear infinite;
        }

        .wrapper div:nth-child(10) {
            top: 45%;
            left: 20%;
            animation: animate 10s linear infinite;
        }

        .wrapper div:nth-child(11) {
            top: 10%;
            left: 90%;
            animation: animate 9s linear infinite;
        }

        .wrapper div:nth-child(12) {
            top: 20%;
            left: 70%;
            animation: animate 7s linear infinite;
        }

        .wrapper div:nth-child(13) {
            top: 20%;
            left: 20%;
            animation: animate 8s linear infinite;
        }

        .wrapper div:nth-child(14) {
            top: 60%;
            left: 5%;
            animation: animate 6s linear infinite;
        }

        .wrapper div:nth-child(15) {
            top: 90%;
            left: 80%;
            animation: animate 9s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: scale(0) translateY(0) rotate(70deg);
            }

            100% {
                transform: scale(1.3) translateY(-100px) rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
    </div>

    <div class="container">
        <div class="profile">

            <div class="cover">
                <!-- <div class="cover-after"></div> -->
                @if($data->user->image)
                    <img class="profile-image" src="{{asset($data->user->image)}}" alt="{{$data->user->name}} profile" />
                @else
                    <svg class="profile-image" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#000000"
                            d="M628.736 528.896A416 416 0 0 1 928 928H96a415.872 415.872 0 0 1 299.264-399.104L512 704l116.736-175.104zM720 304a208 208 0 1 1-416 0 208 208 0 0 1 416 0z" />
                    </svg>
                @endif

                <h1 style="margin-top: 10px;">
                    {{ $data->user->name}}
                </h1>
            </div>
            <h2 style="margin-top: 20px;">
                {{ $data->user->title}}
            </h2>
        </div>

        <div class="links">


            @foreach ($data->user->links->sortByDesc('created_at') as $link)

                <a href="{{route("redirect", $link->path)}}" target="_blank" class="link-button"
                title="{{ $link->title }}"
                >


                    @if ($link->image)
                        <img src="{{asset($link->image->path) }}" height="80px" width="80px" class="link-icon" />
                    @else
                        <svg fill="#fff" height="80px" width="80px" class="link-icon" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 392.62 392.62" xml:space="preserve">
                            <g>
                                <path
                                    d="M232.756,196.855c-7.949-2.321-16.282,2.233-18.609,10.184c-5.613,19.181-21.23,33.669-40.757,37.813
                                                                        c-29.202,6.202-58.008-12.521-64.205-41.727s12.521-58.009,41.727-64.206c8.104-1.719,13.279-9.683,11.56-17.786
                                                                        c-1.72-8.104-9.683-13.284-17.787-11.56c-45.387,9.631-74.477,54.392-64.846,99.778c8.387,39.525,43.41,66.688,82.293,66.688
                                                                        c5.767,0,11.624-0.599,17.486-1.843c30.34-6.437,54.604-28.942,63.322-58.732C245.267,207.514,240.708,199.182,232.756,196.855z" />
                                <path
                                    d="M198.131,125.633c-28.867,11.763-48.867,38.338-52.194,69.355c-0.883,8.236,5.078,15.63,13.314,16.514
                                                                        c8.238,0.884,15.631-5.077,16.515-13.314c2.148-20.025,15.056-37.182,33.685-44.771c27.866-11.354,59.771,2.079,71.124,29.943
                                                                        c5.5,13.498,5.414,28.33-0.242,41.764c-5.655,13.434-16.204,23.86-29.701,29.359c-7.672,3.126-11.357,11.88-8.231,19.552
                                                                        c2.371,5.818,7.978,9.345,13.896,9.344c1.885,0,3.802-0.357,5.654-1.112c20.919-8.523,37.267-24.684,46.032-45.502
                                                                        c8.765-20.819,8.897-43.806,0.374-64.725C290.763,128.856,241.317,108.043,198.131,125.633z" />
                            </g>
                        </svg>
                    @endif

                    <!-- <img src="https://v0.dev/placeholder.svg" alt="" class="link-icon"> -->
                    <p style="text-transform: capitalize;">
                        
                        {{ Str::limit( $link->title, 100, '...') }}
                    </p>
                </a>
            @endforeach
        </div>
    </div>



    <a href="/" class="visit-websit">
        <svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
            <circle style="fill:#2196F3;" cx="256" cy="256" r="244.494" />
            <path style="fill:#231F20;" d="M512,256c0-68.38-26.63-132.668-74.981-181.019C388.668,26.629,324.38,0,256,0
                        C187.619,0,123.332,26.629,74.98,74.981C26.629,123.332,0,187.62,0,256s26.629,132.668,74.981,181.02
                        C123.332,485.371,187.619,512,256,512c68.38,0,132.668-26.629,181.019-74.98C485.37,388.668,512,324.38,512,256z M471.909,343.53
                        c-19.928-18.858-45.447-32.163-73.256-41.424c1.522-15.065,2.31-30.482,2.31-46.11c0-15.627-0.788-31.041-2.31-46.105
                        c27.808-9.262,53.326-22.568,73.253-41.428c11.004,27.041,17.084,56.59,17.084,87.537
                        C488.989,286.944,482.91,316.491,471.909,343.53z M134.044,255.997c0-13.405,0.605-26.63,1.778-39.577
                        c36.192,9.092,74.607,12.428,108.671,13.017v53.127c-34.062,0.589-72.477,3.926-108.671,13.015
                        C134.649,282.631,134.044,269.404,134.044,255.997z M244.492,487.923c-27.028-4.988-52.52-27.467-72.765-64.557
                        c-0.366-0.67-0.72-1.354-1.082-2.031c23.512-16.669,48.395-26.35,73.846-28.595V487.923z M267.503,392.742
                        c25.452,2.244,50.336,11.923,73.846,28.593c-0.361,0.678-0.717,1.362-1.083,2.033c-20.244,37.088-45.737,59.569-72.764,64.557
                        L267.503,392.742L267.503,392.742z M267.503,24.069c27.027,4.988,52.52,27.469,72.764,64.557c0.366,0.67,0.72,1.353,1.082,2.03
                        c-23.508,16.669-48.391,26.35-73.845,28.593L267.503,24.069L267.503,24.069z M244.492,119.248
                        c-25.452-2.245-50.336-11.927-73.844-28.596c0.36-0.675,0.715-1.358,1.079-2.026c20.245-37.088,45.737-59.569,72.765-64.557V119.248
                        z M267.503,142.33c29.093-2.161,57.341-12.516,83.846-30.581c10.24,24.369,17.697,51.963,22.064,81.453
                        c-30.339,7.986-65.981,12.485-105.91,13.207V142.33L267.503,142.33z M359.606,76.051c-8.943-16.111-18.913-29.839-29.674-41.011
                        c17.006,5.704,33.138,13.326,48.15,22.598C372.056,64.299,365.89,70.433,359.606,76.051z M152.391,76.048
                        c-6.283-5.617-12.448-11.75-18.472-18.408c15.009-9.271,31.139-16.891,48.142-22.596C171.3,46.213,161.333,59.94,152.391,76.048z
                        M244.492,142.33v64.079c-39.929-0.723-75.572-5.221-105.912-13.208c4.368-29.491,11.824-57.085,22.064-81.454
                        C187.152,129.813,215.399,140.168,244.492,142.33z M244.492,305.59v64.069c-29.091,2.162-57.339,12.518-83.847,30.583
                        c-10.239-24.368-17.696-51.958-22.063-81.446C168.921,310.81,204.564,306.313,244.492,305.59z M152.394,435.933
                        c8.943,16.109,18.905,29.851,29.665,41.024c-17.008-5.707-33.142-13.329-48.154-22.604
                        C139.936,447.689,146.105,441.553,152.394,435.933z M359.601,435.929c6.29,5.622,12.462,11.759,18.492,18.424
                        c-15.015,9.276-31.15,16.899-48.161,22.606C340.694,465.785,350.658,452.041,359.601,435.929z M267.503,369.658v-64.069
                        c39.928,0.723,75.57,5.22,105.909,13.205c-4.368,29.488-11.823,57.078-22.062,81.445
                        C324.842,382.175,296.594,371.82,267.503,369.658z M267.503,282.564v-53.127c34.062-0.588,72.477-3.926,108.669-13.016
                        c1.172,12.946,1.778,26.171,1.778,39.576c0,13.408-0.605,26.633-1.778,39.582C339.979,286.489,301.566,283.152,267.503,282.564z
                        M461.504,146.317c-0.075,0.077-0.156,0.144-0.23,0.223c-15.45,16.585-37.696,29.965-65.643,39.852
                        c-5.066-32.301-13.662-62.5-25.437-89.027c9.267-7.87,18.272-16.743,26.983-26.577C423.646,91.013,445.669,116.767,461.504,146.317z
                        M114.821,70.789c8.71,9.833,17.715,18.705,26.98,26.573c-11.776,26.527-20.372,56.726-25.438,89.028
                        c-27.946-9.887-50.19-23.266-65.638-39.851c-0.074-0.079-0.154-0.146-0.229-0.222C66.331,116.767,88.354,91.014,114.821,70.789z
                        M40.095,168.463c19.925,18.859,45.443,32.164,73.248,41.426c-1.522,15.064-2.31,30.48-2.31,46.106
                        c0,15.629,0.788,31.046,2.31,46.112c-27.807,9.261-53.325,22.565-73.252,41.421C29.09,316.491,23.011,286.944,23.011,256
                        C23.011,225.053,29.091,195.505,40.095,168.463z M50.491,365.675c0.076-0.077,0.158-0.145,0.232-0.226
                        c15.45-16.582,37.695-29.958,65.641-39.844c5.066,32.297,13.662,62.494,25.434,89.019c-9.268,7.87-18.277,16.743-26.989,26.577
                        C88.345,420.977,66.325,395.224,50.491,365.675z M397.189,441.202c-8.714-9.835-17.723-18.709-26.992-26.58
                        c11.774-26.525,20.368-56.72,25.433-89.018c27.947,9.884,50.194,23.262,65.645,39.845c0.075,0.081,0.156,0.147,0.234,0.226
                        C445.675,395.225,423.654,420.978,397.189,441.202z" />
        </svg>
    </a>
    <footer>

    </footer>
</body>

</html>