<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light" style="background-color: #105001;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link  text-white" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block text-white">
            <a class="nav-link  text-white">
                PhilHealth Employees Attendance and Remuneration System
            </a>

        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link  text-white" href="<?php echo base_url();?>login/logOutAction" role="button">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-cost" style="background-color: #43B02A;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url();?>asset/img/ph_logo.png" width="35" height="45" alt="PhilHealth Logo">
        <!-- <img src="<?php echo base_url();?>asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">PEARS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url();?>asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">JAN PAULO BINALUYO</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="<?php echo base_url();?>" class="nav-link">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>


                <!-- adminRole -->
                <li class="nav-item" id="adminRole-profile">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            My Profile
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>myprofile/my_profile" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>myprofile/my_dtr" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Daily Time Record(DTR)</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- EmployeeRole -->
                <li class="nav-item"  id="EmployeeRole-profile">
                    <a href="<?php echo base_url();?>myprofile/my_profile" class="nav-link"> <i
                            class="fas fa-user nav-icon"></i>
                        <p> Profile</p>
                    </a>
                </li>
                <li class="nav-item" id="EmployeeRole-dtr">
                    <a href="<?php echo base_url();?>myprofile/my_dtr" class="nav-link"> <i
                            class="far fa-circle nav-icon"></i>
                        <p> Daily Time Record(DTR)</p>
                    </a>
                </li>

                <li class="nav-item" id="adminRole-employee">
                    <a href="<?php echo base_url();?>employees" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Employees
                        </p>
                    </a>
                </li>
                <li class="nav-item" id="adminRole-dtr">
                    <a href="<?php echo base_url();?>dtrs" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            DTR Uploader
                        </p>
                    </a>
                </li>
                <li class="nav-item"  id="adminRole-settings">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-cogs"></i>
                        <p>
                            Libraries
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>banks" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Banks</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>departments" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Deparments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>positions" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Position</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>employees" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Plantilia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>eligibilities" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Eligibility Types</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>loans" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Loans</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>schedules" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Work Schedule</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>signatories" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Signatory</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>taxex_table" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Tax Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>trainings" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Trainings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>employees" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> Permission</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>employees" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p> UI Reports</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- human resource -->
                <li class="nav-item"  id="adminRole-hr">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Human Resources
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>employees" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p>Employee Profiles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>dtrs" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p>DTR Uploader</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>employees" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p>Events/Trainings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>employees" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p>Memo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>employees" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p>Announcement</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>employees" class="nav-link"> <i
                                    class="far fa-circle nav-icon"></i>
                                <p>Photo Gallery</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>