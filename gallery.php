<?php
$page = 'gallery';
include("include/header.php"); ?>
        <!-- breadcrumb -->
        <div class="site-breadcrumb">
            <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
            <div class="container">
                <div class="site-breadcrumb-wrap">
                    <h4 class="breadcrumb-title">Our Gallery</h4>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
                        <li class="active">Our Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- gallery-area -->
        <div class="gallery-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Our Gallery</span>
                            <h2 class="site-title">Let's Check Our Photo <span>Gallery</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4 popup-gallery" id="galleryContainer"></div>

                <script>
                const galleryImages = [
                    "1.jpeg", "2.jpeg", "3.jpeg", "4.jpeg", "5.jpeg", "6.jpeg",
                    "7.jpeg", "8.jpeg", "9.jpeg", "10.jpeg", "11.jpeg", "12.jpeg", "13.jpeg", "14.png"
                ];

                const galleryContainer = document.getElementById("galleryContainer");

                galleryImages.forEach((img, index) => {
                    let colClass = "col-md-4 col-lg-3";
                    let imgHeight = "350px";

                    if ([0, 5, 6, 11, 12].includes(index)) {
                    colClass = "col-md-8 col-lg-6";
                    imgHeight = "350px";
                    }

                    const div = document.createElement("div");
                    div.className = `${colClass}`;
                    div.innerHTML = `
                    <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-img">
                        <img src="assets/img/home/${img}" alt="Gallery Image"
                            style="width:100%; height:${imgHeight}; object-fit:cover; border-radius:6px;">
                        <a class="popup-img gallery-link" href="assets/img/home/${img}">
                            <i class="fal fa-plus"></i>
                        </a>
                        </div>
                    </div>
                    `;
                    galleryContainer.appendChild(div);
                });
                </script>

            </div>
        </div>
<?php include("include/footer.php"); ?>