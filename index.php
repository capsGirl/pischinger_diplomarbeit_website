<?php include_once('layout/top.php'); ?>
				<p>&nbsp;</p>
				<div id="content">
					<?php
						switch($_GET['p']){
							case 'home': include_once('pages/home.php'); break;
							case 'idea': include_once('pages/idea.php'); break;
							case 'team': include_once('pages/team.php'); break;
							case 'downloads': include_once('pages/downloads.php'); break;
							case 'links': include_once('pages/links.php'); break;
							case 'impressum': include_once('pages/impressum.php'); break;
							default: include_once('pages/home.php'); break;
							include ('pages/analyticstracking.php');						}
					?>

                    
                  <meta name="keywords" content="Diplomarbeit, HTL Rennweg, I-GO4, LH0CxJTUYLiDOY85Ar1djff1WxI, Innovative e-mobiling and Promotion Video, E-Bike, Elektrofahrrad, Fortbewegungsmittel neu, umweltfreundlich" />
       
					<div id="footer_container">
						Danke an unseren Sponsor <a href="http://www.msdata.at" target="_blank">msdata</a> | &copy; 2012 Pischinger Marion
					</div>
				</div>
			</div>
		</div>
	</body>
</html>