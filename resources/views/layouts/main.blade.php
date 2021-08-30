<!doctype html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Future</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>


</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header>
        <!-- Header -->
            <div class="container pt-4">
                <div class="row">
                <!-- Left Side Content -->
                    <div class="col-10">
                        <div class="contact-indo">
                            <span>Телефон:(499) 340-94-71</span><br>
                            <span>Email:info@future-group.ru</span>
                        </div>
                        <br><br><br><br>
                        <div>
                            <h1 style="font-weight: 300;font-size: 48px">Комментарии</h1>
                        </div>

                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content-->
                    <div class="col-2">
                        <div id="logo">
                            <a href="/"><img src="logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <!-- Right Side Content / End -->
                </div>
            </div>
            <!-- Right Side Content / End -->

        <!-- Header / End -->
    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

@yield('content')

<!-- Footer
    ================================================== -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div id="logo">
                        <a href="/"><img src="logo.png" alt="logo" style="max-width: 60%"></a>
                    </div>
                </div>
                <div class="col-10">
                    <div class="info-footer pt-2">
                        <span>Телефон:(499) 340-94-71</span><br>
                        <span>Email:info@future-group.ru</span><br>
                        <span>Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</span><br><br>
                        <p>© 2010 - 2014 Future. Все права защищены</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Footer Top Section / End -->
    <!-- Footer / End -->
<!-- Wrapper / End -->
</body>
</html>
