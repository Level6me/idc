<?php  defined('SWAP_ROOT') or die('非法操作'); function pdyuyan_config(){ $OSWAP_886d9a55dad9b0a93d7a2cf9f5067115['swap_plug']='识别浏览器语言'; $OSWAP_886d9a55dad9b0a93d7a2cf9f5067115['swap_plug_version']='1.0'; $OSWAP_886d9a55dad9b0a93d7a2cf9f5067115['swap_plug_explain']="可以自动识别浏览器语言，并切换."; $OSWAP_886d9a55dad9b0a93d7a2cf9f5067115['swap_plug_author']=''; $OSWAP_886d9a55dad9b0a93d7a2cf9f5067115['swap_plug_website']='黑色小河'; return $OSWAP_886d9a55dad9b0a93d7a2cf9f5067115; } function pdyuyan() { if($_COOKIE['langpd']!=1){ $OSWAP_6ce132ae2ed72c1a817346c9496cc653=$_SERVER['HTTP_ACCEPT_LANGUAGE']; $lang=substr($OSWAP_6ce132ae2ed72c1a817346c9496cc653,0,4); if(preg_match("/zh-c/i",$lang)){ if(file_exists("/swap_mac/swap_lang/Chinese")) cookie("language","Chinese"); }elseif(preg_match("/zh/i",$lang)){ if(file_exists("/swap_mac/swap_lang/Chinese-Tradition")) cookie("language","Chinese-Tradition"); }else{ if(file_exists("/swap_mac/swap_lang/English")) cookie("language","English"); } setcookie("langpd",1); } return true; } pdyuyan(); 