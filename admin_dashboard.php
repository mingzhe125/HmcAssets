<?php
include_once 'admin_header.php';
?>
<section class="dashboard-main" id="admin_access_page">
    <div class="container">
        <!--Top Mark-->
        <?php include_once 'content-admin-dashboard-mark.php'; ?>

        <section class="inner-content col-xs-12">
            <ul id="admin_tab" class="nav nav-tabs">
                <li class="active"><a href="admin_dashboard.php">Admin Access</a></li>
                <li><a href="admin_profile.php">Investor Profile</a></li>
            </ul>
            <div class="tab-content col-xs-12">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="admin_access">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Company</th>
                            <th>User Type</th>
                            <th>User eMail</th>
                            <th>User Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $user_infos = get_admin_info();
                        $class = 'even';
                        if (!empty($user_infos)) {
                            foreach ($user_infos as $user_info) {
                                $class = ($class == 'even' ? 'odd' : 'even');
                                ?>
                                <tr class="<?php echo $class; ?>">
                                    <td><?php echo $user_info['first_name']; ?></td>
                                    <td><?php echo $user_info['last_name']; ?></td>
                                    <td><?php echo $user_info['sale_type']; ?></td>
                                    <td><?php echo $user_info['user_type']; ?></td>
                                    <td><?php echo $user_info['user_email']; ?></td>
                                    <td><?php echo $user_info['user_id']; ?></td>
                                    <td class="action">
                                        <a data-toggle="modal" data-target=".edit-user-modal" href="#">Edit</a>
                                        <a href="">|</a>
                                        <a data-toggle="modal" data-target=".delete-user-modal" href="#">Delete</a>
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

<div class="modal fade edit-user-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="note-modal modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title entry-title">Preferred Investor Program <span>Edit User</span></h4>
            </div>
            <div class="modal-body">
                <form action="#" name="frm_edit_user" id="frm_edit_user">
                    <?php
                    $user_info_fields = get_user_info_fields();
                    if (!empty($user_info_fields)) {
                        admin_build_form($user_info_fields, true, 1);
                    }
                    ?>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm small" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm small">Update User</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade new-user-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="note-modal modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title entry-title">Preferred Investor Program <span>Create New User</span></h4>
            </div>
            <div class="modal-body">
                <form action="#" name="frm_new_user" id="frm_new_user">
                    <?php
                    $user_info_fields = get_user_info_fields();
                    if (!empty($user_info_fields)) {
                        admin_build_form($user_info_fields, false, 2);
                    }
                    ?>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm small" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm small">Create User</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade delete-user-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
