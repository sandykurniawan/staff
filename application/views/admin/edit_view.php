
<!-- Content Header (Page header) -->
<section class="content-header">
        <?php echo $this->session->flashdata('pesan') ?>
    <div>
    <h1>
        <!-- Daftar User -->
        <small></small>
    </h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">User</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"> User list</h3>
        </div>
        <div class="box-body">
        <form action ="<?php echo base_url('admin/edit_user')?>" class="form-horizontal" method="post">
    <div class="form-group">
        <label class="col-sm-2 control-label">Username : </label>
        <div class="col-sm-9">
            <input type="email" class="form-control"  value="<?php echo $edit['username']; ?>" name="username" readonly required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nama : </label>
        <div class="col-sm-9">
            <input type="text" class="form-control"  value="<?php echo $edit['name']; ?>" name="name" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-11">
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
        </div>
    </div>
</form>   
        </div><!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->
