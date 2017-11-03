#!/usr/bin/php -q

<?php
/**
 * Created by IntelliJ IDEA.
 * User: saveroo
 * Date: 10/12/16
 * Time: 1:20
 */

class Abstraction {

    public function reversal() {

    }

    public function decode($k) {
        $a = 'e';
        $func1 = 'as'.'se'.'rt'; //$func1 = 'assert';
        $aa = 'v';
        $sa ='';
        $func2 = 'ba'.''.'s'.''.'e'.'6'.''.''.'4'.'_'.'de'.'c'.'ode'; //$func2 = 'base64_decode';
        $aaa = 'r';
        $t='t';
        $l='l';
        $i='i';
        $n='n';
        $f = function ($a){return strrev($a);};
        $s='s';
        $y='y';
        $r='r';
        $t='t';
        $p='p';
        $r='r';
        $func3 = '5'.'d'.'m';
        $aaaa ='rts';
        $ax='';
        $test = array('0', '2', 'Z', 'p', 'R', 'W', 'Y','y', 'F', 'G', 'U', 's', 'F', 'W', 'd', 'z', 'l', 'm', 'V');
        $t1 ='implode';
        $averse = array_reverse($test);
        $t2 = $t1($averse);
        $t3 = $t2;
            @$xx = $func1($f($f(strrev($aaaaaa=''.$f($f($s.$t.$r)).($f($aaa)).''.''.$a.$aaaaa=$aa)))).$xxx=$aaaaaa($xe=$aaaaaa($func2($t3))).$func1($func2($t3));

            //echo @$func1($func2($v));
//        $xw=$func1($xaw=$p.$r.$i.$n.$t.'('.'\''.(str_replace(1, $sa,$xxx)).'\''.')');
        $key2 = '2ab759b642d5a5ee8a0a786fd265b332';
        if(md5($k) === $key2) {
//            return trim(exec($xw=$func1($p.$r.$i.$n.$t.'('.'\''.(str_replace(1, $sa,$xxx)).'\''.')').'| tr -d [:digit:]'));
            return trim($xw=$func1($p.$r.$i.$n.$t.'('.'\''. str_replace(1, $sa,$xxx) .'\''.')').'| tr -d [:digit:]');
        }
    }

    public function loop() {
        $key2 = '2ab759b642d5a5ee8a0a786fd265b332';
        $key = '9e3669d19b675bd57058fd4664205d2a';
        $a = 'VmlzdWFsUGFyYWRpZ20';
        $arr = array();
        $a = strrev($a);
//        echo $a;
        for ($i=0, $iMax = strlen($a); $i< $iMax; $i++)
        {
            $arr[$i] = substr($a, $i, 1);
        }
        $bom = "array(";
        foreach ($arr as $k => $v) {
            $bom .= "'".$v."', ";
        }
        $bom .= ");";

//        echo $bom;
    }
}
$a = new Abstraction();
//$a->loop();
$a->decode($argv[1]);
?>