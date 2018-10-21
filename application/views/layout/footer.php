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