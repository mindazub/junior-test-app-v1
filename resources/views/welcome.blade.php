<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
            ul {
                padding: 10px;
                margin: 10px;
                text-align: left;
            }
            p {
                text-align: left;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Junior Laravel App:
                </div>
                <div class="title m-b-md">
                    Companies and Employees CRUD
                </div>
                <div class="m-b-md">
                    <ul>
                        <li>
                            Basic Laravel Auth: ability to log in as administrator
                        </li>
                        <li>
                            Use database seeds to create first user with email admin@admin.com and password “password”
                        </li>
                        <li>
                            CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees.
                        </li>
                        <li>
                            Companies DB table consists of these fields: Name (required), email, logo (minimum 100×100), website
                        </li>
                        <li>
                            Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), email, phone
                        </li>
                        <li>
                            Use database migrations to create those schemas above
                        </li>
                        <li>
                            Store companies logos in storage/app/public folder and make them accessible from public
                        </li>
                        <li>
                            Use basic Laravel resource controllers with default methods – index, create, store etc.
                        </li>
                        <li>
                            Use Laravel’s validation function, using Request classes
                        </li>
                        <li>
                            Use Laravel’s pagination for showing Companies/Employees list, 10 entries per page
                        </li>
                        <li>
                            Use Laravel make:auth as default Bootstrap-based design theme, but remove ability to register
                        </li>
                    </ul>
                    <p>
                        Source:
                        <a href="https://laraveldaily.com/test-junior-laravel-developer-sample-project/?fbclid=IwAR16D8PoHaf84zsLvMiAwSdcTqq_5B2aH3_koL2c9pzaARkQdW9Ods5nMwQ">
                            How to Test Junior Laravel Developer Skills: Sample Project
                        </a>
                    </p>
                    
                </div>

            </div>
        </div>
    </body>
</html>
