<?php

//----------------GET'S IP ADDRESS--------------

function ipadd()
{
if (!empty($_SERVER['HTTP_CLIENT_IP']))
//check ip from internet
{
$ip=$_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
//check ip proxy
{
$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
$ip=$_SERVER['REMOTE_ADDR'];
}
return $ip;
}
?>
<?php
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];


//-------------------GET'S OPERATING SYSTEM DETAIL--------------------

function getOS(){ 
    global $user_agent;
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
	        '/windows nt 10/i'      =>  'Windows10',
			'/windows nt 6.3/i'     =>  'Windows8.1',
            '/windows nt 6.2/i'     =>  'Windows8',
            '/windows nt 6.1/i'     =>  'Windows7',
            '/windows nt 6.0/i'     =>  'WindowsVista',
            '/windows nt 5.2/i'     =>  'WindowsServer 2003/XPx64',
            '/windows nt 5.1/i'     =>  'WindowsXP',
            '/windows xp/i'         =>  'WindowsXP',
            '/windows nt 5.0/i'     =>  'Windows2000',
            '/windows me/i'         =>  'WindowsME',
            '/win98/i'              =>  'Windows98',
            '/win95/i'              =>  'Windows95',
            '/win16/i'              =>  'Windows3.11',
            '/macintosh|mac os x/i' =>  'Mac OS X',
            '/mac_powerpc/i'        =>  'Mac OS 9',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile'
                        );
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}

//---------------------GET'S BROWSER DETAILS----------------------

function getBrowser(){
    global $user_agent;
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
            '/msie/i'       =>  'Internet Explorer',
            '/firefox/i'    =>  'Firefox',
            '/safari/i'     =>  'Safari',
            '/chrome/i'     =>  'Chrome',
            '/opera/i'      =>  'Opera',
            '/netscape/i'   =>  'Netscape',
            '/maxthon/i'    =>  'Maxthon',
            '/konqueror/i'  =>  'Konqueror',
            '/mobile/i'     =>  'Handheld Browser'
                        );
    foreach ($browser_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
$user_os        =   getOS();
$user_browser   =   getBrowser();
?>