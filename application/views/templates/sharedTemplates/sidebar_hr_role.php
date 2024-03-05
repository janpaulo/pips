
<?php // print_r($this->session->userdata('vRoleID')); ?>

<?php if ($this->session->userdata('vRoleID') == '1') {?>
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




    <!-- <li class="nav-item" id="EmployeeRole-dtr">
                    <a href="<?php echo base_url();?>myprofile/my_dtr" class="nav-link"> <i
                            class="far fa-circle nav-icon"></i>
                        <p> Daily Time Record(DTR)</p>
                    </a>
                </li> -->

    <li class="nav-item" id="adminRole-employee">
        <a href="<?php echo base_url();?>employees" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
                Employees
            </p>
        </a>
    </li>
    <!-- <li class="nav-item" id="adminRole-dtr">
                    <a href="<?php echo base_url();?>dtrs" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            DTR Uploader
                        </p>
                    </a>
                </li> -->
    <li class="nav-item" id="adminRole-settings">
        <a href="#" class="nav-link">
            <i class="nav-icon fa fa-cogs"></i>
            <p>
                Libraries
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
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
                        </li> -->
            <li class="nav-item">
                <a href="<?php echo base_url();?>eligibilities" class="nav-link"> <i class="far fa-circle nav-icon"></i>
                    <p> Eligibility Types</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url();?>titles" class="nav-link"> <i class="far fa-circle nav-icon"></i>
                    <p> Titles Types</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url();?>education_level" class="nav-link"> <i
                        class="far fa-circle nav-icon"></i>
                    <p> Education Level</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url();?>skilltypes" class="nav-link"> <i class="far fa-circle nav-icon"></i>
                    <p> Skill Types</p>
                </a>
            </li>
            <!-- <li class="nav-item">
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
                        </li> -->
            <li class="nav-item">
                <a href="<?php echo base_url();?>trainings" class="nav-link"> <i class="far fa-circle nav-icon"></i>
                    <p> Training Types</p>
                </a>
            </li>
            <!-- <li class="nav-item">
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
                        </li> -->

        </ul>
    </li>

    <!-- human resource -->
    <!-- <li class="nav-item" id="adminRole-hr">
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
                </li> -->

    </ul>
<?php }?>