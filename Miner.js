<html>
<script>
var aeg = new Date().toString();
var iFrequency = 5000; // expressed in miliseconds
var myInterval = 0;
var ip = myIP();
startLoop();

function myIP() {
    if (window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
    else xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

    xmlhttp.open("GET","http://api.hostip.info/get_html.php",false);
    xmlhttp.send();

    hostipInfo = xmlhttp.responseText.split("\n");

    for (i=0; hostipInfo.length >= i; i++) {
        ipAddress = hostipInfo[i].split(":");
        if ( ipAddress[0] == "IP" ) return ipAddress[1];
    }

    return false;
}

// STARTS and Resets the loop if any
function startLoop() {
    if(myInterval > 0) clearInterval(myInterval);  // stop
    myInterval = setInterval( "mine()", iFrequency );  // run
}

function mine()
{
if (window.XMLHttpRequest) xhr = new XMLHttpRequest();
    else xhr = new ActiveXObject("Microsoft.XMLHTTP");
if ('withCredentials' in xhr) {
xhr.open("GET", "http://twojointsontheroad.info/e-kroon/rock.php?aeg="+aeg+"&prefix=martti&ip="+ip, false);
xhr.send();
return false;
}
}
</script>
</html>
