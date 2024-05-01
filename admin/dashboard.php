<?php
$dashboard = true;
require_once('header.php');
require_once "db.php";

// Total User
$total_user_query = "SELECT COUNT(*) AS total_user FROM users";
$total_user = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $total_user_query))['total_user'];

// Total Admin
$total_admin_query = "SELECT COUNT(*) AS total_admin FROM users WHERE designation = 'admin'";
$total_admin = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $total_admin_query))['total_admin'];

// Total Services
$total_services_query = "SELECT COUNT(*) AS total_services FROM services";
$total_services = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $total_services_query))['total_services'];

// Total Message
$total_message_query = "SELECT COUNT(*) AS total_message FROM contacts_messages WHERE status = 0";
$total_message = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $total_message_query))['total_message'];

// Total Unread Message
$total_unread_message_query = "SELECT COUNT(*) AS total_unread_message FROM contacts_messages WHERE status = 'unread'";    
$total_unread_message = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $total_unread_message_query))['total_unread_message'];

// Total Portfolio
$total_portfolio_query = "SELECT COUNT(*) AS total_portfolio FROM portfolios";
$total_portfolio = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $total_portfolio_query))['total_portfolio'];

// Total Client
$total_client_query = "SELECT COUNT(*) AS total_client FROM clients";
$total_client = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $total_client_query))['total_client'];

// Total Testimonial
$total_testimonial_query = "SELECT COUNT(*) AS total_testimonial FROM client_testimonials";
$total_testimonial = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $total_testimonial_query))['total_testimonial'];

// Total Team
$total_team_query = "SELECT COUNT(*) AS total_team FROM team_members";
$total_team = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $total_team_query))['total_team'];

// Total Blog
$total_blog_query = "SELECT COUNT(*) AS total_blog FROM blogs";
$total_blog = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $total_blog_query))['total_blog'];

// Total Subscriber
$total_subscriber_query = "SELECT COUNT(*) AS total_subscriber FROM subscribers";
$total_subscriber = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $total_subscriber_query))['total_subscriber'];

?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item"><?= spy_sabbir_update('theme_default', 'company_name'); ?></span>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    </div>
    <!-- br-pageheader -->

    <div class="br-pagebody mg-t-5 pd-x-30">

        <div class="title text-center my-5">
            <h4 class="tx-gray-800">Dashboard</h4>
        </div>

        <div class="row my-5">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-teal rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
                                Total User
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
                                <?= $total_user ?>
                            </p>
                            <span class="tx-11 tx-roboto tx-white-6">Total Admin  <?= $total_admin ?></span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                <div class="bg-danger rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
                                Total Services
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
                                <?= $total_services ?>
                            </p>
                            <span class="tx-11 tx-roboto tx-white-6">-</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
                                Total Message
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
                                <?= $total_message ?>
                            </p>
                            <span class="tx-11 tx-roboto tx-white-6">Unread Message ( <?= $total_unread_message ?> )</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-success rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
                                Total Portfolio
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
                                <?= $total_portfolio ?>
                            </p>
                            <span class="tx-11 tx-roboto tx-white-6">-</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row my-5">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-warning rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
                                Total Client</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
                                <?= $total_client ?>
                            </p>
                            <span class="tx-11 tx-roboto tx-white-6">Total Testimonial: <?= $total_testimonial ?></span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                <div class="bg-pink rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
                            Total Team
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
                                <?= $total_team ?>
                            </p>
                            <span class="tx-11 tx-roboto tx-white-6">-</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-indigo rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Blog</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
                                <?= $total_blog ?>
                            </p>
                            <span class="tx-11 tx-roboto tx-white-6">-</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-br-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
                                Total Subscriber
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
                                <?= $total_subscriber ?>
                            </p>
                            <span class="tx-11 tx-roboto tx-white-6">-</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
        </div><!-- row -->
    </div>
    <!-- br-pagebody -->

<?php
require_once("footer.php");
?>