<?php
/**
 * 系统权限组
 *
 * @version        $Id: sys_group.php 1 22:28 2010年7月20日 $
 * @package        DedeCMS.Administrator
 * @copyright      Copyright (c) 2007 - 2020, 上海卓卓网络科技有限公司.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
require_once(dirname(__FILE__)."/config.php");
CheckPurview('sys_Group');
if(empty($dopost)) $dopost = "";
include DedeInclude('templets/sys_group.htm');