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

  


	var fname = new LiveValidation('fname-input', { validMessage: "Valid!"});
    fname.add(Validate.Presence);
	fname.add(Validate.Format, {pattern: /^[a-zA-Z][a-zA-Z]{2,25}$/});

    var lname = new LiveValidation('lname-input', { validMessage: "Valid!"});
    lname.add(Validate.Presence);
    lname.add(Validate.Format, {pattern: /^[a-zA-Z][a-zA-Z]{2,25}$/});
    
     var companyID = new LiveValidation('companyID-input', { validMessage: "Valid!"});
    companyID.add(Validate.Presence);

	var fname_edit = new LiveValidation('fname_edit-input', { validMessage: "Valid!"});
    fname_edit.add(Validate.Presence);
    fname_edit.add(Validate.Format, {pattern: /^[a-zA-Z][a-zA-Z]{2,25}$/});

    var lname_edit = new LiveValidation('lname_edit-input', { validMessage: "Valid!"});
    lname_edit.add(Validate.Presence);
    lname_edit.add(Validate.Format, {pattern: /^[a-zA-Z][a-zA-Z]{2,25}$/});
    
    var companyID_edit = new LiveValidation('companyID_edit-input', { validMessage: "Valid!"});
    companyID_edit.add(Validate.Presence);
	

};