<!DOCTYPE html>
<html>
<section class="content-header">
    <h1>
        Edit
        <small>Data Pribadi</small>
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
                  <input type="text" class="form-control pull-right" id="datepicker">
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
</section><!-- /.content -->
</html>