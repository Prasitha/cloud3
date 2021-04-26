<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vote count</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<div class="container">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="home.html" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
     
            <li><a href="https://sites.google.com/view/tce-voting-system/home"><span class="subFont"><strong>Feedback reports</strong></span></a></li>
            <li><a href="users.php"><span class="subFont"><strong>Voter list</strong></span></a></li>
            <li><a href="vote.php"><span class="subFont"><strong>Vote count</strong></span></a></li>
			<li><a href="home.html"><span class="subFont"><strong>Home page</strong></span></a></li>
			
          </ul>
        </div>

      </div> <!-- end of container -->
    </nav>

    
    <div class="container" style="padding-top:150px;">
	
  <h2> TOTAL VOTE COUNT </h2>

          <?php
                     $bjp=0;
                     $inc=0;
                     $aap=0;
                     $tmc=0;
                     $total=0;					 
                   require 'autoload.php';

$client = new MongoDB\Client(
		         'mongodb+srv://Prasitha21:Prasitha21@cloud.unqgg.mongodb.net/votesystem?retryWrites=true&w=majority');
                          				// select the database and the collection to perform insertion
	$db = $client->votesystem;
	$collection = $db->votes;

	$cursor = $collection->find();

	foreach($cursor as $document)
	{
	$total++;
	if($document['selection'] == "BJP"){
		 $bjp++;
	}
	else if($document['selection']=="INC"){
		 $inc++;
	}
	else if($document['selection']=="AAP"){
		 $aap++;
	}
	else if($document['selection']=="TMC"){
		 $tmc++;
	}
	
	} 
    
      echo "BJP: ", $bjp;
	  echo "<br><br>";
      echo "AIADMK: ", $inc;
      echo "<br><br>";
      echo "DMK: ", $inc;
      echo "<br><br>";
      echo "Congress: ", $inc;
      echo "<br><br>";
      echo "Total: ", $inc;	  
	 
	?>

        </table>
      </div>
    </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>