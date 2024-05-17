<?php
include("admin_header.php");
session_start();
include("../include/connection.php");

// Fetch all student information from the database
$query = "SELECT * FROM students";
$result = mysqli_query($connection, $query);

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
        include("admin_sidebar.php");
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
                include("admin_topbar.php");
                ?>




              <!-- Begin Page Content -->
              <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Student Information Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="studentTable" width="100%" cellspacing="0">

            <?php if (isset($_SESSION['success'])): ?>
                        <div class="alert alert-success">
                            <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                            ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php endif; ?>


                <thead>
                    <tr>
                        <th>Student Id</th>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                                 <?php
                                // Loop through each row of the result set
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['student_id'] . "</td>";
                                    echo "<td>" . $row['username'] . "</td>";
                                    echo "<td>" . $row['first_name'] . "</td>";
                                    echo "<td>" . $row['last_name'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['phone'] . "</td>";
                                    echo "<td>";
                                    // Edit button
                                    echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#editModal" . $row['id'] . "'>Edit</button>&nbsp;";
                                    // Delete button - opens modal for confirmation
                                    echo "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteModal" . $row['id'] . "'>Delete</button>";
                                    echo "</td>";
                                    echo "</tr>";




                                        // Edit Modal
                                        echo "<div class='modal fade' id='editModal" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='editModalLabel' aria-hidden='true'>";
                                        echo "<div class='modal-dialog' role='document'>";
                                        echo "<div class='modal-content'>";
                                        echo "<div class='modal-header'>";
                                        echo "<h5 class='modal-title' id='editModalLabel'>Edit Student</h5>";
                                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                                        echo "<span aria-hidden='true'>&times;</span>";
                                        echo "</button>";
                                        echo "</div>";
                                        echo "<div class='modal-body'>";
                                        // Edit form with fields pre-filled with existing data
                                        echo "<form action='process_code/student_edit_information.php' method='POST'>";
                                        echo "<input type='hidden' name='student_id' value='" . $row['id'] . "'>";
                                        echo "<div class='form-group'>";
                                        echo "<label for='editFirstName'>First Name</label>";
                                        echo "<input type='text' class='form-control' id='editFirstName' name='edit_first_name' value='" . $row['first_name'] . "' required>";
                                        echo "</div>";
                                        echo "<div class='form-group'>";
                                        echo "<label for='editLastName'>Last Name</label>";
                                        echo "<input type='text' class='form-control' id='editLastName' name='edit_last_name' value='" . $row['last_name'] . "' required>";
                                        echo "</div>";
                                        echo "<div class='form-group'>";
                                        echo "<label for='editEmail'>Email</label>";
                                        echo "<input type='email' class='form-control' id='editEmail' name='edit_email' value='" . $row['email'] . "' required>";
                                        echo "</div>";
                                        echo "<div class='form-group'>";
                                        echo "<label for='editPhone'>Phone Number</label>";
                                        echo "<input type='text' class='form-control' id='editPhone' name='edit_phone' value='" . $row['phone'] . "' required>";



                                        echo "</div>";
                                        echo "<button type='submit' class='btn btn-primary'>Save Changes</button>";
                                        echo "</form>";
                                        echo "</div>";
                                        echo "<div class='modal-footer'>";
                                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";

                                       // Delete Modal
                                        echo "<div class='modal fade' id='deleteModal" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='deleteModalLabel' aria-hidden='true'>";
                                        echo "<div class='modal-dialog' role='document'>";
                                        echo "<div class='modal-content'>";
                                        echo "<div class='modal-header'>";
                                        echo "<h5 class='modal-title' id='deleteModalLabel'>Delete Student</h5>";
                                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                                        echo "<span aria-hidden='true'>&times;</span>";
                                        echo "</button>";
                                        echo "</div>";
                                        echo "<div class='modal-body'>";
                                        echo "<p>Are you sure you want to delete this student?</p>";
                                        echo "</div>";
                                        echo "<div class='modal-footer'>";
                                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";
                                        // Delete button - this will submit a form to handle the deletion query
                                        echo "<form action='process_code/student_delete_information.php' method='POST'>";
                                        echo "<input type='hidden' name='student_id' value='" . $row['id'] . "'>"; // Hidden field to pass student ID
                                        echo "<button type='submit' class='btn btn-danger'>Delete</button>";
                                        echo "</form>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";

                                }
                                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

        </div>



    </div>
    <!-- End of Page Wrapper -->

    <?php
    include("admin_footer.php");
    ?>