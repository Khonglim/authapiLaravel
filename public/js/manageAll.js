$(document).ready(function() {
    $("#btn-addUser").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: 'adduser',
            data: {
                name: $("#frmAddUser input[name=name]").val(),
                password: $("#frmAddUser input[name=password]").val(),
                password_confirmation: $("#frmAddUser input[name=password_confirmation]").val(),
                name_lastname: $("#frmAddUser input[name=name_lastname]").val(),
                school: $("#frmAddUser input[name=school]").val(),
                roles_id_user: $("#frmAddUser select[name=roles_id_user]").val(),
            },

            dataType: 'json',
            success: function(data) {

                alert("สำเร็จ!!");

            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-task-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#add-task-errors').append('<li>' + value + '</li>');
                });
                $("#add-error-bag").show();
            }
        });
    });
});



function addTaskFormUser() {
    $(document).ready(function() {
        $("#add-error-bag").hide();
        $('#modal-addAdmin').modal('show');
    });
}





$(document).ready(function() {
    $("#btn-addSchool").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: 'addschool',
            data: {
                name_shcool: $("#frmAddSchool input[name=name_shcool]").val(),
                email: $("#frmAddSchool input[name=email]").val(),
                tel: $("#frmAddSchool input[name=tel]").val(),
                address: $("#frmAddSchool textarea[name=address]").val(),
            },

            dataType: 'json',
            success: function(data) {

                alert("สำเร็จ!!");

            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-task-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#add-task-errors').append('<li>' + value + '</li>');
                });
                $("#add-error-bag").show();
            }
        });
    });
});

function addTaskFormSchool() {
    $(document).ready(function() {
        $("#add-error-bag").hide();
        $('#modal-addSchool').modal('show');
    });
}




























function addTaskFormDetlieStu() {
    $(document).ready(function() {
        $("#add-error-DetlieStu").hide();
        $('#modal-DetlieStu').modal('show');
    });
}


function addTaskFormDeletStu() {
    $(document).ready(function() {
        $("#add-error-bag").hide();
        $('#modal-DeletStu').modal('show');
    });
}







function addTaskFormTc() {
    $(document).ready(function() {
        $("#add-error-bag").hide();
        $('#modal-addTeacher').modal('show');
    });
}




$(document).ready(function() {
    $("#btn-addTc").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/addtc',
            data: {
                name: $("#frmAddTc input[name=name]").val(),
                password: $("#frmAddTc input[name=password]").val(),
                password_confirmation: $("#frmAddTc input[name=password_confirmation]").val(),
                name_lastname: $("#frmAddTc input[name=name_lastname]").val(),
                degree: $("#frmAddTc input[name=degree]").val(),
                room: $("#frmAddTc input[name=room]").val(),
                school: $("#frmAddTc input[name=school]").val(),
                type: $("#frmAddTc input[name=type]").val(),

            },

            dataType: 'json',
            success: function(data) {

                swal.fire("บันทึกสำเร็จ!", "", "success").then(function(){
                    location.reload();
                });
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-task-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#add-task-errors').append('<li>' + value + '</li>');
                });
                $("#add-error-bag").show();
            }
        });
    });
});






function addParent() {
    $(document).ready(function() {
        $("#add-error-bag2").hide();
        $('#modal-addParent').modal('show');
    });
}

$(document).ready(function() {
    $("#btn-addParent").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/parent',
            data: {
                name: $("#frmaddParent input[name=name]").val(),
                password: $("#frmaddParent input[name=password]").val(),
                password_confirmation: $("#frmaddParent input[name=password_confirmation]").val(),
                name_lastname: $("#frmaddParent input[name=name_lastname]").val(),
                student_code: $("#frmaddParent input[name=student_code]").val(),
                school: $("#frmaddParent input[name=school]").val(),
                type: $("#frmaddParent input[name=type]").val(),
            },

            dataType: 'json',
            success: function(data) {

                swal.fire("บันทึกสำเร็จ!", "", "success").then(function(){
                    location.reload();
                });
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-task-errors2').html('');
                $.each(errors.messages, function(key, value) {
                    $('#add-task-errors2').append('<li>' + value + '</li>');
                });
                $("#add-error-bag2").show();
            }
        });
    });
});
