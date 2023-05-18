<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('stylesheets')
    @yield('javascripts')
</head>

<body>
@yield('start_scripts')

<div class="container-fluid">
    <div class="row" style="height: 100px">
        <div class="col text-center my-auto bg-info">
            <h1>  Блог на Laravel </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 mx-auto border border-dark bg-danger ">
            <div class="row">

                <div class="col-12 col-md-8 bg-info" >
                    Форма поиска !!!
                </div>

                <div class="col text-end my-auto reg-min-width bg-info">
                    Инфа о юзере
                </div>
            </div>
            <div class="row border-top border-dark">
                <div class="col bg-info" id = "content">
                    @yield('content')
                </div>
                <div class="col-md-2 col-3 my-2 border-start border-dark menu-min-width bg-info" id = "main-menu">
                    Меню
                </div>
            </div>

            <div class="row border-top border-dark">
                <div class="col text-center bg-info">
                    Все права защищены (c) Блог на Symfony
                </div>
            </div>
        </div>
    </div>
</div>
@yield('end_scripts')
</body>
</html>
