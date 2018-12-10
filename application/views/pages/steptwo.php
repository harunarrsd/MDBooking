<!-- Stepper -->


<!-- <div class="steps-form-2">
    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
        <div class="steps-step-2">
            <a type="button" class="btn btn-amber btn-circle-3 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Basic Information"><i class="fa fa-folder-open-o" aria-hidden="true"></i></a>
            <h3>Isi Data</h3>
        </div>
        <div class="steps-step-2">
            <a type="button" class="btn btn-blue-grey btn-circle-3 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <h3>Pilih Pendaftaran</h3>
        </div>
        <div class="steps-step-2">
            <a type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Terms and Conditions"><i class="fa fa-photo" aria-hidden="true"></i></a>
            <h3>Pilih Waktu</h3>
        </div>
        <div class="steps-step-2">
            <a type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
            <h3>Selesai</h3>
        </div>
    </div>
</div> -->



<!-- TEST -->
<div class="portlet-body por">
<div class="mt-element-step">
    <div class="row step-thin">
        <div class="col-lg-3 bg-grey mt-step-col active">
            <div class="mt-step-number first bg-white font-grey">1</div>
            <div class="mt-step-title uppercase font-grey-cascade">Isi Data</div>
            <div class="mt-step-content font-grey-cascade">Lengkapi Data Diri Anda</div>
        </div>
        <div class="col-lg-3 bg-grey mt-step-col active">
            <div class="mt-step-number bg-white font-grey">2</div>
            <div class="mt-step-title uppercase font-grey-cascade">Pilih Dokter</div>
            <div class="mt-step-content font-grey-cascade">Pilih cabang dan Dokter</div>
        </div>
        <div class="col-lg-3 bg-grey mt-step-col">
            <div class="mt-step-number bg-white font-grey">3</div>
            <div class="mt-step-title uppercase font-grey-cascade">Pilih Waktu</div>
            <div class="mt-step-content font-grey-cascade">Tetapkan Waktu Pemesanan</div>
        </div>
        <div class="col-lg-3 bg-grey mt-step-col">
            <div class="mt-step-number bg-white font-grey">4</div>
            <div class="mt-step-title uppercase font-grey-cascade">Selesai</div>
            <div class="mt-step-content font-grey-cascade">Reservasi Anda Berhasil</div>
        </div>
    </div>
</div>
</div>
<br>
<br>
<br>

<!-- END TEST -->


<!-- Second Step -->
<?php 
    foreach($main['id']->result() as $obj){
        $id = $obj->idbooking;
        $nama = $obj->nama;
        $email = $obj->email;
        $nohp = $obj->nohp;
    }
?>
<?php 
    foreach($main['booking_cabang']->result() as $obj){
        $idcabang = $obj->idcabang;
        $nama_cabang = $obj->nama_cabang;
    }
?>
<?php 
    foreach($main['booking_users']->result() as $obj){
        $iddokter = $obj->iddokter;
        $name = $obj->name;
    }
?>
<input type="text" name="id" value="<?php echo $id;?>">

    <div class="content">


    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Halo!</strong> <?php echo $nama;?>, Email Anda : <?php echo $email;?> dan No.HP : <?php echo $nohp;?>.
    </div>

    <!-- START BOX -->
    <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Form Reservasi </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form class="form-horizontal" role="form">
                    <div class="form-body">
                            <div class="row setup-content-2" id="step-2">
                            <div class="col-md-2"></div>
                                <div class="col-md-8">
                                <br>
                                <label for="sel1">Pilih Cabang</label><br>
                                    <div class="input-group">
                                        <input type="text" class="form-control" readonly value="<?php if($idcabang== NULL)echo 'Belum Memilih';echo $nama_cabang?>">
                                        <span class="input-group-btn">
                                            <button class="btn default cal" type="button" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                <i class="fa fa-clock-o"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <br>
                                    <label for="sel1">Pilih Dokter</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" readonly value="<?php echo $name;?>">
                                        <span class="input-group-btn">
                                            <button class="btn default cal" type="button" data-toggle="modal" data-target=".bs-example-modal-lg2">
                                                <i class="fa fa-clock-o"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <br>
                                    <button class="btn btn-primary nextBtn-2 " type="submit"><a href="<?php echo site_url('stepthree')?>" style="color: #fff;">Next</a></button>
                                    <br>
                                    <br>
                                </div>
                            <div class="col-md-2"></div>
                            </div>
                        </div>
                        
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
      <!-- END BOX -->
</form>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="row">
        <?php 
            foreach($main['cabang']->result() as $obj)
            {
        ?>
          <div class="col-lg-6" style="margin-bottom:20px;">
          <div class="panel panel-default" style="margin:20px;">
                <div class="panel-body">
                    <?php echo form_open_multipart('steptwo/update_cabang/');?>
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="hidden" name="cabang" value="<?php echo $obj->idcabang;?>">
                        <img src="<?php echo $obj->foto;?>" alt="" width="100%" style="margin-left:auto;margin-right:auto;display:block;padding:10px;">
                            <center>
                                <h3><?php echo $obj->nama_cabang;?></h3>
                                <p style="margin-left:20px;margin-right:20px;"><?php echo $obj->alamat;?></p>
                                <button class="btn btn-primary nextBtn-2 " type="submit">Pilih</button>
                            </center>
                    </form>
                </div>
          </div>
          </div>
        <?php
            }
        ?>
        </div>
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="row">
        <?php 
            if($idcabang == 1){
                foreach($main['sql']->result() as $obj)
                {
        ?>
                <div class="col-lg-6" style="margin-bottom:20px;">
                    <div class="panel panel-default" style="margin:20px;">
                            <div class="panel-body">
                                <?php echo form_open_multipart('steptwo/update_booking/');?>
                                    <input type="text" name="id" value="<?php echo $id;?>">
                                    <input type="text" name="dokter" value="<?php echo $obj->id;?>">
                                    <img src="<?php echo $obj->gambar;?>" alt="" width="100%" style="margin-left:auto;margin-right:auto;display:block;padding:10px;">
                                        <center>
                                            <h3><?php echo $obj->name;?></h3>
                                            <button class="btn btn-primary nextBtn-2 " type="submit">Pilih</button>
                                        </center>
                                </form>
                            </div>
                    </div>
                </div>
        <?php   }
            }else{
                foreach($main['sql2']->result() as $obj)
                {
        ?>
                <div class="col-lg-6" style="margin-bottom:20px;">
                    <div class="panel panel-default" style="margin:20px;">
                            <div class="panel-body">
                                <?php echo form_open_multipart('steptwo/update_booking/');?>
                                    <input type="text" name="id" value="<?php echo $id;?>">
                                    <input type="text" name="dokter" value="<?php echo $obj->id;?>">
                                    <img src="<?php echo $obj->gambar;?>" alt="" width="100%" style="margin-left:auto;margin-right:auto;display:block;padding:10px;">
                                        <center>
                                            <h3><?php echo $obj->name;?></h3>
                                            <button class="btn btn-primary nextBtn-2 " type="submit">Pilih</button>
                                        </center>
                                </form>
                            </div>
                    </div>
                </div>
        <?php   }
            }
        ?>
        </div>
    </div>
  </div>
</div>