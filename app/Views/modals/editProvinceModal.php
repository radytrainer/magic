<!-- The Modal -->
<div class="modal fade" id="editProvinceModalId">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Province</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?= base_url("/province/update") ?>" method="post">
      <input type="hidden" name="pro_id" id="update_id">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="name" name="proname" required id="proname">
        </div>
        <div class="col">
        <button type="submit" class="btn btn-block btn-info float-right">UPDATE</button>
        </div>
      </div>
      
    
    </form>
      </div>

     

    </div>
  </div>
</div>