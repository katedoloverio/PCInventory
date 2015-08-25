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

  
    
    var hspropertyno = new LiveValidation('hspropertyno-input', { validMessage: "Valid!"});
    hspropertyno.add(Validate.Presence);

     var hsdescription = new LiveValidation('hsdescription-input', { validMessage: "Valid!"});
    hsdescription.add(Validate.Presence);


    var hspropertyno_edit = new LiveValidation('hspropertyno_edit-input', { validMessage: "Valid!"});
    hspropertyno_edit.add(Validate.Presence);

     var hsdescription_edit = new LiveValidation('hsdescription_edit-input', { validMessage: "Valid!"});
    hsdescription_edit.add(Validate.Presence);
	

};