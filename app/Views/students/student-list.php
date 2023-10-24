<?php

$this->extend('layout/app');
$this->section('content');

?>

<!-- ADD Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">Student Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group form-floating mb-3">
                    <input type="student_name" class="form-control student_name" id="student_name" placeholder="Enter Student Name">
                    <label for="student_name" class="form-label">Student Name</label>
                    <span id="error_student_name" class="text text-danger"></span>
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="student_email" class="form-control student_email" id="student_email" placeholder="Enter Student Name">
                    <label for="student_email" class="form-label">Student Email</label>
                    <span id="error_student_email" class="text text-danger"></span>
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="student_phone_no" class="form-control student_phone_no" id="student_phone_no" placeholder="Enter Student Name">
                    <label for="student_phone_no" class="form-label">Student Phone No.</label>
                    <span id="error_student_phone_no" class="text text-danger"></span>
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="student_course" class="form-control student_course" id="student_course" placeholder="Enter Student Name">
                    <label for="student_course" class="form-label">Student Course</label>
                    <span id="error_student_course" class="text text-danger"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary ajaxstudent_save">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- VIEW Modal -->
<div class="modal fade studentViewModal" id="studentViewModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">Student View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>ID: <span class="student_id_view"></span></h4>
                <h4>Student Name: <span class="student_name_view"></span></h4>
                <h4>Student Email: <span class="student_email_view"></span></h4>
                <h4>Student Phone No.: <span class="student_phone_no_view"></span></h4>
                <h4>Student Course: <span class="student_course_view"></span></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary ajaxstudent_save">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- EDIT Modal -->
<div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">Edit Student Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <input type="hidden" class="student_id" id="student_id">

                <div class="form-group form-floating mb-3">
                    <input type="student_name" class="form-control student_name" id="student_name" placeholder="Enter Student Name">
                    <label for="student_name" class="form-label">Student Name</label>
                    
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="student_email" class="form-control student_email" id="student_email" placeholder="Enter Student Email">
                    <label for="student_email" class="form-label">Student Email</label>
                    
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="student_phone_no" class="form-control student_phone_no" id="student_phone_no" placeholder="Enter Student Phone No">
                    <label for="student_phone_no" class="form-label">Student Phone No.</label>
                    
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="student_course" class="form-control student_course" id="student_course" placeholder="Enter Student Course">
                    <label for="student_course" class="form-label">Student Course</label>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary ajaxstudent_update">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- DELETE Modal -->
<div class="modal fade studentDeleteModal" id="studentDeleteModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">Student Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="student_delete_id">
                <h4>Delete this data?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger ajaxstudent_delete">Delete</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-4">
            <h1 class="text-center">jQuery Ajax CRUD App</h1>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>jQuery Ajax CRUD - Student Data
                        <a href="#" data-bs-toggle="modal" data-bs-target="#studentModal" class="btn btn-primary float-end">Add Student</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student Name</th>
                                <th>Student Email</th>
                                <th>Student Phone No.</th>
                                <th>Student Course</th>
                                <th>Created at</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="student_data">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->endSection(); ?>

<?php
$this->section('scripts');
?>

<script>
    $(document).ready(function() {
        loadStudent();

        $(document).on('click', '.view_button', function() {
            var student_id = $(this).closest('tr').find('.student_id').text();
            $.ajax({
                method: "POST",
                url: "/students/view-student",
                data: {
                    'student_id': student_id,
                },
                success: function(response) {
                    console.log(response);
                    $.each(response, function(key, student_view) {
                        $('.student_id_view').text(student_view['id']);
                        $('.student_name_view').text(student_view['student_name']);
                        $('.student_email_view').text(student_view['student_email']);
                        $('.student_phone_no_view').text(student_view['student_phone_no']);
                        $('.student_course_view').text(student_view['student_course']);
                        $('.studentViewModal').modal('show');
                    });
                }
            });
        });

        $(document).on('click', '.edit_button', function() {
            var student_id = $(this).closest('tr').find('.student_id').text();

            $.ajax({
                method: "POST",
                url: "/students/edit-student",
                data: {
                    'student_id': student_id
                },
                success: function(response) {
                    // console.log(response);
                    $.each(response, function(key, student_value) {
                        $('#student_id').val(student_value['id']);
                        $('#student_name').val(student_value['student_name']);
                        $('#student_email').val(student_value['student_email']);
                        $('#student_phone_no').val(student_value['student_phone_no']);
                        $('#student_course').val(student_value['student_course']);
                        $('#studentEditModal').modal('show');
                    });
                }
            });
        });

        $(document).on('click', '.ajaxstudent_update', function() {
            var data = {
                'id': $('#student_id').val(),
                'student_name': $('#student_name').val(),
                'student_email': $('#student_email').val(),
                'student_phone_no': $('#student_phone_no').val(),
                'student_course': $('#student_course').val(),
            }

            $.ajax({
                method: "POST",
                url: "/students/update-student",
                data: data,
                success: function(response) {
                    $('#studentEditModal').modal('hide');
                    $('.student_data').html("");
                    loadStudent();
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                }
            });
        });

        $(document).on('click', '.delete_button', function() {
            var student_id = $(this).closest('tr').find('.student_id').text();
            // alert(student_id);
            $('#student_delete_id').val(student_id);
            $('#studentDeleteModal').modal('show');
        });

        $(document).on('click', '.ajaxstudent_delete', function() {
            var student_id = $('#student_delete_id').val();

            $.ajax({
                method: "POST",
                url: "/students/delete-student",
                data: {
                    'student_id': student_id
                },
                success: function(response) {
                    $('#studentDeleteModal').modal('hide');
                    $('.student_data').html("");
                    loadStudent();
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                }
            });
        });
    });

    function loadStudent() {
        $.ajax({
            method: "GET",
            url: "/students/load-student",
            success: function(response) {
                $.each(response.students, function(key, value) {
                    $('.student_data').append('<tr>\
                        <td class="student_id">' + value['id'] + '</td>\
                        <td>' + value['student_name'] + '</td>\
                        <td>' + value['student_email'] + '</td>\
                        <td>' + value['student_phone_no'] + '</td>\
                        <td>' + value['student_course'] + '</td>\
                        <td>' + value['created_at'] + '</td>\
                        <td class="text-center">\
                            <a href="#" data-bs-toggle="modal" data-bs-target="#studentViewModal" class="btn btn-info view_button">View</a>\
                            <a href="#" data-bs-toggle="modal" data-bs-target="#studentEditModal" class="btn btn-primary edit_button">Edit</a>\
                            <a href="#" data-bs-toggle="modal" data-bs-target="#studentDeleteModal" class="btn btn-danger delete_button">Delete</a>\
                        </td>\
                    </tr>');
                });
            }
        });
    }
</script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.ajaxstudent_save', function() {

            if ($.trim($('.student_name').val()).length == 0) {
                error_student_name = 'Enter your Full Name';
                $('#error_student_name').text(error_student_name);
                console.log("name");
            } else {
                error_student_name = '';
                $('#error_student_name').text(error_student_name);
                console.log("name");
            }

            if ($.trim($('.student_email').val()).length == 0) {
                error_student_email = 'Enter your Email';
                $('#error_student_email').text(error_student_email);
                console.log("email");
            } else {
                error_student_email = '';
                $('#error_student_email').text(error_student_email);
                console.log("email");
            }

            if ($.trim($('.student_phone_no').val()).length == 0) {
                error_student_phone_no = 'Enter your Phone Number';
                $('#error_student_phone_no').text(error_student_phone_no);
                console.log("phone");
            } else {
                error_student_phone_no = '';
                $('#error_student_phone_no').text(error_student_phone_no);
                console.log("phone");
            }

            if ($.trim($('.student_course').val()).length == 0) {
                error_student_course = 'Enter your Course';
                $('#error_student_course').text(error_student_course);
                console.log("course");
            } else {
                error_student_course = '';
                $('#error_student_course').text(error_student_course);
                console.log("course");
            }

            if (error_student_name != '' || error_student_email != '' || error_student_phone_no != '' || error_student_course != '') {
                return false;
                console.log("err");
            } else {
                var data = {
                    'student_name': $('.student_name').val(),
                    'student_email': $('.student_email').val(),
                    'student_phone_no': $('.student_phone_no').val(),
                    'student_course': $('.student_course').val(),
                };
                console.log(data);
                $.ajax({
                    method: "POST",
                    url: "/students/store-student",
                    data: data,
                    success: function(response) {
                        $('#studentModal').modal('hide');
                        $('#studentModal').find('input').val('');
                        $('.student_data').html("");
                        loadStudent();
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(response.status);
                    }
                });
            }
        });
    });
</script>



<?php $this->endSection(); ?>