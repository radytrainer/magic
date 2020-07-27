<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
.not-btn {
  all:unset;
  outline:none;
  border:none;
}
.hide {
  opacity:0;
}
</style>

<div class="container mt-5">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('/') ?>">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('/province') ?>">Provinces</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('/subject') ?>">Subjects</a>
  </li>
</ul>

	<div class="row mt-5">
		<div class="col-12">
            <?= $this->renderSection('content') ?>
		</div>
	</div>
</div>
<hr>

<?php  // print_r($userData) ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="<?= base_url('js/main.js') ?>"></script>