<?php  defined('SWAP_ROOT') or die('非法操作'); $GLOBALS['swap_mac']['jump/']=false; $GLOBALS['swap_mac']['uri']=swap_main_uri_get(); if((end($GLOBALS['swap_mac']['uri'])!='')and(substr(end($GLOBALS['swap_mac']['uri']),0,1)!='?')){ if(isset($_SERVER['HTTP_X_ORIGINAL_URL'])) $OSWAP_1e2beaaf00b82e3bbe8c2179bcd53ed7=$_SERVER['HTTP_X_ORIGINAL_URL']; else $OSWAP_1e2beaaf00b82e3bbe8c2179bcd53ed7=$_SERVER['REQUEST_URI']; $GLOBALS['swap_mac']['jump/']=true; } if(strtolower($GLOBALS['swap_mac']['uri'][1])=='index.php'){ $GLOBALS['swap_mac']['c_str']=strtolower(isset($GLOBALS['swap_mac']['uri'][2])?$GLOBALS['swap_mac']['uri'][2]:''); $GLOBALS['swap_mac']['method']=strtolower(isset($GLOBALS['swap_mac']['uri'][3])?$GLOBALS['swap_mac']['uri'][3]:''); }else{ $GLOBALS['swap_mac']['c_str']=strtolower(isset($GLOBALS['swap_mac']['uri'][1])?$GLOBALS['swap_mac']['uri'][1]:''); $GLOBALS['swap_mac']['method']=strtolower(isset($GLOBALS['swap_mac']['uri'][2])?$GLOBALS['swap_mac']['uri'][2]:''); } if($GLOBALS['swap_mac']['c_str']==NULL) $GLOBALS['swap_mac']['c_str']='index'; if($GLOBALS['swap_mac']['method']==NULL) $GLOBALS['swap_mac']['method']='index'; if(substr($GLOBALS['swap_mac']['c_str'],0,1)=='?') $GLOBALS['swap_mac']['c_str']='index'; if(substr($GLOBALS['swap_mac']['method'],0,1)=='?') $GLOBALS['swap_mac']['method']='index'; if(strstr($GLOBALS['swap_mac']['c_str'],'?')): $temparray=explode('?',$GLOBALS['swap_mac']['c_str']); $GLOBALS['swap_mac']['c_str']=$temparray[0]; endif; if(strstr($GLOBALS['swap_mac']['method'],'?')): $temparray=explode('?',$GLOBALS['swap_mac']['method']); $GLOBALS['swap_mac']['method']=$temparray[0]; endif; 