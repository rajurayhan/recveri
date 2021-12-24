// Form Label Animation
$('.animate-label input, .animate-label select, .animate-label textarea').each(function(){
  if($(this).val().length > 0){
    $(this).addClass('filled');
    if($(this).attr('type') == 'date' || 
      $(this).attr('type') == 'month' || 
      $(this).attr('type') == 'time' || 
      $(this).attr('type') == 'datetime-local')
    {
      $(this).removeAttr('style');
    }
  }else{
    $(this).removeClass('filled');
    if($(this).attr('type') == 'date' || 
      $(this).attr('type') == 'month' || 
      $(this).attr('type') == 'time' || 
      $(this).attr('type') == 'datetime-local')
    {
      $(this).css("color", "transparent");
    }
  }
});

$('.animate-label input, .animate-label select, .animate-label textarea').on('change', function(){
  if($(this).val().length > 0){
    $(this).addClass('filled');
    if($(this).attr('type') == 'date' || 
      $(this).attr('type') == 'month' || 
      $(this).attr('type') == 'time' || 
      $(this).attr('type') == 'datetime-local')
    {
      $(this).removeAttr('style');
    }
  }else{
    $(this).removeClass('filled');
    if($(this).attr('type') == 'date' || 
      $(this).attr('type') == 'month' || 
      $(this).attr('type') == 'time' || 
      $(this).attr('type') == 'datetime-local')
    {
      $(this).css("color", "transparent");
    }
  }
});

$('.animate-label input, .animate-label select, .animate-label textarea').on('focusin', 
  function(){
    $(this).closest('div').removeClass('focus-out');
  }).on('focusout', function(){
    $(this).closest('div').addClass('focus-out');
    if($(this).val().length > 0){
      $(this).addClass('filled');
      if($(this).attr('type') == 'date' || 
        $(this).attr('type') == 'month' || 
        $(this).attr('type') == 'time' || 
        $(this).attr('type') == 'datetime-local')
      {
        $(this).removeAttr('style');
      }
    }else{
      $(this).removeClass('filled');
      if($(this).attr('type') == 'date' || 
        $(this).attr('type') == 'month' || 
        $(this).attr('type') == 'time' || 
        $(this).attr('type') == 'datetime-local')
      {
        $(this).css("color", "transparent");
      }
    }
});



// Select 2
$(document).ready(function() {
    $('.country-selection').select2({
      placeholder: "Select Country",
    });
});

// Select 2
$(document).ready(function() {
    $('.e-verification-type').select2({
      placeholder: "Select Type",
    });
});


$(document).ready(function($){
    $('.form-tab-outer').stickySidebar({
        topSpacing: 30,
        side: 'right',
        container: '.form-outer',
        sidebarInner: '.form-tab-inner',
        // callback: function() {
        //     console.log('Sticky sidebar fired!');
        // }
    });
});



// File Size Validation
function kycImgOneUrl(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgOneShow').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$(".img-one-select").change(function(){
    var thisParent = $(this).closest('.image-box.upload');
    var thisVal = $(this).val();
    var maxSize = $(this).attr('max-size');
    maxSizeToMb = parseFloat(maxSize/1024).toFixed(2);
    thisParent.find('span.text-dangr').remove();
    thisParent.find('p.text-dangr').remove();
    var ImgOneDSRC = $('#imgOneShow').attr('data-src');
    $('#imgOneShow').attr('src', ImgOneDSRC);
    if($(this)[0].files.length > 0){
        if((parseFloat($(this)[0].files[0]['size'])/1024) >= maxSize){
            $(this).val('');
            var ImgOneDSRC = $('#imgOneShow').attr('data-src');
            $('#imgOneShow').attr('src', ImgOneDSRC);
            thisParent.addClass('not-selected');
            thisParent.removeClass('selected');
            $('.alert-success').remove();
            thisParent.find('p.text-dangr').remove();
            thisParent.find('span.text-dangr').remove();
            thisParent.append('<p class="text-dangr mb-0">Max Image Size '+maxSizeToMb+'MB</p>');
        }else{
            fileName = $(this)[0].files[0].name;
            var fileSize = (parseFloat($(this)[0].files[0]['size'])/1024);
            fileSize = (parseFloat(fileSize)/1024).toFixed(2);

            thisParent.removeClass('not-selected');
            thisParent.addClass('selected');
            thisParent.find('.img-prev-info .title').text(fileName);
            thisParent.find('.img-prev-info .size').text(fileSize+' MB');

            kycImgOneUrl(this);

            var extension = fileName.substr( (fileName.lastIndexOf('.') +1) );
            extension = extension.toLowerCase();
            console.log(extension)
            if(extension == 'pdf'){
             var defaultImg = thisParent.find('img').attr('default-src');
              setTimeout(function(){
                thisParent.find('img').attr('src', defaultImg);
              },200);
            }
        }
    }
});

$('.remove-img-btn').click(function(){
  $(this).closest('.image-box.upload').removeClass('selected');
  $(this).closest('.image-box.upload').addClass('not-selected');
  $(this).closest('.image-box.upload').find('input').val('');
  $(this).closest('.image-box.upload').find('img').attr('src','');
})



$('.form-tab-next').click(function(){
  var status = true;
  $('.ip-required.ip .input').removeClass('required-active');
  $('.ip-required.cbi-1 .input').removeClass('required-active');
  $('.ip-required.cri-1 .input').removeClass('required-active');
  $('.step-1 .ip-required.ip .input').each(function(){
      var thisParent = $(this).closest('.form-group');
      var thisVal = $(this).val();
      if(thisVal.length <= 0){
          $('.ip-required.ip .input').removeClass('required-active');
          $(this).addClass('required-active');
          return status = false;
      }
  });

  if($('.step-1 .ip-required.cbi-1 .input').length){
      if(status != false){
          status = false;
          $('.ip-required.cbi-1 .input').removeClass('required-active');
          $('.ip-required.cbi-1 .input').first().addClass('required-active');
          $('.step-1 .ip-required.cbi-1 .input').each(function(){
              var thisParent = $(this).closest('.form-group');
              var thisCheck = $(this);
              if(thisCheck.is(':checked')){
                  $('.ip-required.cbi-1 .input').removeClass('required-active');
                  return status = true;
              }
          });
      }
  }

  if($('.step-1 .ip-required.cri-1 .input').length){
      if(status != false){
          status = false;
          $('.ip-required.cri-1 .input').removeClass('required-active');
          $('.ip-required.cri-1 .input').first().addClass('required-active');
          $('.step-1 .ip-required.cri-1 .input').each(function(){
              var thisParent = $(this).closest('.form-group');
              var thisCheck = $(this);
              if(thisCheck.is(':checked')){
                  $('.ip-required.cri-1 .input').removeClass('required-active');
                  return status = true;
              }
          });
      }
  }

  if($('.acceptance-check').length){
      if(status != false){
          var thisParent = $('.acceptance-check').closest('.form-group');
          var thisCheck = $('.acceptance-check');
          if($('.acceptance-check').is(':checked')){
              thisCheck.removeClass('required-active');
              status = true;
          }else{
              thisCheck.removeClass('required-active');
              thisCheck.addClass('required-active');
              status = false;
          }
      }
  }

  if(status == false){
      if($(".stars.required-active").length){
          theOffset = $(".stars.required-active").first().closest('div').offset();
          $('body,html').animate({
              scrollTop: theOffset.top - 150
          },100);
          $(".required-active").first().focus();
      }else{
          theOffset = $(".required-active").first().offset();
          $('body,html').animate({
              scrollTop: theOffset.top - 150
          },100);
          $(".required-active").first().focus();
          if($('.select2-container').length){
              $(".required-active").closest('.form-group').find('.select2-container').siblings('select:enabled').select2('open');
          }
      }
  }else{
      $('.form-tab-next').attr('type','submit');
      $('.form-step-submit').submit();
  }
})


$('.e-verification-type').on('change',function(){
  var exVerVal = $(this).val();
  console.log(exVerVal);
  if(exVerVal == 'Academic'){
    $('.c-work-ex .ip').removeClass('ip-required');
    $('.c-work-ex .cbi-1').removeClass('ip-required');
    $('.c-work-ex .cri-1').removeClass('ip-required');
    $('.c-work-ex').slideUp(100);

    $('.c-academic-ex .ip').addClass('ip-required');
    $('.c-academic-ex .cbi-1').addClass('ip-required');
    $('.c-academic-ex .cri-1').addClass('ip-required');
    $('.c-academic-ex').slideDown(500);
  }else{
    $('.c-academic-ex .ip').removeClass('ip-required');
    $('.c-academic-ex .cbi-1').removeClass('ip-required');
    $('.c-academic-ex .cri-1').removeClass('ip-required');
    $('.c-academic-ex').slideUp(100);

    $('.c-work-ex .ip').addClass('ip-required');
    $('.c-work-ex .cbi-1').addClass('ip-required');
    $('.c-work-ex .cri-1').addClass('ip-required');
    $('.c-work-ex').slideDown(500);
  }
})