@extends('layouts.guest')

@section('content')
<!-- Header -->
<div class="bg_image">
<header>
    <div class="container align-items-center justify-content-between top_content">
        <div class="col-lg-6">
            <h1 class="text-center text-lg-start text-white mb-5 header-title">
            HELLO, YOU ARE IN THE RIGHT PLACE <br>
                <!-- <span class="text-site-gradient">NFTs</span> -->
            </h1>
            <p class="text-light mb-5 text-center text-lg-start header-description">
            If you expect your software to be worked with hand in hand with your best idea
            </p>
            <!-- <div class="d-flex justify-content-center">
                <a href="/login" class="btn btn-bg-light btn-lg text-white px-4 py-2 me-3">
                    <i class=""></i>
                    Log In
                </a>
                <a href="/register" class="btn btn-bg-dark border btn-lg  text-white px-4 py-2">
                    <i class=""></i>
                    Register
                </a>
            </div> -->
        </div>
        <div>
        <div class="framer ">
            <div class="bloc rounded">
                <img src="{{ asset('assets/images/img1.svg')}}" alt="">
                <div class="score d-flex "><i class="fa-solid fa-star me-2" style="color: #FFD43B;"></i><p>4.9/5</p></div>
            </div>
            <!-- <div class="bloc rounded">
                <img src="{{ asset('assets/images/bloc-2.jpg')}}" alt="">
                <div class="score d-flex "><i class="fa-solid fa-star me-2" style="color: #FFD43B;"></i><p>4.9/5</p></div>
            </div>
            <div class="bloc rounded">
                <img src="{{ asset('assets/images/bloc-3.jpg')}}" alt="">
                <div class="score d-flex "><i class="fa-solid fa-star me-2" style="color: #FFD43B;"></i><p>4.9/5</p></div>
            </div> -->
        </div>
        </div>
    </div>
</header>

<!-- End Header -->
<!-- Contact Them -->
<section class=" my-5 py-5">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5">
        <h2 class="text-white text-center text-lg-start">Contact Them</h2>
        <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">
            <i class="fa-regular fa-images"></i>
            Explore All
        </a>
    </div>
    <div class=" container contact-info">
        <div>
            <h3 style="color: white;">Vizitați una dintre locații în Cahul, sau contactați</h3>
            <p style="color: white;">
                <span class="address">Sediul central:</span><br>
                <span class="address">Cahul
                    B.P. Hașdeu Street 2
                    Rep. Moldova</span><br>
                <span class="address">csatlos.sandor@milav.eu</span><br>
                <span class="phone"><i class="fas fa-phone"></i> Telefon: +40 747 191 825</span>
            </p>
        </div>
        <div class="contact-info-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1030.4945393529008!2d28.18743321953205!3d45.900948652548735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b65db775628177%3A0x3eb9667f8dbcdc13!2sMILAV%20IT!5e0!3m2!1sro!2s!4v1717274391390!5m2!1sro!2s" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class=" container form">
        <div>
            <form action="" method="post" class="contact-form">
                <h3 style="color: white;">Scrieți un mesaj</h3>
                <label for="name">Numele dumneavoastră</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Adresa de e-mail</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subiect</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Mesajul dumneavoastră</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">
                    <i class=""></i>
                    Submit
                </a>
            </form>
        </div>
        <div class="contact-form-image">
            <img src="{{ asset('assets/images/contact/contact1.png') }}" alt="Imagine de contact">
        </div>

    </div>



</section>
<!-- End Contact Us -->
@endsection