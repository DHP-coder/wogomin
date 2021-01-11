<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <!-- <h2 class="title-1 m-b-35"><b>CHAT ROOM</b></h2> -->
        <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" id="search" name="search" placeholder="Search..." />
                                
                            </form>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
            </div>
            <div class="table-data__tool-right">
                
            <a href="./deleteallchatroom" type="btn" class="au-btn au-btn-icon au-btn--green au-btn--small" id="btn-delete-all">
                    <i class="zmdi zmdi-delete"></i>Delete
                    </a>

                    <a href="./showaddchatroom" type="btn" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Add chat room
                    </a>

                    
               
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
        <div id="dataSearch"></div>
        <div id="table-after">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>
                            <label class="au-checkbox">
                                <input type="checkbox" id="parent-checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th>
                        <th>Room chat</th>
                        <th>Date create</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <div id="load_data"></div>
                    <div id="load_data_message"></div> -->
                    <?php
                    $mang = json_decode($data["rc"]);
                foreach($mang as $m){
                ?>
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox" class = "children-checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td><?php echo $m->roomName ?></td>
                        <td>
                            <span class="block-email"><?php echo $m->dateCreated ?></span>
                        </td>
                        
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="./editchatroom/<?php echo $m->id ?>"><i class="zmdi zmdi-edit"></i></a>
                                    
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <a href="./deletechatroom/<?php echo $m->id ?>"><i class="zmdi zmdi-delete"></i></a>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    <?php 
                } 
                ?>
                </tbody>
            </table>
            </div>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
