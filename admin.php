<? include_once("sign.php") ?>
<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <?php include "inc/head-info.inc"; ?>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        

    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

	<!-- PHP - HEADER -->
	<?php $selected = 'admin'; include "inc/header.inc"; ?>
	
	<?php
	
		include_once("connect.php");
	
		//mysql_query("ALTER TABLE website ADD room TEXT NOT NULL AFTER copyemail");
		
		//$qqq = "Ben M";
		//$query1 = "UPDATE website SET room='$qqq'"; 
        //mysql_query($query1) or die('Error, modify query failed!'.mysql_error());
	
        $query = "SELECT altprog_name, altprog_email, trailer_name, trailer_email, copyemail, room FROM website";
		$request = mysql_query($query);
		$row = mysql_fetch_assoc($request);
        $altprog_name = $row['altprog_name'];
        $altprog_email = $row['altprog_email'];
		$trailer_name = $row['trailer_name'];
        $trailer_email =$row['trailer_email'];
        $copy_to = $row['copyemail'];
		$room = $row['room'];
      
        //mysql_close(); 
    ?>

        <!--========== PAGE LAYOUT ==========-->
		
		
	<div class="content-sm container">
		<h1>Administrator Tools</h1>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#room">Room</a></li>
			<li><a data-toggle="tab" href="#trailer">Trailer Editor</a></li>
			<li><a data-toggle="tab" href="#alt">Alternative Programming Director</a></li>
			<li><a data-toggle="tab" href="#copyemail">Personnel Director</a></li>
		</ul>
		
		<p></p>
		
		<div class="tab-content">

			<div id="room" class="tab-pane fade in active">
				<input name="room_name" type="text" value="<? echo($room); ?>" class="form-control" id="altprog_name">
				<button type="button" class="btn btn-default">Default</button>
			</div>
			
			<div id="trailer" class="tab-pane fade">
				<label>Name:</label>
				<input name="trailer_name" type="text" id="trailer_name" value="<? echo($trailer_name); ?>" class="form-control">   
				<label>Email:</label>
				<input name="trailer_email" type="text" id="trailer_email" value="<? echo($trailer_email); ?>" class="form-control">
			</div>
			
			<div id="alt" class="tab-pane fade">
				<label>Name:</label>
				<input name="altprog_name" type="text" value="<? echo($altprog_name); ?>" class="form-control" id="altprog_name">
				<label>Email:</label>
				<input name="altprog_email" type="email" class="form-control" id="altprog_email" value="<? echo($altprog_email); ?>"> 
			</div>
			
			<div id="copyemail" class="tab-pane fade">
				<label>Email:</label>
				<input name="copy_email" type="email" class="form-control" id="copy_email" value="<? echo($copy_to); ?>"> 
			</div>
			
		</div>

    </div>
		
		
	<div class="content-sm container">
		<h1>Administrator Tools</h1>
		<div class="row">
		<form method="post" enctype="multipart/form-data" action="" name="form1">
		<div class="col-sm-4">
			<h4>Room</h4>
			<input name="room_name" type="text" value="<? echo($room); ?>" class="form-control" id="altprog_name">
			<button class="btn"></button>
		</div>
		<div class="col-sm-4">
			<h4>Trailer Editor</h4>
			<a data-toggle="collapse" href="#collapseTrailer" aria-expanded="false" aria-controls="collapseTrailer" style="float: right;">Edit</a>
			<div class="collapse" id="collapseTrailer">
			<div class="card card-block">
				<label>Name:</label>
				<input name="trailer_name" type="text" id="trailer_name" value="<? echo($trailer_name); ?>" class="form-control">   
				<label>Email:</label>
				<input name="trailer_email" type="text" id="trailer_email" value="<? echo($trailer_email); ?>" class="form-control">
			</div>
			</div>
		</div>
		<div class="col-sm-4">
			<h4>Alternative Programming Director</h4>
			<label>Name:</label>
            <input name="altprog_name" type="text" value="<? echo($altprog_name); ?>" class="form-control" id="altprog_name">
            <label>Email:</label>
			<input name="altprog_email" type="email" class="form-control" id="altprog_email" value="<? echo($altprog_email); ?>">     
		</div>
        
		</form>
		</div>
		
		
		
		<div class="panel-group" id="accordion">
		<div class="panel panel-default">
		<div class="panel-heading">
		<h3>
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Collapsible Group 1</a>
      </h3>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Collapsible Group 2</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Collapsible Group 3</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
</div>
		
		
    </div>
		
        <!--========== END PAGE LAYOUT ==========-->

	<!-- PHP - FOOTER -->
	<?php include "inc/footer.inc"; ?>

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


    </body>
    <!-- END BODY -->
</html>