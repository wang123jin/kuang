<?php

/**
 * @Author: 王金龙
 * @Date:   2017-11-30 16:25:36
 * @Last Modified by:   王金龙
 * @Last Modified time: 2017-11-30 18:36:21
 */
// header(string:'cont ent-type:text/html;charset=utf8');
$user=$_GET['user'];
$pass=$_GET['pass'];
if($user=='admin'){
	if ($pass=='123456') {
		echo "登录成功";
	}else{
		echo "密码失败";
	}
}else{
	echo "账号不存在";
}