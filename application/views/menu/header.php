<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/template/sb-admin-2/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/template/sb-admin-2/css/sb-admin-2.min.css') ?>" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
	<?php if (strtolower($this->uri->uri_string()) == 'kriteria' || strtolower($this->uri->uri_string()) == 'alternatif') : ?>
    <link href="<?= base_url('assets/template/sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
	<?php endif; ?>

	<!-- Internal CSS -->
	<style>
		th, td {
    		white-space: nowrap;
		}
	</style>
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center"
				href="#">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">SPK <sup>WP</sup></div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Beranda -->
			<li class="nav-item <?= ($this->uri->uri_string() == '' || strtolower($this->uri->uri_string()) == 'dashboard') ? 'active' : '' ?>">
				<a class="nav-link" href="<?= ($this->uri->uri_string() == '' || strtolower($this->uri->uri_string()) == 'dashboard') ? '#' : base_url('dashboard') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Beranda</span></a>
			</li>

            <!-- Nav Item - Kriteria -->
			<li class="nav-item <?= (strtolower($this->uri->uri_string()) == 'kriteria' || strtolower($this->uri->uri_string()) == 'kriteria/tambah') ? 'active' : '' ?>">
				<a class="nav-link" href="<?= strtolower($this->uri->uri_string()) == 'kriteria' ? '#' : base_url('kriteria') ?>">
					<i class="fas fa-fw fa-cog"></i>
					<span>Kriteria</span></a>
			</li>

            <!-- Nav Item - Alternatif -->
			<li class="nav-item <?= strtolower($this->uri->uri_string()) == 'alternatif' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= strtolower($this->uri->uri_string()) == 'alternatif' ? '#' : base_url('alternatif') ?>">
					<i class="fas fa-fw fa-wrench"></i>
					<span>Alternatif</span></a>
			</li>

            <!-- Nav Item - Penilaian -->
			<li class="nav-item <?= strtolower($this->uri->uri_string()) == 'perhitungan' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= strtolower($this->uri->uri_string()) == 'perhitungan' ? '#' : base_url('perhitungan') ?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Penilaian</span></a>
			</li>
            
			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<!-- End of Sidebar -->
