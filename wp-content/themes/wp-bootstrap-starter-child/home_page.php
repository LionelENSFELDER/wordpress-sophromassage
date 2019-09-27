<?php
/*
Template Name: Home_page
*/

get_header();
?>


<!-- QUI SUIS-JE ? -->
<section id="me" class="w-100 py-5">

    <div class="container py-5">

        <div class="card-group">
            <div class="card m-0 border-0">
                <div class="card-body">
                    <h1 class="font-weight-bold font-hard-grey">Qui suis-je ?</h1>
                    <hr class="separator">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur a velit id magna pulvinar mollis.
                        Phasellus nec turpis id eros hendrerit pulvinar.
                        Nullam pretium enim eget facilisis scelerisque.
                        Aliquam vitae mollis est, quis vulputate leo.
                        Phasellus id egestas mi. Sed faucibus sapien vel luctus cursus.
                        Ut varius sed enim placerat hendrerit. Nunc commodo,
                        velit pharetra tristique fringilla, libero nisl aliquam sem,
                        malesuada placerat ligula urna eget dolor. Vivamus vel elit faucibus, viverra turpis sed,
                    </p>
                </div>
            </div>

            <div class="card m-0 col-md-12 border-0 rounded">
                <img src="http://localhost:8080/sophromassage/wp-content/uploads/2019/08/christopher-campbell-rDEOVtE7vOs-unsplash.jpg" class="rounded" alt="...">
            </div>

        </div>

    </div>

</section>




<!-- Définitions -->
<section id="definitions" class="section w-100 p-5">
    <div class="container py-5">
        <h1 class="font-weight-bold font-hard-grey">Titre</h1>
        <hr class="separator mb-4">
        <div class="row card-deck">
            <!-- COL -->
            <div class="col-sm">
                <!-- CARD -->
                <div class="p-4">
                    <div class="">
                        <div class="mb-3">
                            <i class="fas fa-feather-alt mr-2 ico-l mb-3"></i>
                            <h4 class="font-weight-bold font-hard-grey">Sophrologie</h4>
                        </div>
                        <p class="card-text">Comprendre et gérer vos émotions, apprivoiser le stress et l'anxiété.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-link-arrow font-hard-grey px-0" data-toggle="modal" data-target="#define_sophrologie">En savoir plus</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="define_sophrologie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <!-- <div class="modal-header border-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div> -->
                                <div class="modal-body px-5 text-center">
                                    <div class="mb-2 w-100">
                                        <i class="fas fa-wind ico-m font-light-green"></i>
                                        <h1 class="font-weight-bold font-light-green">Title</h1>
                                    </div>
                                    <img src="http://localhost:8080/sophromassage/wp-content/uploads/2019/09/thomas-lambert-EhLH-WN7F7I-unsplash.jpg" class="img-fluid" alt="Responsive image">
                                    <span class="font-weight-bold">Lorem Ipsum balek tentra sutra.</span>
                                    <p>
                                    Fondée sur une méthodologie précise, la sophrologie est une technique exclusivement verbale basée
                                    sur la réalisation de mouvements spécifiques de détente musculaire,
                                    d’exercices de respiration et de techniques de visualisation positive.
                                    </p>
                                </div>
                                <div class="modal-footer border-0">
                                <button type="button" class="btn btn-link-arrow font-hard-grey px-0" data-dismiss="modal">Fermer</button>
                                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD END-->
            </div>
            <!-- COL END -->
            <div class="col-sm">
            <!-- CARD -->
            <div class="p-4 card-deck">
                    <div class="">
                        <div class="mb-3">
                            <i class="fas fa-spa mr-2 ico-l mb-3"></i>
                            <h4 class="font-weight-bold font-hard-grey">Massages bien-être et sportif</h4>
                        </div>
                        <p class="card-text">Découvrez mes méthodes de massage pour vous faire plaisir tout en douceur.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-link-arrow font-hard-grey px-0" data-toggle="modal" data-target="#define_massage">En savoir plus</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="define_massage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                <!-- <div class="modal-header border-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div> -->
                                <div class="modal-body px-5 text-center">
                                    <div class="mb-2 w-100">
                                        <i class="fas fa-spa ico-m font-light-green"></i>
                                        <h1 class="font-weight-bold font-light-green">Title</h1>
                                    </div>
                                    <img src="http://localhost:8080/sophromassage/wp-content/uploads/2019/09/thomas-lambert-EhLH-WN7F7I-unsplash.jpg" class="img-fluid" alt="Responsive image">
                                    <span class="font-weight-bold">Lorem Ipsum balek tentra sutra.</span>
                                    <p>
                                    Fondée sur une méthodologie précise, la sophrologie est une technique exclusivement verbale basée
                                    sur la réalisation de mouvements spécifiques de détente musculaire,
                                    d’exercices de respiration et de techniques de visualisation positive.
                                    </p>
                                </div>
                                <div class="modal-footer border-0">
                                <button type="button" class="btn btn-link-arrow font-hard-grey px-0" data-dismiss="modal">Fermer</button>
                                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD END-->
            </div>
            <div class="col-sm">
            <!-- CARD -->
            <div class="p-4">
                    <div class="">
                        <div class="mb-3">
                            <i class="fas fa-book-open mr-2 ico-l mb-3"></i>
                            <h4 class="font-weight-bold font-hard-grey">Ateliers & Formations</h4>
                        </div>
                        <p class="card-text">Avant l'effort, après l'effort ou conditionnement physique.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-link-arrow font-hard-grey px-0" data-toggle="modal" data-target="#define_sportif">En savoir plus</button>

                        <!-- Modal -->
                        <div class="modal fade" id="define_sportif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <!-- <div class="modal-header border-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div> -->
                                <div class="modal-body px-5 text-center">
                                    <div class="mb-2 w-100">
                                        <i class="fas fa-book-open ico-m font-light-green"></i>
                                        <h1 class="font-weight-bold font-light-green">Title</h1>
                                    </div>
                                    <img src="http://localhost:8080/sophromassage/wp-content/uploads/2019/09/thomas-lambert-EhLH-WN7F7I-unsplash.jpg" class="img-fluid" alt="Responsive image">
                                    <span class="font-weight-bold">Lorem Ipsum balek tentra sutra.</span>
                                    <p>
                                    Fondée sur une méthodologie précise, la sophrologie est une technique exclusivement verbale basée
                                    sur la réalisation de mouvements spécifiques de détente musculaire,
                                    d’exercices de respiration et de techniques de visualisation positive.
                                    </p>
                                </div>
                                <div class="modal-footer border-0">
                                <button type="button" class="btn btn-link-arrow font-hard-grey px-0" data-dismiss="modal">Fermer</button>
                                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button> -->
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD END-->
            </div>
        </div>
        <!-- END CARD DECK-->
    </div>
</section>





<!-- MON APPROCHE -->
<section id="mon-approche" class="w-100 p-5">

    <div class="container py-5">

        <div class="card-group">
            <div class="card m-0 col-md-12 border-0 rounded">
                <img src="http://localhost:8080/sophromassage/wp-content/uploads/2019/07/max-van-den-oetelaar-buymYm3RQ3U-unsplash.jpg" class="rounded" alt="...">
            </div>

            <div class="card m-0 border-0">
                <div class="card-body">
                    <h1 class="font-weight-bold text-secondary">Mon approche</h1>
                    <hr class="separator">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur a velit id magna pulvinar mollis.
                        Phasellus nec turpis id eros hendrerit pulvinar.
                        Nullam pretium enim eget facilisis scelerisque.
                        Aliquam vitae mollis est, quis vulputate leo.
                        Phasellus id egestas mi. Sed faucibus sapien vel luctus cursus.
                        Ut varius sed enim placerat hendrerit. Nunc commodo,
                        velit pharetra tristique fringilla, libero nisl aliquam sem,
                        malesuada placerat ligula urna eget dolor. Vivamus vel elit faucibus, viverra turpis sed,
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>



<!-- TARIFS -->
<section id="tarifs" class="section w-100 p-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-5">
                <div class="card border-0">
                    <div class="card-body">
                        <h1 class="font-weight-bold text-secondary">Donec quis elit varius</h1>
                        <hr class="separator">
                        <p class="card-text">consectetur adipiscing elit. Etiam sit amet ligula scelerisque,
                            dignissim metus eu, scelerisque ante. Donec quis elit varius, pulvinar erat eu,
                            rhoncus ligula. Aliquam erat volutpat. Integer eget nisi risus
                        </p>
                        <hr>
                        <p class="">
                            <div class="mb-3">
                                <i class="fas fa-leaf mr-2 ico-s font-light-beige"></i>
                                <span class="font-weight-bold">Donec nec sapien non ncidunt.</span>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-heartbeat mr-2 ico-s font-light-beige"></i>
                                <span class="font-weight-bold">Donec nec saphatincidunt.</span>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-shoe-prints mr-2 ico-s font-light-beige"></i>
                                <span class="font-weight-bold">Curabitur quis rerit vel et magna.</span>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <!-- pricing card template 1-->
                <div class="row card-deck">
                    <div class="card bg-light-green py-3 text-white text-center rounded border-0 shadow">
                        <div class="card-header bg-transparent text-white border-0">
                            <h3 class="card-title font-weight-bold text-white">Sophrologie</h3>
                            <span class="">A partir de </span>
                            <span class="card-title d-block font-white font-weight-bold important-number font-effect-3d-float">12€</span>
                           <!-- <span class="d-block py-3"><i class="fas fa-wind mr-2 ico-l font-white"></i></span> -->
                        </div>
                        <div class="card-body py-0">
                            <p class="card-text my-5">
                                <span class="mb-3 d-block">Séance individuelle</span>
                                <span class="mb-3 d-block">Séance collective</span>
                                <span class="d-block">Professionnel, milieux sportif et associatif</span>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <a href="#" class="btn btn-main-blanco">Tous les tarifs</a>
                        </div>
                    </div>

                    <!-- pricing card template 2-->
                    <div class="card py-3 text-center rounded border-0 shadow bg-salmon">
                        <div class="card-header bg-transparent border-0 font-white">
                            <h3 class="card-title font-weight-bold font-white">Massages</h3>
                            <span class="">A partir de </span>
                            <span class="card-title d-block font-hard-green font-weight-bold important-number font-effect-3d-float">15€</span>
                        </div>
                        <div class="card-body py-0">
                            <p class="card-text my-5">
                                <span class="mb-3 d-block font-white">Amma Assis</span>
                                <span class="mb-3 d-block font-white">Relaxation coréenne</span>
                                <span class="mb-3 d-block font-white">Massage californien</span>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <a href="#" class="btn btn-main-full">Tous les tarifs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- BANNER ICONS-->
<section id="banner-icons" class="section w-100 p-5 bg-light-green">
    <div class="container py-5">
        <div class="my-5 text-white">
            <div class="row card-group">
                <!-- COL -->
                <div class="col-sm">
                    <!-- CARD -->
                    <div class="text-center">
                        <div class="mx-auto">
                            <div class="mb-3">
                            <i class="fas fa-sliders-h fa-3x font-white"></i>
                            </div>
                            <span class="card-text">Prestations personnalisées</span>
                        </div>
                    </div>
                    <!-- CARD END-->
                </div>
                <!-- COL END -->
                <!-- COL -->
                <div class="col-sm">
                    <!-- CARD -->
                    <div class="text-center">
                        <div class="mx-auto">
                            <div class="mb-3">
                            <i class="fas fa-compass fa-3x font-white"></i>
                            </div>
                            <span class="card-text">Ecoute et orientation</span>
                        </div>
                    </div>
                    <!-- CARD END-->
                </div>
                <!-- COL END -->
                <!-- COL -->
                <div class="col-sm">
                    <!-- CARD -->
                    <div class="text-center">
                        <div class="mx-auto">
                            <div class="mb-3">
                            <i class="fas fa-road fa-3x font-white"></i>
                            </div>
                            <span class="card-text">Déplacement</span>
                        </div>
                    </div>
                    <!-- CARD END-->
                </div>
                <!-- COL END -->
                <!-- COL -->
                <div class="col-sm">
                    <!-- CARD -->
                    <div class="text-center">
                        <div class="mx-auto">
                            <div class="mb-3">
                            <i class="fas fa-handshake fa-3x font-white"></i>
                            </div>
                            <span class="card-text">Evénementiel</span>
                        </div>
                    </div>
                    <!-- CARD END-->
                </div>
                <!-- COL END -->
            </div>
        </div>
    </div>
</section>
<!-- END full-width section template -->






<!-- ARTICLE LOOP => OVERLAY -->
<section id="articles" class="section w-100 p-5">
    <div class="container py-5">
        <h1 class="font-weight-bold font-hard-grey">Les derniers articles</h1>
        <hr class="separator">

        <div class="d-flex align-items-stretch flex-wrap">
            <?php
                $args = array(
                    'orderby' => 'post_date',
                    'category' => 2,
                    'posts_per_page' => 3
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


            <div class="col-12 text-center">
                <a type="button" class="btn btn-main-full" href="./category/blog/">Plus d'articles</a>
            </div>

        </div>

    </div>
</section>


<!-- AVIS CLIENTS-->
<section id="avis" class="section w-100 p-5 bg-testimonial">
    <div class="container py-5">

        <!-- <h1 class="ml-3 font-weight-bold font-hard-grey">Avis clients dynamique</h1> -->

        <div id="testimonial" class="carousel slide" data-ride="carousel" data-keyboard="true">
            <div class="carousel-inner">
                <!-- CARD -->
                <?php
                    $params = array(
                        'orderby' => 'post_date',
                        'category' => 3,
                        'numberposts' => 99
                    );
                    $testimonial_array = get_posts($params);
                    foreach($testimonial_array as $single){
                        ?>
                        <div class="carousel-item font-white" data-interval="10000" keyboard="true">
                            <div class="card w-100 border-0 polygon-diagonal bg-transparent">
                                <div class="card-body">
                                    <div class="text-center w-100 mb-3">
                                        <i class="fas fa-quote-left ico-l"></i>
                                    </div>

                                    <blockquote class="blockquote text-center">
                                        <p class="mb-0">
                                            <?php echo $single->post_content;?>
                                        </p>
                                        <footer class="blockquote-footer font-weight-bold"><cite title="Source Title"><?php echo $single->post_title; ?></cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                ?>
            </div>
            <!-- <a class="carousel-control-prev" href="#testimonial" role="button" data-slide="prev">
                <span><i class="fas fa-arrow-alt-circle-left ico-l font-salmon"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonial" role="button" data-slide="next">
                <span><i class="fas fa-arrow-alt-circle-right ico-l font-salmon"></i></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </div>
</section>



<!-- FORMULAIRE CONTACT -->
<section id="contact" class="section w-100 p-5">
    <!-- CONTAINER -->
    <div class="container py-5">
            <div class="card-deck mt-5">
                <div class="card bg-light-green">
                    <div class="card-body font-white">
                        <h3 class="font-weight-bold mb-4 font-white">Contact</h3>
                        <div class="mb-4">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Ut efficitur pharetra sapien, at consequat massa lacinia nec.
                                Nunc molestie egestas vestibulum.
                            </p>
                        </div>
                        <div class="mb-4">
                            <span class="d-block">Eléonore Hottou</span>
                            <span class="d-block">06 46 81 94 31</span>
                            <span class="d-block">hello@sophromassage.fr</span>
                            <span class="d-block">Les Marjolaines bât. D,<br>296 av. louis Imbert,<br> 83160 La Valette-du-Var</span>
                        </div>
                        <div class="mb-3">
                            <a href="#" class="btn btn-main-blanco-outlined text-white text-white">Itinéraire</a>
                        </div>
                        <!-- icons -->
                        <div class="mb-3">
                            <a href="" title="" alt=""><i class="fab fa-facebook-square mr-2 ico-m font-white"></i></a>
                            <a href="" title="" alt=""><i class="fab fa-medium mr-2 ico-m font-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        <?php echo do_shortcode( '[contact-form-7 id="208" title="Quick contact form"]' ); ?>
                    </div>
                </div>
            </div>
    </div>
</section>


<?php get_footer(); ?>