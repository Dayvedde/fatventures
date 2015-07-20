<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}

@extends ('header1')

@section('content')
<h1> Welcome to Fatventures! </h1>
<div class='playerContainer'>
    
</div>
<div class='menuWrapper'>
    <input id='actionBicepCurl' type='button' value='Bicep curls'/>
    <input id='actionPushUp' type='button' value='Push ups'/>
    <input id='actionSitUp' type='button' value='Sit ups'/>
    <input id='actionPlank' type='button' value='Plank'/>
    <input id='actionShop' type='button' value='Store' />
</div>
<div id='infoBox'>
    
</div>
@stop

<script type='text/javascript'>
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

    $(document).ready(function(){
        $('#actionBicepCurl').on('click', function(){
            var bicepCurls = getCookie("bicepCurls");
            if (bicepCurls !== 'NaN'){
                bicepCurls = parseInt(bicepCurls) + 10;
                setCookie("bicepCurls", bicepCurls, 365);
            } else {
                bicepCurls = 10;
                setCookie("bicepCurls", 10, 1);
            }
           $("#infoBox").text("You just did " + bicepCurls + " bicep curls!"); 
        });
        $('#actionPushUp').on('click', function(){
           $("#infoBox").text("You just did 10 push ups!"); 
        });
        $('#actionSitUp').on('click', function(){
           $("#infoBox").text("You just did 10 sit ups!"); 
        });
        $('#actionPlank').on('click', function(){
           $("#infoBox").text("You just planked for 10 seconds!"); 
        });
        $('#actionShop').on('click', function(){
            window.location.href = 'store';
        });
    });
</script>