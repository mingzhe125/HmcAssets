<?php

include_once 'admin_header.php';
$rows = 10;
?>
<section class="dashboard-main" id="admin_access_page">
    <div class="container">
        <!--Top Mark-->
        <?php include_once 'content-admin-dashboard-mark.php'; ?>
        <section class="inner-content col-xs-12">
            <div class="listing-box col-xs-12">
                <div class='investor-top'>
                    <h2 class="col-xs-6 entry-title">Preferred Investor Program</h2>
                    <div class="col-xs-6 entry-meta">
                        <form name='frm_investor_search' id='frm_investor_search' action="admin_investor.php">
                            <input type='text' placeholder="type name of an investor" id='search_investor' name='search_investor' />
                            <button name='search' id='search' class='investor-search'>Search</button>
                        </form>
                    </div>
                    <div class="col-xs-12 line"></div>
                </div>
                <div class="search-order-box col-xs-12">
                    <div class="search-order-item by_sales_type">
                        <select name="by_sales_type" id="by_sales_type" class="selectpicker">
                            <option value="">Sort By State</option>
                            <option value="fund">Sort By County</option>
                            <option value="send">Sort By Sales Type</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<?php

include_once 'footer.php';
