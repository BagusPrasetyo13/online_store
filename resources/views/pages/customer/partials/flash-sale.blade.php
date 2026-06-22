<section class="flash-sale-section py-4">
    <div class="container">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex align-items-center gap-2">

                <!-- Icon api -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" aria-hidden="true">
                    <defs>
                        <linearGradient id="flashFire" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#FF3D00"></stop>
                            <stop offset="100%" stop-color="#FFB300"></stop>
                        </linearGradient>
                    </defs>

                    <path fill="url(#flashFire)"
                        d="M12.7 2.2c.2 1.8-.4 3.2-1.4 4.5-.8 1-1.8 1.9-2.5 3-.7 1.1-1.1 2.2-1.1 3.5 0 3.7 2.8 6.8 6.4 6.8 3.4 0 6.2-2.6 6.2-6.1 0-2.2-.9-4-2.5-5.5-.3 1.4-1 2.4-2 3.1.2-2.6-.9-4.8-3.1-6.8ZM12.1 11.3c1.7 1 2.7 2.1 2.7 3.8 0 1.6-1.1 2.8-2.8 2.8s-2.9-1.2-2.9-2.8c0-1.4.8-2.4 1.8-3.4.4-.4.8-.8 1.2-1.4Z">
                    </path>
                </svg>

                <h5 class="fw-bold mb-0">Flash Sale</h5>
            </div>

            <a href="#" class="small fw-semibold text-primary text-decoration-none">
                Lihat Semua ›
            </a>
        </div>

        <!-- Banner tetap dan produk horizontal -->
        <div class="d-flex align-items-stretch gap-3">

            <!-- Banner countdown tetap -->
            <div class="card border-0 rounded-4 shadow-sm flash-sale-banner flex-shrink-0">
                <div class="card-body d-flex flex-column justify-content-center text-center">

                    <p class="small fw-bold text-danger mb-3">
                        Berakhir dalam
                    </p>

                    <div class="d-flex justify-content-center align-items-start gap-2">

                        <div>
                            <strong id="flashHours" class="flash-time-number">
                                02
                            </strong>
                            <small class="d-block text-secondary mt-1">
                                Jam
                            </small>
                        </div>

                        <strong class="flash-time-separator">:</strong>

                        <div>
                            <strong id="flashMinutes" class="flash-time-number">
                                15
                            </strong>
                            <small class="d-block text-secondary mt-1">
                                Menit
                            </small>
                        </div>

                        <strong class="flash-time-separator">:</strong>

                        <div>
                            <strong id="flashSeconds" class="flash-time-number">
                                30
                            </strong>
                            <small class="d-block text-secondary mt-1">
                                Detik
                            </small>
                        </div>

                    </div>

                    <p class="small fw-semibold mt-4 mb-3">
                        Diskon terbatas
                        <br>
                        Jangan sampai kehabisan!
                    </p>

                    <div class="fs-3">
                        🎁 🔥
                    </div>

                </div>
            </div>

            <!-- Hanya area ini yang bergeser -->
            <div class="flash-products-area position-relative flex-grow-1">

                <!-- Tombol kiri -->
                <button type="button" class="scroll-arrow scroll-left" id="scrollLeft" aria-label="Geser ke kiri">
                    <svg height="22" width="22" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>

                <!-- Product track -->
                <div id="flashProductTrack" class="d-flex flex-nowrap gap-3 overflow-auto pb-3 flash-product-track">

                    <!-- Produk 1 -->
                    <div class="card rounded-4 shadow-sm flash-product-card flex-shrink-0 position-relative">

                        <span class="badge rounded-pill bg-danger flash-discount">
                            -15%
                        </span>

                        <button type="button" class="wishlist-btn" aria-label="Wishlist">
                            <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>

                        </button>

                        <div class="card-body d-flex flex-column">

                            <a href="#" class="flash-product-image">
                                <img src="{{ asset('images/img/15pm.png') }}" alt="iPhone 15 Pro Max" class="img-fluid">
                            </a>

                            <a href="#" class="flash-product-name">
                                iPhone 15 Pro Max 8GB/256GB
                            </a>

                            <div class="d-flex align-items-baseline gap-1 mb-2">
                                <span class="flash-sale-price">
                                    Rp 20.499.000
                                </span>

                                <span class="flash-normal-price">
                                    Rp 24.099.000
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-auto gap-2">

                                <small class="text-secondary flash-meta">
                                    <span class="text-warning">★ 4.9</span>
                                    | Terjual 1,2K
                                </small>

                                <button type="button" class="btn btn-primary flash-cart-button"
                                    aria-label="Tambah ke keranjang">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L20 8H7"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round"></path>

                                        <circle cx="10" cy="19" r="1.3" fill="currentColor"></circle>
                                        <circle cx="17" cy="19" r="1.3" fill="currentColor"></circle>
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- Produk 2 -->
                    <div class="card rounded-4 shadow-sm flash-product-card flex-shrink-0 position-relative">

                        <span class="badge rounded-pill bg-danger flash-discount">
                            -10%
                        </span>

                        <div class="card-body d-flex flex-column">

                            <a href="#" class="flash-product-image">
                                <img src="/assets/images/samsung-s24-ultra.png" alt="Samsung Galaxy S24 Ultra"
                                    class="img-fluid">
                            </a>

                            <a href="#" class="flash-product-name">
                                Samsung Galaxy S24 Ultra 5G 256GB
                            </a>

                            <div class="d-flex align-items-baseline gap-1 mb-2">
                                <span class="flash-sale-price">
                                    Rp 17.999.000
                                </span>

                                <span class="flash-normal-price">
                                    Rp 19.999.000
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-auto gap-2">

                                <small class="text-secondary flash-meta">
                                    <span class="text-warning">★ 4.8</span>
                                    | Terjual 900
                                </small>

                                <button type="button" class="btn btn-primary flash-cart-button"
                                    aria-label="Tambah ke keranjang">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L20 8H7"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round"></path>

                                        <circle cx="10" cy="19" r="1.3" fill="currentColor"></circle>
                                        <circle cx="17" cy="19" r="1.3" fill="currentColor"></circle>
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- Produk 3 -->
                    <div class="card rounded-4 shadow-sm flash-product-card flex-shrink-0 position-relative">

                        <span class="badge rounded-pill bg-danger flash-discount">
                            -20%
                        </span>

                        <div class="card-body d-flex flex-column">

                            <a href="#" class="flash-product-image">
                                <img src="/assets/images/xiaomi-14t-pro.png" alt="Xiaomi 14T Pro" class="img-fluid">
                            </a>

                            <a href="#" class="flash-product-name">
                                Xiaomi 14T Pro 12GB/512GB
                            </a>

                            <div class="d-flex align-items-baseline gap-1 mb-2">
                                <span class="flash-sale-price">
                                    Rp 9.499.000
                                </span>

                                <span class="flash-normal-price">
                                    Rp 11.999.000
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-auto gap-2">

                                <small class="text-secondary flash-meta">
                                    <span class="text-warning">★ 4.7</span>
                                    | Terjual 756
                                </small>

                                <button type="button" class="btn btn-primary flash-cart-button"
                                    aria-label="Tambah ke keranjang">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L20 8H7"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round"></path>

                                        <circle cx="10" cy="19" r="1.3" fill="currentColor"></circle>
                                        <circle cx="17" cy="19" r="1.3" fill="currentColor"></circle>
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- Produk 4 -->
                    <div class="card rounded-4 shadow-sm flash-product-card flex-shrink-0 position-relative">

                        <span class="badge rounded-pill bg-danger flash-discount">
                            -8%
                        </span>

                        <div class="card-body d-flex flex-column">

                            <a href="#" class="flash-product-image">
                                <img src="/assets/images/oppo-find-x7-ultra.png" alt="OPPO Find X7 Ultra"
                                    class="img-fluid">
                            </a>

                            <a href="#" class="flash-product-name">
                                OPPO Find X7 Ultra 16GB/512GB
                            </a>

                            <div class="d-flex align-items-baseline gap-1 mb-2">
                                <span class="flash-sale-price">
                                    Rp 13.999.000
                                </span>

                                <span class="flash-normal-price">
                                    Rp 14.999.000
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-auto gap-2">

                                <small class="text-secondary flash-meta">
                                    <span class="text-warning">★ 4.8</span>
                                    | Terjual 632
                                </small>

                                <button type="button" class="btn btn-primary flash-cart-button"
                                    aria-label="Tambah ke keranjang">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L20 8H7"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round"></path>

                                        <circle cx="10" cy="19" r="1.3" fill="currentColor"></circle>
                                        <circle cx="17" cy="19" r="1.3" fill="currentColor"></circle>
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- Produk 5 -->
                    <div class="card rounded-4 shadow-sm flash-product-card flex-shrink-0 position-relative">

                        <span class="badge rounded-pill bg-danger flash-discount">
                            -12%
                        </span>

                        <div class="card-body d-flex flex-column">

                            <a href="#" class="flash-product-image">
                                <img src="/assets/images/vivo-v30-pro.png" alt="Vivo V30 Pro" class="img-fluid">
                            </a>

                            <a href="#" class="flash-product-name">
                                Vivo V30 Pro 5G 12GB/512GB
                            </a>

                            <div class="d-flex align-items-baseline gap-1 mb-2">
                                <span class="flash-sale-price">
                                    Rp 6.999.000
                                </span>

                                <span class="flash-normal-price">
                                    Rp 7.999.000
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-auto gap-2">

                                <small class="text-secondary flash-meta">
                                    <span class="text-warning">★ 4.7</span>
                                    | Terjual 621
                                </small>

                                <button type="button" class="btn btn-primary flash-cart-button"
                                    aria-label="Tambah ke keranjang">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L20 8H7"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round"></path>

                                        <circle cx="10" cy="19" r="1.3" fill="currentColor"></circle>
                                        <circle cx="17" cy="19" r="1.3" fill="currentColor"></circle>
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- Produk 6 -->
                    <div class="card rounded-4 shadow-sm flash-product-card flex-shrink-0 position-relative">

                        <span class="badge rounded-pill bg-danger flash-discount">
                            -12%
                        </span>

                        <div class="card-body d-flex flex-column">

                            <a href="#" class="flash-product-image">
                                <img src="/assets/images/vivo-v30-pro.png" alt="Vivo V30 Pro" class="img-fluid">
                            </a>

                            <a href="#" class="flash-product-name">
                                Vivo V30 Pro 5G 12GB/512GB
                            </a>

                            <div class="d-flex align-items-baseline gap-1 mb-2">
                                <span class="flash-sale-price">
                                    Rp 6.999.000
                                </span>

                                <span class="flash-normal-price">
                                    Rp 7.999.000
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-auto gap-2">

                                <small class="text-secondary flash-meta">
                                    <span class="text-warning">★ 4.7</span>
                                    | Terjual 621
                                </small>

                                <button type="button" class="btn btn-primary flash-cart-button"
                                    aria-label="Tambah ke keranjang">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L20 8H7"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round"></path>

                                        <circle cx="10" cy="19" r="1.3" fill="currentColor"></circle>
                                        <circle cx="17" cy="19" r="1.3" fill="currentColor"></circle>
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- Produk 7 -->
                    <div class="card rounded-4 shadow-sm flash-product-card flex-shrink-0 position-relative">

                        <span class="badge rounded-pill bg-danger flash-discount">
                            -12%
                        </span>

                        <div class="card-body d-flex flex-column">

                            <a href="#" class="flash-product-image">
                                <img src="/assets/images/vivo-v30-pro.png" alt="Vivo V30 Pro" class="img-fluid">
                            </a>

                            <a href="#" class="flash-product-name">
                                Vivo V30 Pro 5G 12GB/512GB
                            </a>

                            <div class="d-flex align-items-baseline gap-1 mb-2">
                                <span class="flash-sale-price">
                                    Rp 6.999.000
                                </span>

                                <span class="flash-normal-price">
                                    Rp 7.999.000
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-auto gap-2">

                                <small class="text-secondary flash-meta">
                                    <span class="text-warning">★ 4.7</span>
                                    | Terjual 621
                                </small>

                                <button type="button" class="btn btn-primary flash-cart-button"
                                    aria-label="Tambah ke keranjang">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L20 8H7"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round"></path>

                                        <circle cx="10" cy="19" r="1.3" fill="currentColor"></circle>
                                        <circle cx="17" cy="19" r="1.3" fill="currentColor"></circle>
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- Produk 8 -->
                    <div class="card rounded-4 shadow-sm flash-product-card flex-shrink-0 position-relative">

                        <span class="badge rounded-pill bg-danger flash-discount">
                            -12%
                        </span>

                        <div class="card-body d-flex flex-column">

                            <a href="#" class="flash-product-image">
                                <img src="/assets/images/vivo-v30-pro.png" alt="Vivo V30 Pro" class="img-fluid">
                            </a>

                            <a href="#" class="flash-product-name">
                                Vivo V30 Pro 5G 12GB/512GB
                            </a>

                            <div class="d-flex align-items-baseline gap-1 mb-2">
                                <span class="flash-sale-price">
                                    Rp 6.999.000
                                </span>

                                <span class="flash-normal-price">
                                    Rp 7.999.000
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-auto gap-2">

                                <small class="text-secondary flash-meta">
                                    <span class="text-warning">★ 4.7</span>
                                    | Terjual 621
                                </small>

                                <button type="button" class="btn btn-primary flash-cart-button"
                                    aria-label="Tambah ke keranjang">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L20 8H7"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round"></path>

                                        <circle cx="10" cy="19" r="1.3" fill="currentColor"></circle>
                                        <circle cx="17" cy="19" r="1.3" fill="currentColor"></circle>
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- Tombol kanan -->
                <button type="button" class="scroll-arrow scroll-right" id="scrollRight"
                    aria-label="Geser ke kanan">
                    <svg height="22" width="22" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>

                <!-- Thumb Indicators -->
                <div class="flash-sale-scroll-indicator">
                    <div class="flash-sale-scroll-thumb" id="flashSaleThumb"></div>
                </div>

            </div>
        </div>

    </div>
</section>
