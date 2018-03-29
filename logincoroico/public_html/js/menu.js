$(document).ready(function(){
        $(window).resize(function(){
            var s = document.getElementById("sideBarId");
            var style = s.currentStyle || window.getComputedStyle(s);
            var margin = style.marginLeft;
            var w = window.innerWidth;

            if(w >= "992")
                document.getElementById("sideBarId").style.marginLeft="0px";
            else if(w <= "992")
                document.getElementById("sideBarId").style.marginLeft="-220px";
        
        });
    });
        
    function sideBarMan(){
        var s = document.getElementById("sideBarId");
        var style = s.currentStyle || window.getComputedStyle(s);
        var margin = style.marginLeft;
            
        if (margin === "-220px")
            document.getElementById("sideBarId").style.marginLeft="0px";
        else
             document.getElementById("sideBarId").style.marginLeft="-220px";
        
    }