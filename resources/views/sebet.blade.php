@extends("loyauts.head")

@section("main-content")
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6" id="cart-container">
            </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cart = JSON.parse(localStorage.getItem('kudo_cart')) || [];
        const container = document.getElementById('cart-container');

        if (cart.length === 0) {
            container.innerHTML = `
                <div class="card p-5 text-center shadow-sm rounded-4">
                    <i class="bi bi-cart-x display-1 text-muted"></i>
                    <h3 class="mt-3">Sebediňiz boş</h3>
                    <a href="/" class="btn btn-danger mt-3">Menýua dolan</a>
                </div>`;
            return;
        }

        const item = cart[0];
        container.innerHTML = `
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                <img src="${item.image}" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
                
                <div class="card-body p-4 text-center">
                    <h2 class="fw-bold mb-3">${item.title}</h2>
                    
                    <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded-4 mb-4">
                        <span class="fs-5">Tölenejek baha:</span>
                        <span class="fs-2 fw-bold text-danger">${item.price}.00 m</span>
                    </div>

                    <button onclick="finishOrder()" class="btn btn-danger btn-lg w-100 py-3 fw-bold rounded-4 shadow">
                        <i class="bi bi-check-circle-fill"></i> SARGYDY TASSYKLAMAK
                    </button>
                    
                    <button onclick="localStorage.clear(); location.href='/';" class="btn btn-link text-muted mt-2">
                        Ýatyr
                    </button>
                </div>
            </div>
        `;
    });

    function finishOrder() {
        alert("Sargydyňyz kabul edildi! Tiz wagtdan eltip bereris.");
        localStorage.removeItem('kudo_cart');
        window.location.href = "/";
    }
</script>
@endsection