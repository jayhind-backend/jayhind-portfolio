<!-- HERO SECTION -->
<section class="hero py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <span class="text-primary fw-bold fs-5">
                    Hello, I'm
                </span>

                <h1 class="display-2 fw-bold mt-2">
                    <?= $name ?>
                </h1>

                <h2 class="text-secondary mb-4">
                    <?= $profession ?>
                </h2>

                <p class="lead text-muted">
                    I am a passionate PHP & CodeIgniter Developer. I build dynamic,
                    responsive and secure web applications using PHP, MySQL,
                    Bootstrap and JavaScript.
                </p>

                <div class="mt-4">

                    <a href="<?= base_url('index.php/home/projects') ?>" class="btn btn-primary btn-lg me-3">
                        <i class="fa-solid fa-folder-open"></i>
                        View Projects
                    </a>

                    <a href="<?= base_url('index.php/home/contact') ?>" class="btn btn-outline-dark btn-lg">
                        <i class="fa-solid fa-envelope"></i>
                        Contact Me
                    </a>

                </div>

                <div class="mt-5">

                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="#" class="social-icon">
                        <i class="fab fa-github"></i>
                    </a>

                </div>

            </div>

            <div class="col-lg-6 text-center">

                <div class="profile-box">

                    <img src="<?= base_url('assets/images/profileimg.jpeg') ?>"
                        class="profile-img img-fluid">

                </div>

            </div>

        </div>

    </div>

</section>

<!-- FEATURES -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-3">

                <div class="card feature-card h-100 border-0">

                    <div class="card-body text-center">

                        <i class="fa-solid fa-code feature-icon"></i>

                        <h4 class="mt-3">
                            Clean Code
                        </h4>

                        <p>
                            Writing maintainable and reusable code with MVC architecture.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card feature-card h-100 border-0">

                    <div class="card-body text-center">

                        <i class="fa-solid fa-bolt feature-icon"></i>

                        <h4 class="mt-3">
                            Fast Performance
                        </h4>

                        <p>
                            Optimized websites with fast loading speed.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card feature-card h-100 border-0">

                    <div class="card-body text-center">

                        <i class="fa-solid fa-mobile-screen-button feature-icon"></i>

                        <h4 class="mt-3">
                            Responsive
                        </h4>

                        <p>
                            Perfect design for Mobile, Tablet and Desktop.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card feature-card h-100 border-0">

                    <div class="card-body text-center">

                        <i class="fa-solid fa-shield-halved feature-icon"></i>

                        <h4 class="mt-3">
                            Secure
                        </h4>

                        <p>
                            Secure coding practices with modern standards.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ABOUT -->

<section class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-5">

                <img src="<?= base_url('assets/images/profileimg.jpeg') ?>" class="img-fluid rounded shadow">

            </div>

            <div class="col-lg-7">

                <span class="text-primary fw-bold">
                    ABOUT ME
                </span>

                <h2 class="fw-bold mt-2">
                    <?= $name ?>
                </h2>

                <p class="mt-4 text-muted">

                    I am a Full Stack PHP Developer with experience in PHP,
                    CodeIgniter, Laravel, MySQL, Bootstrap, HTML, CSS and JavaScript.

                </p>

                <div class="row mt-4">

                    <div class="col-md-6">

                        <ul class="list-group">

                            <li class="list-group-item">
                                ✔ PHP
                            </li>

                            <li class="list-group-item">
                                ✔ CodeIgniter
                            </li>

                            <li class="list-group-item">
                                ✔ Laravel
                            </li>

                        </ul>

                    </div>

                    <div class="col-md-6">

                        <ul class="list-group">

                            <li class="list-group-item">
                                ✔ Bootstrap
                            </li>

                            <li class="list-group-item">
                                ✔ MySQL
                            </li>

                            <li class="list-group-item">
                                ✔ JavaScript
                            </li>

                        </ul>

                    </div>

                </div>

                <a href="#" class="btn btn-primary mt-4">

                    Download Resume

                </a>

            </div>

        </div>

    </div>

</section>

<!-- SKILLS -->

<section class="py-5 bg-light">

    <div class="container">

        <h2 class="text-center fw-bold mb-5">
            My Skills
        </h2>

        <div class="row">

            <div class="col-md-6 mb-4">

                <h5>PHP</h5>

                <div class="progress">

                    <div class="progress-bar bg-primary" style="width:95%">
                        95%
                    </div>

                </div>

            </div>

            <div class="col-md-6 mb-4">

                <h5>CodeIgniter</h5>

                <div class="progress">

                    <div class="progress-bar bg-success" style="width:90%">
                        90%
                    </div>

                </div>

            </div>

            <div class="col-md-6 mb-4">

                <h5>Laravel</h5>

                <div class="progress">

                    <div class="progress-bar bg-warning" style="width:85%">
                        85%
                    </div>

                </div>

            </div>

            <div class="col-md-6 mb-4">

                <h5>MySQL</h5>

                <div class="progress">

                    <div class="progress-bar bg-danger" style="width:92%">
                        92%
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- PROJECTS -->

<section class="py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5">

            Latest Projects

        </h2>

        <div class="row">

            <div class="col-md-4">

                <div class="card shadow border-0">

                    <img src="<?= base_url('assets/images/img1.jfif') ?>" class="card-img-top">

                    <div class="card-body">

                        <h4>MLM Software</h4>

                        <p>
                            PHP, CodeIgniter, MySQL
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow border-0">

                    <img src="<?= base_url('assets/images/ecom.jfif') ?>" class="card-img-top">

                    <div class="card-body">

                        <h4>E-Commerce</h4>

                        <p>
                            Laravel & Bootstrap
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow border-0">

                    <img src="<?= base_url('assets/images/img3.jfif') ?>" class="card-img-top">

                    <div class="card-body">

                        <h4>Admin Panel</h4>

                        <p>
                            Dashboard Development
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- CONTACT -->

<section class="py-5 bg-primary text-white">

    <div class="container text-center">

        <h2>
            Let's Work Together
        </h2>

        <p class="mt-3">
            Have any Project? Feel free to contact me.
        </p>

        <a href="<?= base_url('index.php/home/contact') ?>" class="btn btn-light btn-lg">

            Contact Now

        </a>

    </div>

</section>