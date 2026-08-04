<?php $this->load->view('admin/header'); ?>

<?php $this->load->view('admin/sidebar'); ?>

<div class="content-wrapper">

<section class="content-header">

<div class="container-fluid">

<div class="row">

<div class="col-sm-6">

<h1>

Dashboard

</h1>

</div>

</div>

</div>

</section>

<section class="content">

<div class="container-fluid">

<div class="row">

<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

<div class="small-box bg-primary">

<div class="inner">

<h3>6</h3>

<p>Total Projects</p>

</div>

<div class="icon">

<i class="fas fa-folder"></i>

</div>

</div>

</div>

<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

<div class="small-box bg-success">

<div class="inner">

<h3>15</h3>

<p>Total Skills</p>

</div>

<div class="icon">

<i class="fas fa-code"></i>

</div>

</div>

</div>

<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

<div class="small-box bg-warning">

<div class="inner">

<h3>10</h3>

<p>Messages</p>

</div>

<div class="icon">

<i class="fas fa-envelope"></i>

</div>

</div>

</div>

<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

<div class="small-box bg-danger">

<div class="inner">

<h3>1</h3>

<p>Admins</p>

</div>

<div class="icon">

<i class="fas fa-user-shield"></i>

</div>

</div>

</div>

</div>

<div class="card">

<div class="card-header">

<h3 class="card-title">

Latest Contact Messages

</h3>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-hover">

<thead>

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Subject</th>

<th>Date</th>

<th>Action</th>

</tr>

</thead>

<tbody>

<tr>

<td>1</td>

<td>Rahul</td>

<td>rahul@gmail.com</td>

<td>Need Website</td>

<td>04 Aug</td>

<td>

<button class="btn btn-primary btn-sm">

View

</button>

</td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

</section>

</div>

<?php $this->load->view('admin/footer'); ?>