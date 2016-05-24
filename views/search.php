
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Most Popular Artists by Country | Last.fm </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/site/lastfm/css/style.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  </head>

  <body>

    <div class="container">
      <form method="GET" class="form-signin" action="index.php" >
        <h2 class="form-signin-heading">Enter a country</h2>
        <label for="inputCountry" class="sr-only">Country</label>
        <input type="text" id="inputCountry" name="inputCountry" class="form-control" placeholder="Enter country" ng-model="country" required autofocus>
        <input type="text" id="inputPage" name="inputPage" ng-model="page" class="form-control hidden" value="1">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Search</button>
      </form>
    </div> <!-- /container -->
  </body>
</html>
