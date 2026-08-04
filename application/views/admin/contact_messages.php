<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<div class="content-wrapper">

<section class="content-header">

<div class="container-fluid">

<div class="row">

<div class="col-sm-6">

<h2>

Contact Messages

</h2>

</div>

</div>

</div>

</section>

<section class="content">

<div class="container-fluid">

<div class="card">

<div class="card-header">

<h3 class="card-title">

All Contact Messages

</h3>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-striped table-hover">

<thead>

<tr>

<th>#</th>

<th>Name</th>

<th>Email</th>

<th>Subject</th>

<th>Message</th>

<th>Date</th>

<th width="150">

Action

</th>

</tr>

</thead>

<tbody>

<?php

$i=1;

foreach($messages as $row){

?>

<tr>

<td><?= $i++; ?></td>

<td><?= htmlspecialchars($row->name); ?></td>

<td><?= htmlspecialchars($row->email); ?></td>

<td><?= htmlspecialchars($row->subject); ?></td>

<td>

<?= character_limiter(htmlspecialchars($row->message),40); ?>

</td>

<td>

<?= date('d-m-Y',strtotime($row->created_at)); ?>

</td>

<td>

<a
href="<?= base_url('index.php/admin/view_message/'.$row->id); ?>"
class="btn btn-info btn-sm">

<i class="fas fa-eye"></i>

</a>

<a
href="<?= base_url('index.php/admin/delete_message/'.$row->id); ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this message?')">

<i class="fas fa-trash"></i>

</a>

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