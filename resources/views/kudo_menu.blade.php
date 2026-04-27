@extends("loyauts.head")

@section("main-content")
<style>
    /* Iň ýokarky uly banner */
    .hero-banner {
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                    url('{{ asset("img/Akmyrat5.jpg") }}');
        background-size: cover;
        background-position: center;
        height: 550px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-bottom: 8px solid #ce1212;
    }

    .hero-banner h1 {
        font-size: 5.5rem;
        font-weight: 900;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 6px;
        text-shadow: 3px 3px 20px rgba(0,0,0,0.7);
    }

    .hero-banner p {
        color: #f8f9fa;
        font-size: 1.6rem;
        font-weight: 400;
        text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    }

    /* Food Card Stili */
    .food-card {
        border: none;
        border-radius: 20px;
        background: #ffffff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        overflow: hidden;
    }

    .food-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 45px rgba(0,0,0,0.15);
    }

    .food-img {
        height: 220px;
        object-fit: cover;
        width: 100%;
        transition: transform 0.6s ease;
    }

    .food-card:hover .food-img {
        transform: scale(1.1);
    }

    .price-tag {
        font-size: 1.6rem;
        font-weight: 800;
        color: #ce1212;
    }

    .btn-sargyt {
        background: linear-gradient(45deg, #198754, #28a745);
        border: none;
        padding: 14px;
        font-weight: 800;
        border-radius: 15px;
        color: white;
        text-transform: uppercase;
    }

    .category-badge {
        background: rgba(206, 18, 18, 0.9);
        color: white;
        font-size: 0.75rem;
        padding: 6px 15px;
        border-radius: 50px;
    }
</style>

<div class="hero-banner text-center mb-5 shadow-lg">
    <h1>KUDO <span style="color: #ce1212;">MENU</span></h1>
    <p>Hakyky Lezzet we Milli Mihmanperwerlik</p>
    <div class="mt-3" style="width: 120px; height: 5px; background: #ce1212; border-radius: 10px;"></div>
</div>

<div class="container mb-5">
    @php
        $foods = [
            // Lüle Şaşlyk üçin Akmyrat 1.jpg goýuldy
            ['name' => 'Lüle Şaşlyk', 'cat' => 'Mangal', 'img' => asset('img/Akmyrat 1.jpg'), 'price' => 45],
            ['name' => 'Merjimek Çorbasy', 'cat' => 'Çorbalar', 'img' => asset('img/Akmyrat 2.jpg'), 'price' => 35],
            ['name' => 'Tandyr Somsa', 'cat' => 'Hamyrly', 'img' => asset('img/l_CORK_DSC_8257_1.jpg'), 'price' => 40],
            ['name' => 'Sowuk Coca-Cola', 'cat' => 'Içgiler', 'img' => asset('img/Akmyrat3.jpg'), 'price' => 10],
            
            ['name' => 'Gyzgyrt Ýumurtga', 'cat' => 'Ertirlik', 'img' => asset('img/images (3).jpg'), 'price' => 25],
            ['name' => 'Sezar Salat', 'cat' => 'Salatlar', 'img' => asset('img/1600x1600.webp'), 'price' => 50],
            ['name' => 'Kudo Burger Premium', 'cat' => 'Fast Food', 'img' => asset('img/images (4).jpg'), 'price' => 55],
            ['name' => 'RedBull Energy', 'cat' => 'Içgiler', 'img' => asset('img/images (5).jpg'), 'price' => 40]
        ];
    @endphp

    <div class="row g-4">
        @foreach ($foods as $i => $item)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card food-card h-100">
                    <div class="position-relative overflow-hidden">
                        <img src="{{ $item['img'] }}" class="food-img" alt="{{ $item['name'] }}" 
                             onerror="this.src='https://images.pexels.com/photos/103124/pexels-photo-103124.jpeg?auto=compress&cs=tinysrgb&w=400'">
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <span class="category-badge">{{ $item['cat'] }}</span>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column p-4 text-center">
                        <h5 class="fw-bold text-dark mb-2">{{ $item['name'] }}</h5>
                        <p class="price-tag mb-4">{{ number_format($item['price'], 0) }}<small class="fs-6 text-muted"> m</small></p>
                        
                        <button onclick="addToCartAndGo('{{$i}}', '{{$item['name']}}', '{{$item['price']}}', '{{$item['img']}}')" 
                                class="btn btn-sargyt w-100 mt-auto">
                            <i class="bi bi-cart-plus-fill me-2"></i> Sargyt et
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    function addToCartAndGo(id, title, price, image) {
        const item = { id, title, price, image, quantity: 1 };
        localStorage.setItem('kudo_cart', JSON.stringify([item]));
        window.location.href = "/sebet"; 
    }
</script>
@endsection