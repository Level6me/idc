<?php  define(WHM_CALL_METHOD, 'POST'); class WhmCall { public function __construct($OSWAP_1114172c8fe33a02bdf11c8bae2df6bf) { $this->OSWAP_1114172c8fe33a02bdf11c8bae2df6bf = $OSWAP_1114172c8fe33a02bdf11c8bae2df6bf; } public function addParam($OSWAP_8446f8586a870693edd4f98c6f71580a,$OSWAP_d0abf9ee636c32097b95709ff86b1034) { if($this->OSWAP_57ae8ef4cf714593d4c9789e9bb5acab!=""){ $this->OSWAP_57ae8ef4cf714593d4c9789e9bb5acab.='&'; } $this->OSWAP_57ae8ef4cf714593d4c9789e9bb5acab.=$OSWAP_8446f8586a870693edd4f98c6f71580a."=".urlencode($OSWAP_d0abf9ee636c32097b95709ff86b1034); } public function getCallName() { return $this->OSWAP_1114172c8fe33a02bdf11c8bae2df6bf; } public function buildUrl($OSWAP_ac8e9666973285e46582f3b14ea97ae3) { $r = rand(); $OSWAP_610994a4e7848809e659f5e4060325b2 = $this->OSWAP_1114172c8fe33a02bdf11c8bae2df6bf.$OSWAP_ac8e9666973285e46582f3b14ea97ae3.$r; $s = md5($OSWAP_610994a4e7848809e659f5e4060325b2); return "api/?c=whm&a=".$this->OSWAP_1114172c8fe33a02bdf11c8bae2df6bf."&r=".$r."&s=".$s; } public function buildPostData() { return $this->OSWAP_57ae8ef4cf714593d4c9789e9bb5acab; } private $OSWAP_1114172c8fe33a02bdf11c8bae2df6bf = ''; private $OSWAP_57ae8ef4cf714593d4c9789e9bb5acab = ''; } class WhmResult { public function add($OSWAP_8446f8586a870693edd4f98c6f71580a,$OSWAP_d0abf9ee636c32097b95709ff86b1034) { $this->OSWAP_3cc8fbc4c66685e8f1bc76aa1397f081[$OSWAP_8446f8586a870693edd4f98c6f71580a][] = $OSWAP_d0abf9ee636c32097b95709ff86b1034; } public function get($OSWAP_8446f8586a870693edd4f98c6f71580a,$OSWAP_2227b80321fbc865fec89fd376f96742=0) { $OSWAP_d0abf9ee636c32097b95709ff86b1034 = $this->OSWAP_3cc8fbc4c66685e8f1bc76aa1397f081[$OSWAP_8446f8586a870693edd4f98c6f71580a]; return $OSWAP_d0abf9ee636c32097b95709ff86b1034[$OSWAP_2227b80321fbc865fec89fd376f96742]; } public function getAll($OSWAP_8446f8586a870693edd4f98c6f71580a) { return $this->OSWAP_3cc8fbc4c66685e8f1bc76aa1397f081[$OSWAP_8446f8586a870693edd4f98c6f71580a]; } public function getCode() { return intval($this->OSWAP_50a29aafcd340f5e1d57f38a688cc602); } public $OSWAP_50a29aafcd340f5e1d57f38a688cc602 = ''; private $OSWAP_3cc8fbc4c66685e8f1bc76aa1397f081 = array(); } class WhmClient { public function setSecurityKey($OSWAP_ac8e9666973285e46582f3b14ea97ae3) { $this->OSWAP_ac8e9666973285e46582f3b14ea97ae3 = $OSWAP_ac8e9666973285e46582f3b14ea97ae3; } public function setAuth($OSWAP_dc99d3d4c07cb4df3613f3f9bda21f6b,$OSWAP_d8092c0550dc4161a72cbeab3274ca3e) { } public function setUrl($OSWAP_57ae8ef4cf714593d4c9789e9bb5acab) { $this->OSWAP_5d7a15dcf6f09192809f77d15fc6859a_url = $OSWAP_57ae8ef4cf714593d4c9789e9bb5acab; } public function call(WhmCall $OSWAP_59a5f635f2fa170391e45760a558cf81,$OSWAP_1e9fa28c1d665fe91e888a94d2e3c94e=0) { $this->OSWAP_3cc8fbc4c66685e8f1bc76aa1397f081 = array(); $OSWAP_f0f7b8a7c3d14e738d9c228b2aea4c95 = array( 'http'=>array( 'method'=>WHM_CALL_METHOD ) ); if (WHM_CALL_METHOD=='POST') { $OSWAP_f0f7b8a7c3d14e738d9c228b2aea4c95['http']['content'] = $OSWAP_59a5f635f2fa170391e45760a558cf81->buildPostData(); } if ($OSWAP_1e9fa28c1d665fe91e888a94d2e3c94e>0) { $OSWAP_f0f7b8a7c3d14e738d9c228b2aea4c95['http']['timeout'] = $OSWAP_1e9fa28c1d665fe91e888a94d2e3c94e; } $OSWAP_57ae8ef4cf714593d4c9789e9bb5acab = $this->OSWAP_5d7a15dcf6f09192809f77d15fc6859a_url.$OSWAP_59a5f635f2fa170391e45760a558cf81->buildUrl($this->OSWAP_ac8e9666973285e46582f3b14ea97ae3); if (WHM_CALL_METHOD!='POST') { $OSWAP_57ae8ef4cf714593d4c9789e9bb5acab.='&'.$OSWAP_59a5f635f2fa170391e45760a558cf81->buildPostData(); } $OSWAP_c5c92f4a9230aef30d75626653db6991 = @file_get_contents($OSWAP_57ae8ef4cf714593d4c9789e9bb5acab, false, stream_context_create($OSWAP_f0f7b8a7c3d14e738d9c228b2aea4c95)); if($OSWAP_c5c92f4a9230aef30d75626653db6991 === FALSE){ $this->OSWAP_d0d1a8e58a67298d05fa50f8d255ac45 = "cann't connect to host"; return false; } try{ $OSWAP_c288ed77bfa432a5a43edad5358a7c44 = new SimpleXMLElement($OSWAP_c5c92f4a9230aef30d75626653db6991); $OSWAP_3cc8fbc4c66685e8f1bc76aa1397f081 = new WhmResult; foreach($OSWAP_c288ed77bfa432a5a43edad5358a7c44->children() as $OSWAP_6568f466fb5c2021d5ff059811c59524){ if($OSWAP_6568f466fb5c2021d5ff059811c59524->getName()=='result'){ $OSWAP_3cc8fbc4c66685e8f1bc76aa1397f081->OSWAP_50a29aafcd340f5e1d57f38a688cc602 = $OSWAP_6568f466fb5c2021d5ff059811c59524['status']; foreach($OSWAP_6568f466fb5c2021d5ff059811c59524->children() as $OSWAP_35344fbab7e7b7b7840ded9d6f2e51d4) { $OSWAP_3cc8fbc4c66685e8f1bc76aa1397f081->add($OSWAP_35344fbab7e7b7b7840ded9d6f2e51d4->getName(), $OSWAP_35344fbab7e7b7b7840ded9d6f2e51d4[0]); } break; } } return $OSWAP_3cc8fbc4c66685e8f1bc76aa1397f081; } catch (Exception $e) { return "msg=".$OSWAP_c5c92f4a9230aef30d75626653db6991."<br>***********\n"; } } public function get($OSWAP_8446f8586a870693edd4f98c6f71580a,$OSWAP_2227b80321fbc865fec89fd376f96742=0) { $OSWAP_d0abf9ee636c32097b95709ff86b1034 = $this->OSWAP_3cc8fbc4c66685e8f1bc76aa1397f081[$OSWAP_8446f8586a870693edd4f98c6f71580a]; if(!$OSWAP_d0abf9ee636c32097b95709ff86b1034){ return false; } if($OSWAP_2227b80321fbc865fec89fd376f96742>=count($OSWAP_d0abf9ee636c32097b95709ff86b1034)){ return false; } return $OSWAP_d0abf9ee636c32097b95709ff86b1034[$OSWAP_2227b80321fbc865fec89fd376f96742]; } public function setParam($OSWAP_8446f8586a870693edd4f98c6f71580a,$OSWAP_d0abf9ee636c32097b95709ff86b1034) { } public function getLastError() { return $this->OSWAP_d0d1a8e58a67298d05fa50f8d255ac45; } public $OSWAP_ac8e9666973285e46582f3b14ea97ae3 = ''; public $OSWAP_5d7a15dcf6f09192809f77d15fc6859a_url=''; public $OSWAP_d0d1a8e58a67298d05fa50f8d255ac45=''; private $OSWAP_3cc8fbc4c66685e8f1bc76aa1397f081; } 