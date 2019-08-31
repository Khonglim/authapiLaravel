$(function () {



    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

  });







  $('#createNewProduct').click(function () {

      $('#saveBtn').val("create-product");

      $('#product_id').val('');

      $('#productForm').trigger("reset");

      $('#modelHeading').html("Create New Product");

      $('#ajaxModel').modal('show');

  });



  $('body').on('click', '.editUser', function () {

    var user_id = $(this).data('id');

    $.get("userData" +'/' + user_id +'/edit', function (data) {
        $('#modelHeading').html("แก้ไข ผู้ใช้");
        $('#saveBtnUser').val("แก้ไข");
        $('#modal-addAdmin').modal('show');
        $('#name').val(data[0].username);
        $('#name_lastname').val(data[0].name_lastname);



    })

 });







  $('body').on('click', '.deleteProduct', function () {



      var product_id = $(this).data("id");

      confirm("Are You sure want to delete !");



      $.ajax({

          type: "DELETE",

          url: "{{ route('ajaxproducts.store') }}"+'/'+product_id,

          success: function (data) {

              table.draw();

          },

          error: function (data) {

              console.log('Error:', data);

          }
      });
  });
});
