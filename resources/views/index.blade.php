<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" ></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: rgba(26,32,44);
        }
        html {
            touch-action: manipulation;
        }
        .circle {
            border-radius: 50%;
            background-color:rgb(35, 92, 71);
            height: 350px;
            width: 350px;
            justify-content: center;
            display: flex;
            margin: auto;
        }

        .circle2 {
            border-radius: 50%;
            background-color:rgba(26,32,44);
            height: 345px;
            width: 345px;
            justify-content: center;
            display: grid;
            margin: auto;
        }

        .button-play {
            border-radius: 50%;
            background-color:rgb(35, 92, 71);
            height: 90px;
            width: 90px;
            justify-content: center;
            color: rgb(190, 185, 185);
            font-size: 30px;
            margin: auto;
            border-color:rgba(46, 229, 157, 0.4)
        }

        .button-play:hover {
            box-shadow: 0px 5px 5px rgba(46, 229, 157, 0.4);
        }

        .button-normal {
            border-radius: 50%;
            background-color:rgba(26,32,44);
            height: 90px;
            width: 90px;
            justify-content: center;
            color: rgb(190, 185, 185);
            font-size: 30px;
            margin: auto;
            border-color: rgba(79, 84, 95, 0.0);
        }

        .button-normal:hover {
            box-shadow: 0px 5px 5px rgb(57, 67, 92, 0.4);
        }

        .col-4 {
            margin: auto !important;
        }

        .sound-space {
            background-color:rgb(35, 92, 71);
            height: 50px;
            width: 350px;
            margin: auto;
            justify-content: space-between;
            display: flex;
            border-radius: 50px;
        }

        .button-sound {
            border-radius: 50%;
            background-color:rgb(35, 92, 71);
            height: 48px;
            width: 48px;
            justify-content: center;
            color: rgb(190, 185, 185);
            font-size: 25px;
            margin: auto;
            border-color:rgba(46, 229, 157, 0.0)
        }

        .button-sound-active:hover {
            box-shadow: 0px 1px 1px rgba(46, 229, 157, 0.4);
        }

        .space-2 {
            margin-top: 10px;
        }

        @media (max-width: 991.98px) {
            .circle {
                border-radius: 50%;
                background-color:rgb(35, 92, 71);
                height: 550px;
                width: 550px;
                justify-content: center;
                display: flex;
                margin: auto;
            }

            .circle2 {
                border-radius: 50%;
                background-color:rgba(26,32,44);
                height: 545px;
                width: 545px;
                justify-content: center;
                display: grid;
                margin: auto;
            }

            .button-play {
                border-radius: 50%;
                background-color:rgb(35, 92, 71);
                height: 150px;
                width: 150px;
                justify-content: center;
                color: rgb(190, 185, 185);
                font-size: 50px;
                margin: auto;
                border-color:rgba(46, 229, 157, 0.4)
            }

            .button-play:hover {
                box-shadow: 0px 5px 5px rgba(46, 229, 157, 0.4);
            }

            .button-normal {
                border-radius: 50%;
                background-color:rgba(26,32,44);
                height: 150px;
                width: 150px;
                justify-content: center;
                color: rgb(190, 185, 185);
                font-size: 50px;
                margin: auto;
                border-color: rgba(79, 84, 95, 0.0);
            }

            .button-normal:hover {
                box-shadow: 0px 5px 5px rgb(57, 67, 92, 0.4);
            }

            .col-4 {
                margin: auto !important;
            }

            .sound-space {
                background-color:rgb(35, 92, 71);
                height: 100px;
                width: 450px;
                margin: auto;
                justify-content: space-between;
                display: flex;
                border-radius: 50px;
            }

            .button-sound {
                border-radius: 50%;
                background-color:rgb(35, 92, 71);
                height: 98px;
                width: 98px;
                justify-content: center;
                color: rgb(190, 185, 185);
                font-size: 45px;
                margin: auto;
                border-color:rgba(46, 229, 157, 0.0)
            }

            .button-sound-active:hover {
                box-shadow: 0px 1px 1px rgba(46, 229, 157, 0.4);
            }

            .space-2 {
                margin-top: 50px;
            }
        }

    </style>
</head>
<body>
    <div class="container-md" style=" margin-top: 10%; justify-content: center;">
        <div class="circle">
            <div class="circle2">
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="button-normal" onclick="call(event, '{{ route('mute') }}');"><i class="fa-solid fa-volume-xmark"></i></button>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="button-normal" onclick="call(event,'{{ route('previous') }}');"><i class="fa-solid fa-backward-step"></i></button>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="button-play" onclick="call(event,'{{ route('playPause') }}');"><i class="fa-solid fa-play"></i></button>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="button-normal" onclick="call(event,'{{ route('next') }}');"><i class="fa-solid fa-forward-step"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="button-normal" ><a href="{{ route('index') }}" style="text-decoration: non; color:rgb(190, 185, 185);"><i class="fa-solid fa-arrow-rotate-right"></i></a></button>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='container-md' style=" margin-top: 100px; justify-content: center;">
        <div class="sound-space">
            <button type="submit" class="button-sound button-sound-active" onclick="call(event,'{{ route('volumeDown') }}');"><i class="fa-solid fa-volume-low"></i></button>

            <button type="button" class="button-sound">|</button>

            <button type="submit" class="button-sound button-sound-active" onclick="call(event,'{{ route('volumeUp') }}');"><i class="fa-solid fa-volume-high"></i></button>
            </div>
        </div>
    </div>
</body>
<script>
    function call(e, route){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: route,
            method: 'post',
            data: {
            },
            success: function(result){
            }
        });
    }
</script>
</html>
