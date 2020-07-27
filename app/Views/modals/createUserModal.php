<!-- The Modal -->
<div class="modal fade" id="createUserModalId">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?= base_url("/create") ?>" method="post">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="name" name="username" required>
        </div>
        <div class="col">
          <input type="email" class="form-control" placeholder="email" name="email" required>
        </div>
      </div>
      <div class="form-group">
      <label for="sel1">Select Province:</label>
      <select class="form-control" name="province">
          <option value="" selected disabled>Choose...</option>
          <?php foreach($provinceData as $province): ?>
            <option value="<?= $province['p_id'] ?>"><?= $province['proname'] ?></option>
          <?php endforeach ?>
      </select>
    </div>
      <div class="form-group">
      <label for="sel1">Select Subject:</label>
      <select class="form-control" name="subject">
          <option value="" selected disabled>Choose...</option>
          <?php foreach($subjectData as $subject): ?>
            <option value="<?= $subject['s_id'] ?>"><?= $subject['subname'] ?></option>
          <?php endforeach ?>
      </select>
    </div>
    <button type="submit" class="btn btn-sm btn-info float-right">CREATE</button>
    </form>
      </div>

     

    </div>
  </div>
</div>