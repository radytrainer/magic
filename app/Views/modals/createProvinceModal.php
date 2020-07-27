<!-- The Modal -->
<div class="modal fade" id="createProvinceModalId">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Province</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?= base_url("/province/create") ?>" method="post">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Province" name="proname" required>
        </div>
        <div class="col">
        <button type="submit" class="btn btn-block sm btn-info float-right">CREATE</button>
        </div>
      </div>
     
    
    </form>
      </div>

     

    </div>
  </div>
</div>