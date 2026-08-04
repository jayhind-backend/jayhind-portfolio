<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Portfolio Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<style>

.small-box{
    border-radius:15px;
}

.small-box .icon{
    font-size:65px;
}

.user-panel{
    color:white;
    text-align:center;
    padding:15px;
}

.user-panel img{
    width:70px;
    height:70px;
    border-radius:50%;
    border:3px solid #fff;
}

.table td,
.table th{
    vertical-align:middle;
}

@media(max-width:768px){

.content-header h1{

font-size:24px;

}

.small-box{

margin-bottom:20px;

}

.small-box .icon{

display:none;

}

}

</style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">

        <li class="nav-item">

            <a class="nav-link" data-widget="pushmenu" href="#" role="button">

                <i class="fas fa-bars"></i>

            </a>

        </li>

    </ul>

    <ul class="navbar-nav ms-auto">

        <li class="nav-item">

            <span class="nav-link">

                Welcome,
                <?= $this->session->userdata('admin_name'); ?>

            </span>

        </li>

    </ul>

</nav>