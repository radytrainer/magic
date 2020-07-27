<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php // print_r($provinceData) ?>
<p><a href="" class="badge badge-primary" data-toggle="modal" data-target="#createProvinceModalId"><i class="material-icons">add</i></a></p>
<table class="table table-borderless table-hover">
	<thead>
		<tr>
			<th class="hide">id</th>
			<th>Province</th>
			<th></th>
		</tr>
	</thead>
	<?php foreach($provinceData as $province): ?>
	<tbody>
		<tr class="actionRow">
			<td class="hide"><?= $province['p_id'] ?></td>
			<td><?= $province['proname'] ?></td>
			<td class="action">
				<button type="button" class="not-btn edit-btn-pro"><i class="material-icons text-info">edit</i></button>
				<a href="<?= base_url("/province/remove/". $province['p_id']) ?>"><i class="material-icons text-danger">delete</i></a>
				
			</td>
		</tr>
	</tbody>
	<?php endforeach ?>
	<?php //print_r($provinceData) ?>
</table>
<?= $this->include('modals/createProvinceModal') ?>
<?= $this->include('modals/editProvinceModal') ?>
<?= $this->endSection() ?>	