<!-- Stepper -->


<!-- <div class="steps-form-2">
    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
        <div class="steps-step-2">
            <a type="button" class="btn btn-amber btn-circle-3 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Basic Information"><i class="fa fa-folder-open-o" aria-hidden="true"></i></a>
            <h3>Isi Data</h3>
        </div>
        <div class="steps-step-2">
            <a type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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
        <div class="col-lg-3 bg-grey mt-step-col">
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

<!-- END TEST -->

<!-- First Step -->
<?php echo form_open_multipart('main/create_booking/');?>
    <div class="content">
    <br>
    <br>
    <br>
    <div class="alert alert-info" role="alert">
     <strong>Info!</strong> Harap masukan data diri anda terlebih dahulu untuk melanjutkan melakukan pemesanan.
    </div>

    <!-- START BOX -->
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>Form Reservasi </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <!-- <div class="container" style="background:#000"> -->
                <div class="form-horizontal" role="form">
                    <div class="form-body">
                        
                        <div id="step-1">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                        <label for="yourEmail-2" data-error="wrong" data-success="right">Nama</label>
                                        <input id="yourEmail-2" type="text" name="nama" required="required" class="form-control validate">
                                        <br>

                                        <label for="yourUsername-2" data-error="wrong" data-success="right">Email</label>
                                        <input id="yourUsername-2" type="email" name="email" required="required" class="form-control validate">
                                        <br>

                                        <label for="yourUsername-2" data-error="wrong" data-success="right">No Hp</label>
                                        <input id="yourUsername-2" type="number" name="nohp" required="required" class="form-control validate">
                                        <br>

                                        <button class="btn btn-primary nextBtn-2" type="submit" href="#step-2">Next</button>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <!-- <div class="col-md-10">
                                    <label for="yourUsername-2" data-error="wrong" data-success="right">Email</label>
                                    <input id="yourUsername-2" type="email" name="email" required="required" class="form-control validate">
                                    <br>
                            </div>
                            <div class="col-md-10">
                                    <label for="yourUsername-2" data-error="wrong" data-success="right">No Hp</label>
                                    <input id="yourUsername-2" type="number" name="nohp" required="required" class="form-control validate">
                                    <br>
                            </div>
                            <div class="col-md-10">
                                <button class="btn btn-primary nextBtn-2" type="submit" href="#step-2">Next</button>
                            </div> -->
            
                        </div>
                        
                    </div>
                </div>
            <!-- </div> -->
            <!-- END FORM-->
        </div>
    </div>
    <!-- END BOX -->

       
    </div>
</form>