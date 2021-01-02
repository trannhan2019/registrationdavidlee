(function ($) {
    "use strict";
    
    /*==================================================================
    [ Show pass ]*/
    var showPass1 = 0;
    $('#btn-show-pass-1').on('click', function(){
        
        if(showPass1 == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('fa-eye');
            $(this).find('i').addClass('fa-eye-slash');
            showPass1 = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('fa-eye');
            $(this).find('i').removeClass('fa-eye-slash');
            showPass1 = 0;
        }
        
    });

    var showPass2 = 0;
    $('#btn-show-pass-2').on('click', function(){

        if(showPass2 == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('fa-eye');
            $(this).find('i').addClass('fa-eye-slash');
            showPass2 = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('fa-eye');
            $(this).find('i').removeClass('fa-eye-slash');
            showPass2 = 0;
        }
        
    });


})(jQuery);