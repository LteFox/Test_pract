@extends('layouts.guest')

@section('content')
<!-- Header -->
<div class="bg_image">
<!-- About -->
<section class=" my-lg-2">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5 mb-0">
        <h2 class="text-white">Despre Milav
        </h2>
    </div>
    <div class="container title d-flex flex-column justify-content-start align-items-center flex-lg-row my-5 mb-0">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <p class="text-white">MILAV este o companie de dezvoltare software cu sediul în Moldova (Cahul), România. Ea lucrează în principal cu clienți străini și îi ajută să dezvolte soluții software care să le transforme ideile într-un produs digital gata.
                <br>  MILAV creează produse premiate care transformă afacerile clienților săi. Și este bucuroasă să anunțe că, datorită creșterii continue, are sloturi deschise pentru dezvoltatorii React/React Native medii și seniori.
            </p>
            <div class="list">
                <h2>Unele dintre produsele create pentru clienți</h2>
                <ul>
                  <li><span>Site-uri web corporative</span></li>
                  <li><span>Magazine online</span></li>
                  <li><span>Portaluri uriașe</span></li>
                  <li><span>Aplicații web și pentru întreprinderi</span></li>
                  <li><span>Aplicații mobile</span></li>
                  <li><span>Dezvoltare full-stack și componente web reutilizabile</span></li>
                </ul>
              </div>
        </div>
        <div class="col-12 col-lg-6">
            <img src="{{ asset('assets/images/img1.svg') }}" alt="About Us Image" class="img-fluid">
        </div>
    </div>

</section>
</div>

<!-- End About Them -->
<!-- Gallery -->
<section class="collections my-5 py-5">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5">
        <h2 class="text-white text-center text-lg-start">Developers</h2>
    </div>
</section>
@endsection