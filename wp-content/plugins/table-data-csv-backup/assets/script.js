jQuery(document).ready(function() {
    //jQuery('#frm-csv-upload').on ('submit' , function (e) {
    jQuery('#frm-csv-upload').on ('submit' , function (e) {
        e.preventDefault();
        //alert('sdfsdfs');
        //return false;

        var formData = new FormData(this);

        jQuery.ajax({
           url : cdu_object.ajax_url,
           data : formData,
           dataType: "json",
            method:"POST",
            processData:false,
             contentType:false,
            success : function ( response ) {
               if(response.status){

                    jQuery('#csv_sucess_message').text(response.message).css({
                        color:'green',
                        display:'block'
                    });
ls

                    //reset the value
                    jQuery('#frm-csv-upload')[0].reset();
               }
            }
        });
    })
});