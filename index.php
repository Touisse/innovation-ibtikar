
<!DOCTYPE html>
<html lang="en">
   
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>IbtikarCom</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" type="image/png" sizes="16x16" href="images/logo.svg">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <header id="masthead" class="site-header">
         <div  class="head_top">
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.php"><img src="images/logo-white.svg" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
     </header><!-- /#mastheaed -->
 
     <div id="hero" class="hero overlay">
         <div class="hero-content">
             <div class="hero-text">
                 <h1>Le Programme D'accompagnement Et D'incubation.</h1>
                 <p>Nous Sommes prets a vous accompagner,
                     diriger et surtout donner vie a vos idees !</p>
                 <a href="#main" class="btn btn-border">Learn more</a>
             </div><!-- /.hero-text -->
         </div><!-- /.hero-content -->
     </div><!-- /.hero -->
     <main id="main" class="site-main">

      <section class="site-section section-features">
          <div class="container">
              <div class="row">
                  <div class="col-sm-5">
                      <h2>IBTIKARCOM est votre boussole </h2>
                      <p>Vous ne savez pas par quoi commencer. vous n'avez pas toutes les competences pour monter votre projet , vous pensez que vous aurez plus de cances de convaincre des financeurs ou alors tout simplement vous ne vous sentez pas capable de surmonter les difficultes entrepreneuriates. </p>
                  </div>
                  <div class="col-sm-7 hidden-xs">
                      <img src="images/business_img.jpg" alt="">
                  </div>
              </div>
          </div>
      </section><!-- /.section-features -->
      <div id="contact" class="contact">
        
         <div class="container">
            
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h1>DONNEZ VIE A VOS IDEES</h1>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <form class="main_form " action="insert.php" method="post">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input  type="text"  id="projetName"
                           name="projetName"  class="form_contril"  placeholder="Nom Entreprise / Projet" required>
                        </div>
                        <div class="col-md-12">
                           <label   class="form_contril" for="innovant">Est-ce-que le projet est innovant ?</label>
                  <label for="oui" ><input
                     class="form-group"
                      type="radio"
                      name="radio"
                      value="oui"
                      id="radio"
                    /> OUI </label >
                  <label for="non" 
                    ><input
                      type="radio"
                      name="radio"
                      value="non"
                      id="radio"
                    /> NON</label >
                        </div>
                        <div class="col-md-12">
                           <textarea
                             type="text"
                             class="textarea"
                             id="Description"
                             name="Description"
                             placeholder="Description Entreprise / Projet "  ></textarea>
                                   </div>
                                   <div class="col-md-12">
                                    <textarea
                                      type="text"
                                      class="textarea"
                                      id="innovation"
                                      name="innovation"
                                      placeholder="Quelle est la valeur ajoutée / innovation du projet ? " ></textarea>
                                            </div>

                        <div class="col-md-12">
                            <label  class="form_contril" for="phase">Quelle est la phase du projet ?</label>
                <div>
                  <label for="Idéation" class="radio-inline"
                    ><input
                      type="radio"
                      name="phase"
                      value="Idéation"
                      id="phase"
                    /> Idéation</label
                  >
                  <label for="Pré-création" class="radio-inline"
                    ><input
                      type="radio"
                      name="phase"
                      value="Pré-création"
                      id="phase"
                    /> Pré-création
                    </label
                  >
                  <label for="Création" class="radio-inline"
                  ><input
                    type="radio"
                    name="phase"
                    value="Création"
                    id="phase"
                  /> Création</label
                >
                <label for="Post-création" class="radio-inline"
                  ><input
                    type="radio"
                    name="phase"
                    value="Post-création"
                    id="phase"
                  /> Post-création</label
                >
                </div>
                        </div>
                        <div class="col-md-12">
                           <textarea
                             type="text"
                             class="textarea"
                             id="objectif"
                             name="objectif"
                             placeholder="Quel est l'objectif du projet ? " ></textarea>
                                   </div>
                                
                         <div class="col-md-12">
                            <textarea
                                      type="text"
                                      class="textarea"
                                      id="besoins"
                                      name="besoins"
                                      placeholder="Quels sont les besoins actuels du projet ? " ></textarea>
                                            </div>
                         <div class="col-md-12">
                                <textarea
                                               type="text"
                                               class="textarea"
                                               id="réalisations"
                                               name="réalisations"
                                               placeholder="Quelles sont les réalisations du projet ?  " ></textarea>
                                                     </div>
                                                     <div class="col-md-12 ">
                                                      <input  type="text"  class="form_contril"  placeholder="Site web"  id="Site"
                                                      name="Site" required>
                                                   </div>
                                                     <div class="col-md-12">
                                                     <label  class="form_contril"for="sociaux">Réseaux sociaux</label>
                                                     <div>
								<div class="col-md-6">
									<div class="checkbox">
										<label><input type="checkbox" name="Réseaux[]" value="Facebook" > Facebook</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="Réseaux[]" value="Youtube"> Youtube</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="Réseaux[]" value="Linkdin"> Linkdin</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="Réseaux[]" value="Twitter"> Twitter</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="Réseaux[]" value="Instagram"> Instagram</label>
									</div>
								</div>
                                                 
                                                      <div class="col-md-12 ">
                                                         <input  type="text"  class="form_contril"  placeholder="Lien URL réseaux sociaux" 
                                                         name="lien" id="lien" required>
                                                      </div>
                                                   </div>
                
                        <div class="col-sm-12">
                           <button  type="submit" name="submit" value="Submit" id="submit" class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!-- end contact -->
      <!--  footer -->
      <footer id="colophon" class="site-footer">
         <div class="container">
             <div class="row">
                 <div class="col-md-3 col-sm-4 col-xs-6">
                     <div class="logo">
                        <a href="index.php"><img src="images/logo-black.png" alt="#" /></a>
                     </div>
                  
                      <br>
                     <p>IbtikarCom est également reconnue pour les performances, la fiabilité, la sécurité et la qualité de ses applicatifs web et mobiles.</p>
                 </div>
                 <div class="col-md-3 col-sm-4 col-xs-6">
                     <h3>Keep in touch</h3>
                     <ul class="list-unstyled contact-links">
                         <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="entrepreneur@ibtikarcom.com">entrepreneur@ibtikarcom.com</a></li>
                         <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+2120688593104">+212 06 88 59 31 04 </a></li>
                         <li><i class="fa fa-map-marker" aria-hidden="true"></i><p>47,Rue Ait Ba Amrane 3eme etage Casablanca Maroc</p></li>
                     </ul>
                 </div>
                           <div class="copyright">
                        <div class="container">
                           <div class="row">
                                 <div class="col-xs-8">
                                    <div class="social-links">
                                       <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                                       <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                                       <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                                       <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                         </div><!-- /.social-links -->
                     </div>
                 </div>
             </div>
         </div><!-- /.copyright -->
     </footer><!-- /#footer -->
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </body>
</html>

