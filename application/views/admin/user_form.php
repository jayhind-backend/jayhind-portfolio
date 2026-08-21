<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<div class="content-wrapper">

<section class="content-header">

<div class="container-fluid">

<div class="row">

<div class="col-sm-6">

<h2>

<?= $user ? 'Edit User' : 'Add User'; ?>

</h2>

</div>

<div class="col-sm-6 text-end">

<a
href="<?= base_url('index.php/admin/users'); ?>"
class="btn btn-secondary">

<i class="fas fa-arrow-left"></i>
Back

</a>

</div>

</div>

</div>

</section>

<section class="content">

<div class="container-fluid">

<?php if($this->session->flashdata('error')){ ?>

<div class="alert alert-danger">

<?= $this->session->flashdata('error'); ?>

</div>

<?php } ?>

<?= validation_errors('<div class="alert alert-danger">','</div>'); ?>

<div class="card">

<form method="post" action="<?= base_url('index.php/admin/user_save'); ?>">

<div class="card-body">

<input type="hidden" name="id" value="<?= $user ? $user->id : 0; ?>">

<div class="mb-3">

<label class="form-label">Name</label>

<input
type="text"
name="name"
class="form-control"
value="<?= set_value('name', $user ? $user->name : ''); ?>"
required>

</div>

<div class="mb-3">

<label class="form-label">Email</label>

<input
type="email"
name="email"
class="form-control"
value="<?= set_value('email', $user ? $user->email : ''); ?>"
required>

</div>

<div class="mb-3">

<label class="form-label">

Password

<?php if($user){ ?>

<small class="text-muted">

(leave blank to keep the current password)

</small>

<?php } ?>

</label>

<input
type="password"
name="password"
class="form-control"
minlength="6"
<?= $user ? '' : 'required'; ?>>

</div>

</div>

<div class="card-footer">

<button type="submit" class="btn btn-primary">

<i class="fas fa-save"></i>
Save

</button>

</div>

</form>

</div>

</div>

</section>

</div>

<?php $this->load->view('admin/footer'); ?>
