


<?php
include("admin_header.php");
session_start();

include("../include/connection.php");

// Fetch events from the database
$sql = "SELECT title, description, date, image_path FROM events";
$result = $connection->query($sql);

$events = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}

$connection->close();


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

<div class="container mt-5">
        <h2 class="mb-4">Events Gallery</h2>
        <div class="row">
            <?php foreach ($events as $event): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $event['image_path']; ?>" class="card-img-top" alt="<?php echo $event['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $event['title']; ?></h5>
                            <p class="card-text"><?php echo $event['description']; ?></p>
                            <p class="card-text"><small class="text-muted"><?php echo $event['date']; ?></small></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         <?php
         include("admin_footer.php")
         ?>