<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Add room chat<h3>
            </div>
            <div class="card-body card-block">
                <form action="/wogomin/admin/addChatRoom" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Service name</div>
                            <input type="text" id="roomname" name="roomname" class="form-control">

                        </div>
                        <div><small class="text-danger" id="roomE"></small></div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon" style="padding: .5rem 0.9rem;">Date create</div>
                            <input type="date" required id="password3" name="datecreate" class="form-control">

                        </div>
                        
                    </div> -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" name="btn-addRoom">
                        <i class="fa fa-edit"></i> Add
                        </button>

                        <button class="btn btn-danger btn-sm">
                            <a href="/wogomin/admin/chatroom" class="text-white"><i class="fa fa-ban"></i> Cancel</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>