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

  
      

    var myclassification = new LiveValidation('classification-input', { validMessage: "Valid!"});
    myclassification.add(Validate.Presence);

    var mydescription = new LiveValidation('description-input', { validMessage: "Valid!"});
    mydescription.add(Validate.Presence);


    var mypropertyno = new LiveValidation('propertyno-input', { validMessage: "Valid!"});
    mypropertyno.add(Validate.Presence);


         
    var myclass = new LiveValidation('pclass-input', { validMessage: "Valid!"});
    myclass.add(Validate.Presence);

    var mydesc = new LiveValidation('pdesc-input', { validMessage: "Valid!"});
    mydesc.add(Validate.Presence);


    var myprop = new LiveValidation('pprop-input', { validMessage: "Valid!"});
    myprop.add(Validate.Presence);



  
	

};