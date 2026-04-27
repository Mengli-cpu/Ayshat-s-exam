@extends("loyauts.head")

@section("main-content")
<style>
    /* Professional Font we Reňkler */
    .section-title {
        font-weight: 800;
        letter-spacing: 2px;
        color: #2b2d42;
        position: relative;
    }

    /* Kart dizaýny */
    .res-card {
        border-radius: 24px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        background: #fff;
        position: relative;
        height: 100%;
    }

    .res-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
    }

    /* Surat overlay effekti */
    .img-container {
        position: relative;
        overflow: hidden;
    }

    .res-img {
        height: 220px;
        width: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .res-card:hover .res-img {
        transform: scale(1.1);
    }

    /* Badge dizaýny */
    .res-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(255, 255, 255, 0.9);
        padding: 5px 15px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.75rem;
        z-index: 10;
    }

    /* Button effekti */
    .btn-custom {
        border-radius: 15px;
        padding: 12px;
        font-weight: 700;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .btn-custom:hover {
        opacity: 0.9;
        box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    }
</style>

<div class="container py-5">
    <div class="text-center mb-5">
        <span class="text-uppercase text-muted fw-bold" style="letter-spacing: 3px; font-size: 0.8rem;">Dämiňize Laýyk</span>
        <h1 class="section-title mt-2">RESTORANLAR</h1>
        <div class="mx-auto" style="width: 60px; height: 5px; background: linear-gradient(to right, #ce1212, #ff4d4d); border-radius: 10px;"></div>
    </div>

    <div class="row g-4">
        @php
            $default_img = asset('img/blog-post-2.jpg');
            
            $restaurants = [
                ['name' => 'KUDO RESTORAN', 'route' => route('kudo.index'), 'color' => '#ce1212', 'cat' => 'Premium', 'img' => 'img/Akmyrat4.jpg'],
                ['name' => 'DOSTLAR KAFE', 'route' => '#', 'color' => '#2a9d8f', 'cat' => 'Maşgala', 'img' => 'img/Без названия.jpg'],
                ['name' => 'ŞAZADA RESTORAN', 'route' => '#', 'color' => '#8338ec', 'cat' => 'Dantaly', 'img' => 'img/images (1).jpg'],
                ['name' => 'MERW RESTORAN', 'route' => '#', 'color' => '#f4a261', 'cat' => 'Milli', 'img' => 'img/images (2).jpg'],
                ['name' => 'ASMAN KAFE', 'route' => '#', 'color' => '#3a86ff', 'cat' => 'Modern', 'img' => 'img/Без названия (1).jpg'],
                ['name' => 'TYLLA NAHAR', 'route' => '#', 'color' => '#d4af37', 'cat' => 'Elite', 'img' => 'img/Без названия (2).jpg'],

            ];
        @endphp

        @foreach($restaurants as $res)
            <div class="col-md-6 col-lg-4">
                <div class="card res-card border-0 shadow-sm">
                    <div class="img-container">
                        <span class="res-badge text-dark shadow-sm">{{ $res['cat'] }}</span>
                        {{-- Eger surat bar bolsa özüni, ýok bolsa default suraty görkezýär --}}
                        <img src="{{ $res['img'] ? asset($res['img']) : $default_img }}" 
                             class="card-img-top res-img" 
                             alt="{{ $res['name'] }}">
                    </div>
                    
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold mb-0" style="color: #2b2d42;">{{ $res['name'] }}</h5>
                        </div>
                        
                        <p class="text-muted small mb-4">Iň lezzetli tagamlar we ýokary hilli hyzmat siziň garaşýar.</p>
                        
                        <a href="{{ $res['route'] }}" class="btn btn-custom mt-auto w-100 text-white" 
                           style="background: {{ $res['color'] }};">
                            MENÝUNY GÖRMEK <i class="fas fa-chevron-right ms-2" style="font-size: 0.8rem;"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection 