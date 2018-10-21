<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style4.css" type="text/css">
    <link href="<?php echo base_url();?>assets/css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <title>Reservasi Online</title>
</head>
<body>

<div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" name="button1" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a href="#" class="navbar-brand">Media</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#header">Home</a></li>
        <li><a href="#services">Service</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#client">Clients</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</div>



<br>
<br>
<br>
<br>
<br>
<h2 class="text-center font-bold pt-4 pb-5 mb-5"><strong>Reservasi Online</strong></h2>

<!-- Stepper -->
<div class="steps-form-2">
    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
        <div class="steps-step-2">
            <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Basic Information"><i class="fa fa-folder-open-o" aria-hidden="true"></i></a>
            <h3>Isi Data</h3>
        </div>
        <div class="steps-step-2">
            <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <h3>Pilih Pendaftaran</h3>
        </div>
        <div class="steps-step-2">
            <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Terms and Conditions"><i class="fa fa-photo" aria-hidden="true"></i></a>
            <h3>Pilih Waktu</h3>
        </div>
        <div class="steps-step-2">
            <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
            <h3>Selesai</h3>
        </div>
    </div>
</div>

<!-- First Step -->

<form role="form" action="" method="post">
<div class="content">
    <div class="row setup-content-2" id="step-1">
    <p>Harap masukan data diri anda terlebih dahulu untuk melanjutkan melakukan pemesanan</p>
    <br>
    <br>    
        <div class="col-md-14">
                <label for="yourEmail-2" data-error="wrong" data-success="right">Nama</label>
                <input id="yourEmail-2" type="email" required="required" class="form-control validate">
                <br>
        </div>
        <div class="col-md-14">
                <label for="yourUsername-2" data-error="wrong" data-success="right">Email</label>
                <input id="yourUsername-2" type="text" required="required" class="form-control validate">
                <br>
        </div>
        <div class="col-md-14">
                <label for="yourUsername-2" data-error="wrong" data-success="right">No Hp</label>
                <input id="yourUsername-2" type="number" required="required" class="form-control validate">
                <br>
        </div>
        <div class="col-md-14">
            <button class="btn btn-primary nextBtn-2" type="button" href="#step-2">Next</button>
        </div>
        
    </div>
</div>

<!-- Second Step -->
<div class="content">
    <div class="row setup-content-2" id="step-2">
    <p>Halo Angga Riansah Email anda : anggariansah dan no hp HP : 084542</p>
    <br>
    <br>
        <div class="col-md-14">
            <label for="sel1">Pilih Cabang</label>
            <select class="form-control" id="sel1">
            <option>Klinik MD Margonda</option>
            <option>Klinik MD ARH</option>
            </select>
            <br>
        </div>

        <div class="col-md-14">
            <label for="me">Atau</label>
        </div>

        <div class="col-md-14">
            <br>
            <label for="sel1">Pilih Dokter</label>
            <select class="form-control" id="sel1">
            <option>Rudi Wiantos</option>
            <option>Angga Riansah</option>
            </select>
            <br>
        </div>

        <div class="col-md-14">
            <button class="btn btn-primary prevBtn-2 " type="button">Previous</button>
            <button class="btn btn-primary nextBtn-2 " type="button">Next</button>
        </div>
    </div>
</div>

    <!-- Third Step -->
    <div class="row setup-content-2" id="step-3">
        <div class="col-md-12">
        <div style="overflow:hidden;">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="datetimepicker12"></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
        </div>
    </div>

    <!-- Fourth Step -->
    <div class="row setup-content-2" id="step-4">
        <div class="col-md-12">
            <h2 class="text-center font-weight-bold my-4">Registration completed!</h2>
        </div>
    </div>
</form>

<script type="text/javascript">
                    $(function () {
                        $('#datetimepicker12').datetimepicker({
                            inline: true,
                            sideBySide: true
                        });
                    });
</script>

<script>
// Tooltips Initialization
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Steppers
$(document).ready(function () {
  var     navListItems = $('div.setup-panel-2 div a'),
          allWells = $('.setup-content-2'),
          allNextBtn = $('.nextBtn-2'),
          allPrevBtn = $('.prevBtn-2');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
          $item.addClass('btn-amber');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepSteps.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i< curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepSteps.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel-2 div a.btn-amber').trigger('click');
});
</script>



  <!-- FOOTER -->
  <div class="footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <h4 class="wow fadeInUp">Contact Us</h4>
        <p><i class="fa fa-home" aria-hidden="true"></i> 1111 Main Street Of Balandongan, 22222 </p>
        <p><i class="fa fa-envelope" aria-hidden="true"></i> angga.riansah332@gmail.com </p>
        <p><i class="fa fa-phone" aria-hidden="true"></i> 22222222 </p>
        <p><i class="fa fa-globe" aria-hidden="true"></i> www.tukarbuku.com </p>
      </div>
      <div class="col-lg-4 col-md-4">
        <h4>About</h4>
        <p><i class="fa fa-square-o" aria-hidden="true"></i> about us </p>
        <p><i class="fa fa-square-o" aria-hidden="true"></i>  Privacy </p>
        <p><i class="fa fa-square-o" aria-hidden="true"></i> Term and Condition </p>
      </div>
      <div class="col-lg-4 col-md-4">
        <h4>Stay In touch</h4>
        <i class="social fa fa-facebook" aria-hidden="true"></i>
        <i class="social fa fa-twitter" aria-hidden="true"></i>
        <i class="social fa fa-linkedin" aria-hidden="true"></i>
        <i class="social fa fa-pinterest" aria-hidden="true"></i>
        <i class="social fa fa-youtube" aria-hidden="true"></i>
        <i class="social fa fa-github" aria-hidden="true"></i><br>
        <input type="email" name="name" value="" placeholder="Subscribe for Updates">
        <button type="button" name="button" class="btn btn-success">Subscribe</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>