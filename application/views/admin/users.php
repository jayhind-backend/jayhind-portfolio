<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<div class="content-wrapper">

<section class="content-header">

<div class="container-fluid">

<div class="row">

<div class="col-sm-6">

<h2>

User Management

</h2>

</div>

<div class="col-sm-6 text-end">

<a
href="<?= base_url('index.php/admin/user_form'); ?>"
class="btn btn-primary">

<i class="fas fa-plus"></i>
Add User

</a>

</div>

</div>

</div>

</section>

<section class="content">

<div class="container-fluid">

<?php if($this->session->flashdata('success')){ ?>

<div class="alert alert-success">

<?= $this->session->flashdata('success'); ?>

</div>

<?php } ?>

<?php if($this->session->flashdata('error')){ ?>

<div class="alert alert-danger">

<?= $this->session->flashdata('error'); ?>

</div>

<?php } ?>

<div class="card">

<div class="card-header">

<h3 class="card-title">

All Admin Users

</h3>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-striped table-hover">

<thead>

<tr>

<th>#</th>

<th>Name</th>

<th>Email</th>

<th>Created At</th>

<th width="150">

Action

</th>

</tr>

</thead>

<tbody>

<?php

$i=1;

foreach($users as $row){

?>

<tr>

<td><?= $i++; ?></td>

<td>

<?= htmlspecialchars($row->name); ?>

<?php if($row->id==$this->session->userdata('admin_id')){ ?>

<span class="badge bg-info">You</span>

<?php } ?>

</td>

<td><?= htmlspecialchars($row->email); ?></td>

<td>

<?= date('d-m-Y',strtotime($row->created_at)); ?>

</td>

<td>

<a
href="<?= base_url('index.php/admin/user_form/'.$row->id); ?>"
class="btn btn-info btn-sm">

<i class="fas fa-edit"></i>

</a>

<?php if($row->id!=$this->session->userdata('admin_id')){ ?>

<a
href="<?= base_url('index.php/admin/delete_user/'.$row->id); ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this user?')">

<i class="fas fa-trash"></i>

</a>

<?php } ?>

</td>

</tr>

<?php } ?>

<?php if(empty($users)){ ?>

<tr>

<td colspan="5" class="text-center">

No users found.

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</section>

</div>

<?php $this->load->view('admin/footer'); ?>
