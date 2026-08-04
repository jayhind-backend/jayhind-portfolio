<section class="contact-section py-5">

    <div class="container">

        <!-- Heading -->

        <div class="text-center mb-5">

            <h5 class="text-primary fw-bold">
                CONTACT ME
            </h5>

            <h1 class="display-5 fw-bold">
                Let's Build Something Amazing 🚀
            </h1>

            <p class="text-muted">
                Have a project in mind? Feel free to contact me anytime.
            </p>

        </div>

        <div class="row">

            <!-- Left -->

            <div class="col-lg-5 mb-4">

                <div class="contact-info">

                    <h3 class="mb-4">
                        Contact Information
                    </h3>

                    <div class="info-box">

                        <i class="fa-solid fa-user"></i>

                        <div>

                            <h5>Name</h5>

                            <p>Jayhind Yadav</p>

                        </div>

                    </div>

                    <div class="info-box">

                        <i class="fa-solid fa-envelope"></i>

                        <div>

                            <h5>Email</h5>

                            <p>jayhind341@gmail.com</p>

                        </div>

                    </div>

                    <div class="info-box">

                        <i class="fa-solid fa-phone"></i>

                        <div>

                            <h5>Phone</h5>

                            <p>+91 9984047024</p>

                        </div>

                    </div>

                    <div class="info-box">

                        <i class="fa-solid fa-location-dot"></i>

                        <div>

                            <h5>Location</h5>

                            <p>India</p>

                        </div>

                    </div>

                    <hr>

                    <h5 class="mb-3">
                        Follow Me
                    </h5>

                    <a href="#" class="social-btn">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#" class="social-btn">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#" class="social-btn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="#" class="social-btn">
                        <i class="fab fa-github"></i>
                    </a>

                </div>

            </div>

            <!-- Right -->

            <div class="col-lg-7">

                <div class="contact-form">

                    <h3 class="mb-4">
                        Send Message
                    </h3>
					<?php if(validation_errors()) { ?>

<div class="alert alert-danger">

    <?= validation_errors(); ?>

</div>

<?php } ?>
<?php if($this->session->flashdata('success')){ ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">

    <?= $this->session->flashdata('success'); ?>

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert"></button>

</div>

<?php } ?>

<?php if($this->session->flashdata('error')){ ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">

    <?= $this->session->flashdata('error'); ?>

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert"></button>

</div>

<?php } ?>
               <form method="post"
action="<?= base_url('index.php/contact/save'); ?>">

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <input type="text"
                                    class="form-control" name="name"
                                    placeholder="Your Name">

                            </div>

                            <div class="col-md-6 mb-3">

                                <input type="email"
                                    class="form-control"
									name="email"
                                    placeholder="Email Address">

                            </div>

                        </div>

                        <div class="mb-3">

                            <input type="text"
                                class="form-control"
								name="subject"
                                placeholder="Subject">

                        </div>

                        <div class="mb-3">

                            <textarea class="form-control"
                                rows="6"
								name="message"
                                placeholder="Write your message..."></textarea>

                        </div>

                        <button class="btn btn-primary btn-lg">

                            <i class="fa-solid fa-paper-plane"></i>

                            Send Message

                        </button>

                    </form>

                </div>

            </div>

        </div>

        <!-- Map -->

        <div class="row mt-5">

            <div class="col-12">

                <div class="map-box">

                    <h3 class="text-center">

                        My Location

                    </h3>

                    <iframe
                     src="https://maps.google.com/maps?q=Government%20Polytechnic%20Lucknow&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="400"
                        style="border:0;border-radius:20px;"
                        loading="lazy">
                    </iframe>

                </div>

            </div>

        </div>

    </div>

</section>