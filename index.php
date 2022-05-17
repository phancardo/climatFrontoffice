<?php
include ('inc/Fonction.php');
$resultat = listeActus();

?>



<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title> Le rechauffement climatique</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">
        

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">


</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   


   	<div class="gradient-block"></div>	
   	<div class="row header-content">

   		<div class="logo">
   			<h1> Le rechauffement climatique</h1>

	      </div>

	   	

			

			
   	</div>     		
   	
   </header> <!-- end header -->


   <!-- masonry
   ================================================== -->
   <section id="bricks">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

         	<div class="brick entry featured-grid animate-this">
         		<div class="entry-content">
         			<div id="featured-post-slider" class="flexslider">
			   			<ul class="slides">

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-1.jpg');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												
												<li><a href="#" >Phancardo</a></li>				
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">L'amour c'est ce climat qui fait qu'un être s'accomplit. Pour qu'une plante pousse bien, il lui faut de l'humidité et de la lumière. Pour qu'un être pousse bien, il lui faut de l'amour et du respect.</a></h1> 
								   	</div> 				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-2.jpg');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li><a href="#">Eren Yager</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">On veut un changement de système, et non un changement climatique</a></h1>
						   			</div>		   				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-3.jpg');;"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li><a href="#" class="author">Reko Band</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">
Reprenez vos esprits, mes amis, nous ne sommes pas stupides de détruire ce qui  est déja  dédruit</a></h1>
						   			</div>

				   				</div>
				   			</li> <!-- end slide -->

				   		</ul> <!-- end slides -->
				   	</div> <!-- end featured-post-slider -->        			
         		</div> <!-- end entry content -->         		
         	</div>

         	

           
      



      
                     
           


         	<article class="brick entry format-quote animate-this" >

               <div class="entry-thumb">                  
	               <blockquote>
	                 	<p>Le climat change, peut-être que nous devrions faire de meme</p>

	                 	<cite>Phan Andria</cite> 
	               </blockquote>	          
               </div>   

        		</article> <!-- end article -->



        		 <?php
            	while($data = mysqli_fetch_assoc($resultat)) { ?>
		         	<article class="brick entry animate-this">
		               <div class="entry-thumb">
		                  <a href="<?= $data['url'].'-'.$data['id']?>.php" class="thumb-link">
			                  <img src="<?php echo $data['image']; ?>" alt="Shutterbug">                      
		                  </a>
		               </div>

		               <div class="entry-text">
		               	<div class="entry-header">

		               		<div class="entry-meta">
		               					
		               		</div>

		               		<h2 class="entry-title"><a href="<?= $data['url'].'-'.$data['id']?>.php"><?php echo $data['titre']; ?> .</a></h2>
		               		
		               	</div>
								<div class="entry-excerpt">
									<h3> <?php echo $data['resume']; ?></h3>
								</div>
		               </div>
		               
		        		</article> <!-- end article -->
       <?php }mysqli_free_result($resultat);?>
            


                        
           


      

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->

   	<div class="row">
   		
   		

   	</div>

   </section> <!-- end bricks -->

   
   <!-- footer
   ================================================== -->
   <footer>
      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright ETU 1250 2022</span> 
		         	<span>Design by Andriniaina Phancardo <a href="#"></a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/jquery.appear.js"></script>
   <script src="js/main.js"></script>

</body>

</html>