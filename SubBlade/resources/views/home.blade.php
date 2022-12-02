 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
 </head>
 <style>
    .myclass{
        color: red;
    }
</style>
 <body>
    @includeWhen($userType, 'contact')
@php
    $desc = "This is description";
@endphp
<x-card title="card-1" subtitle="this is sub title" :description=$desc class="myclass"/>
<x-card title="card-2" subtitle="this is sub title2" :description=$desc/>
 </body>
 </html>
 
