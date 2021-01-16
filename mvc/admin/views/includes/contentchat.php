<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <!-- <h2 class="title-1 m-b-35"><b>CONTENT CHAT</b></h2> -->
        <div class="table-data__tool">
            <div class="table-data__tool-left">


                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" id="search-history" name="search" placeholder="Search..." />

                </form>

            </div>
            <div class="table-data__tool-right">
                <div class="rs-select2--light rs-select2--sm">
                    <select class="js-select2" name="services" id="js-select2">
                    <option value="" checked>All property</option>
                    <?php $mang = json_decode($data["listsv"]);
                        foreach ($mang as $m) {
                        ?>
                        <option value="<?php echo $m->roomName ?>"><?php echo $m->roomName ?></option>
                        <?php } ?>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

        </div>
        <div class="table-responsive table-responsive-data2">
            <div id="dataSearch"></div>
            <div id="table-after">
                <table class="table table-data2">
                    <thead style="background-color: darkgray">
                        <tr>

                            <th>Room name</th>
                            <th>User</th>
                            <th>Doctor</th>
                            <th>Content</th>
                            <th>Date</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $mang = json_decode($data["hc"]);
                        foreach ($mang as $m) {
                        ?>
                            <tr class="tr-shadow">

                                <td><?php echo $m->roomName ?></td>
                                <td>
                                    <?php echo $m->fullName ?>
                                </td>
                                <td><?php echo $m->name ?></td>
                                <td><?php echo $m->content ?></td>
                                <td><?php echo $m->dateCreated ?></td>


                            </tr>
                            <tr class="spacer"></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>