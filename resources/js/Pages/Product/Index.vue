<template>
    <div>
            
    <div class="container-fluid px-0">
        <!-- <div class="top-container">
          <h1>Scroll Down</h1>
          <p>Scroll down to see the sticky effect.</p>
        </div> -->

        <div class="header" id="myHeader">
            <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-center"
                    style="background:red; color:white; width: 100%; margin:0; height: 10rem; background-size: cover; background-image:url('./assets/Thinbed/TB Web-01.jpg')">
                    <div class="d-flex flex-column align-items-center header-container-text">
                        <span class="product-header-text header-name align-self-stretch text-center fw-bold">THINBED</span>
                        <span class="product-header-text header-tagline align-self-stretch text-center px-4">PEREKAT BATA
                            RINGAN</span>
                        <span class="product-header-text header-code align-self-end pe-1">GU-500</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="d-flex flex-row bd-highlight mb-3 container-product-detail">
            <div class="product-information-container">
                    <!-- <img class="product-image" src="./assets/Thinbed/TB FP.png" /> -->
                    <img v-bind:src="posts.featured_image"/>
            </div>
            <div class="product-information-container">
                
                <p class="detail-product-text ">Merupakan campuran semen, pasir, filler dan additif yang dikemas dalam bentuk bubuk. Hanya perlu menambahkan air penggunaannya</p>
                <p class="detail-product-text product-function fw-bold">Kegunaan:</p>
                <p class="detail-product-text ">Sebagai perekat bata ringan/AAC/ALC</p>
                <p class="detail-product-text product-specification fw-bold">Spesifikasi</p>
                <pre class="detail-product-text ">
Warna: Abu-abu
Binder: Semen Portland
Filler: Kalsium
Additive: Polimer
Agregar: Pasir Silika
Kebutuhan air: 7-8 liter per 40kg
Daya Kompresi : 16 N/mm^2
Densitas Kering: 1,4 gr/cc
Densitas Basah: 1,9 gr/cc
Area Pelapisan : 10-13 m^2 per 40kg
Ketebalan: 13mm</pre>
            </div>
          </div>
    </div>
    </div>
</template>

<script>
    export default {
        props: ['posts'],
        components: {
        },
    }
</script>
