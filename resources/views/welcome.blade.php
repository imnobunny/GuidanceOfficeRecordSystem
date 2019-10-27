
               
   <!DOCTYPE html>
   <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
       <head>
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
   
           <title>Guidance Office Record System</title>
   
           <!-- Fonts -->
           <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   
           <!-- Styles -->
           <style>
               html, body {
                   background-color: #fff;
                   color: #636b6f;
                   font-family: 'Nunito', sans-serif;
                   font-weight: 200;
                   height: 100vh;
                   margin: 0;
               }
   
               .full-height {
                   height: 100vh;
               }
   
               .flex-center {
                   align-items: center;
                   display: flex;
                   justify-content: center;
               }
   
               .position-ref {
                   position: relative;
               }
   
               .top-right {
                   position: absolute;
                   right: 10px;
                   top: 18px;
               }
   
               .content {
                   text-align: center;
               }
   
               .title {
                   font-size: 84px;
               }
   
               .links > a {
                   color: #636b6f;
                   padding: 0 25px;
                   font-size: 13px;
                   font-weight: 600;
                   letter-spacing: .1rem;
                   text-decoration: none;
                   text-transform: uppercase;
               }
   
               .m-b-md {
                   margin-bottom: 30px;
               }
           </style>
       </head>
       <body>
           <div class="flex-center position-ref full-height">
               @if (Route::has('login'))
                   <div class="top-right links">
                       @auth
                           <a href="{{ url('/home') }}">Home</a>
                       @else
                           <a href="{{ route('login') }}">Login</a>
   
                           @if (Route::has('register'))
                               <a href="{{ route('register') }}">Register</a>
                           @endif
                       @endauth
                   </div>
               @endif
                
               <div class="container">
                   <div class="row">
                       <div class="col-7">
                           <h1>Guidance Office Record System</h1>
                           Created and Developed By: <a href="https://ph.linkedin.com/in/sairabunnyespino" class="text-center">Saira Bunny Espino</a>
                       </div>
                       <div class="col-5">
                           <ul>
                               <li>
                                   Create, Edit, Update student's information 
                               </li>
                               <li>
                                    And use to store and track students' school record.
                               </li>
                               <li>
                                    Export Student's information and school record to PDF
                               </li>
                           </ul>
                        </div>
                   </div>
               </div>
                
                   
