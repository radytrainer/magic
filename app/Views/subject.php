<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<p><a href="" class="badge badge-primary" data-toggle="modal" data-target="#createSubjectModalId"><i class="material-icons">add</i></a></p>
<table class="table table-borderless table-hover">
	<thead>
		<tr>
			<th class="hide">id</th>
			<th>Province</th>
			<th></th>
		</tr>
	</thead>
	<?php foreach($subjectData as $subject): ?>
	<tbody>
		<tr class="actionRow">
			<td class="hide"><?= $subject['s_id'] ?></td>
			<td><?= $subject['subname'] ?></td>
			<td class="action">
				<button type="button" class="not-btn edit-btn-sub"><i class="material-icons text-info">edit</i></button>
				<a href="<?= base_url("/subject/remove/". $subject['s_id']) ?>"><i class="material-icons text-danger">delete</i></a>
				
			</td>
		</tr>
	</tbody>
	<?php endforeach ?>
	<?php //print_r($provinceData) ?>
</table>
<?= $this->include('modals/createSubjectModal') ?>
<?= $this->include('modals/editSubjectModal') ?>
<?= $this->endSection() ?>	