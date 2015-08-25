var backEventListener = null;

var unregister = function() {
    if ( backEventListener !== null ) {
        document.removeEventListener( 'tizenhwkey', backEventListener );
        backEventListener = null;
        window.tizen.application.getCurrentApplication().exit();
    }
}

//Initialize function
var init = function () {
	console.log("init() called");
    // register once
    if ( backEventListener !== null ) {
        return;
    }
    
    console.log("init() called");
    
    var backEvent = function(e) {
        if ( e.keyName == "back" ) {
            try {
                if ( $.mobile.urlHistory.activeIndex <= 0 ) {
                    // if first page, terminate app
                    unregister();
                } else {
                    // move previous page
                    $.mobile.urlHistory.activeIndex -= 1;
                    $.mobile.urlHistory.clearForward();
                    window.history.back();
                }
            } catch( ex ) {
                unregister();
            }
        }
    }
    
    // add eventListener for tizenhwkey (Back Button)
    document.addEventListener( 'tizenhwkey', backEvent );
    backEventListener = backEvent;
    
    validate();
};

window.onload = init;
$(document).unload( unregister );

var validate = function(){	

  
    
    var gdgtpropertyno = new LiveValidation('gdgtpropertyno-input', { validMessage: "Valid!"});
    gdgtpropertyno.add(Validate.Presence);

     var gdgtdescription = new LiveValidation('gdgtdescription-input', { validMessage: "Valid!"});
     gdgtdescription.add(Validate.Presence);

   var gdgtserial = new LiveValidation('gdgtserial-input', { validMessage: "Valid!"});
    gdgtserial.add(Validate.Presence);

    var gdgtpropertyno_edit = new LiveValidation('gdgtpropertyno_edit-input', { validMessage: "Valid!"});
    gdgtpropertyno_edit.add(Validate.Presence);

     var gdgtdescription_edit = new LiveValidation('gdgtdescription_edit-input', { validMessage: "Valid!"});
     gdgtdescription_edit.add(Validate.Presence);
	
    var gdgtserial_edit = new LiveValidation('gdgtserial_edit-input', { validMessage: "Valid!"});
    gdgtserial_edit.add(Validate.Presence);

};