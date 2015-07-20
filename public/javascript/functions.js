function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
        }
        return "";
    }
    
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }
    
    function actionBicepCurl(){
        var bicepCurls = getCookie("bicepCurls");
        if (bicepCurls !== 'NaN'){
            bicepCurls = parseInt(bicepCurls) + 10;
            setCookie("bicepCurls", bicepCurls, 365);
        } else {
            bicepCurls = 10;
            setCookie("bicepCurls", 10, 1);
        }
        $("#infoBox").text("You just did " + bicepCurls + " bicep curls!"); 
    }