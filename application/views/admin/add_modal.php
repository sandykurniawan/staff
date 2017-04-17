<form action ="<?php echo base_url('admin/insert_user')?>" class="form-horizontal" method="post">
    <div class="form-group">
        <label class="col-sm-2 control-label">Username : </label>
        <div class="col-sm-9">
            <input type="email" class="form-control"  placeholder="Masukkan Username Anda" name="username" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Name : </label>
        <div class="col-sm-9">
            <input type="text" class="form-control"  placeholder="Masukkan Nama Anda" name="nama" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-11">
            <button type="submit" class="btn btn-primary pull-right">Add</button>
        </div>
    </div>
</form>           