<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RemoteAuth | Example Laravel Application</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>RemoteAuth Example Application</h1>

                <p>This is an example application setup using <a href="https://laravel.com">Laravel</a>, a PHP framework.</p>

                <p><strong>Note:</strong> You do not need to use Laravel to use RemoteAuth. It is used here as an example implementation.</p>

                <p>This application is meant to demonstrate the functionality of RemoteAuth and the steps required to get started using RemoteAuth for your application.</p>

                <p>If you do not know what RemoteAuth is, check out the <a href="https://docs.remoteauth.com/">RemoteAuth Documentation site</a>.</p>

                <p>This example will demonstrate the following:</p>

                <ol>
                    <li>Logging into RemoteAuth using the Authorization Code grant</li>
                    <li>Retrieving the Application Member records for the logged-in user</li>
                    <li>Displaying the attached roles and permissions for each Application Member</li>
                </ol>

                <p><strong>Note:</strong> This example application is connected to a demo version of RemoteAuth.</p>

                <p>To get started, login with RemoteAuth below:</p>

                <a href="/login/remoteauth">Login with RemoteAuth</a>
            </div>
        </div>
    </body>
</html>
