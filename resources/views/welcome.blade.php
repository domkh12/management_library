<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />      
    </head>
   <body>
    <section>
        <nav>
            <div>
                                
                <div>
                    <h2>NPIC</h2>
                    <p>Library System</p>
                </div>
            </div>
            <ul>
                <li><a href="#">វត្តមានសិស្ស</a></li>
                <li><a href="#">គ្រប់គ្រងសិស្ស</a></li>            
                <li><a href="#">គ្រប់គ្រងសៀវភៅ</a></li>            
                <li><a href="#">គ្រប់គ្រងការខ្ចីសៀវភៅ</a></li>            
                <li><a href="#">របាយការណ៍</a></li>            
            </ul>
        </nav>
    </section>
   </body>
</html>
