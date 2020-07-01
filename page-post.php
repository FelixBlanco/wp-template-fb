<?php 
/*
	Template Name: all-post
*/
 ?>
<?php get_header(); ?>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <h2 class="ff-merienda fz-2em">Post</h2>
        <hr class="line-azul">        
      </div>
    </div>
    <div class="row">
      <?php query_posts( 'posts_per_page=30' );  ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-md-4 mt-2">
        <div class="shadow bg-white rounded cont-all-post">
          <a href="<?php the_permalink(); ?>" class="link-style">
            <?php the_post_thumbnail('post-thumbnails',['class'=>'rounded img-fluid mx-auto d-block'])  ?>	            
            <div class="p-2">
              <h3 class="p-1 text-center"><?php the_title() ?></h3>
              <p class="p-1 text-center fz-11px"> 
                <span class="lnr lnr-calendar-full"></span> <?php the_time( 'd-m-Y' ) ?>, 
                Escrito po Felix Blanco                
              </p>
            </div>
          </a>
        </div>        
      </div>
      <?php endwhile; else : ?>
					<p><?php esc_html_e( 'Disculpa, No hay post disponibles.' ); ?></p>
				<?php endif; ?>		          
    </div>
  </div>

<?php get_footer(); ?>