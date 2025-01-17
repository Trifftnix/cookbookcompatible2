<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic meta info
  ==================== -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <title><?php echo $Rezeptname ?> | Kochbuch</title>	<!-- HIER ETWAS ÄNDERN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

  <!-- Favicon
  ============ -->
  <link rel="apple-touch-icon" sizes="57x57" href="../images/favicon/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="../images/favicon/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="../images/favicon/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="../images/favicon/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="../images/favicon/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="../images/favicon/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon/favicon-96x96.png" />

  <!-- CSS files
  ============== -->
  <link rel="stylesheet" type="text/css" href="../css/reset.css" />
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"  />
  <link rel="stylesheet" type="text/css" href="../css/animate.min.css" />
  <!-- according to daytime:-->
  <script>
	<!--
	function getStylesheet() {
		  var currentTime = new Date().getHours();
		  if (0 <= currentTime&&currentTime < 8) {
		   document.write("<link rel='stylesheet' type='text/css' href='../css/stylesdark.css' type='text/css'>");
		  }
		  if (8 <= currentTime&&currentTime < 15) {
		   document.write("<link rel='stylesheet' type='text/css' href='../css/styles.css' type='text/css'>");
		  }
		  if (15 <= currentTime&&currentTime < 22) {
		   document.write("<link rel='stylesheet' type='text/css' href='../css/styles.css' type='text/css'>");
		  }
		  if (22 <= currentTime&&currentTime <= 24) {
		   document.write("<link rel='stylesheet' type='text/css' href='../css/stylesdark.css' type='text/css'>");
		  }
	}

	getStylesheet();
	-->
	</script>
  <noscript><link href="../css/styles.css" rel="stylesheet"></noscript>
  <!-- Modernizr file
  =================== -->
  <script charset="utf-8" type="text/javascript "src="../js/modernizr.custom.js"></script>

</head>

<body>

  <!-- Splash Screen
  ================== -->
  <div id="splash"></div>

  <!-- Website Logo
  ================= -->
  <section id="logo">
    <div class="container text-center wow pulse">
      <a href="/index.html"><img src="../images/icons/logo-white.svg" alt="logo" /></a>
      <br />
      <h1><a href="/index.html">Kochbuch</a></h1>
    </div>
  </section>

  <!-- Rezept Sektion
  =================== -->
  <section id="recipe">
    <div class="container">
      <div class="row">
        <!-- Title -->
        <div class="col-12">
          <h2 itemprop="name"><?php echo $Rezeptname ?></h2>	<!-- HIER ETWAS ÄNDERN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        </div>
      </div>
      <div class="row vertical-align">
        <div class="col-12">
          <!-- Picture -->
          <div class="col-md-8 pull-left wow swing">
            <img src="full.jpg" class="recipe-picture" itemprop="image"/>	<!-- HIER ETWAS ÄNDERN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
          </div>
          <!-- Info -->
          <div class="col-md-4 pull-right wow lightSpeedIn">
            <div class="recipe-info">
              <h3>Info</h3>
              <!-- Time -->
              <div class="row">
                <div class="col-2 text-center">
                  <i class="fa fa-clock-o" aria-hidden="true"></i>
                </div>
                <div class="col-6">Zeit</div>
                <div class="col-4" itemprop="prepTime"><?php echo $Zeit ?></div>	<!-- HIER ETWAS ÄNDERN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
              </div>
              <!-- Difficulty -->
              <div class="row">
                <div class="col-2 text-center">
                  <i class="fa fa-area-chart" aria-hidden="true"></i>
                </div>
                <div class="col-6">aktuell leer</div>
                <div class="col-4">
                </div>
              </div>
              <!-- Serves -->
              <div class="row">
                <div class="col-2 text-center">
                  <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="col-6">Portionen</div>
                <div class="col-4"><?php echo $Portionen ?></div>								<!-- HIER ETWAS ÄNDERN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Zutaten -->
      <div class="row wow slideInUp">
        <div class="col-12">
          <div class="recipe-ingredients">
            <h3>Zutaten</h3>
            <dl class="ingredients-list">
			  <?php echo $Zutaten ?>															<!-- HIER ETWAS ÄNDERN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
            
			</dl>
			
						  
			</dl>
          </div>
        </div>
      </div>
      <!-- Zubereitung -->
      <div class="row wow slideInUp">
        <div class="col-12">
          <div class="recipe-directions">
            <h3>Zubereitung</h3>					<!-- HIER ETWAS ÄNDERN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
            <ol>
				<?php echo $Zubereitungsschritte ?>
            
			</ol>
          </div>
        </div>
      </div>
	  <p><script async="async" src="//platform.getbring.com/widgets/import.js"></script>
		<div data-bring-import style="display:none">
			<h3>test</h3>
			   <a href="https://www.getbring.com">Bring! Einkaufsliste App f&uuml;r iPhone und Android</a>

		</div>
		</p>
      <!-- Back to recipes -->
      <div class="row wow rollIn">
        <div class="col-12 text-center">
          <a href="/index.html">
            <i class="fa fa-backward" aria-hidden="true"></i>
            Zurück zur Rezeptübersicht.
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Website Footer
  =================== -->
  <footer>
    <div class="container">
      <div class="row">
        <!-- About -->
        <div class="col-md-6 col-sm-12 text-center">
          <h3>Ein Kochbuch</h3>
          <div class="footer-about">
            Eine Rezeptesammlung mit meinen persönlichen Lieblingsgerichten mit einer blitzschnellen Anbindung an die Einkaufsliste - zusammengestellt aus Kochbüchern, Kochwebsiten und eigenen Rezepten. <br>Das Weblayout ist von <a href="https://jraleman.com/" target="_blank" rel="noopener noreferrer">Jose Ramon</a>
          </div>
        </div>
        <!-- Author -->
        <div class="col-md-6 col-sm-12 text-center">
          <div class="footer-author">
            Zusammengestellt von <a href="https://github.com/Trifftnix">Trifftnix</a>.
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- JavaScript files
  ===================== -->
  <script charset="utf-8" src="../js/jquery-3.3.1.min.js"></script>
  <script charset="utf-8" src="../js/bootstrap.min.js"></script>
  <script charset="utf-8" src="../js/wow.min.js"></script>
  <script charset="utf-8" src="../js/scripts.js"></script>
</body>

</html>
