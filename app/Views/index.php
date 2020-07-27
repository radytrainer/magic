
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<p><a href="" class="badge badge-primary" data-toggle="modal" data-target="#createUserModalId"><i class="material-icons">add</i></a></p>
<table class="table table-borderless table-hover">
	<thead>
		<tr>
			<th class="hide">id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Province</th>
			<th>Subject</th>
			<th></th>
		</tr>
	</thead>
	<?php foreach($userData as $user): ?>
	<tbody>
		<tr class="actionRow">
			<td class="hide"><?= $user['u_id'] ?></td>
			<td><?= $user['username'] ?></td>
			<td><?= $user['email'] ?></td>
			<td><?= $user['proname'] ?></td>
			<td><?= $user['subname'] ?></td>
			<td class="action">
				<button type="button" class="not-btn edit-btn"><i class="material-icons text-info">edit</i></button>
				<a href="<?= base_url("remove/". $user['u_id']) ?>"><i class="material-icons text-danger">delete</i></a>
				
			</td>
		</tr>
	</tbody>
	<?php endforeach ?>
	<?php //print_r($provinceData) ?>
</table>
<?= $this->include('modals/editUserModal') ?>	
<?= $this->include('modals/createUserModal') ?>
<?= $this->endSection() ?>						
				
