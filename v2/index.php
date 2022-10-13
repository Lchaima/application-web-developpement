<!DOCTYPE html>
<!--
Template Name: Nocobot
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Net'Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
    <?php 
               
       $mysqli= new mysqli('localhost','zliheouch','3iqdym8k','zfl2-zliheouch');
               if ($mysqli->connect_errno)
				{
				// Affichage d'un message d'erreur
				echo "Error: Problème de connexion à la BDD \n";
				echo "Errno: " . $mysqli->connect_errno . "\n";
				echo "Error: " . $mysqli->connect_error . "\n";
				// Arrêt du chargement de la page
				exit();
				}
				if (!$mysqli->set_charset("utf8")) {
				printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
				exit();
				}

     ?>
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="far fa-envelope rgtspace-5"></i> info@domain.com</li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><a href="pages/session.php" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
        <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
        <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Enter search term&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <!-- ################################################################################################ -->
        <h1 class="heading"><a href="index.php">Net'Gallery</a></h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="drop" href="#"> More </a>
            <ul>
              <li><a href="pages/gallery.php">Gallery</a></li>
              <li><a href="pages/livre_or.php"> Livre d'or</a></li>
            </ul>
          </li>
          <li><a href="pages/inscription.php">inscription</a></li>
        </ul>
        <!-- ################################################################################################ -->
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
        <?php
        $data="SELECT * FROM t_configuration_con;";
        $result2 = $mysqli->query($data);
				if ($result2 == false) 
				{ 
				echo "Error: La requête a echoué \n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
				exit();
				}
				else 
				{
				$data= $result2->fetch_assoc() ;
				}
				?>
    <!-- ################################################################################################ -->          
            <?php
              $ver="SELECT (datediff(CURRENT_DATE(),con_date_vernissage))as nombre_jours_passes FROM `t_configuration_con`;";
              $result3 = $mysqli->query($ver);
      				if ($result2 == false) 
      				{ 
      				echo "Error: La requête a echoué \n";
      				echo "Errno: " . $mysqli->errno . "\n";
      				echo "Error: " . $mysqli->error . "\n";
      				exit();
      				}
      				else 
      				{
      				$ver= $result3->fetch_assoc() ;
      				}
			 ?>
              
  <div class="overlay">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <h1 class="heading"> <?php echo ($data['con_intitule']); ?> </h1>
        <h2> <?php echo ($data['con_presentation']);
              echo("<br>") ;
              echo ($data['con_txt_bienvenue']);
              echo("<br>") ;
              
             ?>
         <h2>
         
          
        <footer><a class="btn" href="#ctdetails"> plus des informations </a> </footer>
        <br>
        <br>
        <p> 
         	<?php
         	echo('<figcaption class="sectiontitle">');
            echo ('<p class="heading underline font-x2">'.$ver['nombre_jours_passes'].'  jours </p> <h1 class="blod"> sonts passées dès l\'ouverture </h1>');
            echo("</figcaption>");
            ?>
          <p>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group btmspace-80">
        <li class="one_third first">
          <figure><a class="imgover" href="https://www.ifmparis.fr/fr" target="_blank" rel="noopener noreferrer"><img src="images/demo/institut.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Institut français de la mode </h6>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="https://www.culture.gouv.fr" target="_blank" rel="noopener noreferrer"><img src="images/demo/ministere_culture.png" alt=""></a>
            <figcaption>
              <h6 class="heading">ministere culture de la culture</h6>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="https://www.centrepompidou.fr" target="_blank" rel="noopener noreferrer"><img src="images/demo/centre_pompidou.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Le centre pompidou</h6>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="heading underline font-x2">La dernière actualité</p>
    </div>
    <ul id="latest" class="nospace group"> 
      <li class="one_third first">
        <article><img src="images/demo/avatar1.png" alt="">
          <ul class="nospace meta clear">
            <?php 
            $last="SELECT * from t_news_new where new_date = (select max(new_date) from t_news_new );";
            $Lresult = $mysqli->query($last);
            if ($Lresult == false) 
            { 
            echo "Error: La requête a echoué \n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit();
            }
            else 
            {
            $last= $Lresult->fetch_assoc() ;
            }
            ?>
            <li><i class="fas fa-user"></i> <a href="#"><?php echo($last['cpt_pseudo']); ?><</a></li>
          </ul>
          <div class="excerpt clear">
            <h6 class="heading"> <?php echo($last['new_titre']) ;?> </h6>
            <time datetime=<?php echo($last['new_date']); ?>><strong>05</strong> <em>Apr</em></time>
            <p><?php echo($last['new_texte']);?>&hellip;</p>
          </div>
          <footer><a class="btn" href="#group">Read More</a></footer>
        </article>
      </li>

      <li class="two_third">
        <img src="images/demo/runway.png" style="width:800px; height:400px;" alt="">
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>

<!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <section class="group">
      <div class="hoc">
      	<figcaption class="sectiontitle">
      	<h1 class="heading underline font-x2"> Les actualités <h1> 
      	</figcaption>
         <table>
         	<thead>
         	 <tr>
             <th> Titre </th>
             <th> Actualité </th>
             <th>   compte  </th>
             <th>  date  </th>
             </tr>
         	</thead>
             <?php
              $requete="SELECT * FROM t_news_new;";
              $result1 = $mysqli->query($requete);
				if ($result1 == false) 
				{ 
				echo "Error: La requête a echoué \n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
				exit();
				}
				else 
				{
				while ($actu = $result1->fetch_assoc())
				{
				echo ("<tr>");
				echo ("<td>".$actu['new_titre']."</td>"."<td>".$actu['new_texte']."</td>");
				echo ("<td>".$actu['cpt_pseudo']."</td>"."<td>".$actu['new_date']."</td>");
				echo ("</tr>");
				}
				}
          ?>
         </table> 
      </div>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <figure class="hoc container clear imgroup"> 
    <!-- ################################################################################################ -->
    <figcaption class="sectiontitle">
      <p class="heading underline font-x2"> Créateurs de mode </p>
    </figcaption>
    <ul class="nospace group">
      <li class="one_third"><a class="imgover" href="#"><img src="images/demo/chanel.png" alt=""></a></li>
      <li class="one_third"><a class="imgover" href="#"><img src="images/demo/alaia.png" alt=""></a></li>
      <li class="one_third"><a class="imgover" href="#"><img src="images/demo/versace.png" alt=""></a></li>
      <li class="one_third"><a class="imgover" href="#"><img src="images/demo/Lagrefed.png" alt=""></a></li>
      <li class="one_third"><a class="imgover" href="#"><img src="images/demo/Poiret.png" alt=""></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
  <!-- ################################################################################################ -->
</div>
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper coloured">
  <section id="ctdetails" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Saturday:</strong> 09.00am - 17.00pm 
        	<?php 
        	     echo("<br>") ;  
        	     echo("<br>") ;
        	     echo("date de debut - date de fin :");
        	     echo("<br>") ;
        	     echo ($data['con_date_debut']);
        	     echo("<br>") ;
        	     echo ($data['con_date_fin']) ;
        	    ?> 
        	</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Direction to <a href="https://www.centrepompidou.fr/fr/"> <?php echo($data['con_lieu']) ; ?> </a></span></div>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<?php $mysqli->close(); ?>
</body>
</html>