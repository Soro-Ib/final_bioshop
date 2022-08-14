@extends('layout.app')

@section('title', 'Bioshop | Apropos')

@section('content')
<?php $nav = "apropos" ?>
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg mb-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title mt-4 mb-5">
                <h3><span>Qui sommes nous ! </span></h3>
                <div>
                    BioShop est une entreprise qui propose des produits naturels de chez nous (africains) à des prix abordables à la portée de tous.
                    Les produits BioShop sont le piment Kpèssè Kpèssè, le Soubara nationnal et le Beurre de Karité. Notre Mission
                    est donc d'acheter, transformer et vendre des produits naturels

                </div>
                <h4 class="titre-vs mt-5">Pourquoi utiliser nos produits</h4>
                <div class="vertus-soubara">
                    <span>Soubara aussi appelé moutarde africaine</span>
                    <ul>
                        <li>
                            Hyper protéine, régulateur de la tension artérielle, riche en potassium.
                        </li>
                        <li>
                            Peut être ajouter dans les plats (Soubara Lafri, sauce gombo, sauce de Kabato, sauce feuille, sauce arachide)
                        </li>
                    </ul>
                    <span>En plus de son rôle dans la cuisine, le soubara regorge des vertus qui sont profitables à notre santé. </span>
                    <ul>
                        <li>
                            Sa teneur en iode peut lutter contre l’apparition du goitre ; 
                        </li>
                        <li>
                            Il favorise l’activité du cœur ainsi que le fonctionnement du cerveau ;

                        <li>
                            Il permet de lutter contre l’hypertension artérielle ;
                        </li>
                        <li>
                            Il prévient et réduit certaines formes d’anémie ;
                        </li>
                        <li>
                            Il renforce les défenses immunitaires particulièrement en matière de prévention du cancer ; 
                        </li>
                        <li>
                            Il soulage les piqures et brulures 
                        </li>
                        <li>
                            Son jus de cuisson est un remontant énergétique et permet de lutter contre la fatigue grâce à une forte teneur en vitamine A et C 
                        </li>
                    </ul>
                    <span>
                        Selon une étude de l’organisation des nations unies pour l’alimentation et l’agriculture (FAO), 100 g de soubara sec apporte l’organisme 432 calorie et contient 36,5 mg de protides, 28,8g de lipides et 378 mg de fer. Ainsi les vertus thérapeutiques et de maintien de la bonne santé sont conférés au soubara.
                    </span>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->

@endsection
