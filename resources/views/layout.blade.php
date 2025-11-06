<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">M-M-M-Music</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                    <a class="nav-link" href="/">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/instruments">Instruments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/students">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/instructors">Instructors</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link" href="/courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lessons">Lessons</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link" href="/enrollments">Enrollments</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="/payments">Payments</a>
                </li>             
                <li class="nav-item">
                    <a class="nav-link" href="/performances">Performances</a>
                </li>                            
            </ul>
        </div>
    </nav>

    <div class="container py-5">
        @yield('content')
    </div>

</body>

</html>
