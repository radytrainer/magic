$(document).ready(function() {
    // Update user information modal
      $('.edit-btn').on('click', function() {
        $('#editUserModalId').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
      // console.log(data);

        $('#update_id').val(data[0]);
        $('#username').val(data[1]);
        $('#email').val(data[2]);
        $('#pro_id:selected').val(data[3]);
        $('#sub_id:selected').val(data[4]);
      });

    // Update province information modal
    $('.edit-btn-pro').on('click', function() {
        $('#editProvinceModalId').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
       console.log(data);

        $('#update_id').val(data[0]);
        $('#proname').val(data[1]);
      });
      
    // Update subject information modal  
    $('.edit-btn-sub').on('click', function() {
        $('#editSubjectModalId').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
       console.log(data);

        $('#update_id').val(data[0]);
        $('#subname').val(data[1]);
      });
  });