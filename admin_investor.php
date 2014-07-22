<?php
include_once 'admin_header.php';
$rows = 10;
?>
<section class="dashboard-main" id="admin_access_page">
    <div class="container">
        <!--Top Mark-->
        <?php include_once 'content-admin-dashboard-mark.php'; ?>
        <section class="inner-content col-xs-12">
            <div class="investor-box col-xs-12">
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
                <div id="investor-wrapper" class='col-xs-12'>
                    <?php for ($j = 1; $j < 10; $j++): ?>
                        <div class="investor-wrapper">
                            <div class="listing-item col-xs-12">
                                <div class="listing-address">
                                    <p class="name">John Smith</p>
                                    <p>5943 Greenfield Avenue</p>
                                    <p>Riverside, CA 92506</p>
                                </div>
                                <div class="listing-sale-type">
                                    <p>Phone</p>
                                    <p>FAX</p>
                                    <p>EMAIL</p>
                                </div>
                                <div class="listing-sale-value">
                                    <p>310.555.1212</p>
                                    <p>310.555.1212</p>
                                    <p>john.smith@aol.com</p>
                                </div>
                                <div class="listing-sqr-type">
                                    <p>INTERSTS</p>
                                    <p>FINANCING</p>
                                    <p>TYPE OF SALES</p>
                                </div>
                                <div class="listing-sqr-value">
                                    <p>Riverside  San Bernardino,</p>
                                    <p>Cash, Hard Money, Conventional</p>
                                    <p>Short Sales and REO</p>
                                </div>
                                <div class="listing-control">
                                    <a href="javascript:void(0);"></a>
                                </div>
                            </div>
                            <div class="listing-detail col-xs-12">
                                <div class='top'>
                                    <P>INTERNAL NOTES</P>
                                    <P>INVESTOR FEEDBACK VIA EMAIL, PHONE, ETC.</P>
                                </div>
                                <div class='listing-detail-inner col-xs-12'>
                                    <div class="notes_wrapper">
                                        <div class="notes">
                                            <?php for ($i = 1; $i < 10; $i ++) : ?>
                                                <div class="note-item">
                                                    <P><strong>WHIT M.</strong>July 11, 2014 7:05 PM</P>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum  porttitor, posuere nunc in, consequat est. Donec ullamcorper ultricies risus ac mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                        <textarea name="add_note" id="add_note"></textarea>
                                        <div class="button-wrapper">
                                            <button class="add-note" id="add-note">Add Internal Note</button>
                                        </div>
                                        <div class='detail-info'>
                                            <div class="box-item">
                                                <div class="entry-title w40">ONLINE USAGE</div>
                                            </div>
                                            <div class="info-item">
                                                <div class='title w40'>Last login</div>
                                                <div class='content w60'>
                                                    <p>July 12, 2014, 3:52PM PST</p>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <div class='title w40'>average session</div>
                                                <div class='content w60'>
                                                    <p>12 MIN</p>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <div class='title w40'>pages viewed</div>
                                                <div class='content w60'>
                                                    <p>Link 1</p>
                                                    <p>Link 2</p>
                                                    <p>Link 3</p>
                                                    <p>Link 4</p>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <div class='title w40'>properties viewed</div>
                                                <div class='content w60'>
                                                    <p>Property ID 123</p>
                                                    <p>Property ID 124</p>
                                                    <p>Property ID 125</p>
                                                    <p>Property ID 126</p>
                                                    <p>Property ID 127</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='detail-info'>
                                            <div class="box-item">
                                                <div class="entry-title w40">TRANSACTIONS</div>
                                            </div>
                                            <div class="info-item">
                                                <div class='title w40'>OFFERS</div>
                                                <div class='content w60'>
                                                    <p>Property ID 123	$225,000	Outbidded</p>
                                                    <p>Property ID 124	$225,000	Outbidded</p>
                                                    <p>Property ID 125	$225,000	Outbidded</p>
                                                    <p>Property ID 126	$225,000	Outbidded</p>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <div class='title w40'>FINANCING</div>
                                                <div class='content w60'>
                                                    <p>property id 124	TITAN $225,000 loan</p>
                                                    <p>		70% LTV</p>
                                                    <p>		11%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notes_wrapper">
                                        <div class="notes">
                                            <?php for ($i = 1; $i < 10; $i ++) : ?>
                                                <div class="note-item">
                                                    <P><strong>WHIT M.</strong>July 11, 2014 7:05 PM</P>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum  porttitor, posuere nunc in, consequat est. Donec ullamcorper ultricies risus ac mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                        <textarea name="add_note" id="add_note"></textarea>
                                        <div class="button-wrapper">
                                            <button class="add-note" id="add-note">ADD INVESTOR FEEDBACK</button>
                                        </div>
                                        <div class='detail-info'>
                                            <div class="box-item">
                                                <div class="entry-title w40">INVESTOR’S  “MY FAVORITES”</div>
                                            </div>
                                            <div class="info-item">
                                                <div class='grey title w40'>Property ID 123</div>
                                                <div class='grey content w60'>
                                                    <p>18323 West Drive, Riverside, CA 90237</p>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <div class='grey title w40'>Property ID 123</div>
                                                <div class='grey content w60'>
                                                    <p>18323 West Drive, Riverside, CA 90237</p>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <div class='grey title w40'>Property ID 123</div>
                                                <div class='grey content w60'>
                                                    <p>18323 West Drive, Riverside, CA 90237</p>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <div class='grey title w40'>Property ID 123</div>
                                                <div class='grey content w60'>
                                                    <p>18323 West Drive, Riverside, CA 90237</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='detail-info'>
                                            <div class="box-item">
                                                <div class="entry-title w40">INVESTOR’S  “MY NOTES”</div>
                                            </div>
                                            <div class="info-item">
                                                <div class='grey title'>Property ID 124</div>
                                                <div class='grey content'>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ip
                                                        porttitor, posuere nunc in, consequat est. Donec ullamcorper ultricies 
                                                        risus ac mollis. Vestibulum ante ipsum primis in faucibus orci luctus et 
                                                        ultrices posuere cubilia Curae; Morbi pulvinar aliquam nunc ac veh.</p>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <div class='grey title'>Property ID 124</div>
                                                <div class='grey content'>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ip
                                                        porttitor, posuere nunc in, consequat est. Donec ullamcorper ultricies 
                                                        risus ac mollis. Vestibulum ante ipsum primis in faucibus orci luctus et 
                                                        ultrices posuere cubilia Curae; Morbi pulvinar aliquam nunc ac veh.</p>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <div class='grey title'>Property ID 124</div>
                                                <div class='grey content'>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ip
                                                        porttitor, posuere nunc in, consequat est. Donec ullamcorper ultricies 
                                                        risus ac mollis. Vestibulum ante ipsum primis in faucibus orci luctus et 
                                                        ultrices posuere cubilia Curae; Morbi pulvinar aliquam nunc ac veh.</p>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <div class='grey title'>Property ID 124</div>
                                                <div class='grey content'>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ip
                                                        porttitor, posuere nunc in, consequat est. Donec ullamcorper ultricies 
                                                        risus ac mollis. Vestibulum ante ipsum primis in faucibus orci luctus et 
                                                        ultrices posuere cubilia Curae; Morbi pulvinar aliquam nunc ac veh.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    <?php endfor; ?>
                    <div class="col-xs-12">
                        <div id="page-selection-listing"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<?php
include_once 'footer.php';
