<?php
    ini_set("allow_url_fopen", 1);
    $ipres = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));

    if($ipres['geoplugin_countryCode'] == "IN"){
        echo "<h2>It looks like u r frm India you are welcomed here</h2>";
    }else{
        echo "<h2>Your country ". $ipres['geoplugin_countryName'] ." is not supported yet</h2>";
    }

    echo "<br><br><h1>Here are some array elements that you can play with</h1><br>";

    print_r($ipres);
?>