<?php 
if(isset($_POST["limit"], $_POST["start"]))
{
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
            }
                ?>