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
jQuery('.forgot-password').click(function(){
  jQuery('.register-form').toggleClass('open');
});

jQuery('aside > ul > li:nth-child(2)').click(function(){
    var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;

    if(x < 768){

    }
});