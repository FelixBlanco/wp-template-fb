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
        <div class="shadow bg-white rounded no-link">
          <a href="<?php the_permalink(); ?>" class="link-style">
            <?php the_post_thumbnail('post-thumbnails',['class'=>'rounded img-fluid mx-auto d-block'])  ?>	            
            <div class="p-2">
              <h3 class="p-1 text-center"><?php the_title() ?></h3>
              <p class="p-1 text-center fz-11px"> 
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
                <?php the_time( 'd-m-Y' ) ?>                               
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