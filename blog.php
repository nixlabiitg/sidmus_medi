<?php 
$page = 'blog';
include("include/header.php"); 
?>
    <!-- breadcrumb -->
    <div class="site-breadcrumb">
        <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
        <div class="container">
            <div class="site-breadcrumb-wrap">
                <h4 class="breadcrumb-title">About Us</h4>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- blog area -->
    <div class="blog-area py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Our Blog</span>
                        <h2 class="site-title">Our Latest News & <span>Blog</span></h2>
                    </div>
                </div>
            </div>
            <!-- Blog List View -->
            <div class="row justify-content-center" id="blogListView"></div>

            <!-- Blog Detail View -->
            <div class="row d-none" id="blogDetailView">
                <div class="col-lg-12">
                    <div class="card p-4" style="border-radius: 12px; background: #fff; border: none; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);">
                    <div class="card-body">
                        <button class="btn btn-sm btn-outline-primary mb-3" onclick="goBack()">← Back to Blogs</button>
                        <h2 class="card-title" id="detailTitle"></h2>
                        <hr>
                        <img id="detailImage" class="card-img-top img-fluid w-50 float-start me-4 mb-2" src="" alt="">
                        <div class="card-text" id="detailContent"></div>
                    </div>
                    </div>
                </div>
            </div>
            <script>
                const blogs = [
                {
                    id: 1,
                    heading: "The Role of Pharmaceutical Companies in Community Health.",
                    image: "assets/img/home/3.jpeg",
                    description: `<p>Pharmaceutical companies play a vital role in improving community health. Beyond producing quality medicines, they engage in awareness campaigns, preventive healthcare programs, and educational initiatives. Sidmus Medi Corporation actively contributes to the health of people in Assam and the Northeast by providing affordable, high-quality medicines tailored to local needs. By combining product quality with community engagement, we help individuals make better health decisions and lead healthier lives.</p>`,
                    date: "Aug 12, 2024"
                },
                {
                    id: 2,
                    heading: "Common Myths About Medicines and Their Effects",
                    image: "assets/img/home/9.jpeg",
                    description: `<p>Many people have misconceptions about medicines, such as thinking that generic drugs are less effective or that all side effects are dangerous. These myths can lead to misuse or avoidance of important treatments. Understanding proper dosage, reading labels carefully, and consulting healthcare professionals is essential. Sidmus Medi Corporation ensures that all products are original, safe, and backed by clear usage instructions. By educating communities and providing reliable medicines, patients can make informed decisions and maintain better health outcomes.</p>`,
                    date: "Aug 15, 2024"
                },
                {
                    id: 3,
                    heading: "Seasonal Healthcare Tips for a Healthy Life",
                    image: "assets/img/home/13.jpeg",
                    description: `<p>Seasonal changes bring specific health challenges, from respiratory issues during humid months to flu and cold outbreaks in winter. Maintaining good health requires proper nutrition, hydration, exercise, hygiene, and timely medical interventions. Using reliable medicines from trusted brands, like Sidmus Medi Corporation, can help manage seasonal illnesses effectively. A combination of preventive care and safe medicines ensures that communities remain healthy and resilient throughout the year.</p>`,
                    date: "Aug 18, 2024"
                },
                {
                    id: 4,
                    heading: "Understanding Diabetes and Its Management",
                    image: "assets/img/home/7.jpeg",
                    description: `<p>Diabetes is increasingly common in India and requires careful management to prevent complications. Key strategies include maintaining a healthy diet, exercising regularly, monitoring blood sugar levels, and taking prescribed medications. Sidmus Medi Corporation provides high-quality pharmaceutical products that support effective diabetes management. By combining lifestyle adjustments with trusted medical care, individuals can maintain better control over their condition and improve overall quality of life.</p>`,
                    date: "Aug 15, 2024"
                },
                {
                    id: 5,
                    heading: "Women's Health Awareness: Tips and Care",
                    image: "assets/img/home/12.jpeg",
                    description: `<p>Women's health is a crucial part of community wellness but often receives less attention. Preventive healthcare, proper nutrition, regular check-ups, and safe medicines are essential for maintaining health at every stage of life. Sidmus Medi Corporation offers high-quality pharmaceutical products designed to meet women’s specific health needs. Educating women about their health and providing access to reliable medicines empowers them to live healthier and lead more fulfilling lives.</p>`,
                    date: "Aug 18, 2024"
                }
                ];
      
                const blogListView = document.getElementById("blogListView");
                const blogDetailView = document.getElementById("blogDetailView");

                blogs.forEach(blog => {
                const col = document.createElement("div");
                col.className = "col-md-6 col-lg-4";

                col.innerHTML = `
                    <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="blog-item-img">
                        <img src="${blog.image}" alt="${blog.heading}" class="img-fluid" style="width:100%; height:250px; object-fit:cover;">
                        <span class="blog-date"><i class="far fa-calendar-alt"></i> ${blog.date}</span>
                    </div>
                    <div class="blog-item-info">
                        <h4 class="blog-title mt-4">
                        <a href="javascript:void(0)" onclick="showDetail(${blog.id})">${blog.heading}</a>
                        </h4>
                        <a class="theme-btn" href="javascript:void(0)" onclick="showDetail(${blog.id})">
                        Read More<i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    </div>
                `;

                blogListView.appendChild(col);
                });

                // Show blog details
                function showDetail(id) {
                const blog = blogs.find(b => b.id === id);
                if (!blog) return;

                document.getElementById("detailTitle").innerText = blog.heading;
                document.getElementById("detailImage").src = blog.image;
                document.getElementById("detailImage").alt = blog.heading;
                document.getElementById("detailContent").innerHTML = blog.description;

                blogListView.classList.add("d-none");
                blogDetailView.classList.remove("d-none");
                }

                function goBack() {
                blogDetailView.classList.add("d-none");
                blogListView.classList.remove("d-none");
                }
                const params = new URLSearchParams(window.location.search);
                const showId = parseInt(params.get('show')); 
                if (showId) {
                    showDetail(showId);
                }

            </script>
            
        </div>
    </div>
    <!-- blog area end -->
<?php include("include/footer.php"); ?>

<div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="blog-item-img">
                            <img src="assets/img/blog/01.jpg" alt="Thumb">
                            <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 12, 2024</span>
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2.5k Comments</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">There are many variations of passage available majority suffered.</a>
                            </h4>
                            <p>There are many variations available the majority have suffered alteration randomised
                                words.</p>
                            <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                