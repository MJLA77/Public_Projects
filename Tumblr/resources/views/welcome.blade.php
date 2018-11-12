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
            <!-- header.blade goes here -->

    @include('header')

    <main>
            <!-- user info / left side of page with user pic before the blog -->
        @include('userinfo')

            <!-- this is the blog feed in the middle  -->
        <div class="newsfeed">

            <!-- this is the user header buttons before the blogs  -->

            @include('newsfeedheader')

          <!-- this is the main middle blog -->

            @include('blogfeed')
            
        
        </div>       

         <!-- recommended blogs on the right hand side  -->
        
        <div class="recommend">

            @include('recomendedblogs')
            @include('radar')

        </div>


    </main>
    
</body>
</html>