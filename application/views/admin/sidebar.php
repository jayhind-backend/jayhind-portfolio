<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="<?= base_url('index.php/admin/dashboard') ?>" class="brand-link">

<span class="brand-text fw-bold">

Portfolio Admin

</span>

</a>

<div class="sidebar">

<div class="user-panel">

<img src="<?= base_url('assets/images/profileimg.jpeg');?>">

<h5 class="mt-2">

<?= $this->session->userdata('admin_name'); ?>

</h5>

</div>

<nav>

<ul class="nav nav-pills nav-sidebar flex-column">

<li class="nav-item">

<a href="<?= base_url('index.php/admin/dashboard') ?>" class="nav-link active">

<i class="nav-icon fas fa-home"></i>

<p>Dashboard</p>

</a>

</li>

<li class="nav-item">

<a href="<?= base_url('index.php/admin/profile') ?>" class="nav-link">

<i class="nav-icon fas fa-user"></i>

<p>Profile</p>

</a>

</li>

<li class="nav-item">

<a href="<?= base_url('index.php/admin/projects') ?>" class="nav-link">

<i class="nav-icon fas fa-folder"></i>

<p>Projects</p>

</a>

</li>

<li class="nav-item">

<a href="<?= base_url('index.php/admin/contact_messages') ?>" class="nav-link">

<i class="nav-icon fas fa-envelope"></i>

<p>Messages</p>

</a>

</li>

<li class="nav-item">

<a href="<?= base_url('index.php/admin/contact_messages') ?>" class="nav-link">

<i class="nav-icon fas fa-envelope"></i>

<p>Contact Messages</p>

</a>

</li>
<li class="nav-item">

<a href="<?= base_url('index.php/admin/logout') ?>" class="nav-link">

<i class="nav-icon fas fa-sign-out-alt"></i>

<p>Logout</p>

</a>

</li>

</ul>

</nav>

</div>

</aside>