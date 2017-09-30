function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
        document.getElementById("title1").innerHTML = "Here are some bargains for you " + user + "!";
    } else {
        user = prompt("Please enter your name for some Great Deals:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 365);
        }
    }
}
