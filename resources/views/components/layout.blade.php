<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ $title ?? 'Board Job' }}</title>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

           <h1>Board job</h1>

         <a href="./">Home</a> 
        <a href="./About">About</a>
        <a href="./Contact">Contact</a>

        {{ $slot }}
    </body>
</html>