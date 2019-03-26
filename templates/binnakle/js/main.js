
function loadDynamicContentModal() {    
    jQuery('#bootstrap-modal').modal({
        show : true
    });    
}
jQuery( document ).ready(function() {
    jQuery("a.dropdownover").click(function(event ) { 
        event.preventDefault();
        loadDynamicContentModal();
    });
    jQuery(".item-111 ul li a").click(function(event ) { 
        event.preventDefault();
        loadDynamicContentModal();
    });
});