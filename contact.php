<?php 
$page= 'contact';
include("include/header.php"); ?>
    <!-- breadcrumb -->
    <div class="site-breadcrumb">
        <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
        <div class="container">
            <div class="site-breadcrumb-wrap">
                <h4 class="breadcrumb-title">Contact Us</h4>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact area -->
    <div class="contact-area pt-100 pb-80">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-map-location-dot"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h5>Office Address</h5>
                                            <p>Guwahati, Assam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-headset"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h5>Call Us</h5>
                                            <p>+91 123 4565 788</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-envelopes"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h5>Email Us</h5>
                                            <p><a href="https://live.themewild.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="036a6d656c43667b626e736f662d606c6e">[email&#160;protected]</a></p>
                                            <p><a href="https://live.themewild.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="790a0c0909160b0d391c01181409151c571a1614">[email&#160;protected]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-alarm-clock"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h5>Open Time</h5>
                                            <p>Mon - Sat (10AM - 05PM)</p>
                                            <p>Sunday - <span class="text-danger">Closed</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Get In Touch</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page words which even slightly when looking at its layout. </p>
                            </div>
                            <div class="contact-form-wrapper">
                                <form id="whatsappForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" 
                                                    pattern="[6-9][0-9]{9}" maxlength="10" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="4" class="form-control"
                                            placeholder="Write Your Message" required></textarea>
                                    </div>
                                    <button type="submit" class="theme-btn">Send Message <i class="far fa-paper-plane"></i></button>
                                    <div class="col-md-12 my-3">
                                        <div class="form-messege text-success" id="formMessage"></div>
                                    </div>
                                </form>
                            </div>

                            <script>
                            document.getElementById('whatsappForm').addEventListener('submit', function(e) {
                                e.preventDefault();

                                const name = document.getElementById('name').value.trim();
                                const phone = document.getElementById('phone').value.trim();
                                const subject = document.getElementById('subject').value.trim();
                                const message = document.getElementById('message').value.trim();

                                const phonePattern = /^[6-9][0-9]{9}$/;
                                if (!phonePattern.test(phone)) {
                                    alert('Please enter a valid 10-digit phone number starting with 9, 8, 7, or 6.');
                                    return;
                                }

                                const whatsappMessage = `Hello, my name is ${name}.%0APhone: ${phone}%0ASubject: ${subject}%0AMessage: ${message}`;
                                
                                const whatsappNumber = '919706238017';
                                const whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

                                window.open(whatsappURL, '_blank');

                                document.getElementById('formMessage').innerText = "Redirecting to WhatsApp...";
                            });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact area -->

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
                                var whatsappNumber = "919876543210";
                                var text = "Hello, I want to get in touch. Message: " + message;
                                var url = "https://wa.me/" + whatsappNumber + "?text=" + encodeURIComponent(text);
                                window.open(url, "_blank");
                                return false;
                            }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter area end -->

    <!-- map -->
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114612.70569596994!2d91.70288289999999!3d26.1430486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5a287f9133ff%3A0x2bbd1332436bde32!2sGuwahati%2C%20Assam!5e0!3m2!1sen!2sin!4v1761131152197!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- end map -->

    <?php include("include/footer.php"); ?>