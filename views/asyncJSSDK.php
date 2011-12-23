<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId   : '<?php echo Kohana_Facebook::instance()->getAppID(); ?>', // App ID
            session : '<?php echo json_decode(session_id()); ?>',
            status  : true, // check login status
            cookie  : true, // enable cookies to allow the server to access the session
            xfbml   : true  // parse XFBML
        });

        // Additional initialization code here
    };

    // Load the SDK Asynchronously
    (function(d){
        var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "//connect.facebook.net/pl_PL/all.js";
        d.getElementsByTagName('head')[0].appendChild(js);
    }(document));
</script>