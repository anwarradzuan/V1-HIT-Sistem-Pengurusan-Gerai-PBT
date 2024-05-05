<!-- End of Chat overlay -->
<!-- Search overlay -->
<div class="lena-search-overlay">
    <i class="fa fa-times typcn-lena" data-search-toggle="toggle"></i>
    <input type="text" placeholder="Search here">
    <p class="lena-light-text">Suggestions for: <b class="lena-suggestions">No suggestions</b></p>
    <div class="row mt-5 lena-results">
        <div class="col-md-6 col-sm-6 col-12">
            <p class="lena-light-text"><b>Results</b></p>
            <ul>
                <li>
                    <b>Client</b> meeting notes
                    <small class="lena-light-text float-right">1 weeks ago</small>
                </li>
                <li>
                    Sprint <b>agenda </b>
                    <small class="lena-light-text float-right">2 weeks ago</small>
                </li>
                <li>
                    <b>Functional</b> specification
                    <small class="lena-light-text float-right">2 weeks ago</small>
                </li>
                <li>
                    <b>On-boarding</b> checklist
                    <small class="lena-light-text float-right">3 weeks ago</small>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End of Search overlay -->
<!-- Navbar -->
<nav class="navbar lena-navbar lena-navbar lena-full fixed-top  flex-md-nowrap p-0 shadow-sm open">
    <a class="navbar-brand  sidebar-toggle-item" href="#">
        <span class="typcn typcn-th-menu lena-theme-toggle-bar  d-none d-md-inline-flex "></span>
    </a>

    <ul class="navbar-nav d-none d-md-inline-flex">

        <li class="nav-item text-nowrap dropdown">
            <!-- <a class="nav-link" href="#" role="button" id="lenaBellDropdown" data-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false">
                     <span class="typcn typcn-bell typcn-lena">
                   </span>
            </a> -->
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right slideIn" aria-labelledby="unaBellDropdown">
                <div class="dropdown-menu-header">
                    3 New Notifications
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12">
                                <div class="lena-normal-text text-danger"><i class="fa fa-exclamation-triangle m-r-5"></i>Server overload
                                    <div class="lena-small-text float-right">2h ago</div>
                                </div>
                                <div class="lena-light-text lena-truncate-text">The servers are overloaded. Immediate
                                    action needed.
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12">
                                <div class="lena-normal-text text-success"><i class="fa fa-check m-r-5"></i>Monthly
                                    reports sent
                                    <div class="lena-small-text float-right">4h ago</div>
                                </div>
                                <div class="lena-light-text lena-truncate-text">Scheduled monthy reports are sent
                                    successfully.
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12">
                                <div class="lena-normal-text text-warning"><i class="fa fa-info-circle m-r-5"></i>
                                    Pending invitations
                                    <div class="lena-small-text float-right">5h ago</div>
                                </div>
                                <div class="lena-light-text lena-truncate-text">There are <strong>7</strong> pending
                                    invitiations.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-menu-footer">
                    <a href="#" class="text-muted">Show all notifications</a>
                </div>
            </div>
        </li>
        <li class="nav-item text-nowrap dropdown">

            <a class="nav-link" href="#" role="button" id="lenaCountryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?= PORTAL ?>assets/img/us.png" width="20" height="20" class="circle-shape mini outlined float-right shadow m-t-5" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right lena-country-selector" aria-labelledby="lenaCountryDropdown">
                <a class="dropdown-item lena-normal-text" href="#"><img src="<?= PORTAL ?>assets/img/us.png" width="20" height="20" class="" alt="">English</a>
                <a class="dropdown-item lena-normal-text" href="#"><img src="<?= PORTAL ?>assets/img/es.png" width="20" height="20" class="" alt="">Spanish</a>
                <a class="dropdown-item lena-normal-text" href="#"><img src="<?= PORTAL ?>assets/img/de.png" width="20" height="20" class="" alt="">German</a>
                <a class="dropdown-item lena-normal-text" href="#"><img src="<?= PORTAL ?>assets/img/nl.png" width="20" height="20" class="" alt="">Dutch</a>
            </div>

        </li>
        <li class="nav-item text-nowrap emerald-settings-btn dropdown">
            <a class="nav-link" href="#" role="button" id="lenaSettingsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="mr-2 float-left m-t-5">
                    <?php
                    $u = Session::get("user")->u_id;
                    $gud = users::getBy(["u_id" => $u]);

                    if (count($gud) > 0) {
                        $gud = $gud[0];
                    } else {
                        echo "No data found!";
                    }
                    echo $gud->u_name;
                    ?>
                </div>
                <img src="<?= PORTAL ?>assets/images/profile/<?= $gud->u_picture ?>" width="30" height="30" class="circle-shape small outlined float-right shadow" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right lena-profile-dropdown slideIn" aria-labelledby="lenaSettingsDropdown">
                <a class="dropdown-item lena-normal-text" href="<?= PORTAL ?>profil">Profile</a>
                <a class="dropdown-item lena-normal-text" href="<?= PORTAL ?>tutorial">Tutorial</a>
                <a class="dropdown-item lena-normal-text" href="<?= PORTAL ?>help">Help</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item lena-normal-text" href="<?= PORTAL ?>logout">Logout</a>
            </div>

        </li>
    </ul>
    <ul class="navbar-nav d-inline-flex d-md-none">
        <li class="nav-item lena-nav-item text-nowrap">
            <span class="typcn typcn-th-menu" data-mobile-sidebar-toggle="toggle"></span>
        </li>
    </ul>
</nav>
<!-- End of Navbar -->
<!-- Mobile Sidenav -->
<nav class="lena-mobile-sidebar shadow">
    <h4>Menu <i class="fa fa-times float-right mt-2 lena-light-text" data-mobile-sidebar-toggle="toggle"></i></h4>
    <ul class="mt-5">
        <li>
            Anna Smith
            <img src="assets/img/avatar1.png" width="30" height="30" class="circle-shape small float-right outlined shadow" alt="">
        </li>
        <li class="no-padding">
            <hr>
        </li>
        <li>
            <a href="profile.html" class="lena-normal-text">Profile</a>
        </li>
        <li>
            <a href="tutorial.html" class="lena-normal-text">Tutorial</a>
        </li>
        <li class="lena-normal-text">
            <a href="index.html" class="lena-normal-text">Analytics</a>
        </li>
        <li class="lena-normal-text">
            Help
        </li>
        <li class="no-padding">
            <hr>
        </li>
        <li>
            <a href="index.html" class="lena-normal-text">Logout</a>
        </li>
    </ul>
</nav>
<!-- End of Mobile Sidenav -->
<!-- Sidebar -->
<nav id="lena-sidebar" class="sidebar lena-sidebar lena-light lena-full open">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="m-b-20">
                <a class="nav-link" href="#">
                    <img src="assets/img/logo.png" class="lena-normal-logo" width="50" alt="">
                    <img src="assets/img/logo-small.png" class="lena-small-logo" width="20" alt="">
                </a>
            </li>
            <?php


            if (url::get(0) == "index") {
                if (Session::get("user")->u_role == 3 || Session::get("user")->u_role == 4) {
                    $current = "dashboard";
                } else {
                    $current = "dashboards";
                }
            } else {
                $current = url::get(0);
            }



            $ssm = null;

            $ms  = menus::list([
                "where"     => "FIND_IN_SET(" . Session::get("user")->u_role . ", m_role) > 0 AND m_status = 1 AND m_main = 0",
                "order"        => "m_sort ASC"
            ]);
            //menus::getBy(["m_main" => 0, "m_status" => 1], ["order" => "m_sort ASC"])

            foreach ($ms as $m) {
                // $sm = menus::getBy(["m_main" => $m->m_id, "m_status" => 1], ["order" => "m_sort ASC"]);
                $sm = menus::list([
                    "where"     => "FIND_IN_SET(" . Session::get("user")->u_role . ", m_role) > 0 AND m_status = 1 AND m_main = " . $m->m_id,
                    "order"     => "m_sort ASC"
                ]);

                if ($current == $m->m_url) {
                    $mactive = "active";
                    $show = "show";
                    $ssm = $m;
                } else {
                    $mactive = "";
                    $show = "";
                }

                if (count($sm) > 0) {
                    if (empty(url::get(1)) && !empty($mactive)) {
                        $scurrent = "dashboard-geo";
                    } else {
                        $scurrent = url::get(1);
                    }

            ?>
                    <li class="lena-nav">
                        <a class="nav-link <?= $mactive ?>" href="#" data-toggle="collapse" data-target="#<?= $m->m_url ?>" aria-expanded="false">
                            <span class="<?= $m->m_icon ?>"></span>
                            <span class="content"><?= $m->m_name ?> <i class="fa fa-angle-right float-right"></i></span>
                        </a>

                        <ul id="<?= $m->m_url ?>" class="collapse collapse-panel <?= $show ?>" data-parent="#lena-sidebar">
                            <?php
                            foreach ($sm as $s) {
                                if ($scurrent == $s->m_url) {
                                    $sactive = "active";
                                    $ssm = $s;
                                } else {
                                    $sactive = "";
                                }
                            ?>
                                <li>
                                    <a class="nav-link <?= $sactive ?>" href="<?= PORTAL ?><?= $m->m_url ?>/<?= $s->m_url ?>">
                                        <span class="lena-icon-block"><b><?= $s->m_short ?></b></span>
                                        <span class="content"><?= $s->m_name ?></span>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>

                        </ul>
                    </li>
                <?php
                } else {
                ?>
                    <li>
                        <a class="nav-link <?= $mactive ?>" href="<?= PORTAL ?><?= $m->m_url ?>">
                            <span class="<?= $m->m_icon ?>"></span>
                            <span class="content"><?= $m->m_name ?></span>
                        </a>
                    </li>
            <?php
                }
            }

            if (is_null($ssm)) {
                $prefix = [
                    "profil"    => (object)[
                        "m_name"            => "Profil Saya",
                        "m_description"        => "Kemaskini maklumat profil saya"
                    ],
                    "tutorial"    => (object)[
                        "m_name"            => "Tutorial Saya",
                        "m_description"        => "Video Tutorial"
                    ],
                    "tutorials"    => (object)[
                        "m_name"            => "Video Tutorial",
                        "m_description"        => "Video Tutorial"
                    ],
                    "help"    => (object)[
                        "m_name"            => "",
                        "m_description"        => ""
                    ],
                ];

                $ssm = $prefix[$current];
            }
            ?>
        </ul>
        <hr>
        <!-- Sidebar bottom -->

        <!-- End of Sidebar bottom -->

    </div>
</nav>
<!-- End of Sidebar -->

<main role="main" class="open">
    <div class="container-fluid pt-4 pl-4 pb-4">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <h1><?= $ssm->m_name ?></h1>
                <p><?= $ssm->m_description ?></p>
            </div>
        </div>