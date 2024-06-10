@extends('layouts.guest')

@section('content')

<div class="bg_image">

<!-- Header -->
<header >
    <div class="container align-items-center justify-content-between top_content">
        <div class="col-lg-6">
            <h1 class="text-center text-lg-start text-white mb-5 header-title">
                Get Ready to Play, Explore, Conquer <br>
                <!-- <span class="text-site-gradient">NFTs</span> -->
            </h1>
            <p class="text-light mb-5 text-center text-lg-start header-description">
            Embark on your gaming journey of discovery and excitement right here, where the world of immersive gameplay.
            </p>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="#" class="btn text-white px-4 py-2 me-3 btn-ex">
                    <!-- <i class="fa-solid fa-rocket"></i> -->
                    Explore
                </a>
                <a href="#" class="btn text-white px-4 py-2 btn-lm">
                    <!-- <i class="fa-solid fa-plus"></i> -->
                    Learn More
                </a>
            </div>

        </div>
        <div class="framer ">
            <div class="bloc rounded">
                <img src="{{ asset('assets/images/bloc-1.jpg')}}" alt="">
                <div class="score d-flex "><i class="fa-solid fa-star me-2" style="color: #FFD43B;"></i><p>4.9/5</p></div>
            </div>
            <div class="bloc rounded">
                <img src="{{ asset('assets/images/bloc-2.jpg')}}" alt="">
                <div class="score d-flex "><i class="fa-solid fa-star me-2" style="color: #FFD43B;"></i><p>4.9/5</p></div>
            </div>
            <div class="bloc rounded">
                <img src="{{ asset('assets/images/bloc-3.jpg')}}" alt="">
                <div class="score d-flex "><i class="fa-solid fa-star me-2" style="color: #FFD43B;"></i><p>4.9/5</p></div>
            </div>
        </div>
    </div>
    
</header>
<div class="container title d-flex flex-column justify-content-center align-items-center flex-lg-row my-5">
        <h2 class="text-white ">Explore LvlUp</h2>
    </div>
    <div class="description container">
        <div class="info col-lg me-3 justify-content-center"> 
            <div class="circl mb-3"><i class="fa-solid fa-dragon"></i></div>
            <h4>Extensive Game Library</h4>
            <p>Dive into a vast collection of games spanning all genres, from action-packed adventures to mind-bending puzzles.</p>
        </div>
        <div class="info col-lg me-3"> 
        <div class="circl mb-3"><i class="fa-solid fa-puzzle-piece"></i></div>
            <h4>Cross-Platform Play</h4>
            <p>Play with friends on different platforms seamlessly, whether you're on console, PC, or mobile.</p>
        </div>
        <div class="info col-lg me-3"> 
            <div class="circl mb-3"><i class="fa-solid fa-desktop"></i></div>
            <h4>Exclusive Content Play</h4>
            <p>Discover exclusive titles and content you won't find anywhere else, tailored for our PlayFlix community.</p>
        </div>
        <div class="info col-lg "> 
            <div class="circl mb-3"><i class="fa-solid fa-computer"></i></div>
            <h4>Ultra-HD Graphics Play</h4>
            <p>Immerse yourself in stunning visuals with our games optimized for high-definition displays.</p>
        </div>
    </div>
</div>
<!-- End Header -->
<!-- Auctions -->
<div class="title-2 container"><h1>Discover the Most Popular Games</h1></div> <!--titlu-->
<div class="swiper auctionsSwiper container ">

        <div class="swiper-wrapper">
            <!-- Card 1 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4 ">
                    <img src="{{ asset('assets/images/section_2/card-1.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">145</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">372</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-3.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">231</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-4.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">321</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-1.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">145</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">145</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>


<div class="bg-img-2 c"><!--Pentru a 2 imagine bg-->
<section class="auctions my-lg-2 ">
    
    <div class="swiper auctionsSwiper container ">
        <div class="swiper-wrapper">
            <!-- Card 1 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4 ">
                    <img src="{{ asset('assets/images/section_2/card-1.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">145</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">372</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-3.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">231</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-4.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">321</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-1.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">145</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row align-items-center">
                            <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="text-white mb-0">Metaverse</h5>
                                <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                            </div>
                        </div>
                        <div class="icons my-3 d-flex justify-content-around">
                            <div class="d-flex flex-column">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">145</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5">
        <h2 class="text-white text-center text-lg-start">Popular Collections</h2>
        <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">
            <i class="fa-solid fa-rocket"></i>
            Explore All
        </a>
    </div>
</section>
</div>
<!-- End Auctions -->
<!-- Collections -->
<section class="collections my-5 py-5">
    <div class="container">
        <div class="row">
            @foreach($collections as $collection)
                <div class="col-md-4">
                <div class="card bg-card radius">
                    <div class="card-body">
                        <div class="d-flex flex-wrap images">
                            @foreach($collection->images()->limit(4)->get() as $image)
                                <img src="{{ asset(env('UPLOADS_IMAGE'). "/" . $image->name) }}" class="w-50 p-2 radius" alt="Metaverse">
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-white mb-0">{{ $collection->name }}</h5>
                                    <p class="text-secondary mb-0">Created by <span class="text-white">{{ $collection->user()->get()->first()->name }}</span></p>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <i class="fa-regular fa-heart text-white text-center like-button" data-collection-id="{{ $collection->id }}"></i>
                                <span class="text-white text-center like" >{{ $collection->likes }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- End Collections -->
@endsection
