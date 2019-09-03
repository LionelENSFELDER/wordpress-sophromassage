<?php
/*
Template Name: Template-Home
*/

get_header();
?>


<!-- Qui suis-je ? -->
<section class="w-100 p-5">

    <div class="container">

        <div class="card-group">
            <div class="card m-0 border-0">
                <div class="card-body">
                    <h1 class="font-weight-bold font-hard-grey">Qui suis-je ?</h1>
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
<section class="section w-100 p-5">
    <div class="container">

        <div class="row card-deck">
            <!-- COL -->
            <div class="col-sm">
                <!-- CARD -->
                <div class="p-4 border-right">
                    <div class="">
                        <div class="mb-3">
                            <i class="fas fa-heart mr-2 ico-m font-pink"></i>
                            <span class="font-weight-bold font-hard-grey">SOPHROLOGIE</span>
                        </div>
                        <p class="card-text">Comprendre et gérer vos émotions, apprivoiser le stress et l'anxiété.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-main-light px-0" data-toggle="modal" data-target="#define_sophrologie">En savoir plus...</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="define_sophrologie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header border-0">
                                <h2 class="modal-title" id="exampleModalLabel">Sophrologie</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>Une approche douce et naturelle</h3>
                                <p>
                                Fondée sur une méthodologie précise, la sophrologie est une technique exclusivement verbale basée 
                                sur la réalisation de mouvements spécifiques de détente musculaire, 
                                d’exercices de respiration et de techniques de visualisation positive.
                                </p>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
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
            <div class="p-4 border-right">
                    <div class="test">
                        <div class="mb-3">
                            <i class="fas fa-spa mr-2 ico-m font-pink"></i>
                            <span class="font-weight-bold text-secondary">MASSAGES BIEN-ETRE</span>
                        </div>
                        <p class="card-text">Découvrez mes méthodes de massage pour vous faire plaisir tout en douceur.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-main-light px-0" data-toggle="modal" data-target="#define_massage">En savoir plus...</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="define_massage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header border-0">
                                <h2 class="modal-title" id="exampleModalLabel">Massage bien-être</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>Types de massages que je pratique</h3>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Fusce consectetur quis dolor eu convallis. 
                                Nam lobortis ante molestie neque bibendum sagittis. 
                                Curabitur ultrices iaculis purus sit amet sodales. 
                                Praesent libero turpis, condimentum placerat venenatis id, c
                                ondimentum ac lorem. Ut est est, volutpat sed tellus nec, scelerisque lobortis ligula.
                                </p>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
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
                            <i class="fas fa-running mr-2 ico-m font-pink"></i>
                            <span class="font-weight-bold text-secondary">MASSAGES BIEN-ETRE SPORTIFS</span>
                        </div>
                        <p class="card-text">Avant l'effort, après l'effort ou conditionnement physique.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-main-light px-0" data-toggle="modal" data-target="#define_sportif">En savoir plus...</button>

                        <!-- Modal -->
                        <div class="modal fade" id="define_sportif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h2 class="modal-title" id="exampleModalLabel">Massage bien-être sportif</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h3>Massages adaptés au sport</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Fusce consectetur quis dolor eu convallis. 
                                        Nam lobortis ante molestie neque bibendum sagittis. 
                                        Curabitur ultrices iaculis purus sit amet sodales. 
                                        Praesent libero turpis, condimentum placerat venenatis id, 
                                        condimentum ac lorem. Ut est est, volutpat sed tellus nec, scelerisque lobortis ligula.
                                    </p>
                                </div>
                                <div class="modal-footer border-0">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
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



<!-- Mon approche -->
<section class="w-100 p-5">

    <div class="container">

        <div class="card-group">
            <div class="card m-0 col-md-12 border-0 rounded">
                <img src="http://localhost:8080/sophromassage/wp-content/uploads/2019/07/max-van-den-oetelaar-buymYm3RQ3U-unsplash.jpg" class="rounded" alt="...">
            </div>

            <div class="card m-0 border-0">
                <div class="card-body">
                    <h1 class="font-weight-bold text-secondary">Mon approche</h1>
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



<!-- bandeau chiffres -->
<section class="section w-100 p-5 parallax-2">
    <div class="container">
        <div class="my-5 text-white">
            <div class="row card-group">
                <!-- COL -->
                <div class="col-sm">
                    <!-- CARD -->
                    <div class="text-center">
                        <div class="mx-auto">
                            <div class="mb-3">
                            <i class="fas fa-bolt fa-3x"></i>
                            </div>
                            <span class="card-text">With supporting text below as a natural lead-in to additional content.</span>
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
                            <i class="fas fa-hand-holding-heart fa-3x"></i>
                            </div>
                            <span class="card-text">With supporting text below as a natural lead-in to additional content.</span>
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
                            <i class="fas fa-heart fa-3x"></i>
                            </div>
                            <span class="card-text">With supporting text below as a natural lead-in to additional content.</span>
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
                            <i class="fas fa-toilet-paper fa-3x"></i>
                            </div>
                            <span class="card-text">With supporting text below as a natural lead-in to additional content.</span>
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




<!-- Séance sur rdv -->
<section class="w-100 p-5">

    <div class="container">

        <div class="card-group shadow p-5 rounded">

            <div class="card m-0 border-0">
                <div class="card-body">
                    <h1 class="font-weight-bold text-secondary">Séance sur rendez-vous</h1>
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

            <div class="card m-0 col-md-12 border-0 bg-transparent d-flex justify-content-center align-items-center">
                <img src="http://localhost:8080/sophromassage/wp-content/uploads/2019/07/max-van-den-oetelaar-buymYm3RQ3U-unsplash.jpg" class="rounded" alt="...">
            </div>

        </div>

    </div>

</section>




<!-- Gros titre -->
<section class="section w-100 p-5 text-white parallax-2">
<!-- CONTAINER -->
    <div class="container p-5">
        <div class="row justify-content-center p-5">
            <!-- COL -->
            <div class="text-center">
                <h1 class="text-white font-weight-bold">ghfdtyhfghfghfghgfh</h1>
                <p class="text-center">
                    consectetur adipiscing elit. Etiam sit amet ligula scelerisque, 
                    dignissim metus eu, scelerisque ante. Donec quis elit varius, pulvinar erat eu, 
                    rhoncus ligula. Aliquam erat volutpat. Integer eget nisi risus
                </p>
                <button type="button" class="btn btn-lg btn-main-blanco">Main</button>
            </div>
            <!-- END COL -->
        </div>
    </div>
</section>




<!-- Tarifs -->
<section class="section w-100 p-5">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="card border-0">
                    <div class="card-body">
                        <h1 class="font-weight-bold text-secondary">Donec quis elit varius</h1>
                        <p class="card-text">consectetur adipiscing elit. Etiam sit amet ligula scelerisque, 
                            dignissim metus eu, scelerisque ante. Donec quis elit varius, pulvinar erat eu, 
                            rhoncus ligula. Aliquam erat volutpat. Integer eget nisi risus
                        </p>
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
                    <div class="card bg-4 text-white text-center rounded border-0 shadow">
                        <div class="card-header text-white  border-0">
                            <h3 class="card-title text-white">Sophrologie</h3>
                            <span class="">A partir de </span>
                            <h1 class="text-white card-title font-weight-bold">12€</h1>
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
                    <div class="card text-center rounded shadow">
                        <div class="card-header bg-transparent  border-0">
                            <h3 class="card-title">Massages</h3>
                            <span class="">A partir de </span>
                            <h1 class="card-title font-weight-bold">15€</h1>
                        </div>
                        <div class="card-body py-0">
                            <p class="card-text my-5">
                                <span class="mb-3 d-block">Amma Assis</span>
                                <span class="mb-3 d-block">Relaxation coréenne</span>
                                <span class="mb-3 d-block">Massage californien</span>
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

<!-- Avis clients -->
<!-- <section class="section w-100 p-5">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section> -->

<!-- Articles -->
<section class="section w-100 p-5">
    <div class="container">
        <h1 class="ml-3 font-weight-bold font-hard-grey">Les derniers articles</h1>

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
                    <div class="col-4 mb-5" style="height:650px;">
                        <div class="card border-0 shadow h-100">
                            <div class="card-header h-50 p-0" style="background-image: url('<?php the_post_thumbnail_url();?>'); background-size:cover;">
                                
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-hard-grey"><?php echo $post->post_title; ?></h5>
                                    <p class="card-text">
                                        <?php echo wp_trim_excerpt(); ?>
                                    </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>

        <div class="col-12 text-center">
            <button type="button" class="btn btn-main-full">Plus d'articles</button>
        </div>
    </div>
</section>



<!-- Se faire rappeler -->
<section class="section w-100 p-5 text-white bg-4">
<!-- CONTAINER -->
    <div class="container">
        <div class="row">
            <!-- COL -->
            <div class="col-6">
            <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            </blockquote>
            </div>
            <!-- END COL -->
            <!-- COL -->
            <div class="col-6">
            <form class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <input class="form-control" type="text" placeholder="Ton adresse mail">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Envoyer !</button>
            </form>
            </div>
            <!-- END COL -->
        </div>
    </div>
</section>
<!-- END SECTION -->

<!-- full-width section template -->
<section class="section w-100 p-5">
    <!-- CONTAINER -->
    <div class="container">
        <div class="card mb-3 border-0 rounded shadow">
            <div class="row no-gutters">
                <!-- col 8 -->
                <div class="col-md-8">
                    <div class="card-body">
                    <h3 class="font-weight-bold mb-4">Formulaire</h3>
                        <form>
                            <div class="row mb-4">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Prénom">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Nom">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <input type="tel" class="form-control" placeholder="Téléphone">
                                </div>
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Adresse mail">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Status</option>
                                    <option value="1">Particulier</option>
                                    <option value="2">Professionnel</option>
                                </select>
                                </div>
                                <div class="col">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Object</option>
                                    <option value="1">Demande d'informations</option>
                                    <option value="2">Massage</option>
                                    <option value="3">Sophrologie</option>
                                    <option value="3">Offrir un cadeau</option>
                                    <option value="3">Autre</option>
                                </select>
                                </div>
                            </div>
                            <div class="input-group mb-4">
                                <textarea type="text" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="input-group mb-4 alert alert-secondary" role="alert">
                                <span class="">reCAPTCHA</span>
                            </div>
                            <button type="button" class="btn btn-primary">Envoyer !</button>
                        </form>
                    </div>
                </div>
                <!-- col 4 -->
                <div class="col-md-4 bg-4 text-white p-4 rounded-right">
                    <h3 class="text-white font-weight-bold mb-4">Contact</h3>

                    <!-- <div class="card mb-3 text-dark">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <i class="fas fa-hand-holding-heart mr-2 ico-l text-dark"></i>
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Eléonore Hottou</h5>
                            </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="mb-4">
                        <span class=""><i class="fas fa-hand-holding-heart mr-2 ico-s text-white"></i>Eléonore Hottou</span>
                    </div>
                    <div class="mb-4">
                        <span class=""><i class="fas fa-mobile-alt mr-2 ico-s text-white"></i>06 46 81 94 31</span>
                    </div>
                    <div class="mb-4">
                        <span class=""><i class="fas fa-paper-plane mr-2 ico-s text-white"></i>hello@sophromassage.fr</span>
                    </div>
                    <div class="mb-5">
                        <span class=""><i class="fas fa-map-signs mr-2 ico-s text-white"></i>Les Marjolaines bât. D,<br>296 av. louis Imbert,<br> 83160 La Valette-du-Var</span>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="mb-5">
                        <button class="btn btn-link font-weight-bold p-0" type="button" data-toggle="modal" data-target="#heures-ouverture">Heures d'ouverture</button>
                    </div>
                    <!-- icons -->
                    <div class="mb-3">
                        <a href="" title="" alt=""><i class="fab fa-facebook-square mr-2 ico-s font-light-grey"></i></a>
                        <a href="" title="" alt=""><i class="fab fa-medium mr-2 ico-s font-light-grey"></i></a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="heures-ouverture" tabindex="-1" role="dialog" aria-labelledby="heures-ouverture" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="heures-ouverture">Heures d'ouverture</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-dark">
                            <p>
                                Lundi: 8h30 - 12h30 puis 13h30 - 20h00.
                                <br>
                                Mardi: 8h30 - 12h30 puis 13h30 - 20h00.
                                <br>
                                Mercredi: 8h30 - 12h30 puis 13h30 - 20h00.
                                <br>
                                Jeudi: 8h30 - 12h30 puis 13h30 - 20h00.
                                <br>
                                Vendredi: 8h30 - 12h30 puis 13h30 - 20h00.
                                <br>
                                Samedi: 10h00 - 20h00.
                                <br>
                                Dimanche: Fermé.
                            </p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Modal -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION -->

<?php 
get_footer();
?>