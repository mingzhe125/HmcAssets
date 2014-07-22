<div class="investor-register-box col-xs-12">
    <div class="col-xs-12">
        <h2 class="entry-title">Preferred Investor Program<span>My Profile</span></h2>	
    </div>
    <div class="investor-form col-xs-12">
        <form id="frm_invstor" name="frm_search" action="search_result.php">
            <div class="col-xs-12">
                <?php
                $investor_info_fields = get_profile_info_fields();
                if (!empty($investor_info_fields)) {
                    admin_build_form($investor_info_fields);
                }
                ?>
            </div>
        </form>	
    </div>
</div>