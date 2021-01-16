<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header"><h3>Edit service<h3></div>
            <div class="card-body card-block">
            <?php
        $mang = json_decode($data["edit_rc"]);
        foreach ($mang as $m) {
            ?>
                <form action="/wogomin/admin/updateChatRoom/<?php echo $m->id; ?>" method="post">
               
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon" style="padding: .5rem 3.3rem;">ID</div>
                            <input type="text" id="username3" name="idchatroom" disabled class="form-control" value="<?php echo $m->id; ?>">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Service name</div>
                            <input type="text" id="roomname" name="roomname" class="form-control" value="<?php echo $m->roomName; ?>">
                        </div>
                        <div><small class="text-danger" id="roomE"></small></div>
                    </div>
                  
                    <!-- <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon" style="padding: .5rem 0.9rem;">Date create</div>
                            <input type="date" id="password3" required name="datecreate" class="form-control" value="<?php echo $m->dateCreated; ?>">
                            
                        </div>
                    </div> -->
                    <div class="card-footer">
                                        <button type="submit" id="update-room" name="btn-updatechatroom" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i> Update
                                        </button>
                                        <button class="btn btn-danger btn-sm">
                                            <a href="/wogomin/admin/chatroom" class="text-white"><i class="fa fa-ban"></i> Cancel</a>
                                        </button>
                                    </div>
<?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>