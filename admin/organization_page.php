


<?php
include("admin_header.php");
session_start();
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
                <div class="container mt-5">
        <h2 class="mb-4">Register for a School Organization</h2>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<div class='alert {$_SESSION['message_type']}' role='alert'>{$_SESSION['message']}</div>";
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        }
        ?>

        <form action="process_code/organization_registration.php" method="POST">
            <div class="form-group">
                <label for="studentName">Student Name</label>
                <input type="text" class="form-control" id="studentName" name="studentName" required>
            </div>
            <div class="form-group">
                <label for="studentEmail">Email</label>
                <input type="email" class="form-control" id="studentEmail" name="studentEmail" required>
            </div>
            <div class="form-group">
                <label for="studentPhone">Phone Number</label>
                <input type="text" class="form-control" id="studentPhone" name="studentPhone" required>
            </div>
            <div class="form-group">
                <label for="studentGrade">Grade</label>
                <select class="form-control" id="studentGrade" name="studentGrade" required>
                    <option value="9">9th Grade</option>
                    <option value="10">10th Grade</option>
                    <option value="11">11th Grade</option>
                    <option value="12">12th Grade</option>
                </select>
            </div>
            <div class="form-group">
                <label for="orgName">Organization Name</label>
                <input type="text" class="form-control" id="orgName" name="orgName" required>
            </div>
            <div class="form-group">
                <label for="personalStatement">Personal Statement</label>
                <textarea class="form-control" id="personalStatement" name="personalStatement" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Registration</button>
        </form>
    </div>



            </div>
            <!-- End of Main Content -->

         <?php
         include("admin_footer.php")
         ?>