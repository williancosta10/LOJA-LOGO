<?php /* Template Name: Home */ ?>
<?php get_header(); ?>


<!-- BANNER -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <picture>
      	<source srcset="<?php bloginfo('template_url');?>/images/banner/banner-01-m.jpg" media="(max-width: 767px)">
      	<img src="<?php bloginfo('template_url');?>/images/banner/banner-01.jpg" alt="Imagem 1">
      </picture>
    </div>

    <div class="item">
      <picture>
      	<picture>
	      	<source srcset="<?php bloginfo('template_url');?>/images/banner/banner-02-m.jpg" media="(max-width: 767px)">
	      	<img src="<?php bloginfo('template_url');?>/images/banner/banner-02.jpg" alt="Imagem 1">
	      </picture>
      </picture>
    </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<article class="content_principal">
	<!-- CONTENT -->
	<section class="content_page">
		<div class="container">
			<div clas="row">
				<aside class="banner-adesao col-md-4 col-sm-4">
					<img class="img-responsive hidden-xs" src="<?php bloginfo('template_url');?>/images/content/banner-proposta-adesao.jpg">
					<div class="label">
						<p>PREENCHA A PROPOSTA DE ADESÃO</p>
					</div>
				</aside>
				<div class="col-md-8 col-sm-8 nopadd">
					<?php query_posts('showposts=4');while (have_posts()) : the_post(); $postnum = $postnum + 1;?>
						<a href="<?php the_permalink(); ?>">
							<article class="container_post col-md-6 col-sm-6">
								<div class="row">
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									<img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
									<div class="content_post">
										<div class="info_post position-<?php echo $postnum; ?>">
											<h4 class="category">
												<?php 
												$categories = get_the_category(); 
												$cat_name = $categories[0]->cat_name;
											 	if($cat_name != "Sem categoria"){ ?>
											 		<h4 class="category"> <?php echo $cat_name; ?></h4>
												<?php } ?>
											</h4>
											<h2 class="title"><?php the_title(); ?></h2>
											<?php the_meta(); ?>
											<a href="<?php the_permalink(); ?>">
												<span class="btn-post">
													SAIBA MAIS
												</span>
											</a>
										</div>
									</div>
								</div>
							</article>
						</a>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="map-canvas">
		
		<div id="mapa" class="mapstyle"></div>
		
		<article class="localization">
			<div class="left">
				<div class="search_geo">
					<span class="ico"></span>
					<p>ACHAR MINHA<br>LOCALIZAÇÃO<br>AUTOMATICAMENTE</p>
				</div>
			</div>
			<span class="hidden-xs">ou</span>
			<div class="right hidden-xs">
				<div class="search_cep">
					<p>DIGITE O CEP DE ONDE VOCÊ ESTÁ</p>
					<form class="search_form_cep">
						<input type="text" name="cep" id="cep" placeholder="CEP">
						<input type="submit" value="PROCURAR">
					</form>
				</div>
			</div>
		</article>

	</section>

	<section>
		<div class="container">
			<div class="col-md-6 col-sm-6">
				<div class="newsletter">
					<p>ASSINE A NEWSLETTER DO LOGO</p>
					<form class="newsletter col-md-7">
						<input type="text" name="email" placeholder="Seu e-mail">
						<input type="submit" value="ENVIAR">
					</form>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<nav class="social">
					<p>SIGA LOJAS LOGO NAS REDES SOCIAIS</p>
					<ul> 
						<li><a href="https://www.facebook.com/mktvirtual?fref=ts" target="_blank" class="icons-facebook-contact"></a></li>  
						<li><a href="https://www.youtube.com/user/mktvirtual" target="_blank" class="icons-youtube-contact"></a></li> 
						<li><a href="https://instagram.com/mktvirtual/" target="_blank" class="icons-instagram-contact"></a></li> 
					</ul>
				</nav>
			</div>
		</div>
	</section>
</article>

<?php get_footer(); ?>