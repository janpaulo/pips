

<div id="wrapper">

  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
    <img src="<?php echo base_url();?>asset/img/ph_logo.png" width="35" height="45" alt="PhilHealth Logo"> <div style="color: #0c600e;text-shadow: 0px 1px 1px #f6f6f6;">PEARS</div>
    </div>

    <div class="row flex-nowrap">
        <!-- <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark"> -->
        <div class="">
            <div class="d-flex flex-column align-items-center align-items-sm-start text-white">
                <ul class=" sidebar-nav nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    
                  <li class="nav-item">
                        <a href="<?php echo base_url();?>"><i class="fa fa-home"></i>Home</a>
                        
                    </li>
                    
                    
                    <li id="adminRole-profile">
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"><i class="fa fa-regular fa-user"></i>My Profile</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="<?php echo base_url();?>myprofile/my_profile" class="nav-link px-0"> <span class="d-none d-sm-inline">Profile</span> </a>
                            </li>
                            <li class="w-100">
                                <a href="<?php echo base_url();?>myprofile/my_dtr" class="nav-link px-0"> <span class="d-none d-sm-inline">Daily Time Record(DTR)</span> </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>myprofile/my_payslip" class="nav-link px-0"> <span class="d-none d-sm-inline">Loans</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>myprofile/my_payslip" class="nav-link px-0"> <span class="d-none d-sm-inline">Manage Payslip</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>myprofile/my_leave" class="nav-link px-0"> <span class="d-none d-sm-inline">Manage Leave</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"><i class="fa fa-leanpub" aria-hidden="true"></i>Leave Management</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">Leave Records</span> </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">Manage Leave Type</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">Manage Leave Credit</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"><i class="fa fa-users" aria-hidden="true"></i>Human Resources</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">Employee Profiles</span> </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">DTR Uploader</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">Events/Trainings</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">Memo</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">Announcement</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">Photo Gallery</span></a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                      <a href="<?php echo base_url();?>employees"><i class="fa fa-users" aria-hidden="true"></i>Employees</a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url();?>dtrs"><i class="fa fa-cloud-upload" aria-hidden="true"></i>DTR Uploader</a>
                    </li>
                    </li>

                    
                    <li>
                        <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"><i class="fa fa-cogs" aria-hidden="true"></i>Settings</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="<?php echo base_url();?>banks" class="nav-link px-0"> <span class="d-none d-sm-inline">Banks</span> </a>
                            </li>
                            <li class="w-100">
                                <a href="<?php echo base_url();?>departments" class="nav-link px-0"> <span class="d-none d-sm-inline">Deparments</span> </a>
                            </li>
                            <li class="w-100">
                                <a href="<?php echo base_url();?>positions" class="nav-link px-0"> <span class="d-none d-sm-inline">Position</span> </a>
                            </li>
                            <li class="w-100">
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">Plantilia</span> </a>
                            </li>
                            <li class="w-100">
                                <a href="<?php echo base_url();?>eligibilities" class="nav-link px-0"> <span class="d-none d-sm-inline">Eligibility Types</span> </a>
                            </li>
                            <li class="w-100">
                                <a href="<?php echo base_url();?>loans" class="nav-link px-0"> <span class="d-none d-sm-inline">Loans</span> </a>
                            </li>
                            <li class="w-100">
                                <a href="<?php echo base_url();?>schedules" class="nav-link px-0"> <span class="d-none d-sm-inline">Work Schedule</span> </a>
                            </li>
                            <li class="w-100">
                                <a href="<?php echo base_url();?>signatories" class="nav-link px-0"> <span class="d-none d-sm-inline">Signatory</span> </a>
                            </li>
                            <li class="w-100">
                                <a href="<?php echo base_url();?>taxex_table" class="nav-link px-0"> <span class="d-none d-sm-inline">Tax Table</span> </a>
                            </li>
                            <li class="w-100">
                                <a href="<?php echo base_url();?>trainings" class="nav-link px-0"> <span class="d-none d-sm-inline">Trainings</span> </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">Permission</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>employees" class="nav-link px-0"> <span class="d-none d-sm-inline">UI Reports</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </aside>

  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid" style=" display: flex; justify-content: flex-start;">
        <div class="navbar-header">
          <a href="<?php echo base_url();?>employees" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a> 
        </div>
        <div class="plogo"> 
          PhilHealth Employees Attendance and Remuneration System
        </div>
      </div>
    </nav>
  </div>

  <!-- //start of content body -->
  <div class="content-body">







