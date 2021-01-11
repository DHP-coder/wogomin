<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <!-- <h2 class="title-1 m-b-35"><b>CONTENT CHAT</b></h2> -->
        <div class="table-data__tool">
            <div class="table-data__tool-left">

                <!-- <div class="rs-select2--light rs-select2--sm">
                    <select class="js-select2" name="time">
                        <option selected="selected">Today</option>
                        <option value="">3 Days</option>
                        <option value="">1 Week</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div> -->
                <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" id="search" name="search" placeholder="Search..." />
                                
                            </form>

            </div>
            
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <!-- <th>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th> -->
                        <th>Room name</th>
                        <th>User send</th>
                        <th>User receive</th>
                        <th>Content</th>
                        <th>Date</th>
                        <!-- <th></th> -->
                    </tr>
                </thead>
                <tbody>
                <?php $mang = json_decode($data["hc"]);
                        foreach($mang as $m){
                        ?>
                    <tr class="tr-shadow">
                        <!-- <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td> -->
                        <td><?php echo $m->roomName ?></td>
                        <td>
                        <?php echo $m->fromUser ?>
                        </td>
                        <td><?php echo $m->toUser ?></td>
                        <td><?php echo $m->content ?></td>
                        <td><?php echo $m->dateCreated ?></td>
                        
                        <!-- <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td> -->
                    </tr>
                    <tr class="spacer"></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>