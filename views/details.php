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
  </head>

  <body>

    <div class="container">
    <h2>Top Tracks for <? echo $artist; ?></h2>
	    <ul>
	      <?
			foreach ($artistTracksArray['toptracks']['track'] as $key => $value) {
				echo $value['name'] . '<br/>';
			}
	      ?>
	     </ul>
		<div class="text-center">
	     <a class="btn btn-primary" href="<? echo __SITE_PATH; ?>">Back to search</a>		
	    </div>
    </div> <!-- /container -->
  </body>
</html>





