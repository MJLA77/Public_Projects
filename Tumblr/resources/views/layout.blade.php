<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Tumblr</title>
</head>
<body >
    <header >
        <div class="logo">

            <i class="fab fa-tumblr fa-2x" ></i>

            <input type="text" placeholder="Search Tumblr">

        </div> 

        <div class=forms>
            
            <a href="/"> Home</a>
            
        </div>

        <div class="usertools">

            <i class="fas fa-home"></i>
            <i class="far fa-compass fa-2x"></i>
            <i class="fas fa-envelope"></i>
            <i class="far fa-smile-wink fa-2x"></i>
            <i class="fas fa-bolt fa-2x"></i>
            <i class="fas fa-user fa-2x"></i>

        </div>

        <div class=pencil>
 
        <i class="fas fa-pen fa-2x"></i>

        </div>    
    
    </header>

    <main>

        @yield('content')

    </main>
    
</body>
</html>








