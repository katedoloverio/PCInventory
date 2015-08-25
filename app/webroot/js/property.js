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

  
    
    var mypropertyno = new LiveValidation('mypropertyno-input', { validMessage: "Valid!"});
    mypropertyno.add(Validate.Presence);

     var mydescription = new LiveValidation('mydescription-input', { validMessage: "Valid!"});
    mydescription.add(Validate.Presence);


    var mypropertyno_edit = new LiveValidation('mypropertyno_edit-input', { validMessage: "Valid!"});
    mypropertyno_edit.add(Validate.Presence);

     var mydescription_edit = new LiveValidation('mydescription_edit-input', { validMessage: "Valid!"});
    mydescription_edit.add(Validate.Presence);
	

};