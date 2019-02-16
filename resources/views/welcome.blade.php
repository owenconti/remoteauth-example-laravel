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

            .content {
                text-align: center;
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
            <div>
                <p>This the authenticated side of the example application.</p>

                <p>Below are the details of the Application Member record that was created when you logged in.</p>

                <p>All data is pulled from RemoteAuth via the REST API.</p>

                <p>You can view the changes required to get this application setup: <a href="https://github.com/owenconti/remoteauth-example-laravel/pull/1/files">https://github.com/owenconti/remoteauth-example-laravel/pull/1/files</a></p>

                <hr />

                <p>Logged in as {{ $user->email }} | <a href="/logout">Logout</a></p>

                <h3>Application Members</h3>

                @foreach($applicationMembers as $member)
                    <p>Application Member ID: {{ $member['id'] }}</p>

                    <div><strong>Roles:</strong></div>
                    <ul>
                        @foreach($member['roles'] as $role)
                            <li>{{ $role['slug'] }}</li>
                        @endforeach
                    </ul>

                    <div><strong>Permissions:</strong></div>
                    <ul>
                        @foreach($member['permissions'] as $permission)
                            <li>{{ $permission['slug'] }}</li>
                        @endforeach
                    </ul>
                @endforeach

                <hr />

                <h3>JSON Response from RemoteAuth</h3>

                <pre>
<code>{{ json_encode($applicationMembers, JSON_PRETTY_PRINT) }}</code>
                </pre>
            </div>
        </div>
    </body>
</html>
