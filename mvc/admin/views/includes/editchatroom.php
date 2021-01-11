<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header"><h3>Edit room chat<h3></div>
            <div class="card-body card-block">
            <?php
        $mang = json_decode($data["edit_rc"]);
        foreach ($mang as $m) {
            ?>
                <form action="/wogomin/admin/updateChatRoom/<?php echo $m->id; ?>" method="post">
               
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon" style="padding: .5rem 2.95rem;">ID</div>
                            <input type="text" id="username3" name="idchatroom" disabled class="form-control" value="<?php echo $m->id; ?>">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Room name</div>
                            <input type="text" id="email3" name="roomname" class="form-control" value="<?php echo $m->roomName; ?>">
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon" style="padding: .5rem 0.9rem;">Date create</div>
                            <input type="date" id="password3" name="datecreate" class="form-control" value="<?php echo $m->dateCreated; ?>">
                            
                        </div>
                    </div>
                    <div class="card-footer">
                                        <button type="submit" name="btn-updatechatroom" class="btn btn-primary btn-sm">
                                       <i class="fa fa-dot-circle-o"></i> Update
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Cancel
                                        </button>
                                    </div>
<?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>