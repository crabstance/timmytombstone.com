<?php require_once( 'couch/cms.php' ); ?><!DOCTYPE html>
<cms:template title='Show-Dates' clonable='1'/>
	<cms:editable name="Details" type="text"/>
	<cms:editable name="Venue" type="text"/>
	<cms:editable name="City" type="text"/>
	<cms:editable name="State" type="text"/>
	<cms:editable name="Date" type="text"/>
	<cms:editable name="Location" type="text"/>



</cms>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Timmy Tombstone</title>
    <meta name="Description" content="The official website for Timmy Tombstone. Get show dates, music downloads, photos & more!">
    <meta name="Keywords" content="timmy tombstone, heavy metal, rock-a-billy, show dates">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>

    <!-- Merged CSS -->
    <link rel="stylesheet" href="css/merged.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#tour-dates">Show Dates</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#music">Music</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#media">Links</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
    	<div class="top-shadow">
    	</div>
        <div class="header-content">
          <div class="col-md-5">
          </div>
          <div class="col-md-4">
            <div class="list-group boxshadow">
              <div class="list-group-item list-header" style="">
                <h1>TIMMY TOMBSTONE</h1>
              </div>
              <a href="#tour-dates" class="list-group-item page-scroll">
                <h4 class="list-group-item-heading">Show Dates</h4>
                <p class="list-group-item-text">Get dates, locations and directions to upcoming shows!</p>
              </a>
              <a href="#music" class="list-group-item page-scroll">
                <h4 class="list-group-item-heading">Music Downloads</h4>
                <p class="list-group-item-text">Downloads, streams and full albums.</p>
              </a>
              <a href="#media" class="list-group-item page-scroll">
                <h4 class="list-group-item-heading">Links</h4>
                <p class="list-group-item-text">YouTube, Facebook & Twitter.</p>
              </a>
              <a href="#contact" class="list-group-item page-scroll">
                <h4 class="list-group-item-heading">Contact</h4>
                <p class="list-group-item-text">Use our contact form to e-mail Timmy right meow!</p>
              </a>
			   </div>
    </header>

    <section id="tour-dates">
        	<div class="bottom-shadow">
    	</div>
      <div class="col-md-3">
      </div>
      <div class="col-md-3">
        <div class="list-group boxshadow">
          <div class="list-group-item list-header">
            <h1>Upcoming Shows:</h1>
          </div>




<cms:pages masterpage='index.php' limit='6' order='asc'>
		<a href="<cms:show Location />" class="list-group-item" target="_new">
			<h4 class="list-group-item-heading"><cms:show Date /> <cms:show Details /></h4>
			<p class="list-group-item-text"><cms:show Venue /> - <cms:show City />, <cms:show State /><br/>-Click for directions-</p>
		</a>
</cms:pages>


        </div>
    </div>
    <div class="col-md-6">
    </div>
    </section>

    <section id="music">
        <div class="bottom-shadow">
    	</div>
       <div class="col-md-4">
      </div>
      <div class="col-md-3">
              <div class="list-group boxshadow">
                  <div class="list-group-item list-header">
                    <h1>MUSIC DOWNLOADS:</h1>
                  </div>
                  <a href="https://soundcloud.com/timmy-tombstone" class="list-group-item">
                    <h4 class="list-group-item-heading">Full Archive</h4>
                    <p class="list-group-item-text">-All music published on Soundcloud-</p>
                  </a>
                  <a href="https://soundcloud.com/timmy-tombstone/sets/good-morning-armageddon" class="list-group-item">
                    <h4 class="list-group-item-heading">Good Morning Armegeddon</h4>
                    <p class="list-group-item-text">-Full Album-</p>
                  </a>
                  <a href="https://soundcloud.com/timmy-tombstone/sets/in-to-the-deep-album" class="list-group-item">
                    <h4 class="list-group-item-heading">Into The Deep</h4>
                    <p class="list-group-item-text">-Full Album-</p>
                  </a>
                  <a href="https://soundcloud.com/timmy-tombstone/sets/under-the-hoof-1" class="list-group-item">
                    <h4 class="list-group-item-heading">Under The Hoof</h4>
                    <p class="list-group-item-text">-Full Album-</p>
                  </a>
            </div>
    </div>
    <div class="col-md-5">
    </section>

    <section id="media">
            <div class="bottom-shadow">
    	</div>
      <div class="col-md-5">
      </div>
      <div class="col-md-4">

        <div class="list-group boxshadow">
          <div class="list-group-item list-header">
            <h1>MEDIA & SOCIAL NET:</h1>
          </div>
          <a href="https://www.facebook.com/timmy.tombstone.9" class="list-group-item" style="min-height:140px;">
            <img class="list-group-image" src="img/facebook-logo.jpg" alt="" width="100">
            <h4 class="list-group-item-heading" style="padding-top:20px;">Facebook</h4>
            <p class="list-group-item-text">Join Timmy on Facebook for zero bonus points!</p>
          </a>
          <a href="https://www.youtube.com/channel/UC1Lzudy0GFy52cKrYIy94lQ" class="list-group-item" style="min-height:140px;">
            <img class="list-group-image" src="img/youtube-logo.jpg" alt="" width="100">
            <h4 class="list-group-item-heading" style="padding-top:20px;">You Tube</h4>
            <p class="list-group-item-text">Remember before Google bought it and it was good? Timmy remembers.</p>
          </a>
        </div>
    </div>
    <div class="col-md-3">
    </div>
    </section>

    <section id="contact">
            <div class="top-shadow">
    	</div>
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <form action="http://www.bluehost.com/bluemail" enctype="multipart/form-data" method="POST">
        <div class="list-group boxshadow">
          <div class="list-group-item list-header">
            <h1>Contact Timmy:</h1>
          </div>
          <div class="list-group-item">
            <h5 class="list-group-item-heading">Name:</h5>
            <input type="text" name="Name" id="name" placeholder="Name" class="form-control">
          </div>
          <div class="list-group-item">
            <h5 class="list-group-item-heading">E-mail:</h5>
            <input type="text" name="mailfrom" id="email" placeholder="Email" class="form-control">
          </div>
          <div class="list-group-item">
            <h5 class="list-group-item-heading">Message:</h5>
            <textarea name="message" id="message" placeholder="Message" name="message" class="form-control"></textarea>
          </div>
          <div class="list-group-item">
            <input type="hidden" name="sendtoemail" value="contact@timmytombstone.com">
            <input type="submit" value="Send Email">
          </div>
        </div>
        </form>
    </div>
    <div class="col-md-4">
    </div>
    </section>

    <script src="js/merged.js"></script>
	<script src="js/jquery.easing.min.js"></script>
    <script src="js/merged2.js"></script>

</body>
</html>
<?php COUCH::invoke(); ?>