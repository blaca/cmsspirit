/*
Navicat MySQL Data Transfer

Source Server         : spiritcms
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : cmsspirit

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2014-03-24 23:12:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for authassignment
-- ----------------------------
DROP TABLE IF EXISTS `authassignment`;
CREATE TABLE `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of authassignment
-- ----------------------------
INSERT INTO `authassignment` VALUES ('Administrator', '13', '', 's:0:\"\";');
INSERT INTO `authassignment` VALUES ('Manager', '11', null, 's:0:\"\";');
INSERT INTO `authassignment` VALUES ('Authority', '2', null, 's:0:\"\";');
INSERT INTO `authassignment` VALUES ('PostManager', '2', '', 's:0:\"\";');
INSERT INTO `authassignment` VALUES ('Manager', '2', '', 's:0:\"\";');
INSERT INTO `authassignment` VALUES ('NormalUser', '1', '', 's:0:\"\";');
INSERT INTO `authassignment` VALUES ('NormalUser', '12', '', 's:0:\"\";');
INSERT INTO `authassignment` VALUES ('UserManager', '2', '', 's:0:\"\";');
INSERT INTO `authassignment` VALUES ('Administrator', '2', '', 's:0:\"\";');

-- ----------------------------
-- Table structure for authitem
-- ----------------------------
DROP TABLE IF EXISTS `authitem`;
CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of authitem
-- ----------------------------
INSERT INTO `authitem` VALUES ('Authority', '2', null, null, null);
INSERT INTO `authitem` VALUES ('Administrator', '2', 'Super user.', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('NormalUser', '2', 'Normal User', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('Manager', '2', 'Normal manager. able to authorize the other user.', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('PostDelete', '0', '', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('PostCreate', '0', '', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('PostEdit', '0', '', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('PostView', '0', '', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('UserEdit', '0', '', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('UserView', '0', '', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('PostManagement', '1', 'post management', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('UserManagement', '1', '', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('UserShow', '0', null, null, null);
INSERT INTO `authitem` VALUES ('UserCreate', '0', null, null, null);
INSERT INTO `authitem` VALUES ('UserUpdate', '0', null, null, null);
INSERT INTO `authitem` VALUES ('UserDelete', '0', null, null, null);
INSERT INTO `authitem` VALUES ('UserList', '0', null, null, null);
INSERT INTO `authitem` VALUES ('UserAdmin', '0', null, null, null);
INSERT INTO `authitem` VALUES ('SiteManagement', '1', '', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('UserManager', '2', 'Manager the user.', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('PostManager', '2', 'able to post message.', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('AdManagement', '1', '', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('AdUpdate', '0', null, null, null);
INSERT INTO `authitem` VALUES ('AdDelete', '0', null, null, null);
INSERT INTO `authitem` VALUES ('AdList', '0', null, null, null);
INSERT INTO `authitem` VALUES ('AdAdmin', '0', null, null, null);

-- ----------------------------
-- Table structure for authitemchild
-- ----------------------------
DROP TABLE IF EXISTS `authitemchild`;
CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of authitemchild
-- ----------------------------
INSERT INTO `authitemchild` VALUES ('AdManagement', 'AdAdmin');
INSERT INTO `authitemchild` VALUES ('AdManagement', 'AdDelete');
INSERT INTO `authitemchild` VALUES ('AdManagement', 'AdList');
INSERT INTO `authitemchild` VALUES ('AdManagement', 'AdUpdate');
INSERT INTO `authitemchild` VALUES ('Administrator', 'AdManagement');
INSERT INTO `authitemchild` VALUES ('Administrator', 'PostManagement');
INSERT INTO `authitemchild` VALUES ('Administrator', 'SiteManagement');
INSERT INTO `authitemchild` VALUES ('Administrator', 'UserManagement');
INSERT INTO `authitemchild` VALUES ('Manager', 'AdManagement');
INSERT INTO `authitemchild` VALUES ('Manager', 'PostManagement');
INSERT INTO `authitemchild` VALUES ('Manager', 'SiteManagement');
INSERT INTO `authitemchild` VALUES ('Manager', 'UserManagement');
INSERT INTO `authitemchild` VALUES ('PostManagement', 'PostCreate');
INSERT INTO `authitemchild` VALUES ('PostManagement', 'PostDelete');
INSERT INTO `authitemchild` VALUES ('PostManagement', 'PostEdit');
INSERT INTO `authitemchild` VALUES ('PostManagement', 'PostView');
INSERT INTO `authitemchild` VALUES ('PostManager', 'PostManagement');
INSERT INTO `authitemchild` VALUES ('UserManagement', 'UserAdmin');
INSERT INTO `authitemchild` VALUES ('UserManagement', 'UserCreate');
INSERT INTO `authitemchild` VALUES ('UserManagement', 'UserDelete');
INSERT INTO `authitemchild` VALUES ('UserManagement', 'UserEdit');
INSERT INTO `authitemchild` VALUES ('UserManagement', 'UserList');
INSERT INTO `authitemchild` VALUES ('UserManagement', 'UserShow');
INSERT INTO `authitemchild` VALUES ('UserManagement', 'UserUpdate');
INSERT INTO `authitemchild` VALUES ('UserManagement', 'UserView');
INSERT INTO `authitemchild` VALUES ('UserManager', 'UserManagement');

-- ----------------------------
-- Table structure for sp_catalog
-- ----------------------------
DROP TABLE IF EXISTS `sp_catalog`;
CREATE TABLE `sp_catalog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类',
  `catalog_name` varchar(100) NOT NULL COMMENT '名称',
  `catalog_name_alias` varchar(100) NOT NULL DEFAULT '' COMMENT '别名',
  `content` text COMMENT '详细介绍',
  `create_time` datetime DEFAULT NULL COMMENT 'Create time',
  `update_time` datetime DEFAULT NULL COMMENT 'Update time',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Menu catalog';

-- ----------------------------
-- Records of sp_catalog
-- ----------------------------
INSERT INTO `sp_catalog` VALUES ('2', '1', 'Company', 'company', '公司动态栏目介绍', '2014-01-28 10:50:15', '2014-03-03 23:15:17');
INSERT INTO `sp_catalog` VALUES ('3', '1', 'Industry', 'industry', '行业新闻栏目介绍', '2014-01-28 10:50:15', '2014-03-03 23:15:17');
INSERT INTO `sp_catalog` VALUES ('4', '0', 'Products', 'products', '产品栏目介绍', '2014-01-28 10:50:15', '2014-01-28 13:44:00');
INSERT INTO `sp_catalog` VALUES ('5', '4', 'New arrival', 'new-arrival', '新品上市栏目介绍', '2014-01-28 10:50:15', '2014-01-28 13:44:00');
INSERT INTO `sp_catalog` VALUES ('6', '4', 'Special Offer', 'special-offer', '特价商品栏目介绍', '2014-01-28 10:50:15', '2014-01-28 13:44:00');
INSERT INTO `sp_catalog` VALUES ('7', '1', 'Test', 'test', '测试按钮', '2014-02-20 22:24:46', '2014-03-24 22:51:59');
INSERT INTO `sp_catalog` VALUES ('1', '0', 'News', 'news', '新闻栏目', '2014-03-24 20:48:25', '2014-03-24 23:11:04');

-- ----------------------------
-- Table structure for sp_config
-- ----------------------------
DROP TABLE IF EXISTS `sp_config`;
CREATE TABLE `sp_config` (
  `scope` char(20) NOT NULL DEFAULT '' COMMENT 'Declear if the config item is use in system',
  `item` varchar(50) NOT NULL COMMENT 'the config item',
  `value` text COMMENT 'option value',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT 'Description',
  PRIMARY KEY (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='System configuration';

-- ----------------------------
-- Records of sp_config
-- ----------------------------
INSERT INTO `sp_config` VALUES ('basic', 'site_name', '精灵内容管理系统', '');
INSERT INTO `sp_config` VALUES ('basic', 'site_domain', 'http://www.cmsspirit.com', '');
INSERT INTO `sp_config` VALUES ('basic', 'admin_email', 'menggangcsu@gmail.com', '');
INSERT INTO `sp_config` VALUES ('basic', 'site_icp', '苏ICP备13017320号-1', '');
INSERT INTO `sp_config` VALUES ('basic', 'site_closed_summary', '系统维护中，请稍候......', '');
INSERT INTO `sp_config` VALUES ('basic', 'site_stats', '第三方统计代码', '');
INSERT INTO `sp_config` VALUES ('basic', 'seo_title', '网站标题-网站标题', '');
INSERT INTO `sp_config` VALUES ('basic', 'seo_description', '网站描述-seo_description', '');
INSERT INTO `sp_config` VALUES ('basic', 'seo_keywords', '网站关键字-seo_keywords', '');
INSERT INTO `sp_config` VALUES ('basic', 'admin_telephone', '18606712910', '');
INSERT INTO `sp_config` VALUES ('basic', 'site_status', 'open', '');
INSERT INTO `sp_config` VALUES ('basic', 'site_status_intro', '网站升级中..........', '');
INSERT INTO `sp_config` VALUES ('basic', 'admin_logger', 'open', '');
INSERT INTO `sp_config` VALUES ('basic', 'user_status', 'open', '');
INSERT INTO `sp_config` VALUES ('basic', 'user_mail_verify', 'open', '');
INSERT INTO `sp_config` VALUES ('basic', 'site_copyright', 'Copyright ? 2011-2012', '');
INSERT INTO `sp_config` VALUES ('basic', 'upload_water_size', '100x100', '');
INSERT INTO `sp_config` VALUES ('basic', 'upload_water_file', 'static/watermark.png', '');
INSERT INTO `sp_config` VALUES ('basic', 'upload_water_status', 'close', '');
INSERT INTO `sp_config` VALUES ('basic', 'upload_allow_ext', 'jpg,gif,bmp,jpeg,png,doc,zip,rar,7z,txt,sql,pdf', '');
INSERT INTO `sp_config` VALUES ('basic', 'upload_max_size', '200', '');
INSERT INTO `sp_config` VALUES ('basic', 'upload_water_scope', '100x100', '');
INSERT INTO `sp_config` VALUES ('basic', 'upload_water_position', '5', '');
INSERT INTO `sp_config` VALUES ('basic', 'upload_water_padding', '5', '');
INSERT INTO `sp_config` VALUES ('basic', 'upload_water_trans', '30', '');
INSERT INTO `sp_config` VALUES ('customize', '_address', 'Shanghai Pudong new district', '');
INSERT INTO `sp_config` VALUES ('customize', '_fasdf', 'fasfcccccccccccc', '');
INSERT INTO `sp_config` VALUES ('customize', '_telephone', '(+86 10) 5992 8888', '');
INSERT INTO `sp_config` VALUES ('customize', '_fax', '传真:(+86 10) 5992 0000', '');
INSERT INTO `sp_config` VALUES ('customize', '_mobile', '18600000000', '');

-- ----------------------------
-- Table structure for sp_post
-- ----------------------------
DROP TABLE IF EXISTS `sp_post`;
CREATE TABLE `sp_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '用户',
  `author` varchar(100) NOT NULL DEFAULT '' COMMENT '作者',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `catalog_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '分类',
  `intro` text COMMENT '摘要',
  `content` mediumtext COMMENT '内容',
  `copy_from` varchar(100) NOT NULL DEFAULT '' COMMENT '来源',
  `copy_url` varchar(255) NOT NULL DEFAULT '' COMMENT '来源url',
  `tags` varchar(255) NOT NULL DEFAULT '' COMMENT 'tags',
  `view_count` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '查看次数',
  `commend` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT '推荐',
  `reply_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回复次数',
  `reply_allow` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '允许评论',
  `create_time` date DEFAULT NULL,
  `update_time` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='Post table';

-- ----------------------------
-- Records of sp_post
-- ----------------------------
INSERT INTO `sp_post` VALUES ('1', '1', '', '价值1960元JJ林俊杰「时线Time Line」世界巡回演唱会北京站VIP门票2张，百度团购免费送啦！', '5', '', '<p>\r\n	【中奖号码计算方法】：开奖日前一天的“全国福利彩票新3D开奖号码”+“全国体育彩票排列5开奖号码”+“百度收盘股价小数点后两位” = 10位数（即3组数字合并，10位均按顺序排列，此10位数若首位为0则去掉）。<br />\r\n★ 以此10位数整除以活动截止日（xxx年x月xx日 23:59:59）的所有抽奖人数（每个抽奖号即为一个抽奖人数），得到的余数+1即为本次活动的获奖号码<br />\r\n① 若获奖号码不足7位，则再加上本次所有抽奖人数，直至加到不为空的抽奖号码为止，此号码为本次活动的中奖号码。<br />\r\n② 获奖号码满足7位，但中奖号码为空，则再减去本次抽奖人数之和，直至减不为空的抽奖号码为止，此号码为本次活动的中奖号码。<br />\r\n③ 如彩票开奖方开奖时间滞后,或股票交易所休市则本活动开奖日也将进行相应的顺延；<br />\r\n④如果当天需要开多个奖，则用此号码分别+011 +021 +031……得出当天其他获奖号码。如果开奖最后一天抽奖号码加值后超过了总参加人数，则将抽奖号码减去总参加人数得到新的抽奖号码。\r\n</p>\r\n<p>\r\n	<strong><em><u><img src=\"http://api.map.baidu.com/staticimage?center=121.647329%2C31.20371&amp;zoom=13&amp;width=558&amp;height=360&amp;markers=121.647329%2C31.20371&amp;markerStyles=l%2CA\" alt=\"\" /></u></em></strong> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	★ 例如：<br />\r\n如2013年7月10日<br />\r\n新3D号码：4,8,7<br />\r\n排列5号码：8，2，9，0，5<br />\r\n百度股票收盘价：93.43 小数点后2位：4,3<br />\r\n将这3组数依序合并后得到4878290543<br />\r\n如果截止至7月15日23:59:59活动结束时的抽奖人数为28999<br />\r\n以4878290543整除以28999，商为168222，余数：20765 <br />\r\n得到余数加1， 20765+1=20766。<br />\r\n不足7位数，则20766+28999+……+28999=1006732<br />\r\n：【兑奖流程】：1、我们的客服人员会与中奖者电话联系，并核实百度账号和手机号码等，确认获奖信息和使用规则。<br />\r\n2、中奖用户在体验特权前1天内，请电话联系团团。（4000-998-998）\r\n</p>\r\n<p>\r\n	3、若因信息错误或无效等造成的开奖后15个工作日内无法联系到中奖者，视为中奖者自动放弃该奖品，中奖号码+1顺延下一位。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	This is the complete function\r\n</p>', '网易体育 - sports', 'http://www.163.com', '彩票', '4', 'N', '0', 'Y', '2014-01-29', '2014-02-20');
INSERT INTO `sp_post` VALUES ('2', '1', '', '仅售30.9元，最高价值85元单人影票（含3D）！无需预约，不限时段，全场通兑', '5', '', '<h2>\r\n	套餐介绍\r\n</h2>\r\n<div>\r\n	- 单人观影票1张<br />\r\n&nbsp;&nbsp;3D通兑，不限影厅，不限时间，不限影片<br />\r\n- 3D眼镜无需押金<br />\r\n- 不涉及明星见面会及首映礼<br />\r\n- 2月22日上映的霍比特人需到电影院另付10元<br />\r\n</div>\r\n<h2>\r\n	购买须知\r\n</h2>\r\n<p>\r\n	1、糯米券有效期：2013年05月02日-2013年09月30日&nbsp;<br />\r\n2、春节期间（2013年2月9日-14日）不可使用&nbsp;<br />\r\n3、影院营业时间：10:00-22:00&nbsp;<br />\r\n4、无需预约，在影城现场可凭糯米券提前兑换影票，具体场次请咨询影院&nbsp;<br />\r\n5、影院咨询电话：0571-86506355&nbsp;<br />\r\n6、8月13日，18:00以后不能使用糯米券&nbsp;<br />\r\n7、1.1米（含）以下儿童免费，1.1-1.3米儿童收取半价（影院正价的一半），1.3米（含）以上儿童全价&nbsp;<br />\r\n8、具体影片放映安排以影院档期为准，建议尽量避开周二、周三观影高峰&nbsp;<br />\r\n9、糯米券不限购买，每张糯米券限1人使用&nbsp;\r\n</p>\r\n<p>\r\n	10、不与其他优惠同享&nbsp;\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '', '', '', '1', 'N', '0', 'Y', '2014-01-29', '2014-02-19');
INSERT INTO `sp_post` VALUES ('3', '1', '', '仅售39元！价值50元的吴哥厨房代金券1张，仅适用于菜品全场通用，可自由叠加使用', '5', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>\r\n				内容\r\n			</th>\r\n			<th>\r\n				单价\r\n			</th>\r\n			<th>\r\n				数量/规格\r\n			</th>\r\n			<th>\r\n				小计\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				代金券\r\n			</td>\r\n			<td>\r\n				50元\r\n			</td>\r\n			<td>\r\n				1张\r\n			</td>\r\n			<td>\r\n				50元\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	价值：50元\r\n</p>\r\n<p>\r\n	美团价：39元\r\n</p>\r\n<ul>\r\n	<li>\r\n		适用范围：仅适用于菜品，全场通用\r\n	</li>\r\n	<li>\r\n		店内人均消费参考价格：40元\r\n	</li>\r\n	<li>\r\n		店内部分菜品价格参考：<br />\r\n吴哥红烧肉（42元/份）<br />\r\n开屏武鲳鱼（39元/份）<br />\r\n窝蛋肥牛（30元/份）<br />\r\n窜烤芋饺（20元/份）<br />\r\n香酱扒时蔬（18元/份）<br />\r\n糖醋里脊（18元/份）<br />\r\n金针菇沃豆腐（12元/份）<br />\r\n豉酱扇贝（6元/份）<br />\r\n水果红豆挞（3元/份）\r\n	</li>\r\n</ul>\r\n<div>\r\n	<h5>\r\n		购买须知\r\n	</h5>\r\n有效期：2013.8.21 至 2013.12.20（周末、法定节假日通用）使用时间：11:00-14:00预约提醒：无需预约，消费高峰可能需要等位使用规则：\r\n	<ul>\r\n		<li>\r\n			凭美团券到店消费不可同时享受店内其他优惠\r\n		</li>\r\n		<li>\r\n			代金券可自由叠加使用，不找零、不兑现\r\n		</li>\r\n		<li>\r\n			堂食外带均可，如需打包，请支付打包费1元/盒\r\n		</li>\r\n		<li>\r\n			仅限大厅用餐，不可使用包间\r\n		</li>\r\n		<li>\r\n			酒水、饮料等问题请致电商家咨询，以商家反馈为准\r\n		</li>\r\n	</ul>\r\n</div>', '', '', '', '1', 'N', '0', 'Y', '2014-01-29', '2014-01-29');
INSERT INTO `sp_post` VALUES ('4', '1', '', '仅售118元,价值198元贵族养生1次!套餐可升级,满足您不一样的追求!', '5', '', '<div>\r\n	凭大众点评网团购券可享受以下内容：<br />\r\n<br />\r\n	<p>\r\n		金足阁养生（1次，约60分钟，价值198元）<br />\r\n- 后肩、背、腿部按摩&nbsp;<br />\r\n- 背、肾、腰部精油指压&nbsp;<br />\r\n- 臀部热油提拉手法&nbsp;<br />\r\n- 胸腹部按摩&nbsp;<br />\r\n- 肾经保健&nbsp;<br />\r\n- 腿部放松&nbsp;<br />\r\n注：<br />\r\n到店加付38元可升级为<br />\r\n水晶之恋（1次，约60分钟，价值268元）<br />\r\n- 后肩、背、腿部按摩&nbsp;<br />\r\n- 背、肾、腰部精油指压&nbsp;<br />\r\n- 臀部热油提拉手法&nbsp;<br />\r\n- 全身冰火护理<br />\r\n- 肾经保健&nbsp;&nbsp;<br />\r\n- 腿部放松<br />\r\n到店加付88元可升级为<br />\r\n木桶泡澡（1次，约90分钟，价值298元）<br />\r\n- 养生木桶泡澡<br />\r\n- 按摩床全身搓背<br />\r\n- 后肩、背、腿部按摩&nbsp;<br />\r\n- 背、肾、腰部精油指压&nbsp;<br />\r\n- 臀部热油提拉手法&nbsp;<br />\r\n- 胸腹部按摩&nbsp;<br />\r\n- 肾经保健&nbsp;&nbsp;<br />\r\n- 腿部放松<br />\r\n- 赠送<br />\r\n&nbsp; 茶水<br />\r\n- 免费提供停车位\r\n	</p>\r\n<br />\r\n</div>\r\n<br />\r\n<div>\r\n	<h3>\r\n		特别提示\r\n	</h3>\r\n	<p>\r\n		有效期：2013-09-02 至 2014-03-01\r\n	</p>\r\n	<p>\r\n		本团购券可使用商户详见页面右侧/手机客户端“查看适用商户”\r\n	</p>\r\n	<p>\r\n		无需预约\r\n	</p>\r\n	<p>\r\n		本店承诺无任何变相附加费用\r\n	</p>\r\n	<p>\r\n		请进店先验证后消费\r\n	</p>\r\n	<p>\r\n		本团购券限1人使用\r\n	</p>\r\n	<p>\r\n		团购产品须一次性体验完\r\n	</p>\r\n	<p>\r\n		不可与其他优惠同享\r\n	</p>\r\n	<p>\r\n		友情提醒：如需团购券发票，请在消费时向商户提出\r\n	</p>\r\n</div>', '', '', '贵族养生,休闲放松', '2', 'N', '0', 'Y', '2014-01-29', '2014-01-29');
INSERT INTO `sp_post` VALUES ('5', '1', '', '仅售139元，最高价值347元4-6人火锅套餐，荤素搭配涮菜，打造最精致时尚火锅美味', '5', '', '<h2>\r\n	套餐介绍\r\n</h2>\r\n<div>\r\n	<p>\r\n		凭糯米券可享最高价值347元杭州海底捞餐饮有限公司4-6人火锅套餐，包含：\r\n	</p>\r\n- 海鲜：<br />\r\n&nbsp; 虾滑（1份，价值38元）<br />\r\n&nbsp; 鲍鱼条（1份，价值29元）<br />\r\n- 肉类：<br />\r\n&nbsp; 雪花肥牛（1份，价值68元）<br />\r\n&nbsp; 雪花肥羊（1份，价值38元）<br />\r\n&nbsp; 养生乌鸡卷（1份，价值38元）<br />\r\n&nbsp; 撒尿牛丸（1份，价值23元）<br />\r\n&nbsp; 牛百叶（1份，价值18元）<br />\r\n- 素菜：<br />\r\n&nbsp; 金针菇（1份，价值13元）<br />\r\n&nbsp; 生菜（1份，价值10元）<br />\r\n&nbsp; 木耳（1份，价值10元）<br />\r\n&nbsp; 粉条（1份，价值10元）<br />\r\n&nbsp; 油豆腐（1份，价值8元）<br />\r\n&nbsp; 油条（1份，价值6元）<br />\r\n- 以下火锅锅底3选1：<br />\r\n&nbsp; 清凉清汤锅（1份，价值38元）<br />\r\n&nbsp; 番茄鸳鸯锅（1份，价值38元）&nbsp;<br />\r\n&nbsp; 红汤鸳鸯锅（1份，价值28元）<br />\r\n- 餐具免费<br />\r\n- 到店另付5元/位，可享调料+酸梅汁，爆米花无限供应<br />\r\n</div>\r\n<h2>\r\n	购买须知\r\n</h2>\r\n<div>\r\n	1、糯米券有效期2012年09月29日至2013年11月29日&nbsp;<br />\r\n2、营业时间：11:00-22:00&nbsp;<br />\r\n3、消费请提前24小时预约，电话：0571-86981777；0571-86731717&nbsp;<br />\r\n4、糯米券可购多张，每桌限用1张糯米券，每张券不限使用人数，但建议4-6人享用&nbsp;<br />\r\n5、糯米券节假日通用&nbsp;<br />\r\n6、糯米券不可与其他优惠同享\r\n</div>', '', '', '', '1', 'N', '0', 'Y', '2014-01-29', '2014-01-29');
INSERT INTO `sp_post` VALUES ('6', '1', '', '仅售4.8元，市场价600元的麦乐迪KTV欢唱券一张，可升级，欢乐齐声唱，让我们唱出精彩', '5', '', '<h2>\r\n	购买须知\r\n</h2>\r\n<div>\r\n	·拉手券于2013年6月24日（周一）生效&nbsp;<br />\r\n·拉手券有效期截止至2013年10月30日，节假日通用&nbsp;<br />\r\n·营业时间：请见地址信息栏&nbsp;<br />\r\n·为了您更好的消费，请至少提前1天预约，商家于2013年6月24日开始接受预约，预约电话详见地址信息栏，预约时无需出示拉手券密码&nbsp;<br />\r\n·每人每次不限使用拉手券张数，迷你包2张起唱，小包4张起唱，中包6张起唱，中大包8张起唱，大包10张起唱&nbsp;<br />\r\n·商家根据实际人数提供包厢，详情请咨询商家&nbsp;<br />\r\n·本次团购内容需一次性消费完成，商家谢绝自带酒水食品入内，敬请谅解<br />\r\n·拉手券不与店内其他优惠同享&nbsp;<br />\r\n</div>\r\n<h2>\r\n	详情介绍\r\n</h2>\r\n<div>\r\n	<h4>\r\n		【本单详情】\r\n	</h4>\r\n	<p>\r\n		凭拉手券享受麦乐迪KTV欢唱券一张：仅限下午场（12:00-18:00）/午夜场（23:30-次日凌晨05:50），2选1使用，最多连续欢唱6小时，每人每次不限使用拉手券张数，迷你包2张起唱，小包4张起唱，中包6张起唱，中大包8张起唱，大包10张起唱！怎能错过每一个high歌的机会！市场价600元，现在团购仅售4.8元！\r\n	</p>\r\n	<p>\r\n		迷你包建议1-2人，小包建议3-4人，中包建议5-6人，中大包建议7-8人，大包建议8-12人\r\n	</p>\r\n	<h4>\r\n		【温馨提示】\r\n	</h4>\r\n	<ul>\r\n		<li>\r\n			拉手券于2013年6月24日（周一）生效\r\n		</li>\r\n		<li>\r\n			拉手券有效期截止至2013年10月30日，节假日通用\r\n		</li>\r\n		<li>\r\n			营业时间：请见地址信息栏\r\n		</li>\r\n		<li>\r\n			为了您更好的消费，请至少提前1天预约，商家于2013年6月24日开始接受预约，预约电话详见地址信息栏，预约时无需出示拉手券密码\r\n		</li>\r\n		<li>\r\n			每人每次不限使用拉手券张数，迷你包2张起唱，小包4张起唱，中包6张起唱，中大包8张起唱，大包10张起唱\r\n		</li>\r\n		<li>\r\n			商家根据实际人数提供包厢，详情请咨询商家\r\n		</li>\r\n		<li>\r\n			本次团购内容需一次性消费完成，商家谢绝自带酒水食品入内，敬请谅解\r\n		</li>\r\n	</ul>\r\n</div>', '', '', '麦乐迪,KTV', '12', 'N', '0', 'Y', '2014-01-29', '2014-03-13');
INSERT INTO `sp_post` VALUES ('7', '1', '', 'iOS 7正式面向普通用户发布：采用全新图标设计', '2', '', '<p>\r\n	腾讯科技 金铎 9月19日报道\r\n</p>\r\n<p>\r\n	苹果周三正式面向普通用户开放了iOS 7更新，全新的iOS 7支持以下设备：iPhone 4/4S/5，iPhone 5c和iPhone 5s；iPad 2/3/4，iPad mini；iPod touch 5。\r\n</p>\r\n<p>\r\n	iOS 7是iOS系统自2007年iPhone发布以来最大一次升级，它 采用全新的图标界面设计，总计有上百项改动，其中包括控制中心 、通知中心、多任务处理能力等等。\r\n</p>\r\n<p>\r\n	为了适应iOS 7，Safari网络浏览器也作出了相应的调整和改进，首先就是外表更加的简洁，以顺应扁平化的核心设计理念。Safari的标签页面是最大的突破，因为采用了3D网页标签，而且每一个标签页都有自己的概览显示。\r\n</p>\r\n<p>\r\n	iOS 7新增了一个无线点对点分享工具AirDrop，让iPhone之间可以通过WiFi交换文件。AirDrop可以自动显示身边的联系人，选定联系人和内容就可以发送给对方，无需设置网络，而且有完整加密。\r\n</p>\r\n<p>\r\n	iOS 7对相机功能也有改进，最大的特色就是在不同模式之间转换比以往更加方便。还有一点需要指出的是，iOS 7下的相机安装了类似于Instagram的滤镜。\r\n</p>\r\n<p>\r\n	此外，iOS 7下全新的照片应用程序能够根据拍摄时间和地点自动生成相册，用户也可以通过iCloud、电子邮件、Facebook或者Twitter等和好友分享照片。\r\n</p>', '', '', 'iOS7,普通用户,全新图标设计', '2', 'N', '0', 'Y', '2014-01-29', '2014-01-29');
INSERT INTO `sp_post` VALUES ('8', '1', '', '阿里金融再发力 小贷证券化产品登陆深交所', '2', '9月18日，阿里巴巴的两只小额贷款资产证券化产品在深交所挂牌上市。对阿里巴巴而言，此举盘活了存量资产，有效地解决了小贷公司因不能吸收存款而带来的发展难题，也让阿里巴巴在互联网企业的“金融战”中赢得了先机。\r\n这是阿里巴巴的一大步，也可能是整个中国金融产品大发展进程中的一大步。阿里巴巴成功将信贷资产证券化并在交易所挂牌交易，这对错失先机的传统银行业而言无疑是一个巨大的刺激——潜在竞争者已跑在前面；不过，银行业也尽可以为此事欢呼——既然阿里能够这样做，为何银行业不可？', '<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	9月18日，<a class=\"a-tips-Article-QQ\" href=\"http://stockhtm.finance.qq.com/hk/ggcx/01688.htm\" target=\"_blank\">阿里巴巴</a>的两只小额贷款资产证券化产品在深交所挂牌上市。对阿里巴巴而言，此举盘活了存量资产，有效地解决了小贷公司因不能吸收存款而带来的发展难题，也让阿里巴巴在互联网企业的“金融战”中赢得了先机。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	这是阿里巴巴的一大步，也可能是整个中国金融产品大发展进程中的一大步。阿里巴巴成功将信贷资产证券化并在交易所挂牌交易，这对错失先机的传统银行业而言无疑是一个巨大的刺激——潜在竞争者已跑在前面；不过，银行业也尽可以为此事欢呼——既然阿里能够这样做，为何银行业不可？\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	自阿里巴巴架构调整后，阿里金融正在以加速度发展。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	<img src=\"/cms/uploads/201309/523a374c27077.jpg\" alt=\"\" /> \r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	昨日东证资管-阿里巴巴1号、2号专项资产管理计划正式在深交所挂牌流通，这也是我国首只券商类信贷资产证券化产品。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	阿里巴巴相关人士在接受记者采访时透露，这一项目的整体规模大概在50亿元左右。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	业内人士分析，对阿里小贷而言，除了自身收益方面的考虑，涉足资产证券化更重要的意义在于提高流动性，一定程度上能够加速其小贷业务的发展。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	<strong>小贷公司试水资产证券化</strong> \r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	“东证资管-阿里巴巴”不仅是首只券商设立的信贷资产证券化产品，也是首只小额贷款资产证券化产品。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	东方证券资产管理公司发布的公告显示，阿里巴巴1号计划从7月26日起向机构投资者进行推广，已于7月29日结束推广期，最终获得全额申购，成立规模为5亿元。到期日为2014年10月28日。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	资料显示，阿里巴巴1号中优先级的评级为AAA，预期年化收益率6.2%，成立规模为3.75亿元；次优级未评级，预期年化收益率为11%，成立规模为7500万元；次级成立规模5000万元。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	阿里巴巴2号的与之类似。“东证资管-阿里巴巴”专项资管共分为10期，每期发行额度为2亿元至5亿元。每期产品都进行三级分级，其中优先级和次优级为公开募集，次级则由阿里金融自己认购。这意味着后续三年内还将有8只同类产品面世，募资总规模还有16亿元～40亿元。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	此外，在交易结构上，东证资管-阿里巴巴专项计划采取了循环购买基础资产的方式，在项目的运营管理上，相较于之前获批的专项计划有了较大的突破。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	而在发行模式上，东证资管-阿里巴巴专项资管计划采取了统一结构、一次审批、分次发行的模式，以更好地满足电子商务平台上小微企业的资金需求节奏。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	据前述阿里巴巴相关人士介绍，在日常投资管理过程中，这项计划还引入了自动化的资产筛选系统和支付宝公司提供的资金归集和支付服务。“毕竟我们是一个互联网的平台，只有这样才能更好地适应阿里小贷基于大数据的业务模式。”\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	知名财经评论人士叶檀在接受记者采访时说：“证券资产化产品的推出，是阿里打通资金循环的一个很重要的环节。因为小贷公司的杠杆资金只有50%，没有吸纳存款的能力，只能向金融机构拿钱。所以，它此前的资金来源渠道是非常不畅通的，现在通过东方证券这个券商来发行产品，可以获得更多的资金来支持其小贷业务。”\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	<strong>未寄望网络银行</strong> \r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	对阿里巴巴而言，吸纳更多的资金迫在眉睫，尤其是苏宁在金融领域的激进举措，也使得阿里小贷不得不去寻找新的资金来源。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	2012年12月，苏宁注资3亿元设立重庆苏宁小额贷款有限公司。今年8月，苏宁云商宣布设立苏宁银行，成为A股首家宣布试水民营银行的上市公司。9月12日，苏宁在设立民营银行的道路上又迈了一步，其申请的苏宁银行名称获得工商总局核准。而苏宁小贷公司也将在10月试运行。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	与此同时，也有消息称，阿里巴巴也正打算成立网络银行。但前述阿里相关人士依然对记者否认提交了申请。“这个事情还是很遥远的，即便是现在有企业获得了核准，但具体的推出时间还是一个未知数。”\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	尽管阿里巴巴依然否认将成立网络银行，但业界对其成立银行的呼声依然很高。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	“建议给阿里小贷和支付宝发放银行牌照，让银行间更充分竞争。”中国人民银行原副行长吴晓灵日前在某论坛上如此表示。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	吴晓灵认为，互联网金融有四种形式，包括阿里小贷这样的小额贷款机构、支付宝这样的第三方支付、余额宝这类基于支付账户的标准化金融产品销售，以及P2P平台。但是，目前这四种互联网金融形式都是单向的，不能吸收存款，也未形成银行那样的存放汇优势。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	在吴晓灵看来，现在鼓励民营资本创办民营银行，只有给阿里小贷、支付宝等发放银行牌照，让它们既能办理结算，又能吸收存款，发放贷款，细分客户市场，这才是可行的，才能办成互联网时代的特色银行。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	不过，也有业内人士并不认同这一观点。叶檀分析认为，阿里巴巴成立网络银行对传统金融业的冲击肯定非常大，且以阿里巴巴的业务形态来看也没有必要走传统银行老路。“从该产品设计来看，90%的资金可以向投资者发行，说明阿里已经解决了小贷资金来源的问题，且登陆深交所以后可以实现交易转让，也意味着有更多投资机构来共担风险。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	叶檀认为，阿里巴巴在银行成立之前找到了一条替代储蓄的路，所以是否成立网络银行，依然还是很遥远的事情。\r\n</p>', '', '', '', '9', 'N', '0', 'Y', '2014-01-29', '2014-01-29');
INSERT INTO `sp_post` VALUES ('9', '1', '', '甲骨文第一财季净利润21.9亿美元 同比增长7.9%', '3', '', '<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	<strong><img src=\"/cms/uploads/201309/523a3780beb37.jpg\" alt=\"\" /><br />\r\n</strong> \r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	<strong>腾讯科技 金铎 9月19日编译</strong> \r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	<a class=\"a-tips-Article-QQ\" href=\"http://stockhtm.finance.qq.com/astock/ggcx/ORCL.OQ.htm\" target=\"_blank\">甲骨文</a>公司（Oracle Corp. ）周三报告称，公司2014财年第一季度实现净利润21.9亿美元，同比增长7.9%，合每股收益47美分；去年同期业绩为净利润20.3亿美元，合每股收益41美分。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	期内公司营收由去年同期的81.8亿美元增长至83.7亿美元，增幅为2.3%。经过调整后的盈利为每股收益59美分。FactSet汇总的分析师平均预期为每股收益56美分（调整后），收入为84.8亿美元。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	第一财季，甲骨文软件营收为60.84亿美元，比去年同期增长6%；硬件系统营收为12.61亿美元，比去年同期下滑7%。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	甲骨文股价在当天常规交易中上涨1.83%，收于33.87没有。发布财报后，该股在盘后交易中，截至发稿，股价上涨近1%。\r\n</p>', '', '', '甲骨文,净利润', '5', 'N', '0', 'Y', '2014-01-29', '2014-03-19');
INSERT INTO `sp_post` VALUES ('10', '1', '', '凤凰古韵摄影 仅售398元，价值1288元古装写真套系', '6', '化妆造型：精美古装3套，造型3次（但不包括孙子大传系列、龙袍），免费提供化妆品、安瓶以及妆后的洗面奶、卸妆油、卸妆棉、护肤品，免除您的后顾之忧，按套系免费使用精美古装饰品，道具等物品\r\n古典至美纯外场景：长桥阔石板湿地公园', '<div>\r\n	- 古装写真（1套，价值1288元）<br />\r\n- 化妆造型：精美古装3套，造型3次（但不包括孙子大传系列、龙袍），免费提供化妆品、安瓶以及妆后的洗面奶、卸妆油、卸妆棉、护肤品，免除您的后顾之忧，按套系免费使用精美古装饰品，道具等物品<br />\r\n- 古典至美纯外场景：长桥阔石板湿地公园<br />\r\n- 照片提供：全程拍摄不少于60张，精修18张入册<br />\r\n- 专属相册：<br />\r\n&nbsp; 古典高档绢丝挂轴1副<br />\r\n&nbsp; 杂志册1本（8P，16张）<br />\r\n&nbsp; 8寸版画1幅<br />\r\n&nbsp; 16寸海报1张<br />\r\n&nbsp; 皮夹照2张<br />\r\n- 到店即送价值15元精美桃木梳1把<br />\r\n- 拍摄时间：4-8个小时<br />\r\n- 底片全部赠送，请自带2G以上U盘拷片<br />\r\n</div>\r\n<h2>\r\n	【消费提示】\r\n</h2>\r\n<div>\r\n	1、糯米券有效期为2013年07月19日-2013年10月19日&nbsp;<br />\r\n（每周一不可用）&nbsp;<br />\r\n2、糯米券使用时间：09:00-20:00&nbsp;<br />\r\n3、消费前请提前168小时致电预约，电话：0571-85350301&nbsp;<br />\r\n4、每人可购买多张糯米券，每人限使用1张糯米券&nbsp;<br />\r\n5、套餐内容不兑现，不找零，不与店内其他优惠同时享用&nbsp;<br />\r\n6、建议用户在糯米券有效期内完成拍摄并取得成品。如用户与商家另行约定的拍摄时间或取成品时间不在糯米券有效期内的而导致用户最终无法完成拍摄或取得成品的，糯米网不承担任何责任&nbsp;\r\n</div>', '', '', '', '4', 'N', '0', 'Y', '2014-01-29', '2014-03-13');
INSERT INTO `sp_post` VALUES ('11', '1', '', '谷歌拟推新追踪工具AdID 广告市场或面临洗牌', '2', '', '<p>\r\n	全球最大的互联网搜索引擎谷歌(微博)正在考虑对如何追踪用户上网浏览活动的方法做出重大调整，此举或许能够重塑年营收规模达1,200亿美元的数字广告市场的格局。\r\n</p>\r\n<p>\r\n	据《今日美国报》网站援引一位熟悉谷歌该计划的匿名人士透露的消息称，谷歌正在开发一种匿名广告标识符（AdID），用来替代广告商出于营销目的追踪用户网上浏览活动的第三方Cookie。谷歌目前在全球在线广告营收的占比约为三分之一。\r\n</p>\r\n<p>\r\n	这个AdID只会被转到此前同意遵守某些基本规范的广告商和广告网络，从而在控制网页浏览的方式上，赋予用户更大的自主权和更多的隐私。\r\n</p>\r\n<p>\r\n	据该匿名消息人士透露，只有在遵循AdID相关服务条款的广告商和广告网络才有权使用这一工具，而且该工具可以让用户对自己的隐私以及上网习惯等信息拥有更多的控制权。该消息人士拒绝具名，因为谷歌还没有正式对外宣布推出这一新工具的计划。但该公司计划在接下来的几周和几个月里与业内人士、政府机构和消费者组织进行沟通。\r\n</p>\r\n<p>\r\n	<img src=\"/cms/uploads/201309/523a53bd105ee.jpg\" alt=\"\" />\r\n</p>\r\n<p>\r\n	谷歌发言人罗布•辛尔金（Rob Shilkin）表示：“技术进步在提升用户安全的同时也能够确保互联网的经济性。谷歌和其他公司在这个领域有很多想法，不过这些想法都处在早期阶段。”他拒绝做进一步评论。\r\n</p>\r\n<p>\r\n	谷歌的一举一动都会受到广告行业的密切关注，因为该公司不仅是在线广告市场的领导者，而且该公司的Chrome浏览器已经在过去几年先后超越微软IE浏览器、Mozilla Firefox浏览器和苹果公司Safari浏览器，成为目前全球最流行的浏览器。\r\n</p>\r\n<p>\r\n	Cookie是带有识别标签的一小串文本字符，并被集成到浏览器中。多年以来Cookie始终是识别用户上网活动的主要方式。正常的Cookie会被网站运营商存储在用户电脑上，而第三方Cookie则来自于以收集用户浏览活动数据为目的的其他实体。\r\n</p>\r\n<p>\r\n	广告公司利用这种技术来了解用户的兴趣，然后通过网络向他们显示更具相关性的广告。然而，Cookie也引来了诸多争议，因为追踪技术已经发展得十分先进，并引发了隐私担忧。\r\n</p>\r\n<p>\r\n	自2003年推出以来，苹果Safari浏览器就封杀了第三方Cookie。去年苹果公司还针对iOS移动平台推出了自己的广告标识符。一些广告产业内部人士认为，如果谷歌真的推出AdID，那么可以让用户对自己的上网活动如何被追踪拥有更多的控制权。然而，这种措施同时也让苹果和谷歌这两大科技巨头可以更多地掌握用户浏览活动的数据。\r\n</p>\r\n<p>\r\n	广告技术公司Triggit的首席执行官扎克•科里奥斯（Zach Coelius）表示：“限制第三方Cookie不会让精准的广告投放消失，只能让大型科技公司掌握更多的控制权。”\r\n</p>\r\n<p>\r\n	美国数字广告行业组织交互式广告局（Interactive Advertising Bureau，以下简称IAB）的总法律顾问迈克•扎涅斯（Mike Zaneis）指出，IAB希望广告客户能使用某种形式的跟踪技术，比如第三方Cookie或其他技术。但是，让少数公司掌控跟踪技术不是一种理想的解决方案，他们可能会突然对用户ID进行限制，而且还会危及数十亿美元的网络广告支出。\r\n</p>\r\n<p>\r\n	谷歌推出匿名广告标示符的做法并不算特别激进，因为该公司开发的AdID只是作为广告商所使用追踪工具的一种选择而已。但据消息人士表示，AdID新工具可以让用户通过对浏览器设置，对广告商的追踪活动作出限制。\r\n</p>', '', '', '谷歌,追踪工具,AdID,洗牌', '1', 'N', '0', 'Y', '2014-01-29', '2014-01-29');
INSERT INTO `sp_post` VALUES ('12', '1', '', '微软公布Windows 8.1售价 基本版售价119.99美元', '2', '', '<p>\r\n	微软周二正式公布了Windows 8.1操作系统的售价。在Windows 8用户将能够免费升级至Windows 8.1的同时，如果用户运行的是Windows XP、Vista或是Windows 7操作系统，想要升级至Windows 8.1基本版的价格为119.99美元，升级至Windows 8.1 Pro版的价格为199.99美元。\r\n</p>\r\n<p>\r\n	Windows 8.1的升级费用与此前用户升级至Windows 8操作系统的升级费用相同，不过这一次微软并未向去年用户升级至Windows 8操作系统时那样，提供任何的促销价格。\r\n</p>\r\n<p>\r\n	微软当前还计划对Windows 8.1的销售方式进行更改。此前，用户必须在线购买Windows 8操作系统的升级版本，或是前往零售店购买，微软从未提供完整版。用户将可以通过零售店购买Windows 8.1，或是通过下载选项购买微软所谓的“完整版软件”（full version software）。\r\n</p>\r\n<p>\r\n	此举旨在为希望在虚拟环境下运行Windows 8.1操作系统的用户做出回应。如果用户购买一套Windows 8.1，它将是完全版，而不是升级版本。\r\n</p>\r\n<p>\r\n	对Windows XP或是Windows Vista操作系统用户而言，如果想要从现有操作系统升级至Windows 8.1，此次将会有略微的调整。微软此前支持从Windows XP或是Windows Vista操作系统升级至Windows 8的基础升级路径，但是针对Windows 8.1则采用了完全不同的方式。\r\n</p>\r\n<p>\r\n	如果Windows XP或是Windows Vista操作系统用户想要直接升级至Windows 8.1，用户需要完全重新安装。微软就此表示，这是因为“Windows 8.1并不是为运行Windows XP或是Windows Vista操作系统的操作系统设计的。”Windows XP或是Windows Vista操作系统用户需要从零售店购买DVD光盘，而不能选在在线升级。\r\n</p>\r\n<p>\r\n	对Windows 7用户而言，在升级完成之后，他们必须重新安装台式应用程序，如Office等。微软的这种做法可能会令一些商业和企业用户感到极度不满。\r\n</p>\r\n<p>\r\n	随着搭载Windows 8.1操作系统的设备将从10月18日开始蜂拥进入市场，微软同时还提供了从基本版Windows 8.1升级至Windows 8.1 Pro版和Windows Media Center版的方式。\r\n</p>\r\n<p>\r\n	购买搭载基本版Windows 8.1操作系统的用户，升级至Windows 8.1 Pro需花费99.99美元；Windows 8.1 Pro用户可花费9.99美元升级至Windows Media Center。Windows 8.1将于10月17日在微软零售店开始销售，搭载Windows 8.1操作系统的设备和零售DVD将于10月18日开始销售。<span id=\"__kindeditor_bookmark_end_10__\"></span>\r\n</p>', '', '', '微软,Windows8.1,基本版售价', '1', 'N', '0', 'Y', '2014-01-29', '2014-01-29');
INSERT INTO `sp_post` VALUES ('13', '1', '', '三星智能手表遭冷落 已着手研发二代产品', '2', '', '<p>\r\n	在本月早些时候的新品发布会上，三星如外界所料般率先出手，发布了旗下首款可穿戴计算设备Galaxy Gear智能手表。\r\n</p>\r\n<p>\r\n	Galaxy Gear采用金属拉丝表面，拥有六种采用橡胶材质的不同颜色表带。在具体配置方面，Galaxy Gear拥有一块1.63英寸Super AMOLED屏幕，分辨率为320x320，搭载了800MHz单核处理器，190万像素摄像头，512MB内存，4GB存储空间，315mAh不可拆卸电池，内置扬声器、蓝牙4.0、加速度计、陀螺仪和两个麦克风。\r\n</p>\r\n<p>\r\n	但是，日前据韩国媒体《数码时代》(Digital Times)的报道称，这一产品有可能成为史上最为短命的可穿戴式计算设备，因为三星目前已经开始研发其下一代产品。\r\n</p>\r\n<p>\r\n	事实上，自从Galaxy Gear于9月4日在柏林首次与外界接触以来，消费者对于这款产品的反映一直十分平静。不少批评者则抱怨称，Galaxy Gear 25个小时的电池续航时间太短，而能够同其配合使用的智能设备也实在太过有限。\r\n</p>\r\n<p>\r\n	目前，仅有三星Galaxy Note 3智能手机和Galaxy Note 10.1平板电脑能够同其进行连接。但三星方面表示，未来将有更多设备支持Galaxy Gear。\r\n</p>\r\n<p>\r\n	对于三星此次发布Galaxy Gear，外界的普遍看法是该公司为了赶在苹果发布传言已久的“iWatch智能手表”之前而匆匆发布了一款自己的可穿戴式计算设备以抢占市场先机。而且，在苹果在日本地区申请了“iWatch商标”，并在全新iPhone 5s中配置了一个专门管理设备上各类传感器和动作的“M7”协处理芯片后，外界对于iWatch的期待更是有增无减。\r\n</p>\r\n<p>\r\n	与此同时，知名市场调研机构IHS移动和通讯总监伊恩-弗格(Ian Fogg)曾评价道：\r\n</p>\r\n<p>\r\n	“三星的Galaxy Gear只是一个披着消费者电子产品外衣的原型机，正因为如此，该产品将很难在市场中取得成功。从目前来看，该设备拥有许多不足的地方，比如售价过高、电池续航能力不佳、必须配合智能手机使用的局限性等等。总的来说就是，这一产品恐怕很难取得成功，而三星则需要凭借一款设计更加精良的设备来再次向这一市场发起攻势。”\r\n</p>\r\n<p>\r\n	与此同时，其他一些测试者则表示，Galaxy Gear的操作存在着延迟的情况，系统菜单设计令人困惑，而其299美元的售价也有些过高。\r\n</p>\r\n<p>\r\n	据位于三星总部所在地的韩国门户网站Daum报道，第一款Galaxy Gear仅仅属于三星的一款“试水产品”而已，该公司希望通过这一产品收集市场反馈，然后在以此作为依据开发出第二代Galaxy Gear。Daum预计，三星有可能会在明年1月的国际消费电子展(Consumer Electronics Show)，或者在明年3月的移动世界大会(Mobile World Congress)上发布新一代Galaxy Gear 2智能手表。而且，第二代Galaxy Gear很有可以会基于内置的GPS定位芯片而推出一些基于地理位置的服务。\r\n</p>\r\n<p>\r\n	三星方面拒绝对此发表置评。\r\n</p>', '', '', '三星,智能手表,二代产品', '1', 'N', '0', 'Y', '2014-01-29', '2014-01-29');
INSERT INTO `sp_post` VALUES ('14', '1', '', 'App Annie获1500万美元投资 将持续扩展国际业务', '2', '', '<p>\r\n	（朱旭冬）9月18日晚间消息，移动智能市场数据平台App Annie 今日宣布完成一轮总金额为1500万美元的融资，由红杉资本的美国基金领投，现有投资者IDG资本、Greycroft 、e.Ventures 和 Infinity Venture 参与跟投。\r\n</p>\r\n<p>\r\n	红杉资本硅谷办事处合伙人 Tim Lee 与 uSamp 首席执行官 Alan Gould 将加入App Annie董事会。\r\n</p>\r\n<p>\r\n	App Annie 表示，此轮融得的资金将用于加速 App Annie 的产品开发、增长其销售额并壮大其设在旧金山的营销总部，并扩大其遍布亚洲和欧洲的办事处。\r\n</p>\r\n<p>\r\n	随着今年全球智能手机出货量将超过1 亿部的预期，应用软件和数字内容经济大幅增长。App Annie 在过去12个月内用户数扩大两倍，每月营收增长三倍。App Annie 首席执行官Bertrand Schmitt 表示，增长的用户群证明公司重塑企业分析和提取适合商业用途的有用洞察信息的方式是成功的。\r\n</p>\r\n<p>\r\n	红杉资本硅谷办事处合伙人 Tim Lee 认为， App Annie 在新数字经济分析领域处于极为有利的地位。“App Annie 的产品对从事移动通信行业的每位从业者来说都是必备的。在红杉资本，我们多年来一直使用他们的产品帮助我们找到有突破力的创业公司。 App Annie 在新数字经济分析领域处于极为有利的地位，并将成为黄金标准。”他说。\r\n</p>\r\n<p>\r\n	Bertrand Schmitt 则表示， “对我们来说，红杉资本不仅仅是投资者，同时也是合作伙伴和顾问，它将帮助我们加速我们扩大平台的计划，这样所有企业都可了解全球应用软件和数字内容生态系统。”\r\n</p>\r\n<p>\r\n	App Annie 的商业智能平台由 Analytics、Store Stats 和 Intelligence 组成。现今，收益排名前 100 位的 iOS 应用发行商中超过 90% 在使用App Annie 的产品，这其中包含 Google、微软和腾讯。\r\n</p>', '', '', 'App,Annie,美元投资,国际业务', '1', 'N', '0', 'Y', '2014-01-29', '2014-01-29');
INSERT INTO `sp_post` VALUES ('15', '1', '', 'Groupon收购本地体验初创公司SideTour', '2', '', '<p>\r\n	据国外媒体报道，团购巨人Groupon今日宣布，公司已经收购了本地体验初创公司SideTour。后者是一个帮助人们发现、预订和参加本地活动的市场平台，Groupon没有透露这项收购交易的具体条款。\r\n</p>\r\n<p>\r\n	SideTour精选了一些独具特色且有人主持的聚会类活动，让客户们能够与相应领域的资深专家面对面地交流，从而更加了解自己所在的城市和他们关心的事。\r\n</p>\r\n<p>\r\n	GrouponLive业务总经理格雷格鲁丁（Greg Rudin）称：“SideTour精心策划的各种本地体验将进一步拓展Groupon的愿景，也就是将Groupon打造成消费者可以随时随地访问的平台。如果Groupon能够提供这些极具个性化的活动、旅游和值得铭记的聚会，我们就能够为我们的客户提供更多有趣的方法，帮助他们探索和发现最好的本地体验。”\r\n</p>\r\n<p>\r\n	那些活动大多为私人聚会，人数平均在12人左右，涵盖的行业包括视频、饮料、建筑、历史、艺术等等。SideTour目前提供的公开和私人聚会多达500多种，使用这个平台的聚会主持超过了400人。那些主持者包括厨师、艺术家、奥运金牌获得者、星探和品酒师等等。\r\n</p>\r\n<p>\r\n	SideTour的首席执行官韦平戈亚尔（Vipin Goyal）称：“我们很高兴有机会把我们独创的聚会服务提供给这么多热衷于本地体验的人。Groupon可以帮助我们发现更多的本地专家并为他们提供一个与更多客户沟通的平台。”\r\n</p>\r\n<p>\r\n	SideTour将继续独立经营一段时间，Groupon将通过其电子邮件、网页和移动渠道向它的4300万活跃用户推广SideTour的聚会服务。\r\n</p>\r\n<p>\r\n	SideTour创立于2011年，目前在芝加哥、纽约、费城和华盛顿特区设有办事机构。它计划在未来几个月里开辟更多的市场。\r\n</p>', '', '', '', '5', 'N', '0', 'Y', '2014-01-29', '2014-03-14');
INSERT INTO `sp_post` VALUES ('16', '1', '', '美国下令FCC修改规定 禁止运营商锁定所售手机', '2', '', '<p>\r\n	在手机解锁上，美国消费者和运营商展开持久战，美国政府和白宫逐渐站在消费者一边。\r\n</p>\r\n<p>\r\n	近日美国电信和信息管理局（NTIA）正式向联邦通信委员会（FCC）发函，要求修改规定，未来移动运营商销售给用户的手机、平板等，均不能锁定于网络。\r\n</p>\r\n<p>\r\n	所谓“锁定”，指的是运营商通过技术手段，限制某一部手机和平板，只能使用自家的移动网络进行通信。\r\n</p>\r\n<p>\r\n	上述机构对FCC表示，消费者应该获得更多自由，选择不同的移动通信服务商，自由使用自己合法购买的移动设备，对相关规定进行修改之后，可以增强移动通信市场的竞争，增加消费者满意度。\r\n</p>\r\n<p>\r\n	目前还不清楚FCC是否会痛快答应修改规定的要求。众所周知的是，美国电信行业，也雇请了游说团体，捍卫对手机锁定的做法。\r\n</p>\r\n<p>\r\n	据报道，1990年代以前，美国电信运营商销售的手机，均未锁定于自家网络。此后，为了降低用户流失率，运营商开始锁定手机。不过，对于熟悉IT知识的民间高手来说，根据网络资源对手机进行解锁，难度并不大。\r\n</p>\r\n<p>\r\n	1998年，美国通过《千年数字版权法》，法律本意是要抑制盗版，但最后却禁止了用户对手机解锁。从2006年以来，支持消费者的美国议员们，也屡屡要求修改法律，允许用户自由解锁。\r\n</p>\r\n<p>\r\n	在移动运营商看来，他们对用户购买手机的价格进行了大额补贴，目的是通过用户在一年或两年的合同期限内，用花费流量费的消费，弥补运营商购机补贴。如果让用户自由解锁，将损害运营商的利益。\r\n</p>\r\n<p>\r\n	以苹果手机为例，运营商捆绑两年合约的补贴价格为199美元，但是其裸机零售价超过600美元，这400多美元其实由运营商买单。\r\n</p>\r\n<p>\r\n	上述机构NTIA还指出，只要是消费者承诺继续使用某种服务，或是针对提前结束合约支付了违约罚金等，美国的运营商就应该免费帮助用户进行解锁。\r\n</p>', '', '', '美国,,禁止运营商,锁定手机', '3', 'N', '0', 'Y', '2014-01-29', '2014-03-17');
INSERT INTO `sp_post` VALUES ('17', '1', '孟刚', '直击乌克兰首都流血冲突：政府大楼已清空', '2', '中新网2月20日电 据外电报道，乌克兰政府女发言人表示，在示威者与警方20日再次在首都基辅爆发冲突后，乌克兰主要政府大楼的高官已经从大楼内撤离。', '<p style=\"font-size:14px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;\">\r\n	中新网2月20日电 据外电报道，乌克兰政府女发言人表示，在示威者与警方20日再次在首都基辅爆发冲突后，乌克兰主要政府大楼的高官已经从大楼内撤离。\r\n</p>\r\n<p style=\"font-size:14px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;\">\r\n	女发言人说，今天上午，所有的内阁雇员从大楼内撤离，这是官方的命令。\r\n</p>\r\n<p style=\"font-size:14px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;\">\r\n	2013年11月21日，乌克兰政府决定暂停与欧盟签署联系国协定后，大批入欧支持者上街抗议。乌克兰国内紧张局势愈演愈烈。\r\n</p>\r\n<p style=\"font-size:14px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;\">\r\n	本月18日，乌克兰警方对基辅独立广场展开清场行动，引发与示威者的流血冲突，造成28人死亡，另有数百人受伤送医。\r\n</p>\r\n<p style=\"font-size:14px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;\">\r\n	19日，乌克兰总统亚努科维奇和反政府抗议的领导人同意停止冲突。但当地时间20日早晨，基辅再次爆发流血冲突。法新社消息称，最新的冲突已造成至少17名示威者死亡。\r\n</p>\r\n<p style=\"font-size:14px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;\">\r\n	(原标题：乌克兰首都再爆冲突 主要政府大楼官员撤离)\r\n</p>', '网易体育', 'http://news.163.com/14/0220/18/9LI0KNLT00014JB6.html', '乌克兰,武装冲突,时间', '29', 'N', '0', 'Y', '2014-02-21', '2014-03-20');
INSERT INTO `sp_post` VALUES ('18', '1', '-わ千与千寻', 'PHP获取当前时间、时间戳方法大总结', '3', '转载请注明出处：php程序员的笔记', '<p style=\"color:#494949;font-family:宋体;font-size:14px;background-color:#FFFFFF;\">\r\n	编程语言中处理时间的问题可谓是再频繁不过了，各种语言对于时间的处理更是多种多样。今天作者就php语言，对在php中如何获取当前的<a target=\"_blank\" href=\"http://www.phpernote.com/tag/%E6%97%B6%E9%97%B4\">时间</a>，php如何获取当前时间戳的各种方法做一个大总结。\r\n</p>\r\n<p style=\"color:#494949;font-family:宋体;font-size:14px;background-color:#FFFFFF;\">\r\n	首先需要知道的是在php中获取时间方法是date()，在php中获取时间戳方法有time()、strtotime()。下面分别说明。\r\n</p>\r\n<p style=\"color:#494949;font-family:宋体;font-size:14px;background-color:#FFFFFF;\">\r\n	date() 格式为：date($format, $timestamp)，format为格式、timestamp为时间戳（可选）。\r\n</p>\r\n<p style=\"color:#494949;font-family:宋体;font-size:14px;background-color:#FFFFFF;\">\r\n	time() 返回当前时间的 Unix 时间戳，没有参数。\r\n</p>\r\n<p style=\"color:#494949;font-family:宋体;font-size:14px;background-color:#FFFFFF;\">\r\n	strtotime($time, $now) 将任何英文文本的日期时间描述解析为 Unix 时间戳。$time 为必填，规定要解析的时间字符串；$now 用来计算返回值的时间戳，如果省略该参数，则使用当前时间。\r\n</p>\r\n<p style=\"color:#494949;font-family:宋体;font-size:14px;background-color:#FFFFFF;\">\r\n	date($format)用法举例：\r\n</p>\r\n<p style=\"color:#494949;font-family:宋体;font-size:14px;background-color:#FFFFFF;\">\r\n	echo date(\'Y-m-d\');输出结果：2012-03-22<br />\r\necho&nbsp; date(\'Y-m-d H:i:s\');输出结果：2012-03-22 23:00:00<br />\r\necho&nbsp; date(\'Y-m-d\', time());输出结果：2012-03-22 23:00:00（结果同上，只是多了一个时间戳参数）（时间戳转换为日期格式的方法）<br />\r\necho&nbsp; date(\'Y\').\'年\'.date(\'m\').\'月\'.date(\'d\').\'日\'，输出结果：2012年3月22日\r\n</p>\r\n<p style=\"color:#494949;font-family:宋体;font-size:14px;background-color:#FFFFFF;\">\r\n	举例就这几个，只是格式的变动而已，下面是<a target=\"_blank\" href=\"http://www.phpernote.com/php-string/\">字符串</a>格式中各个字母的含义：\r\n</p>\r\n<p style=\"color:#494949;font-family:宋体;font-size:14px;background-color:#FFFFFF;\">\r\n	a - \"am\" 或是 \"pm\"&nbsp;<br />\r\n&nbsp;<br />\r\nA - \"AM\" 或是 \"PM\"&nbsp;<br />\r\n&nbsp;<br />\r\nd - 几日，二位数字，若不足二位则前面补零; 如: \"01\" 至 \"31\"&nbsp;<br />\r\n&nbsp;<br />\r\nD - 星期几，三个英文字母; 如: \"Fri\"&nbsp;<br />\r\n&nbsp;<br />\r\nF - 月份，英文全名; 如: \"January\"&nbsp;<br />\r\n&nbsp;<br />\r\nh - 12 小时制的小时; 如: \"01\" 至 \"12\"&nbsp;<br />\r\n&nbsp;<br />\r\nH - 24 小时制的小时; 如: \"00\" 至 \"23\"&nbsp;<br />\r\n&nbsp;<br />\r\ng - 12 小时制的小时，不足二位不补零; 如: \"1\" 至 12\"&nbsp;<br />\r\n&nbsp;<br />\r\nG - 24 小时制的小时，不足二位不补零; 如: \"0\" 至 \"23\"&nbsp;<br />\r\n&nbsp;<br />\r\ni - 分钟; 如: \"00\" 至 \"59\"&nbsp;<br />\r\n&nbsp;<br />\r\nj - 几日，二位数字，若不足二位不补零; 如: \"1\" 至 \"31\"&nbsp;<br />\r\n&nbsp;<br />\r\nl - 星期几，英文全名; 如: \"Friday\"&nbsp;<br />\r\n&nbsp;<br />\r\nm - 月份，二位数字，若不足二位则在前面补零; 如: \"01\" 至 \"12\"&nbsp;<br />\r\n&nbsp;<br />\r\nn - 月份，二位数字，若不足二位则不补零; 如: \"1\" 至 \"12\"&nbsp;<br />\r\n&nbsp;<br />\r\nM - 月份，三个英文字母; 如: \"Jan\"&nbsp;<br />\r\n&nbsp;<br />\r\ns - 秒; 如: \"00\" 至 \"59\"&nbsp;<br />\r\n&nbsp;<br />\r\nS - 字尾加英文序数，二个英文字母; 如: \"th\"，\"nd\"&nbsp;<br />\r\n&nbsp;<br />\r\nt - 指定月份的天数; 如: \"28\" 至 \"31\"&nbsp;<br />\r\n&nbsp;\r\n</p>', 'Phpnoter', 'http://www.phpernote.com/php-function/727.html', 'php,时间', '49', 'N', '0', 'Y', '2014-02-21', '2014-03-24');

-- ----------------------------
-- Table structure for sp_tag
-- ----------------------------
DROP TABLE IF EXISTS `sp_tag`;
CREATE TABLE `sp_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` mediumblob NOT NULL COMMENT 'the relatvie post',
  `tag_name` char(30) NOT NULL COMMENT 'tag name',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='tag table';

-- ----------------------------
-- Records of sp_tag
-- ----------------------------
INSERT INTO `sp_tag` VALUES ('7', 0x31382C31372C31382C3138, '时间');
INSERT INTO `sp_tag` VALUES ('6', 0x3138, 'php');
INSERT INTO `sp_tag` VALUES ('8', 0x3137, '乌克兰');
INSERT INTO `sp_tag` VALUES ('9', 0x3137, '武装冲突');

-- ----------------------------
-- Table structure for sp_user
-- ----------------------------
DROP TABLE IF EXISTS `sp_user`;
CREATE TABLE `sp_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `realname` varchar(16) DEFAULT NULL,
  `email` varchar(32) NOT NULL,
  `profile` text,
  `regIp` char(15) NOT NULL,
  `regTime` datetime NOT NULL,
  `lastLoginIp` char(15) DEFAULT NULL,
  `lastLoginTime` datetime DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sp_user
-- ----------------------------
INSERT INTO `sp_user` VALUES ('1', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', '张三', 'demo@demo.com', '', '127.0.0.1', '2014-03-24 21:17:02', '127.0.0.1', '2014-02-19 20:35:58');
INSERT INTO `sp_user` VALUES ('2', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '李四', 'menggangcsu@gmail.com', 'dfsafdas', '127.0.0.1', '2014-03-24 21:16:58', '127.0.0.1', '2014-03-24 20:55:01');
INSERT INTO `sp_user` VALUES ('11', 'test', 'e10adc3949ba59abbe56e057f20f883e', 'xiaoqing', '12345@163.com', '', '127.0.0.1', '2014-03-24 21:16:54', '127.0.0.1', '2014-02-21 01:00:37');
DROP TRIGGER IF EXISTS `sp_catalog_BINS`;
DELIMITER ;;
CREATE TRIGGER `sp_catalog_BINS` BEFORE INSERT ON `sp_catalog` FOR EACH ROW set
	new.create_time = now(),
	new.update_time = now()
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `sp_catalog_BUPD`;
DELIMITER ;;
CREATE TRIGGER `sp_catalog_BUPD` BEFORE UPDATE ON `sp_catalog` FOR EACH ROW set new.update_time = now()
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `sp_post_BINS`;
DELIMITER ;;
CREATE TRIGGER `sp_post_BINS` BEFORE INSERT ON `sp_post` FOR EACH ROW set
	new.create_time = date;
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `sp_post_BUPD`;
DELIMITER ;;
CREATE TRIGGER `sp_post_BUPD` BEFORE UPDATE ON `sp_post` FOR EACH ROW set new.update_time = now()
;;
DELIMITER ;
