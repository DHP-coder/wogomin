<!-- <div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1 m-b-35"><b>OVERVIEW</b></h2>
        </div>
    </div>
</div> -->
<div class="row m-t-25">
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                    <div class="text">
                        <?php
                        $count = 0;
                        $mang = json_decode($data["cu"]);
                        foreach ($mang as $m) {
                            $count++;
                        }
                        ?>
                        <h2><?php echo $count ?></h2>
                        <span>Users</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart1"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                    <div class="text">
                        <?php
                        $countd = 0;
                        $mang = json_decode($data["cd"]);
                        foreach ($mang as $m) {
                            $countd++;
                        }
                        ?>
                        <h2><?php echo $countd ?></h2>
                        <span>Doctors</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                    <div class="text">
                        <?php
                        $counth = 0;
                        $mang = json_decode($data["ch"]);
                        foreach ($mang as $m) {
                            $counth++;
                        }
                        ?>
                        <h2><?php echo $counth ?></h2>
                        <span>Total chat</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart3"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="text">
                        <?php
                        $countm = 0;
                        $mang = json_decode($data["cm"]);
                        foreach ($mang as $m) {
                            $countm += $m->wallet;;
                        }

                        ?>

                        <h2><?php echo number_format($countm, 0, '', ','); ?></h2>
                        <span>VNĐ</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart4"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <!-- CHART PERCENT-->
        <div class="chart-percent-2">
            <h3 class="title-3 m-b-30">Statistics chart of the number of registered users</h3>
            <div class="chart-wrap">
                <canvas id="percent-chart2"></canvas>
                <div id="chartjs-tooltip">
                    <table></table>
                </div>
            </div>
            <div class="chart-info">
                <div class="chart-note">
                    <span class="dot dot--blue"></span>
                    <span>Last month</span>
                </div>
                <div class="chart-note">
                    <span class="dot dot--red"></span>
                    <span>This month</span>
                </div>
            </div>
        </div>
        <!-- END CHART PERCENT-->
    </div>
    <div class="col-lg-6">
        <div class="au-card chart-percent-card">
            <div class="au-card-inner">
                <h3 class="title-2 tm-b-5">Total deposit statistics chart</h3>
                <div class="row no-gutters">
                    <div class="col-xl-6">
                        <div class="chart-note-wrap">
                            <div class="chart-note mr-0 d-block">
                                <span class="dot dot--blue"></span>
                                <span>Last month</span>
                            </div>
                            <div class="chart-note mr-0 d-block">
                                <span class="dot dot--red"></span>
                                <span>This month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="percent-chart">
                            <canvas id="percent-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>