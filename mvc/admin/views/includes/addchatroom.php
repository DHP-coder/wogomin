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
                            <div class="input-group-addon">Room name</div>
                            <input type="text" id="email3" name="roomname" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon" style="padding: .5rem 0.9rem;">Date create</div>
                            <input type="date" id="password3" name="datecreate" class="form-control">

                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" name="btn-addRoom">
                            <i class="fa fa-dot-circle-o"></i> Add
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>