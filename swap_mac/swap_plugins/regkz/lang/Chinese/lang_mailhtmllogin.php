<?php
$website=$_SERVER['SERVER_NAME'];
$lang['内容'] = <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<style type="text/css">body {border-width:0;margin:0}img {border:0;margin:0;padding:0}</style><base target="_blank" /></head>
<body><div style="border-bottom:3px solid #d9d9d9;width:900px;">
<div style="border:1px solid #c8cfda;padding:40px;font-size:14px;">
<p>尊敬的用户：</p>
<p>您的帐号 {{用户名}} 于 {{时间}} 在 IP {{ip}} 上登录成功！</p>
<p>如果本次登录不是您本人所为，说明您的帐号已经被盗！为了减少您的损失，请 <a href='http://{$website}/index.php/plugin/regkz/yz/?g={{code}}'>点击这里</a>（注：链接有效期为10分钟），立即进行锁定帐号。</p>
<br>
<div style="border-top:1px solid #d9d9d9;padding:6px 0;font-size:12px;margin:6px 0 20px;text-align:center;">
<table cellspacing="0" cellpadding="0" border="0" align="center" style="font-size:12px;font-family:Helvetica Neue, Luxi Sans, DejaVu Sans, Tahoma, Hiragino Sans GB, STHeiti, Microsoft YaHei, Arial, sans-serif;border-collapse:collapse;width:600px;background-color:#ffffff;margin:auto;"><tbody>
<tr><td style="min-height:20px;padding:10px;"></td></tr>
<tr><td>
    <table cellspacing="0" cellpadding="0" border="0" style="text-align:center;"><tbody><tr>
        <td style="width:auto;margin:0;padding:0;">
            <p style="margin:0;padding:0;font-size:12px;color:#5e5e5e;text-align:left;line-height:14px;">
            本邮件由{{网站名称}}系统自动发出，请勿直接回复！<br>
            http://{$website}/<br>
            </p>
        </td>
    </tr></tbody></table>
</td></tr>
</tbody></table>
</div>
</div></div>
</body></html>
HTML;
$lang['标题']='{{网站名称}}提醒：您的帐户[{{用户名}}]成功登陆{{网站名称}}';
$lang['发信人']='';
