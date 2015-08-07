<!DOCTYPE html>
<html lang="en" ng-app="dmarcoApp">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Parallax Template - Materialize</title>

  <!-- Country Base HREF -->
  <base href="/">

  <!-- AngularJS HTML5Mode -->
  <meta name="fragment" content="!">

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./bower_components/materialize/dist/css/materialize.min.css" rel="stylesheet">
  <link href="./css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>

  <!-- Navbar -->
  <nav class="white" role="navigation" ng-include="'partials/nav.php'"></nav>
  <!-- Content -->
  <main ng-view class="container"></main>
  <!-- Footer -->
  <footer class="page-footer grey darken-2" ng-include="'partials/footer.php'"></footer>

  <!-- Scripts -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <script src="./bower_components/angular/angular.min.js"></script>
  <script src="./bower_components/angular-route/angular-route.js"></script>
  <script src="./bower_components/materialize/dist/js/materialize.min.js"></script>
  <script src="./bower_components/angular-materialize/src/angular-materialize.js"></script>

  <!-- Custom Scripts -->
  <script src="./js/app.js"></script>
  <script src="./js/controllers.js"></script>

  </body>
</html>


