
/*** falash message***/
$(".alert_message").delay(3000).slideUp();

/***confirm delete item ***/
function confirmdelete(msg) {
if (window.confirm(msg)) {
    return true;
}
return false;
}
/***preview image ***/
function previewFile() {
  var preview = document.querySelector('.image_profile');
  var image_profile = document.querySelector('.txtimage_profile');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();
  reader.addEventListener("load", function () {
  preview.src = reader.result;
  image_profile.value = reader.result;
  }, false);
  if (file) {
  reader.readAsDataURL(file);
  }
}
/***preview image slider***/
function readURLslider(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image_slider').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$("#previewFileSlider").change(function(){
    readURLslider(this);
});

/***preview image slider***/
function readURLslider1(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image_slider1').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$("#previewFileSlider1").change(function(){
    readURLslider1(this);
});

/***preview image product detail***/
function readURLproduct(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image_product').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$("#previewFileProduct").change(function(){
    readURLproduct(this);
});

/***preview image product detail***/
function readURLproductdetail(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image_productdetail').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$("#previewFileProductDetail").change(function(){
    readURLproductdetail(this);
});


/***preview image product detail***/
function readURLartilce(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image_article').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$("#previewFileArticle").change(function(){
    readURLartilce(this);
});

/***preview image logo***/
function readURLlogo(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image_logo').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$("#previewFileLogo").change(function(){
    readURLlogo(this);
});
/***add more input ***/
$(document).ready(function(){
$(function() {
       var max_field = 20;
       var wrapper = $('#wrap_field_input');
       var button_add = $('#button_add_input');
       var x=0;
       $(button_add).click(function(e){
         e.preventDefault();
         if(x<max_field){
            x++;
            $(wrapper).append('<div class="input-group"><input type="file"  name="txtimage_detail[]" /><a href="" class="remove_field">gỡ bỏ</a></div>');
         }
       });
       $(wrapper).on('click','.remove_field', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); x--;
       });
});
});

/*****menu******/
 $(document).ready(function(){
                $('#menu_wrapper ul div').hide();
                $('#menu_wrapper ul li a').click(function(){
                    var tmp = $(this).next('div');
                     
                    if ($(tmp).is(':visible')){
                        $(tmp).hide();
                    }
                    else{
                        $(tmp).show();
                    }
                    return false;
                }); 
             });

 $(document).ready(function(){
    $('#add_box_menu').click(function(){
        $('.add_menu').toggle('slow');
    });
 });
 /**** add more tag****/
 $(document).ready(function(){
    $('#show_all_tag').click(function(){
        $('#list_tag').show();
    });
 });

