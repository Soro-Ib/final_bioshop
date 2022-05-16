@extends('layout.app')

@section('title', 'Bioshop | Contact')

@section('content')

<main id="main">
    <?php $nav = "contact" ?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title mt-4">
                <h3><span>Contactez-nous</span></h3>
                <p>Nous accordons beaucoup d’importance à vos questions et prenons le temps de répondre à toutes les demandes de nos clients. Nous serons ravis de traiter la vôtre !</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Notre Addresse</h3>
                        <p>Abidjan, Williamsville, Cote d'Ivoire</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email</h3>
                        <p>bioshopci@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Telephone</h3>
                        <p>+225 05 04 49 6681</p>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                {{-- <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div> --}}

                <div class="container col-8">
                    <form action="{{route('contact.save')}}" method="post" class="form-group" id="form_c">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name="nom" class="form-control" id="name" placeholder="Votre nom">
                                @if ($errors->has('nom'))
                                    <span class="errors">{{ $errors->first('nom') }}</span>
                                @endif
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Votre email">
                                @if ($errors->has('email'))
                                    <span class="errors">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="text" class="form-control" name="telephone" id="subject" placeholder="Telephone">
                            @if ($errors->has('telephone'))
                                <span class="errors">{{ $errors->first('telephone') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            @if ($errors->has('message'))
                                <span class="errors">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                
                        <div><input type="submit" value="Envoyer" class="btn btn-primary d-grid gap-2 col-6 mx-auto mb-3"></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
<style>#form_c .errors{
    color: red;
    font-style: italic;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 12px;
}
</style>
@endsection
