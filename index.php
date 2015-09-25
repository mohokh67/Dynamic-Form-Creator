<html lang="en" class="gr__localhost">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="MoHo">
<link rel="shortcut icon" href="../favicon.png">

<title>Create a new form by MOHO</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/jquery-ui.css" rel="stylesheet">
<link href="css/adminonly.css" rel="stylesheet">

</head>
<!-- NAVBAR
================================================== -->
<body>
	<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://mohokh.com">Dynamic Form creation by MoHo</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
			<!-- /.nav-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<!-- /.navbar -->

	<div class="container">

		<div class="row row-offcanvas row-offcanvas-right">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p class="pull-right visible-xs">
					<button type="button" class="btn btn-primary btn-xs"
						data-toggle="offcanvas">Toggle nav</button>
				</p>
		
				<div class="row">
					<div class="col-xs-6 col-lg-12">
						<noscript>&lt;div class="alert alert-danger" role="alert"&gt;
							&lt;strong&gt;JavaScript is disabled!&lt;/strong&gt; For full
							functionality of this site it is necessary to enable JavaScript.
							Here are the &lt;a href="http://www.enable-javascript.com/"
							target="_blank"&gt; instructions how to enable JavaScript in your
							web browser&lt;/a&gt;. &lt;/div&gt;</noscript>
							
							<?php 
							# check the submit data from form
							if(isset($_POST['newForm'])){
								echo "<pre>";
								print_r($_POST);
								echo "</pre>";
							}
							
							
							?>

						<form action="#" method="post" id="mainform"
							class="form-horizontal">

							<div class="form-group form-group-lg">
								<label class="col-sm-4 control-label" for="fromTitle">Title</label>
								<div class="col-md-4 col-xs-3">
									<input type="text" class="form-control" name="fromTitle"
										id="fromTitle" placeholder="Form title here" required="">
								</div>
							</div>

							<div class="form-group last-group">
								<label class="col-sm-4 control-label" for="formDescription">Description</label>
								<div class="col-md-4 col-xs-3">
									<input type="text" class="form-control" name="formDescription"
										id="formDescription"
										placeholder="Describe the form in a sentence.">
								</div>
							</div>


							<span id="myForm" class="droppable ui-sortable"> <!-- Elements will be here -->
							</span>


							<p class="text-center" id="form-submit">
								<input type="submit" value="submit" class="btn btn-primary"
									name="newForm">
							</p>
						</form>


						<div id="form-maker" class="alert alert-info">
							<a onclick="formElement('text')" href="#form-maker"
								class="btn btn-success">Text</a> <a
								onclick="formElement('paragraph')" href="#form-maker"
								class="btn btn-success">Paragraph text</a> <a
								onclick="formElement('number')" href="#form-maker"
								class="btn btn-success">Number</a> <a
								onclick="multipleChoice('checkbox')" href="#form-maker"
								class="btn btn-success">Checkboxes</a> <a
								onclick="multipleChoice('radio')" href="#form-maker"
								class="btn btn-success">Multiple choice</a> <a
								onclick="formElement('time')" href="#form-maker"
								class="btn btn-success">Time</a> <a
								onclick="formElement('date')" href="#form-maker"
								class="btn btn-success">Date</a> <a onclick="resetElements()"
								class="btn btn-danger">Reset</a>
						</div>

						<div class="panel-group" id="accordion" role="tablist"
							aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse"
											data-parent="#accordion" href="#collapseMe"
											aria-expanded="false" aria-controls="collapseThree"> Click on
											me if you need help to create a form...</a>
									</h4>
								</div>
								<div id="collapseMe" class="panel-collapse collapse"
									role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<p>Some help about available element will be here soon...</p>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!--/.col-xs-6.col-lg-12-->
				</div>
				<!--/row-->
			</div>
			<!--/.col-xs-12.col-sm-9-->


		</div>
		<!--/row-->

		<hr>

		<footer>
			<p>Moho Khaleqi <?php echo date("Y", time()); ?></p>
		</footer>

	</div>
	<!--/.container-->

	<!-- ----------------JAVASCRIPT---------------------- -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--[if lte IE 8]>
   		 <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    	 <script>window.jQuery || document.write('<script src="js/jquery-1.11.3.min.js"><\/script>')</script>
	<![endif]-->

	<!--[if gt IE 8]><!-->
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.1.4.min.js"><\/script>')</script>
	<!--<![endif]-->

	<script src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-ui.min.js"><\/script>')</script>
	<script src="js/newform.js" type="text/javascript"></script>
	<script src="js/darg-drop.js" 
	
	
	type="text/javascript"></script>
	<script>
	jQuery('a[href^="#form-maker"]').click(function(e) { 
    	jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top}, 1000); 
    	return false; 
    	e.preventDefault();
 
	});
	</script>



</body>
<span class="gr__tooltip"><span class="gr__tooltip-content"></span><i
	class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span>
</html>