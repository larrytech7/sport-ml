<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php require_once 'unirest/src/Unirest.php';
session_start();

//premier-league, bundesliga,serie-a,laliga,ligue1,liga

//if($_REQUEST['league']){
Unirest\Request::verifyPeer(false);
Unirest\Request::jsonOpts(true, 512, JSON_NUMERIC_CHECK & JSON_FORCE_OBJECT & JSON_UNESCAPED_SLASHES);
//$league;
//$league="liga";
$league=$_REQUEST['league'];
$response = \Unirest\Request::get("https://sportsop-soccer-sports-open-data-v1.p.mashape.com/v1/leagues/$league/seasons/17-18/standings",
  array(
    "X-Mashape-Key" => "CTyt9KY7jamshyqHycE1hDfNS93Yp1d2BYNjsnLnfTrchMqSxR",
    "Accept" => "application/json"
  )

);
//print_r($response);
//$json=json_decode($response,true);
//echo $response['raw_body'];
//print_r($response->body);
$lewis=array();
$lewis=$response->body;
//print_r(array_values($lewis));
//$counter=0;

/*$_SESSION['team_info']=$lewis;
echo "Position: "." Team Name:"." Wins:". "Draws:";

foreach($lewis as $soccer){
	foreach($soccer['standings'] as $key){
		//echo $key['team'];
//	echo $lew['team'];

echo   $key['position']." ".$key['team']."<br/>";	

	foreach($key['overall'] as $name=>$nop){
	//	echo $no[$name];
		//echo $name['wins'];
	//	echo $nop['wins'];
		if($name=='last_5')
			continue;
		echo $name." ".$nop;

		//echo $nop['wins'];

	}
	
	
	}


}

*/



/*echo $lewis['0']['standings']['0'];
$know=implode($lewis(['data']['standings'][0]));
echo  $know;
*/

//echo json_encode($response);

//echo json_encode($response->body);
//$other=json_encode($response);
//$ans=json_decode($other);
//echo $ans;

//var_dump($response);
//echo $response['position'];
//print_r($response->body);


/*$hold=array();
$hold=$response->body;
//echo sizeof($hold);
$json_val=json_encode($response);

echo $json_val;
*/


//echo $response->{position};

//echo json_decode(json_encode($response));
//var_dump(json_encode($response));
//}
?>
<html>
	<head>
		<title>Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--<link rel="stylesheet" href="assets/css/bootstrap.min.css" />-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<style type="text/css">
		.table{
			@include 'assets/css/bootstrap.min.css';
		}
		.container{
		    @include 'assets/css/bootstrap.min.css';	
		}
	</style>>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Hi, Welcome To Sportsai<br />
											</h1>
											
										</header>
										
										<div class="container">

										<table class="table table-striped">
											<thead>
												<tr>
													<th>Postition</th>
													<th>Team Name</th>
													<th>Wins</th>
													<th>Draws</th>
													<th>Losts</th>
													<th>Points</th>
													<th>GF</th>
													<th>GA</th>
													<th>MP</th>
													<th>GD</th>
												</tr>
											</thead>
											<tbody>
												

                                               <?php 
                                                foreach($lewis as $soccer){
	                                              foreach($soccer['standings'] as $key){
                                                   		//echo $key['team'];
                                                      //	echo $lew['team'];
	                                              	echo "<tr>";
	                                              	echo "<td>".$key['position']."</td>";
	                                              	echo "<td>".$key['team']."</td>";



	                                              	foreach($key['overall'] as $name=>$nop){
	                                                      //	echo $no[$name];
		                                                    //echo $name['wins'];
	                                                          //	echo $nop['wins'];
	                                                         	if($name=='last_5')
	                                                         		continue;
		                                                         //echo $name." ".$nop;
	                                                         	echo "<td>".$nop."</td>";

	                                                                	//echo $nop['wins'];

	                                                                       }

	                                              	echo "<tr/>";

                                                  //echo   $key['position']." ".$key['team']."<br/>";	
                                                    	/*foreach($lew['team'] as $name){
                                                           	//	echo $no[$name];
                                                                      	}
                                                                       	*/
	
                                                             	}


                                                                 }
                                               ?>

											</tbody>
											
										</table>
										</div>


										<ul class="actions">
											<li><a href="#" class="button big">More Info</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/pic10.jpg" alt="" />
									</span>
								</section>

							<!-- Section -->
								<!-- Section -->
								<section>
									<header class="major">
										<h2>Modules:</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-diamond"></span>
											<div class="content">
												<h3>Rigid</h3>
												<p>Sportsai was built for the Future in mind, so We employed one of the most Rigid and Tough techniques known in computing today.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-paper-plane"></span>
											<div class="content">
												<h3>Light-Weight</h3>
												<p>At Sportai , we have in mind those of our clients browsing from low speed Internet areas, that's why we created a Light-weight Web App, taking into consideration those of our clients.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-rocket"></span>
											<div class="content">
												<h3>Fast</h3>
												<p>The Server Response-Time is something worth mentioning, the response are isssued at miliseconds are the client issues a Server Request.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-signal"></span>
											<div class="content">
												<h3>Analytical</h3>
												<p>There's nothing good In Life without a little spice of Algorithms, At Sportsai we deployed the Latest set Of AI to the Web App. </p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
								<!-- Section -->
								<section>
									<header class="major">
										<h2>What's in store For You.</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="images/livescore.jpg" alt="" height="380px" /></a>
											<h3>Live Scores</h3>
											<p>Get Real-Time Football LiveScores right at the comfort of your living Room.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/league-standing.png" alt="" height="380px" /></a>
											<h3>Latest League Standing</h3>
											<p>Trying to Figure out who is at the Top Of Europe's Elite Football Leagues? Well We got your Question answered.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/match-odds.jpg" alt="" height="380px" /></a>
											<h3>Match Odds</h3>
											<p>There's nothing like having the Right Football Odds at the Touch of your hand. We deployed the Latest set of Technologies in order to bring to you Real-time football Match Odds.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/ronaldo/ronaldo2.jpg" alt="" height="380px" /></a>
											<h3>Football Facts and Analysis</h3>
											<p>Want to be the Master of Football Arguments? Well we got you covered. At Spportsai you will be the Champion of the Latest Football Findings and Facts.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										
									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.html">Homepage</a></li>
										<li><a href="generic.html">LiveScores</a></li>
										<li><a href="elements.html">Elements</a></li>
										<!--
										<li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>

                                                    -->
										<li>
											<span class="opener">League Standings</span>
											<ul>
													<li><a href="standings.php?league=premier-league">Barclays Premier League</a></li>
												<li><a href="standings.php?league=liga">La Liga</a></li>
												<li><a href="standings.php?league=ligue1">Ligue 1</a></li>
												<li><a href="standings.php?league=serie-a">Serie A</a></li>
												<li><a href="standings.php?bundesliga">German BundesLiga</a></li>
											</ul>
										</li>


										<li><a href="#">About Us</a></li>
										<li><a href="#">Contact Us</a></li>
										
									</ul>
								</nav>
<!-- Section -->
								<section>
									<header class="major">
										<h2>Have What it takes to Win the Next big Deal?</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/ronaldo/ronaldo1.jpg" alt="" /></a>
											<p>With Sports Ai we Bring to you tthe Next big Thing in Football Odds.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/machine1.jpg" alt="" /></a>
											<p>We bring Football Odds with a mix of High Tech Technology.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/stade.jpg" alt="" /></a>
											<p>Enjoy Your Game With Sportai.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Wanting to get in Touch with us for any of your worries? Feel free to contact us either by E-Mail or Landline. At Sportsai we believe  <strong><i>The Customer is King</i>.</strong></p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">info@sportsai.com</a></li>
										<li class="fa-phone">(237) 6760-36219</li>
										<li class="fa-home">Molyko, <br />
										Buea, SWR Cameroon</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>