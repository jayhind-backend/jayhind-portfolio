<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>

body{

    margin:0;

    padding:0;

    background:linear-gradient(135deg,#0d6efd,#6610f2);

    height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    font-family:Arial,sans-serif;

}

.login-box{

    width:420px;

    background:#fff;

    border-radius:20px;

    padding:40px;

    box-shadow:0 20px 50px rgba(0,0,0,.25);

}

.login-box h2{

    font-weight:bold;

}

.logo{

    width:90px;

    height:90px;

    background:#0d6efd;

    color:#fff;

    border-radius:50%;

    display:flex;

    justify-content:center;

    align-items:center;

    margin:auto;

    font-size:35px;

    margin-bottom:20px;

}

.form-control{

    height:50px;

    border-radius:10px;

}

.btn-login{

    height:50px;

    border-radius:10px;

    font-size:18px;

}

.footer{

    text-align:center;

    margin-top:20px;

    color:#888;

    font-size:14px;

}

</style>

</head>

<body>

<div class="login-box">

<div class="logo">

<i class="fa-solid fa-user-shield"></i>

</div>

<h2 class="text-center">

Admin Login

</h2>

<p class="text-center text-muted">

Portfolio Management System

</p>

<!-- Flash Message -->

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

<?= validation_errors('<div class="alert alert-danger">','</div>'); ?>

<form method="post" action="<?= base_url('index.php/admin/login_check'); ?>">

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
placeholder="Enter Email"
value="<?= set_value('email'); ?>">

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
placeholder="Enter Password">

</div>

<div class="mb-3 form-check">

<input
type="checkbox"
class="form-check-input"
id="remember">

<label
class="form-check-label"
for="remember">

Remember Me

</label>

</div>

<button
type="submit"
class="btn btn-primary w-100 btn-login">

<i class="fa-solid fa-right-to-bracket"></i>

Login

</button>

</form>

<div class="footer">

© <?= date('Y'); ?>

Portfolio Admin Panel

</div>

</div>

</body>

</html>