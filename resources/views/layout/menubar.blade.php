<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | TESTING.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
</head>

<body>

    <div class="container py-5 ">
        <ul class="nav pb-4 align-items-center justify-content-center hover-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">หน้าแรก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blog">บทความทั้งหมด</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/create">เขียนบทความ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">เกี่ยวกับฉัน</a>
            </li>
        </ul>

        @yield('content')
        @yield('about')

    </div>

</body>

</html>
