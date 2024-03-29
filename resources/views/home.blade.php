
@extends('layout.app')

@section('title', 'Bioshop | Accueil')

@section('content')
<?php $nav = "home" ?>
    <main id="main">
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials mt-2">
            <div class="container" data-aos="zoom-in">
                <div class="testimonials-slider swiper" >
                    <div class="swiper-wrapper">
                        @foreach ($carrousels as $carrousel)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="{{secure_asset('images/carrousels/'.$carrousel->image)}}" alt="" class="testi-img" style="width: 100%; height: 100%">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Produit Section ======= -->
        
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h3> <span>Nos produits</span></h3>
                    {{-- <p>st adipisci expedita at voluptas atque vitae autem.</p> --}}
                </div>
                <div class="row">
                    @foreach ($produits as $produit)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{secure_asset('images/products/'.$produit->image)}}" class="img-fluid" alt="" style="width: 500px">
                            </div>
                            <div class="member-info">
                                <h4>{{$produit->name}} {{$produit->contenant}} g</h4>
                                <h4 style="color: green">{{$produit->prix}} Fcfa</h4>
                                <a href="{{route('commande.create')}}" class="btn btn-primary d-grid gap-2 col-12 mx-auto">Commander</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Product Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection


