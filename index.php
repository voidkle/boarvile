<?php 
get_header(); 
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();

                the_content();
            endwhile;
        else :

            echo "<p>There's no content.</p>";
        endif;
        ?>
    </main>
</div>

<?php 
get_footer(); 
?>