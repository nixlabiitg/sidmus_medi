<?php 
$page = 'product';
include("include/header.php"); 
?>
<!-- breadcrumb -->
        <div class="site-breadcrumb">
            <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
            <div class="container">
                <div class="site-breadcrumb-wrap">
                    <h4 class="breadcrumb-title">Shop List One</h4>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
                        <li class="active">Shop List One</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- shop-area -->
        <div class="shop-area bg py-90">
            <div class="container">
                        
                <div class="shop-item-wrap item-list">
                    <div class="row g-4" id="productList"></div>
                </div>

                <script>
                const products = [
                    {
                        name: "Vitamin Capsule",
                        image: "assets/img/medicine/1.jpeg",
                        description: "Vitamin capsules are dietary supplements designed to provide essential vitamins and minerals that support overall health. They help strengthen immunity, improve energy levels, and maintain optimal body functions. Regular intake of vitamin capsules can prevent deficiencies and support the body’s metabolic processes, promoting healthy skin, hair, and nails. Sidmus Medi Corporation ensures high-quality, pure ingredients in each capsule to maximize absorption and effectiveness.",
                        
                    },
                    {
                        name: "Injection",
                        image: "assets/img/medicine/2.jpeg",
                        description: "Injections are sterile solutions administered via a syringe to deliver medication directly into the bloodstream, muscles, or under the skin for faster and precise therapeutic effect. They are used for vaccinations, pain management, antibiotics, and other medical treatments. Sidmus Medi Corporation ensures that each injection is produced under stringent safety and hygiene standards to provide safe, effective, and reliable medication.",
                        
                    },
                    {
                        name: "Syringe",
                        image: "assets/img/medicine/3.jpeg",
                        description: "Syringes are medical instruments used to administer injections, draw blood, or deliver fluids in precise amounts. They are made from high-quality materials to ensure durability, sterility, and ease of use. Sidmus Medi Corporation offers syringes that are safe, reliable, and suitable for both medical professionals and home use, maintaining high standards for patient safety.",
                    },
                    {
                        name: "Tablets for Gastric",
                        image: "assets/img/medicine/4.jpeg",
                        description: "Gastric tablets are medications designed to relieve acidity, heartburn, and indigestion. They help neutralize stomach acid, protect the gastric lining, and improve digestive comfort. Sidmus Medi Corporation provides gastric tablets manufactured under strict quality standards to ensure safety, effectiveness, and rapid relief for individuals experiencing gastric discomfort.",
                        
                    },
                    {
                        name: "Stethoscope",
                        image: "assets/img/medicine/5.jpeg",
                        description: "A stethoscope is an essential diagnostic tool used by healthcare professionals to listen to internal body sounds, such as heartbeats and lung activity. It helps in detecting abnormalities and monitoring patient health. Sidmus Medi Corporation provides stethoscopes designed for clear acoustic performance, comfort, and durability, making them ideal for doctors, nurses, and medical students.",
                        
                    },
                    {
                        name: "Blood Sugar Machine",
                        image: "assets/img/medicine/6.jpeg",
                        description: "A blood sugar machine is a portable device that allows individuals to monitor their blood glucose levels conveniently. It is crucial for managing diabetes and ensuring proper blood sugar control. Sidmus Medi Corporation supplies accurate and easy-to-use blood sugar machines that help patients take charge of their health, enabling timely intervention and better management of lifestyle and medication.",
                        
                    },
                    {
                        name: "Tablets for Iron deficiency",
                        image: "assets/img/medicine/7.jpeg",
                        description: "Iron capsules are supplements formulated to prevent or treat iron deficiency anemia. They help increase hemoglobin levels, improve energy, and support overall vitality. Regular intake of iron capsules is especially beneficial for women, children, and individuals with dietary deficiencies. Sidmus Medi Corporation ensures safe, high-quality iron formulations for effective absorption and optimal results.",
                        
                    }
                ];

                const productList = document.getElementById("productList");

                products.forEach(product => {
                    const col = document.createElement("div");
                    col.className = "col-md-12";

                    col.innerHTML = `
                        <div class="product-item">
                            <div class="product-img">
                                ${product.type ? `<span class="type ${product.type.toLowerCase().replace(/\s/g, '')}">${product.type}</span>` : ""}
                                <img src="${product.image}" alt="${product.name}" style="width:150%; height:250px; object-fit:cover; border-radius:8px;">
                            </div>
                            <div class="product-content">
                                <h3 class="product-title">${product.name}</h3>
                                <p>${product.description}</p>
                            </div>
                        </div>
                    `;

                    productList.appendChild(col);
                });
                </script>

                <!-- pagination -->
                <div class="pagination-area mt-50">
                    <div aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- pagination end -->
            </div>
        </div>
        <!-- shop-area end -->


<?php include("include/footer.php"); ?>