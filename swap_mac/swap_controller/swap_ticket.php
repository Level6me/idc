<?php  defined('SWAP_ROOT') or die('非法操作'); class swap_ticket extends controller { function index(){ $OSWAP_fd3294d3be61b407cae98b089032c0e4size=10; $this->conn->select('服务单表','*',"uid='".$this->OSWAP_b59487239706386f068f2549a4adfa62."'"); $OSWAP_b5966f537cc8e7710cdb306ca68f8f18rows=$this->conn->db_num_rows(); $OSWAP_f8c16f19236fd4a7fafdc9fe97e2ea1a = $this->conn->fetch_array(); $OSWAP_fd3294d3be61b407cae98b089032c0e4s=intval($OSWAP_b5966f537cc8e7710cdb306ca68f8f18rows/$OSWAP_fd3294d3be61b407cae98b089032c0e4size); if((mac_url_get(2)!='')and(!strstr(mac_url_get(2),'?'))){ $OSWAP_fd3294d3be61b407cae98b089032c0e4=mac_url_get(2); }else{ $OSWAP_fd3294d3be61b407cae98b089032c0e4=1; } $t=array(); $t['总页数']=$OSWAP_fd3294d3be61b407cae98b089032c0e4s+1; $t['当前页数']=$OSWAP_fd3294d3be61b407cae98b089032c0e4; if($OSWAP_fd3294d3be61b407cae98b089032c0e4==1){ $t['上一页连接']='javascript:return false;'; }else{ $t['上一页连接']=$this->cakurl().'/ticket/index/'.($OSWAP_fd3294d3be61b407cae98b089032c0e4-1).'/'; } if(($OSWAP_fd3294d3be61b407cae98b089032c0e4==($OSWAP_fd3294d3be61b407cae98b089032c0e4s+1))or($OSWAP_fd3294d3be61b407cae98b089032c0e4s=='0')){ $t['下一页连接']='javascript:return false;'; }else{ $t['下一页连接']=$this->cakurl().'/ticket/index/'.($OSWAP_fd3294d3be61b407cae98b089032c0e4+1).'/'; } TEMPLATE::assign('t',$t); $OSWAP_8e5fe8b0072876b7292728c12d5c33ee=$OSWAP_fd3294d3be61b407cae98b089032c0e4size*($OSWAP_fd3294d3be61b407cae98b089032c0e4 - 1); $this->conn->query("select * from 服务单表 where uid='".$this->OSWAP_b59487239706386f068f2549a4adfa62."' order by 最后时间 desc limit $OSWAP_8e5fe8b0072876b7292728c12d5c33ee,$OSWAP_fd3294d3be61b407cae98b089032c0e4size"); $OSWAP_9ad0a90d349c03b274a3c5eff195e14c =array(); while($OSWAP_51d4cad9672e6605c99e0c3d678f456e = $this->conn->fetch_assoc()) { $OSWAP_9ad0a90d349c03b274a3c5eff195e14c[]=$OSWAP_51d4cad9672e6605c99e0c3d678f456e; } TEMPLATE::assign('tickets',$OSWAP_9ad0a90d349c03b274a3c5eff195e14c); TEMPLATE::display('supporttickets.tpl'); } function submit(){ $OSWAP_0d07de59261cc2c9023b194184c575fb=_POST('name'); if($OSWAP_0d07de59261cc2c9023b194184c575fb!=''){ $OSWAP_4a6f164ef3c908fa9e5fd8ffecc9b706=_POST('email'); $OSWAP_cce0be4f3d8bd30c138f6ca78aa7f6c6=_POST('subject'); $OSWAP_e944d3dfbac154a6a70ca38a065998b0=_POST('message'); if(!$this->IsMail($OSWAP_4a6f164ef3c908fa9e5fd8ffecc9b706)){ exit(redirect($this->cakurl().'/ticket/submit/?warning='.$this->lang['submit']['邮箱格式错误'])); } if(($OSWAP_cce0be4f3d8bd30c138f6ca78aa7f6c6=='')or($OSWAP_e944d3dfbac154a6a70ca38a065998b0=='')){ exit(redirect($this->cakurl().'/ticket/submit/?warning='.$this->lang['submit']['信息没有添全'])); } $this->conn->insert('服务单表','姓名,电子邮件,主题,提交时间,最后时间,状态,uid',"'".htmlspecialchars($OSWAP_0d07de59261cc2c9023b194184c575fb,ENT_QUOTES)."','".htmlspecialchars($OSWAP_4a6f164ef3c908fa9e5fd8ffecc9b706,ENT_QUOTES)."','".htmlspecialchars($OSWAP_cce0be4f3d8bd30c138f6ca78aa7f6c6,ENT_QUOTES)."',now(),now(),'开放','".$this->OSWAP_b59487239706386f068f2549a4adfa62."'"); $OSWAP_e32d37baaa0da92dfc58a3f1eec1f0ceid=$this->conn->getid(); $this->conn->insert('服务单信息表','用户id,服务单id,名字,时间,信息,客服id,回复类型',"'".$this->OSWAP_b59487239706386f068f2549a4adfa62."','".$OSWAP_e32d37baaa0da92dfc58a3f1eec1f0ceid."','".htmlspecialchars($OSWAP_0d07de59261cc2c9023b194184c575fb,ENT_QUOTES)."',now(),'".htmlspecialchars($OSWAP_e944d3dfbac154a6a70ca38a065998b0,ENT_QUOTES)."','','1'"); $OSWAP_93e86675a14bf45114306ac2be631499id=$this->conn->getid(); do_swap_plug('提交工单成功',$OSWAP_e32d37baaa0da92dfc58a3f1eec1f0ceid,$OSWAP_93e86675a14bf45114306ac2be631499id); redirect($this->cakurl().'/ticket/index/?success='.$this->lang['submit']['提交工单成功']); } TEMPLATE::display('submitticket.tpl'); } function detailed(){ $id=mac_url_get(1); $this->conn->select('服务单表','*',"uid='".$this->OSWAP_b59487239706386f068f2549a4adfa62."' and id='".$id."'"); if($this->conn->db_num_rows()==0){ exit(redirect($this->cakurl().'/ticket/index/')); } $OSWAP_f8c16f19236fd4a7fafdc9fe97e2ea1a = $this->conn->fetch_array(); if(_POST('reply')!=''){ $this->conn->insert('服务单信息表','用户id,服务单id,名字,时间,信息,客服id,回复类型',"'".$this->OSWAP_b59487239706386f068f2549a4adfa62."','".$OSWAP_f8c16f19236fd4a7fafdc9fe97e2ea1a['id']."','".$OSWAP_f8c16f19236fd4a7fafdc9fe97e2ea1a['姓名']."',now(),'".htmlspecialchars(_POST('reply'),ENT_QUOTES)."','','1'"); $OSWAP_93e86675a14bf45114306ac2be631499id=$this->conn->getid(); $this->conn->update('服务单表',"状态='开放',最后时间=now()","id='$id'"); do_swap_plug('回复工单成功',$id,$OSWAP_93e86675a14bf45114306ac2be631499id); exit(redirect($this->cakurl().'/ticket/detailed/'.$id.'/?success='.$this->lang['detailed']['回复工单成功'])); } TEMPLATE::assign('t',$OSWAP_f8c16f19236fd4a7fafdc9fe97e2ea1a); $this->conn->select('服务单信息表','*',"服务单id='".$id."' order by 时间"); $tk =array(); while($OSWAP_51d4cad9672e6605c99e0c3d678f456e = $this->conn->fetch_assoc()) { $tk[]=$OSWAP_51d4cad9672e6605c99e0c3d678f456e; } TEMPLATE::assign('tks',$tk); TEMPLATE::display('detailedticket.tpl'); } } 