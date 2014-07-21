<?php
include_once 'admin_header.php';
?>
<section class="dashboard-main" id="admin_access_page">
    <div class="container">
        <!--Top Mark-->
        <?php include_once 'content-admin-dashboard-mark.php'; ?>

        <section class="inner-content col-xs-12">
            <ul id="admin_tab" class="nav nav-tabs">
                <li><a href="admin_dashboard.php">Admin Access</a></li>
                <li class="active"><a href="admin_profile.php">Investor Profile</a></li>
            </ul>
            <div class="tab-content col-xs-12">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="admin_access">
                    <thead>
                        <tr>
                            <th width='16%'>First Name</th>
                            <th width='16%'>Last Name</th>
                            <th width='22%'>User Email</th>
                            <th width='16%'>User Name</th>
                            <th width='30%'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $user_infos = get_investor_info();
                        $class = 'even';
                        if (!empty($user_infos)) {
                            foreach ($user_infos as $user_info) {
                                $class = ($class == 'even' ? 'odd' : 'even');
                                ?>
                                <tr class="<?php echo $class; ?>">
                                    <td><?php echo $user_info['first_name']; ?></td>
                                    <td><?php echo $user_info['last_name']; ?></td>
                                    <td><?php echo $user_info['user_email']; ?></td>
                                    <td><?php echo $user_info['user_id']; ?></td>
                                    <td class="action">
                                        <a data-toggle="modal" data-target=".edit-login-modal" href="#">Edit Login</a>
                                        <a href="">|</a>
                                        <a data-toggle="modal" data-target=".edit-profile-modal" href="#">Edit Profile</a>
                                        <a href="">|</a>
                                        <a data-toggle="modal" data-target=".delete-investor" href="#">Delete</a>
                                        <a href="">|</a>
                                        <a href="javascript:void(0);" class="enabled">Enabled</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <div class="button-wrapper">
                    <a class="button" data-toggle="modal" data-target=".new-user-modal" href="#">New User</a>
                </div>
            </div>
        </section>
    </div>
</section>
<div class="modal fade edit-profile-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="note-modal modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title entry-title">Preferred Investor Program <span>Edit Profile</span></h4>
            </div>
            <div class="modal-body">
                <form action="#" name="frm_new_user" id="frm_new_user">
                    <?php
                    $investor_info_fields = get_investor_info_fields();
                    if (!empty($investor_info_fields)) {
                        admin_build_form($investor_info_fields, true);
                    }
                    ?>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm small" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm small">Update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade edit-login-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="note-modal modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title entry-title">Preferred Investor Program <span>Edit Investor Login</span></h4>
            </div>
            <div class="modal-body">
                <form action="#" name="frm_new_user" id="frm_new_user">
                    <?php
                    $login_info = get_login_info_fields();
                    if (!empty($login_info)) {
                        admin_build_form($login_info, true);
                    }
                    ?>
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-xs-5">
                    <input type="checkbox" id="reset_password" name="reset_password" />
                    <label for="reset_password">Reset Password</label>    
                </div>
                <div class="col-xs-7">
                    <button type="button" class="btn btn-default btn-sm small" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn-sm small">Update</button>    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade delete-investor" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="note-modal modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <h4 class='message col-xs-12'>Are you sure to delete?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm small" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm small">Save</button>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
