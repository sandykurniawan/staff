<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>STAFF SITE | Data Diri</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Info
        <small>Data Diri</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Info</a></li>
        <li class="active">Data Diri</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Data Pribadi</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">No KTP : </label>
              <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="Masukkan Nomor KTP Anda">
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Lahir : </label>
              <div class="col-sm-9">
                <input type="text" class="form-control"  placeholder="Masukkan Tempat Lahir Anda">
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir : </label>
              <div class="col-sm-5">
                <div class="input-group date" style="width: 73.5%">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat Rumah : </label>
              <div class="col-sm-9">
                <textarea class="form-control" rows="3" placeholder="Masukkan Alamat Rumah Anda"></textarea>
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nomor Handphone : </label>
              <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="Masukkan Nomor Handphone Anda">
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nomor Handphone : (Alternatif) </label>
              <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="Masukkan Nomor Handphone Anda">
              </div>
            </div>
          </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="form-group">  
              <div class="col-sm-1 pull-right">
                <button type="submit" class="btn btn-default pull-right">
                  <i class="fa fa-save"></i> Save
                </button>
              </div>
              <div class="col-sm-1 pull-right">  
                <button type="submit" class="btn btn-primary pull-right" disabled>
                  <i class="fa fa-edit"></i> Edit
                </button>
              </div>
            </div>
          </div><!-- /. box-footer -->
        </form>          
    </div><!-- /.box -->

    <!-- Default box -->
    <div class="box">
        <div class="box box-default collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">Data Kantor</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
	        <form class="form-horizontal">    
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Nama : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Masukkan Nama Anda">
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Gelar Depan : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Masukkan Gelar Depan Anda">
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Gelar Belakang : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Masukkan Gelar Belakang Anda">
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Alamat Kantor : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Masukkan Alamat Kantor Anda">
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">No Telepon : </label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control"  placeholder="Masukkan Nomor Telepon Anda">
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Fax : </label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control"  placeholder="Masukkan Nomor Fax Anda">
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Email : </label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control"  placeholder="Masukkan Alamat Email Anda">
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Email(Alternatif) : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Masukkan Alamat Email Anda">
                        </div>
                    </div>
	            </div><!-- /.box-body -->
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">NIP : </label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control"  placeholder="Masukkan NIP Anda">
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">NIDN : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Masukkan NIDN Anda">
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-footer">
            <div class="form-group">  
              <div class="col-sm-1 pull-right">
                <button type="submit" class="btn btn-default pull-right">
                  <i class="fa fa-save"></i> Save
                </button>
              </div>
              <div class="col-sm-1 pull-right">  
                <button type="submit" class="btn btn-primary pull-right" disabled>
                  <i class="fa fa-edit"></i> Edit
                </button>
              </div>
            </div>
          </div><!-- /. box-footer -->
	        </form>
        </div>
    </div><!-- /.box -->

    <!-- Default box -->
    <div class="box">
        <div class="box box-default collapsed-box">    
            <div class="box-header with-border">
                <h3 class="box-title">Lain-lain</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">Scopus ID : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Masukkan Scopus ID Anda">
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">LinkedIn : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Masukkan Alamat LinkedIn Anda">
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">Interest Subject: </label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">Scholar : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Masukkan Alamat Scholar Anda">
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-footer">
            <div class="form-group">  
              <div class="col-sm-1 pull-right">
                <button type="submit" class="btn btn-default pull-right">
                  <i class="fa fa-save"></i> Save
                </button>
              </div>
              <div class="col-sm-1 pull-right">  
                <button type="submit" class="btn btn-primary pull-right" disabled>
                  <i class="fa fa-edit"></i> Edit
                </button>
              </div>
            </div>
          </div><!-- /. box-footer -->
            </form>
        </div>
    </div><!-- /.box -->

</section><!-- /.content -->

<?php 
$this->load->view('template/js');
?>

<body>
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
<?php
$this->load->view('template/foot');
?>
</html>