<?php
/**
 * The template for displaying all post with "blog" category
 *
 * @link 
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<!-- ARTICLE LOOP => OVERLAY -->
<section id="articles" class="section w-100 p-5">
    <div class="container">
        <h1 class="ml-3 font-weight-bold font-hard-grey">Tous les articles</h1>

        <div class="d-flex align-items-stretch flex-wrap">
            <?php
                $args = array(
                    'orderby' => 'post_date',
                    'category' => 2
                );
                $posts_array = get_posts($args);
                foreach($posts_array as $post){
                    $post_Id = $post->ID;
                    ?>
                    <div class="col-4 mb-5" style="height:500px;">
                        <div class="card border-0 shadow h-100">

                            <img class="card-img h-100" src="<?php the_post_thumbnail_url();?>" title="" alt="">

                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column justify-content-center">
                                    <h2 class="text-white font-weight-bold"><?php echo $post->post_title; ?></h2>
                                    <div class="">
                                        <span class="text-white">Auteur: <?php echo $post->post_author; ?></span>
                                        <br />
                                        <span class="text-white">Publié: <?php echo $post->post_date; ?></span>
                                        <br />
                                        <a href="<?php echo get_permalink($post_Id) ?>" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>  
        </div>
    </div>
</section>

<?php
//get_sidebar();
get_footer();