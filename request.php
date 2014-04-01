<!doctype html>
<?php
	require_once 'post.php'; // load the ac class file

	$acProject = new acProject();

	if(isset($_POST['name'])) {
		try {
			$project = $acProject->handle_post();
			$msg = "Yes";
			$success = "true";
		} catch (Exception $e) {

		}
	}
?>
<html>
	<head prefix="og: http://ogp.me/ns#">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="author" content=" ">
	    <meta name="description" content=" ">
	    <meta name="generator" content="HubSpot">

		<title>CUNE Marketing Project Request</title>

		<!-- http://t.co/dKP3o1e -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="build/css/semantic.min.css" />
		<link rel="stylesheet" type="text/css" href="build/css/all.css" />

		<!-- JavaScript -->
		<script type="text/javascript" src="//use.typekit.net/hlo0bhe.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script src="build/js/all.js"></script>
		<!-- Icons -->
		 
		<link rel="shortcut icon" href="build/images/favicons/favicon.ico" />
		 
	    
	     
	     

		<!--iOS -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="cleartype" content="on">
	</head>
	<body>
	<header id="cune_header" class="cune_band">
		 
		 
		<!-- Move to swap file -->
		<div class="cune_inner_wrapper">
			<div class="cune-grid-set">
				<div class="bp2-cune-col-three-fourths">
					<a href="http://www.cune.edu/" title="Concordia University, Nebraska home" id="cune_logo">
						<img src="build/images/logo.min.svg" alt="Concordia University, Nebraska Logo">
					</a>
				</div>
				<div class="bp2-cune-col-one-fourth">
				</div>
			</div>
		</div>
		<!-- End move -->
	</header>
	<section id="cune_maincontent" class="cune_band">
		<div class="cune_inner_wrapper">
		<div class="bp2-cune-col-one-fourth">
			<h1 class="ui header">CUNE Marketing
			</h1>
			<div class="ui raised segment">
				<h2 class="ui header">Project Request</h2>
				<p>It's time to plan for 2015-2016 budgets!</p>
				<p>To request a project from the Marketing office, simply fill out each of the fields on this form. This will provide us with the necessary details to add your project to the list.</p>
				<p>Keep in mind, while all efforts will be made to accommodate, your request submission is not a guarantee. Our office will communicate with you either way.</p>
			</div>
		</div>
		<div class="bp2-cune-col-three-fourths">
		<form action="" method="post" class="ui form">
			<?php
				if($success == "true") :
			?>
				<div class="ui green inverted segment">
					<h2 class="ui header">Project Request Complete!</h2>
					<p>Thank you! Someone from Marketing will be in touch within the next week to provide more details. This may include requests for clarification, or more details specific to budgets.</p>
				</div>
			<?php
				endif;
			?>
			<div>
					<div class="ui fluid segment">
						<h2 class="ui header">Project Details</h2>
							<div class="field">
								<label for="name">Project Name</label>
								<input type="text" id="name" name="name" required="required" placeholder="Project Name" />
							</div>
							<div class="field">
								<label for="body">Project Description <span class="helper">Please explain the audience, how this projects fits into other projects and your goal for success. Also, let us know how this project will differ from last year (if applicable).</span></label>
								<textarea id="body" name="body" required="required"></textarea>
							</div>
							<div class="field">
								<label for="budget">Project Budget <span class="helper">Most projects will be quoted, however please put in your expected budget.</span></label>
								<input type="text" id="budget" name="budget" required="required" placeholder="1000" />
							</div>
							<div class="date field">
								<label for="due_date">Project Due Date <span class="helper">When do you need the final version? All projects require a minimum of six weeks for development.</span></label>
								<input type="date" id="due_date" name="due_date" required="required" />
							</div>
							<div class="field">
								<label for="foapal">Project FOAPAL</label>
								<input type="text" id="foapal" name="foapal" required="required" />
							</div>
							<div class="field">
								<label for="quantity">Project Quantity</label>
								<input type="text" id="quantity" name="quantity" required="required" />
							</div>
					</div>
				</div>
				<div class="ui divider"></div>
				<div class="ui fluid segment">
					<h3 class="ui header">Project Contact</h3>
						<div class="field">
							<label for="user_name">Who should we contact?</label>
							<input type="text" id="user_name" name="user_name" required="required" />
						</div>
						<div class="field">
							<label for="user_email">What's his/her email?</label>
							<input type="email" id="user_email" name="user_email" required="required" />
						</div>
						<div class="field">
							<label for="department">Which department is this project for?</label>
							<input type="text" id="department" name="department" required="required" />
						</div>
				</div>
				<div>
					<input type="submit" value="Submit" class="ui blue submit button" />
				</div>
			</div>
		</form>
		</div>
		</div>
		</section>
	</body>
</html>