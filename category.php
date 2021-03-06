<?php get_header(); ?>

  <div style="padding-bottom: 2%; padding-top: 2%;">
  
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <h2>Blog</h2>
      </div>
    </div>

    <?php

      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      
      // the query
      $the_query = new WP_Query( array(
          'cat'   => 1,
          'paged' => $paged,
          'posts_per_page'=>4
      ));
      
      if ( $the_query->have_posts() ) :
          // the loop
          while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>
              <div class="a-none">
                <a href="<?php the_permalink(); ?>">
                  <div class="row justify-content-center mt-2 bg-white shadow">
                    <div class="col-md-4 p-2">
                    <?php the_post_thumbnail('post-thumbnails',['class'=>'img-fluid d-block mx-auto mt-4'])  ?>	          
                    </div>
                    <div class="col-md-7">
                      <div class="p-4">
                        <h2 class="fs-3"><?php the_title() ?></h2>
                        <p>
                          <?php the_excerpt(); ?>                 
                        </p>                        
        
                      </div>
                    </div>
                  </div>    
                </a>
              </div>
          <?php endwhile; ?>
      
          <div class="row mt-4">
            <div class="col-md-6">
              <?php previous_posts_link( __( 'Atras', 'textdomain' ) ); ?>
            </div>
            <div class="col-md-6 text-end">
              <?php next_posts_link( __( 'Siguiente', 'textdomain' ), $the_query->max_num_pages );   ?>
            </div>
          </div>        
          <?php wp_reset_postdata(); 
      
      else:
          ?>
          
          <?php
      endif;
      ?>
  </div>
</div>



<?php get_footer(); ?>