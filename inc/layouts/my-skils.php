<?php 
  $args = array( 'post_type' => 'work', 'posts_per_page' => 10 );
  $the_query = new WP_Query( $args ); 
?>
<section id="sobre" class="my-skils">
    <div class="row">
      <div class="col-5 my-skils-name">
        <h3>SEU NOME</h3>
        <h2 class="title">Olá, é um prazer tê-lo por aqui.</h2>
        <hr>
        <p class="description">ut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
      </div>
      
      <div class="col-7">
        <ul>
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <li>
            <img src="<?php the_post_thumbnail_url(); ?>" height="50">
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
          </li>
          <?php endwhile;
          wp_reset_postdata(); ?>
          <?php endif; ?>
        </ul>
      </div>
      
    </div>
  </section>