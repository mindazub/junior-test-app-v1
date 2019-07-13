@extends('layouts.app')

@section('content')

    <div class="flex-center position-ref full-height">

        <div class="content">

            <div id="app" class="container">
                <example-component>

                </example-component>
            </div>


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
                        Use database seeds to create first user with admin email and admin password
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


@endsection
