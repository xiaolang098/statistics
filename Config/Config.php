<?php

/**
 * config配置文件
 * @author xmc
 */
namespace Config;

class Config
{
	// 数据源端口，会向这个端口发送udp广播获取ip，然后从这个端口以tcp协议获取统计信息
	public static $ProviderPort = 55858;
	public static $findProviderPort = 55859;

	public static $adminName = 'admin'; // 管理员用户名，用户名密码都为空字符串时说明不用验证
	public static $adminPassword = 'admin'; // 管理员密码，用户名密码都为空字符串时说明不用验证
	public static $dataPath = '';
}

Config::$dataPath = __DIR__ . '/../data/';