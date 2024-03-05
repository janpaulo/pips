<?php if ($this->session->userdata('vRoleID') == '2') {?>
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


    <!-- EmployeeRole -->
    <li class="nav-item EmployeeRole" id="EmployeeRole-profile">
        <a href="<?php echo base_url();?>myprofile/my_profile" class="nav-link"> <i class="fas fa-user nav-icon"></i>
            <p> My Profile</p>
        </a>
    </li>

    <li class="nav-item EmployeeRole" id="EmployeeRole-profile">
        <a href="<?php echo base_url();?>/personal_information" class="nav-link"> <i class="fas fa-user nav-icon"></i>
            <p> Pesonal Information</p>
        </a>
    </li>

    <li class="nav-item EmployeeRole" id="EmployeeRole-profile">
        <a href="<?php echo base_url();?>/family_background" class="nav-link"> <i class="fas fa-user nav-icon"></i>
            <p> Family Background</p>
        </a>
    </li>
    <li class="nav-item EmployeeRole" id="EmployeeRole-profile">
        <a href="<?php echo base_url();?>/education" class="nav-link"> <i class="fas fa-user nav-icon"></i>
            <p> Education</p>
        </a>
    </li>
    <li class="nav-item EmployeeRole" id="EmployeeRole-profile">
        <a href="<?php echo base_url();?>/employee_eligibilities" class="nav-link"> <i class="fas fa-user nav-icon"></i>
            <p> Eligibility</p>
        </a>
    </li>
    <li class="nav-item EmployeeRole" id="EmployeeRole-profile">
        <a href="<?php echo base_url();?>/employee_trainings" class="nav-link"> <i class="fas fa-user nav-icon"></i>
            <p> Trainings</p>
        </a>
    </li>
    <li class="nav-item EmployeeRole" id="EmployeeRole-profile">
        <a href="<?php echo base_url();?>/work_experiences" class="nav-link"> <i class="fas fa-user nav-icon"></i>
            <p> Work Experience</p>
        </a>
    </li>
    <li class="nav-item EmployeeRole" id="EmployeeRole-profile">
        <a href="<?php echo base_url();?>/voluntary_work" class="nav-link"> <i class="fas fa-user nav-icon"></i>
            <p> Voluntary Work</p>
        </a>
    </li>
    <li class="nav-item EmployeeRole" id="EmployeeRole-profile">
        <a href="<?php echo base_url();?>/other_info" class="nav-link"> <i class="fas fa-user nav-icon"></i>
            <p> Other Information </p>
        </a>
    </li>


</ul>

<?php }?>