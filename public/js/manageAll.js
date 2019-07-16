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
                username: $("#frmAddTc input[name=username]").val(),
                password: $("#frmAddTc input[name=password]").val(),
                name_lastname: $("#frmAddTc textarea[name=name_lastname]").val(),
                degree: $("#frmAddTc textarea[name=degree]").val(),
                school: $("#frmAddTc textarea[name=school]").val(),
                type: $("#frmAddTc textarea[name=type]").val(),

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
