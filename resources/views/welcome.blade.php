<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>G.U.I.tar Effects</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon.png">

        <!-- CSS -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="app">

            <!-- Title -->
            <div class="container text-center pt-5 pb-3">
                <h1 class="">G.U.I.tar Effects</h1>
                <h5 class="pt-4">Let's rock your world!</h5>
            </div>

            <!-- Live Effects -->
            <div class="container">
                <div class="row">
                    <effect-box name="delay" :initial-parameters="{delay_time:0, delay_rep:0, feedback:0}"></effect-box>
                    <effect-box name="chorus" :initial-parameters="{depth:0, feedback:0, bal:0}"></effect-box>
                    <effect-box name="reverb" :initial-parameters="{size:0, damp:0, bal:0}"></effect-box>
              </div><!-- live effects row -->
            </div><!-- live effect container -->

        </div>

        <!-- JavaScript -->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
