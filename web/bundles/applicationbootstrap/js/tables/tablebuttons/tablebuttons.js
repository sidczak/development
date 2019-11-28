$(function(){
    /*     
     * Add collapse and remove events to paneles
     */
    $("[data-widget='collapse']").click(function() {
        //Find the panel parent        
        var panel = $(this).parents(".panel").first();
        //Find the body and the footer
        var bf = panel.find(".table-responsive, .panel-body, .panel-filter.active, .panel-footer");
        if (!panel.hasClass("collapsed-panel")) {
            panel.addClass("collapsed-panel");
            //Convert minus into plus
            $(this).children(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
            bf.slideUp();
        } else {
            panel.removeClass("collapsed-panel");
            //Convert plus into minus
            $(this).children(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
            bf.slideDown();
        }
    });
    
    $("[data-widget='filter']").click(function() {
        //Find the panel parent        
        var panel = $(this).parents(".panel").first();
        var bf = panel.find(".panel-filter");
        if (!panel.hasClass("collapsed-panel")) {
	        if (!panel.hasClass("collapsed-filter")) {
	            panel.addClass("collapsed-filter");
	            bf.slideDown();
	            bf.removeClass("inactive").addClass("active");
	        } else {
	        	panel.removeClass("collapsed-filter");
	            bf.slideUp();
	            bf.removeClass("active").addClass("inactive");
	        }
        }
    });
    
    $("[data-widget='remove']").click(function() {
        //Find the panel parent        
        var panel = $(this).parents(".panel").first();
        panel.slideUp();
    });
    
    $("[data-widget='expand']").click(function() {
        //Find the panel parent        
        var panel = $(this).parents(".panel").first();
        if (!panel.hasClass("expand-panel")) {
            panel.addClass("expand-panel");
            //Convert minus into plus
            $(this).children(".fa-expand").removeClass("fa-expand").addClass("fa-compress");
        } else {
            panel.removeClass("expand-panel");
            //Convert plus into minus
            $(this).children(".fa-compress").removeClass("fa-compress").addClass("fa-expand");
        }
    });
    
	$('[data-toggle="popover"]').popover();
	$('[data-toggle="tooltip"]').tooltip();
    
});