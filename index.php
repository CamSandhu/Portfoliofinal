<?php get_header(); ?>
<!-- <?php while ( have_posts() ) : the_post(); ?>
  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php if ( !is_page() ):?>
      <section class="entry-meta">
      <p>Posted on <?php the_date();?> by <?php the_author();?></p>
      </section>
    <?php endif; ?>
    <section class="entry-content">
      <?php the_content(); ?>
    </section>
    <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
      <span class="category-links">
        Posted under: <?php echo get_the_category_list( ', ' ); ?>
      </span>
    <?php endif; ?></section>
  </article>
<?php endwhile; ?> -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<main>
      <section class="container2">
        <section><a href="https://karam007.000webhostapp.com" target="/" class="pc"><img src=<?php echo get_theme_file_uri("/resources/php.png")?> /></a></section>
        >
        <section id="description">
          <span>My Pet</span>
          <span>Website about animal breeds</span>
          <a href="#">PHP</a>
          <a href="#">Bootstrap</a>
          <a href="#">MySql</a>
        </section>
      </section>
     

      <section class="container2">
      <section><a href="http://karam007.dk/fairytalewedding/" target="/" class="pc"><img src=<?php echo get_theme_file_uri("/resources/marriage.png")?> /></a></section>
        
        <section id="description">
          <span>Fairytale  </span>
          <span>Website on selling marriage package</span>
          <a href="#">HTML</a>
          <a href="#">CSS</a>
          <a href="#">Jquery</a>
        </section>
      </section>

      <section class="container2">
      <section><a href="http://karam007.dk/Music/" target="/" class="pc"><img src=<?php echo get_theme_file_uri("/resources/dottir.png")?> /></a></section>
        
        <section id="description">
          <span>Dottir</span>
          <span>Website on Danish music band</span>
          <a href="#">HTML</a>
          <a href="#">CSS</a>
          <a href="#">Jquery</a>
        </section>
      </section>
    
    <hr>

    <!-- --------------contact------------- -->
    
    <section id="contact-form">
    <h3>Get in Touch </h3>

      <form>
      <section id="first-row">
         <section >
           <label>Name</label><br>
            <input type="text" size="30"/>
         </section>

        <section >
           <label>Email</label><br>
           <input type="text" size="30"/>
        </section>
        
      </section >
      
      <section id="second-row">
         <section>
         <label id="message">Message</label><br>
         </section>

         <section>
         <textarea rows="7" cols="83">
         
         </textarea>
      </section>
      <p style="text-align:center">
       <input id="send" type="submit" value="Send"/>
       </p>
      </form>
    </section> 

    <section id="footer">
       <span><a >Indeed</a></span>
       <span><a>Email</a></span>
       <span><a href="https://github.com/CamSandhu" target="/">Github</a></span>
    </section> 
</main>