<!doctype html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="csrf-token" content="{{ csrf_token() }}">
       <title>TVS</title>
       <meta name="description" content="">
       <meta name="author" content=""

       @yield('styles')
   </head>
   <body>

       <div id="app">
           @include('frontend.layouts.header')

           <main>
               @yield('content')
           </main>

           @include('frontend.layouts.footer')
       </div><!--app-->

       @yield('scripts')
   </body>
   </html>
