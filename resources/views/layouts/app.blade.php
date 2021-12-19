 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
     <link href="assets/css/signin.css" rel="stylesheet">
     <link href="assets/css/registre.css" rel="stylesheet">
     <title>test back</title>
 </head>
 <body>
 
 @yield('content')
 </body>
 <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
 <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>
 <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-auth.js"></script>
 <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-firestore.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.js"></script> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ url('assets/js/firebase.js') }}"></script>
 <script src="{{ url('assets/js/email.js') }}"></script>
 <script src="{{ url('assets/js/auth.js') }}"></script>
 </html> 