<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        First Login
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">First time login</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Please change your password</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form onsubmit="return validatePass()" action ="<?php echo base_url('dosen/updatePassword')?>" class="form-horizontal" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label">New Password : </label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control"  placeholder="Masukkan password baru Anda" name="password" id='pass1' required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Confirm New Password : </label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control"  placeholder="Masukkan password lagi" name="confirm_password" id='pass2' required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-11">
                        <button type="submit" class="btn btn-primary pull-right">Save</button>
                    </div>
                </div>
            </form>           
        </div><!-- /.box-body -->
        <div class="box-footer">
        </div><!-- /.box-footer-->
    </div><!-- /.box -->

</section><!-- /.content -->
<script type="text/javascript">
    function validatePass() {
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        var lgth = document.getElementById("pass1").value.length;
        if (lgth <8){
            alert("Panjang password kurang dari 8 karakter!");
            document.getElementById("pass1").style.borderColor = "#E34234";
            //document.getElementById("pass2").style.borderColor = "#E34234";
            return false;
        } else if (pass1 != pass2) {
            //alert("Passwords Do not match");
            alert("Passwords Tidak Sama!");
            //document.getElementById("pass1").style.borderColor = "#E34234";
            document.getElementById("pass2").style.borderColor = "#E34234";
            return false;
        }
        
    }
</script>