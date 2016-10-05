    ////////////____Input Focus___//////////////////

    jQuery('.form-control').focusout(function() {
        jQuery('.form-group').removeClass('focus');
    });
    jQuery('.form-control').focus(function() {
        jQuery(this).closest('.form-group').addClass('focus');
    });

    /// Input Kepress Filled  Focus
    jQuery('.form-control').keyup(function() {
        if(jQuery(this).val().length > 0){
            jQuery(this).closest('.form-group').addClass('filled');
        }

        else{
            jQuery(this).closest('.form-group').removeClass('filled');
        }
    });

    /// Input Check Filled Focus
    var jQueryformControl = jQuery('.form-control');
    var values = {};
    var validate =    jQueryformControl.each(function() {
        if(jQuery(this).val().length > 0){
            jQuery(this).closest('.form-group').addClass('filled');
        }
        else{
            jQuery(this).closest('.form-group').removeClass('filled');
        }
    });

// Button switching

jQuery('.close').click(function(){
  jQuery(this).closest('.register-form').toggleClass('open');
});