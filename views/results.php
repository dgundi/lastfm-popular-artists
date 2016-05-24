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
	    <ul>
	      <?
			foreach ($LastfmApi['topartists']['artist'] as $key => $value) {
				echo '<li class="row"><div class="tile"><div class="col-sm-4"><img class="img-responsive" src="' . $value['image']['1']['#text'] . '"/></div><div class="col-sm-8">' . $value['name'] . '</div></div></li>';
			}
	      ?>
	     </ul>
		<div class="text-center">
	     <a class="btn btn-primary" href="<? echo __SITE_PATH; ?>">Back to search</a>
	     <?
			if($page < 10):
				$page++;
				$query = $_GET;
				// replace parameter(s)
				$query['inputPage'] = $page;
				// rebuild url
				$query_result = http_build_query($query);
			    echo '<a class="btn btn-primary" href="' . $_SERVER['PHP_SELF'] . '?' . $query_result . '">Next Page</a>';
			endif;

		?>

		
	    </div>
    </div> <!-- /container -->
  </body>
</html>





