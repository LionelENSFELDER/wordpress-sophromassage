<?php
/*
Template Name: Home_page
*/

get_header();
?>


<!-- QUI SUIS-JE ? -->
<section id="me" class="w-100 py-5">

    <div class="container">

        <div class="row">
        
            <div class="card m-0 col-12 col-sm-12 col-md-12 col-lg-6 border-0">
                <div class="">
                    <h1 class="font-weight-bold font-hard-grey">Qui suis-je ?</h1>
                    <hr class="separator">
                    <p class="card-text">
                        Après avoir travaillé plusieurs années dans le secteur Médico-technique, 
                        j'ai décidé d’accroître mon expérience par des formations complètes et enrichissantes. 
                        Je suis aujourd'hui praticienne certifiée en massages bien-être et sportifs de l'Institut Ling Dao, agrée par la FFPMM et Sophrologue formée auprès de l'IFS à Nice.
                        <br>
                        Je souhaite participer à l’amélioration et au développement des ressources et du potentiel de chacun. 
                        Accueillir et maintenir une meilleure qualité de vie au quotidien font aussi parti de mes motivations.
                        <br>
                        <span>Je suis Eléonore, votre thérapeute.</span>
                    </p>
                </div>
            </div>

            <div class="card m-0 col-12 col-sm-12 col-md-12 col-lg-6 border-0 rounded">
                <img src="http://localhost:8080/sophromassage/wp-content/uploads/2019/08/christopher-campbell-rDEOVtE7vOs-unsplash.jpg" class="img-fluid rounded" alt="...">
            </div>

        </div>

    </div>

</section>

<!-- Prestations -->
<section id="prestations" class="section w-100 py-5">
    <div class="container">
        <h1 class="font-weight-bold font-hard-grey">Titre</h1>
        <hr class="separator mb-4">
        <div class="row card-deck">
            <!-- COL -->
            <div class="col-sm">
                <!-- CARD -->
                <div class="">
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
            <div class="">
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
                                        <h1 class="font-weight-bold font-light-green">Massages bien-être et sportif</h1>
                                    </div>
                                    <img src="http://localhost:8080/sophromassage/wp-content/uploads/2019/09/thomas-lambert-EhLH-WN7F7I-unsplash.jpg" class="img-fluid" alt="Responsive image">
                                    <span class="font-weight-bold">Lorem Ipsum balek tentra sutra.</span>
                                    <p>
                                        LE MASSAGE BIEN-ÊTRE ET SPORTIF : méthode manuelle basée sur 
                                        l'exécution de différents mouvements agissant sur le corps 
                                        (peau, muscles, tendons, ligaments...) et sur l'esprit (apaise, réconforte, tonifie...).
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
            <div class="">
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
<section id="mon-approche" class="w-100 py-5">
    <div class="container">
        <div class="row">
            <div class="card m-0 col-12 col-sm-12 col-md-12 col-lg-6 border-0 rounded">
                <img src="http://localhost:8080/sophromassage/wp-content/uploads/2019/07/max-van-den-oetelaar-buymYm3RQ3U-unsplash.jpg" class="rounded" alt="...">
            </div>
            <div class="card m-0 col-12 col-sm-12 col-md-12 col-lg-6 border-0">
                <div class="">
                    <h1 class="font-weight-bold text-secondary">Mon approche</h1>
                    <hr class="separator">
                    <p class="card-text">
                        Je propose à chacun d'entre vous des suivis complets et entièrement adaptés en fonction de vos besoins et de vos attentes :
                        <br>
                        Je vous accompagne en tant que Thérapeute en sophrologie pour votre préparation mentale à un événement et/ou pour votre développement personnel et ainsi améliorer votre quotidien.
                        Je vous accompagne en tant que Praticienne en massages bien-être et sportifs pour votre préparation physique en vue d'un effort et/ou pour votre bien-être et votre entretien corporel tout au long de l'année
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- TARIFS -->
<section id="tarifs" class="section w-100 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="card border-0">
                    <div class="">
                        <h1 class="font-weight-bold text-secondary">Donec quis elit varius</h1>
                        <hr class="separator">
                        <p class="card-text">
                            Je vous propose des suivis complets et entièrement adaptés en fonction 
                            de vos besoins et je vous accompagne, à votre rythme, 
                            jusqu'à l'atteinte de votre ou vos objectif(s).
                        </p>
                        <hr>
                        <p class="">
                            <div class="mb-3">
                                <i class="fas fa-users mr-2 ico-s font-light-beige"></i>
                                <span class="font-weight-bold">Sans distinction d'âge.</span>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-venus-mars mr-2 ico-s font-light-beige"></i>
                                <span class="font-weight-bold">Sans distinction de sexe.</span>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-heartbeat mr-2 ico-s font-light-beige"></i>
                                <span class="font-weight-bold">Sans distinction de condition physique.</span>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="row">
                    <div class="card-deck col-12">
                        <!-- pricing card template 1 -->
                        <div class="card col-sm-12 col-md-12 col-lg-6 bg-light-green py-3 text-white text-center rounded border-0 shadow">
                            <div class="card-header bg-transparent text-white border-0">
                                <h3 class="card-title font-weight-bold text-white">Sophrologie</h3>
                                <span class="">A partir de </span>
                                <span class="card-title d-block font-white font-weight-bold important-number font-effect-3d-float">12€</span>
                                <!-- <span class="d-block py-3"><i class="fas fa-wind mr-2 ico-l font-white"></i></span> -->
                            </div>
                            <div class="card-body py-0">
                                <p class="card-text my-3">
                                    <span class="mb-3 d-block">Séance individuelle</span>
                                    <span class="mb-3 d-block">Séance collective</span>
                                    <span class="d-block">Professionnel, milieux sportif et associatif</span>
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a href="http://localhost:8080/sophromassage/wp-content/uploads/2019/10/tarifs_2019.pdf" class="btn btn-main-blanco">Tous les tarifs</a>
                            </div>
                        </div>
                        <!-- pricing card template 2 -->
                        <div class="card col-sm-12 col-md-12 col-lg-6 py-3 text-center rounded border-0 shadow bg-salmon">
                            <div class="card-header bg-transparent border-0 font-white">
                                <h3 class="card-title font-weight-bold font-white">Massages</h3>
                                <span class="">A partir de </span>
                                <span class="card-title d-block font-hard-green font-weight-bold important-number font-effect-3d-float">15€</span>
                            </div>
                            <div class="card-body py-0">
                                <p class="card-text my-3">
                                    <span class="mb-3 d-block font-white">Amma Assis</span>
                                    <span class="mb-3 d-block font-white">Relaxation coréenne</span>
                                    <span class="mb-3 d-block font-white">Massage californien</span>
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a href="http://localhost:8080/sophromassage/wp-content/uploads/2019/10/tarifs_2019.pdf" class="btn btn-main-full">Tous les tarifs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- BANNER ICONS -->
<section id="banner-icons" class="section w-100 py-5 bg-light-green">
    <div class="container">
        <div class="my-2 my-lg-5 text-white">
            <div class="row card-deck">
                <!-- COL -->
                <div class="card bg-transparent border-0 col-12 col-sm-12 col-md-6 col-lg-3">
                    <!-- CARD -->
                    <div class="text-center">
                        <div class="mx-auto">
                            <div class="mb-3">
                            <i class="fas fa-sliders-h fa-5x font-white"></i>
                            </div>
                            <span class="card-text">Prestations personnalisées</span>
                        </div>
                    </div>
                    <!-- CARD END-->
                </div>
                <!-- COL END -->
                <!-- COL -->
                <div class="card bg-transparent border-0 col-12 col-sm-12 col-md-6 col-lg-3">
                    <!-- CARD -->
                    <div class="text-center">
                        <div class="mx-auto">
                            <div class="mb-3">
                            <i class="fas fa-compass fa-5x font-white"></i>
                            </div>
                            <span class="card-text">Ecoute et orientation</span>
                        </div>
                    </div>
                    <!-- CARD END-->
                </div>
                <!-- COL END -->
                <!-- COL -->
                <div class="card bg-transparent border-0 col-12 col-sm-12 col-md-6 col-lg-3">
                    <!-- CARD -->
                    <div class="text-center">
                        <div class="mx-auto">
                            <div class="mb-3">
                            <i class="fas fa-road fa-5x font-white"></i>
                            </div>
                            <span class="card-text">Déplacement</span>
                        </div>
                    </div>
                    <!-- CARD END-->
                </div>
                <!-- COL END -->
                <!-- COL -->
                <div class="card bg-transparent border-0 col-12 col-sm-12 col-md-6 col-lg-3">
                    <!-- CARD -->
                    <div class="text-center">
                        <div class="mx-auto">
                            <div class="mb-3">
                            <i class="fas fa-handshake fa-5x font-white"></i>
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


<!-- Events -->
<section id="events" class="section w-100 py-5">
    <div class="container">
        <h1 class="font-weight-bold text-secondary">Voir marges tous les titres du site</h1>
        <hr class="separator">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- AVIS CLIENTS-->
<section id="avis" class="section w-100 py-5 bg-testimonial">
    <div class="container">

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
<section id="contact" class="section w-100 py-5">
    <!-- CONTAINER -->
    <div class="container">
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
                            <span class="d-block font-weight-bold">06 46 81 94 31</span>
                            <span class="d-block font-weight-bold">hello@sophromassage.fr</span>
                            <span class="d-block">Les Marjolaines bât. D,<br>296 av. louis Imbert,<br> 83160 La Valette-du-Var</span>
                        </div>
                        <div class="mb-3">
                            <a href="https://goo.gl/maps/6CsPDwhwTBaRKnei9" class="btn btn-main-blanco-outlined text-white text-white">Itinéraire</a>
                        </div>
                        <!-- icons -->
                        <div class="mb-3">
                            <a href="" title="" alt=""><i class="fab fa-facebook-square mr-2 ico-m font-white"></i></a>
                            <!-- <a href="" title="" alt=""><i class="fab fa-medium mr-2 ico-m font-white"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <!-- <form> -->
                        <div class="form-group">
                            <?php echo do_shortcode( '[contact-form-7 id="208" title="Quick contact form"]' ); ?>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
    </div>
</section>


<?php get_footer(); ?>