<?php 
$page = 'home';
include("include/header.php"); 
?>

    <!-- hero section -->
    <div class="hero-section hs-1">
        <div class="hero-single" style="background-image: url(assets/img/hero/bg.png);">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Trusted Pharmaceutical Partner</h6>
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                Empowering Health Through <span>Quality Medicines</span> & Care You Can Trust
                            </h1>
                            <p data-animation="fadeInLeft" data-delay=".75s">
                                We are committed to delivering safe, effective, and affordable medicines that help people lead healthier lives.
                            </p>
                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                <a href="about" class="theme-btn">Learn More<i
                                        class="fas fa-arrow-right"></i></a>
                                <a href="contact" class="theme-btn theme-btn2">Contact Us<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-right">
                            <div class="hero-img">
                                <img src="assets/img/home/10_bg.png" alt="">
                            </div>
                            <div class="hero-img-info">
                                <div class="icon">
                                    <img src="assets/img/icon/delivery.svg" alt="">
                                </div>
                                <h6>Committed to Health, Driven by Care</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero section end -->

    <!-- search-product -->
    <div class="search-product">
        <div class="container">
            <div class="col-lg-12 col-xl-9">
                <div class="search-form">
                    <h5>Search Product</h5>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-12 col-lg-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="key" placeholder="Enter Product name">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2">
                                <button type="submit" class="theme-btn"><span class="far fa-search"></span>Search</button>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- search-product -->

    <!-- about -->
<div class="about-area py-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                    <div class="about-img">
                        <div class="row">
                            <div class="col-7">
                                <img class="img-1" src="assets/img/home/8.jpeg" alt="Sidmus Medi Corporation Office">
                            </div>
                            <div class="col-5 align-self-end">
                                <img class="img-2" src="assets/img/home/2.jpeg" alt="Sidmus Products">
                            </div>
                        </div>
                    </div>
                    <div class="about-experience">
                        <div class="about-experience-icon">
                            <img src="assets/img/icon/experience.svg" alt="">
                        </div>
                        <b>Committed To <br> Quality & Care</b>
                    </div>
                    <div class="about-shape">
                        <img src="assets/img/shape/01.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline justify-content-start">
                            <i class="flaticon-drive"></i> About Us
                        </span>
                        <h2 class="site-title">
                            Building a Healthier Future with <span>Trusted Medicines</span>
                        </h2>
                    </div>
                    <p>
                        <strong>Sidmus Medi Corporation</strong> is an emerging pharmaceutical company headquartered in 
                        <strong>Guwahati, Assam</strong>, focused on delivering high-quality, affordable medicines 
                        that make healthcare accessible to everyone. With a passion for excellence and innovation, 
                        we are dedicated to ensuring the safety, purity, and effectiveness of every product we offer.
                    </p>
                    <div class="about-list">
                        <ul>
                            <li><i class="fas fa-check-double"></i> WHO-GMP quality standards for all products</li>
                            <li><i class="fas fa-check-double"></i> Affordable medicines for every household</li>
                            <li><i class="fas fa-check-double"></i> Experienced professionals from pharma background</li>
                            <li><i class="fas fa-check-double"></i> Commitment to ethical and transparent practices</li>
                        </ul>
                    </div>
                    <a href="about" class="theme-btn mt-4">Discover More<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end -->


    <!-- trending item -->
    <div class="product-area mt-10 pt-10 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                    <div class="site-heading-inline">
                        <h2 class="site-title">Trending Items</h2>
                        <a href="product">View More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-wrap wow fadeInUp" data-wow-delay=".25s">
                <div class="row g-4" id="productRow">
                </div>

                <script>
                    const products = [
                        { image: "assets/img/medicine/1.jpeg", title: "Vitamin Capsule"  },
                        { image: "assets/img/medicine/2.jpeg", title: "Injection" },
                        { image: "assets/img/medicine/3.jpeg", title: "Syringe" },
                        { image: "assets/img/medicine/4.jpeg", title: "Gastric Tablets" },
                        { image: "assets/img/medicine/5.jpeg", title: "Stethoscope" },
                        { image: "assets/img/medicine/6.jpeg", title: "Blood Sugar Machine" },
                    ];

                    const productRow = document.getElementById("productRow");

                    products.forEach(product => {
                        const col = document.createElement("div");
                        col.className = "col-6 col-md-4 col-lg-2";

                        col.innerHTML = `
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="${product.image}" class="img-fluid" alt="${product.title}" style="width:200px; height:200px; object-fit:cover;">
                                </div>
                                <div class="product-content text-center mt-2">
                                    <h3 class="product-title h6" style="color: #023350;">${product.title}</h3>
                                </div>
                            </div>
                        `;

                        productRow.appendChild(col);
                    });
                </script>

            </div>
        </div>
    </div>
    <!-- trending item end -->


    <!-- big banner -->
    <div class="big-banner mb-20">
        <div class="container wow fadeInUp" data-wow-delay=".25s">
            <div class="banner-wrap" style="background-image: url(assets/img/banner/big-banner.jpg);">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="banner-content">
                            <div class="banner-info">
                                <h6>Committed to Better Health</h6>
                                <h2>Delivering <span>Quality Medicines</span> with Care & Integrity</h2>
                                <p>our trusted source for safe, reliable medicines.</p>
                            </div>
                            <a href="about" class="theme-btn">Learn More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- big banner end -->

    <!-- choose-area -->
    <div class="choose-area bg py-100">
        <div class="container">
            <div class="row g-4 align-items-center wow fadeInDown" data-wow-delay=".25s">
                <div class="col-lg-4">
                    <div class="choose-img">
                        <img src="assets/img/home/14.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <span class="site-title-tagline">Why Choose Us</span>
                    <h2 class="site-title">Trusted & Quality Healthcare Solutions</h2>
                </div>
                <div class="col-lg-4">
                    <p> At <strong>Sidmus Medi Corporation</strong>, we are committed to improving health and well-being 
                        through reliable, affordable, and high-quality pharmaceutical products. Our focus on integrity, safety, and service sets us apart in the healthcare industry.
                    </p>
                </div>
            </div>
            <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="choose-item">
                            <div class="choose-icon">
                                <img src="assets/img/icon/warranty.svg" alt="">
                            </div>
                            <div class="choose-info">
                                <h4>Quality Assured Products</h4>
                                <p>All medicines are manufactured under strict quality standards to ensure safety,
                                    purity, and effectiveness for every patient.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="choose-item">
                            <div class="choose-icon">
                                <img src="assets/img/icon/price.svg" alt="">
                            </div>
                            <div class="choose-info">
                                <h4>Affordable & Accessible</h4>
                                <p>
                                    We believe healthcare should be within everyone's reach — offering 
                                    quality medicines at fair and reasonable prices.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="choose-item">
                            <div class="choose-icon">
                                <img src="assets/img/icon/delivery.svg" alt="">
                            </div>
                            <div class="choose-info">
                                <h4>Reliable Supply</h4>
                                <p>
                                    With efficient supply and distribution channels, we ensure essential medicines are available 
                                    when and where they are needed across Northeast India.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choose-area end-->

    <!-- gallery-area -->
    <div class="gallery-area py-40 mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Our Gallery</span>
                        <h2 class="site-title">Let's Check Our Photo <span>Gallery</span></h2>
                         <a class="theme-btn mt-3" href="gallery">View All</a>
                    </div>
                </div>
            </div>
            <div class="row g-4 popup-gallery" id="galleryContainer">
                <!-- Gallery images will be loaded here -->
            </div>

            <script>
                // Array of image filenames (you can easily extend this)
                const galleryImages = [
                    "1.jpeg", "2.jpeg", "3.jpeg", "4.jpeg", "5.jpeg", "6.jpeg"
                ];

                const galleryContainer = document.getElementById("galleryContainer");

                galleryImages.forEach((img, index) => {
                    // Define column size layout similar to your original pattern
                    let colClass = "col-md-4 col-lg-3";
                    if (index === 0) colClass = "col-md-12 col-lg-6";
                    if (index === 5) colClass = "col-md-8 col-lg-6";

                    const div = document.createElement("div");
                    div.className = `${colClass}`;
                    div.innerHTML = `
                        <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="gallery-img">
                                <img src="assets/img/home/${img}" alt="Gallery Image" style="width:100%; height:250px; object-fit:cover;">
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
    <!-- gallery-area end -->

    <!-- testimonial area -->
    <!-- <div class="testimonial-area ts-bg py-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Testimonials</span>
                        <h2 class="site-title text-white">What Our Client Say's <span>About Us</span></h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme wow fadeInUp" data-wow-delay=".25s">
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/01.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Sylvia H Green</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/02.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Gordo Novak</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/03.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Reid E Butt</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/04.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Parker Jimenez</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/05.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Heruli Nez</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- testimonial area end -->

    <!-- blog area -->
    <div class="blog-area py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Our Blog</span>
                        <h2 class="site-title">Our Latest News & <span>Blog</span></h2>
                         <a class="theme-btn mt-3" href="blog">View All</a>
                    </div>
                </div>
            </div>
            <!-- Blog List View -->
            <div class="row justify-content-center" id="homeBlogList"></div>
            <script>
                const blogs = [
                {
                    id: 1,
                    heading: "The Role of Pharmaceutical Companies in Health.",
                    image: "assets/img/home/3.jpeg",
                    date: "Aug 12, 2024"
                },
                {
                    id: 2,
                    heading: "Common Myths About Medicines and Their Effects",
                    image: "assets/img/home/9.jpeg",
                    date: "Aug 15, 2024"
                },
                {
                    id: 3,
                    heading: "Seasonal Healthcare Tips for a Healthy Life",
                    image: "assets/img/home/13.jpeg",
                    date: "Aug 18, 2024"
                }
                ];

                const homeBlogList = document.getElementById('homeBlogList');

                blogs.slice(0, 3).forEach(blog => {
                const col = document.createElement('div');
                col.className = 'col-md-6 col-lg-4';

                col.innerHTML = `
                    <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="blog-item-img">
                        <img src="${blog.image}" style="width:100%; height:250px; object-fit:cover;" alt="Thumb">
                        <span class="blog-date"><i class="far fa-calendar-alt"></i> ${blog.date}</span>
                    </div>
                    <div class="blog-item-info">
                        <h4 class="blog-title">
                        <a href="blog?show=${blog.id}">${blog.heading}</a>
                        </h4>
                        <a class="theme-btn" href="blog?show=${blog.id}">Read More<i class="fas fa-arrow-right"></i></a>
                    </div>
                    </div>
                `;

                homeBlogList.appendChild(col);
                });
            </script>
        </div>
    </div>
    <!-- blog area end -->

    <!-- newsletter area -->
    <div class="newsletter-area pb-100">
        <div class="container wow fadeInUp" data-wow-delay=".25s">
            <div class="newsletter-wrap">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="newsletter-content">
                            <h3>Get in <span>Touch</span> With Us</h3>
                            <p>Send us your message directly via WhatsApp</p>
                            <div class="subscribe-form mt-4">
                                <form onsubmit="return sendWhatsAppMessage();">
                                    <input type="text" id="userMessage" class="form-control mb-2" placeholder="Your Message" required>
                                    <button class="theme-btn" type="submit">
                                        Send Message <i class="fab fa-whatsapp"></i>
                                    </button>
                                </form>
                            </div>
                            <script>
                            function sendWhatsAppMessage() {
                                var message = document.getElementById("userMessage").value;
                                var whatsappNumber = "919876543210"; // replace with your company WhatsApp number
                                var text = "Hello, I want to get in touch. Message: " + message;
                                var url = "https://wa.me/" + whatsappNumber + "?text=" + encodeURIComponent(text);
                                window.open(url, "_blank");
                                return false; // prevent default form submission
                            }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter area end -->


<?php include("include/footer.php"); ?>