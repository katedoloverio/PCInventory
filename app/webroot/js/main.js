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

  
    


	var firstname = new LiveValidation('firstname-input', { validMessage: "Valid!"});
    firstname.add(Validate.Presence);
	firstname.add(Validate.Format, {pattern: /^[a-zA-Z][a-zA-Z]{2,25}$/});
	
	var lastname = new LiveValidation('lastname-input', { validMessage: "Valid!"});
	lastname.add(Validate.Presence);
    lastname.add(Validate.Format, {pattern: /^[a-zA-Z][a-zA-Z]{2,25}$/});

    var companyid = new LiveValidation('companyid-input', { validMessage: "Valid!"});
    companyid.add(Validate.Presence);

var propertyno = new LiveValidation('propertyno-input', { validMessage: "Valid!"});
    propertyno.add(Validate.Presence);

    var description = new LiveValidation('description-input', { validMessage: "Valid!"});
    description.add(Validate.Presence);



	

};