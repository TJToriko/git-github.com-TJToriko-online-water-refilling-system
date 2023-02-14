<?php
        //resume session here to fetch session values
        session_start();
        /*
            if user is not login then redirect to login page,
            this is to prevent users from accessing pages that requires
            authentication such as the dashboard
        */
        if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'admin'){
            header('location: ../landing/landing.php');
        }

    require_once '../tools/variables.php';
    $page_title = 'BubbleBest | Dashboard';
    $dashboard = 'active';

    require_once '../includes/adhead.php';
?>
<div class="body-wrapper">
    <?php require_once '../includes/adsidebar.php'; ?>
        <div class="main-wrapper mdc-drawer-app-content">
            <?php require_once '../includes/adheader.php'; ?>

                <div class="page-wrapper mdc-toolbar-fixed-adjust">
                    <main class="content-wrapper">
                    <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                            <div class="mdc-card info-card info-card--success">
                            <div class="card-inner">
                                <h5 class="card-title">Total Employees</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom">3</h5>
                                <div class="card-icon-wrapper">
                                <i class="material-icons"><img src="../assets/assetsa/img/profile2.png"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                            <div class="mdc-card info-card info-card--danger">
                            <div class="card-inner">
                                <h5 class="card-title">Total Customers</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom">50</h5>
                                <div class="card-icon-wrapper">
                                <i class="material-icons"><img src="../assets/assetsa/img/profile1.png"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                            <div class="mdc-card info-card info-card--primary">
                            <div class="card-inner">
                                <h5 class="card-title">Stocks</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom">100/200</h5>
                                <p class="tx-12 text-muted">50% target reached</p>
                                <div class="card-icon-wrapper">
                                <i class="material-icons">trending_up</i>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                            <div class="mdc-card info-card info-card--primary">
                            <div class="card-inner">
                                <h5 class="card-title">Profit</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom">&#8369 2000</h5>
                                <p class="tx-12 text-muted">50% target reached</p>
                                <div class="card-icon-wrapper">
                                <i class="material-icons">trending_up</i>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                            <div class="mdc-card">
                            <div class="row" style="flex-wrap: wrap;">
                                <!-- column -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Latest Sales</h4>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">NAME</th>
                                                        <th class="border-top-0">STATUS</th>
                                                        <th class="border-top-0">DATE</th>
                                                        <th class="border-top-0">PRICE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                
                                                        <td class="txt-oflo">Sibar Ahamad</td>
                                                        <td><span class="label label-ongo label-rounded">Ongoing</span> </td>
                                                        <td class="txt-oflo">April 18, 2021</td>
                                                        <td><span class="font-medium">&#8369 213</span></td>
                                                    </tr>
                                                    <tr>
                
                                                        <td class="txt-oflo">Ralph Clemente</td>
                                                        <td><span class="label label-ongo label-rounded">Ongoing</span></td>
                                                        <td class="txt-oflo">April 19, 2021</td>
                                                        <td><span class="font-medium">&#8369 250</span></td>
                                                    </tr>
                                                    <tr>
                
                                                        <td class="txt-oflo">Albert Luna</td>
                                                        <td><span class="label label-success label-rounded">Completed</span></td>
                                                        <td class="txt-oflo">April 19, 2021</td>
                                                        <td><span class="font-medium">&#8369 1250</span></td>
                                                    </tr>
                                                    <tr>
                
                                                        <td class="txt-oflo">Beatrice Suficiencia</td>
                                                        <td><span class="label label-success label-rounded">Completed</span></td>
                                                        <td class="txt-oflo">April 20, 2021</td>
                                                        <td><span class="font-medium">&#8369 25</span></td>
                                                    </tr>
                                                    <tr>
                
                                                        <td class="txt-oflo">TJ Torrico</td>
                                                        <td><span class="label label-success label-rounded">Completed</span></td>
                                                        <td class="txt-oflo">April 21, 2021</td>
                                                        <td><span class="font-medium">&#8369 50</span></td>
                                                    </tr>
                                                    <tr>
                
                                                        <td class="txt-oflo">Jaydee Ballaho</td>
                                                        <td><span class="label label-success label-rounded">Completed</td>
                                                        <td class="txt-oflo">April 23, 2021</td>
                                                        <td><span class="font-medium">&#8369 1214</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div> 
                        </div>
                        </div>
                    </div>
                    </main>
                    <!-- partial:partials/_footer.html --> 
                    <?php require_once '../includes/adfooter.php'; ?>
                    <!-- partial -->
                </div>
        </div>
</div>

<?php require_once '../includes/adend.php'; ?>