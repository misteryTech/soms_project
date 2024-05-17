<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon ">
        <i class="fas fa-user"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Student Org<sup><br>Manage System</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="admin_dashboard.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#studentData"
        aria-expanded="true" aria-controls="studentData">
        <i class="fa fa-file-image-o" aria-hidden="true"></i>
        <span>Student Details</span>
    </a>
    <div id="studentData" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Students:</h6>
            <a class="collapse-item" href="student_registration_page.php">Student Registration</a>
            <a class="collapse-item" href="student_information_page_data.php">Students Data</a>

        </div>
    </div>
</li>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-file-image-o" aria-hidden="true"></i>
        <span>Events Gallery</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">z
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Events:</h6>
            <a class="collapse-item" href="gallery_events_page.php">View Gallery</a>
            <a class="collapse-item" href="gallery_events_page_registration.php">Add Events Gallery</a>
            <a class="collapse-item" href="calendar_event_page.php">Calendar Of Events</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Organization Details</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Organization Details:</h6>
            <a class="collapse-item" href="organization_page.php">Organization Registration</a>
            <a class="collapse-item" href="utilities-border.html">Organization Types</a>

    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="organization_page.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Organization</span></a>
</li>



<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="management_event_page.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Management</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>