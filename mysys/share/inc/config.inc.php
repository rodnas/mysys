<?php
// user levels
define("ewAllowAdd", 1, true);
define("ewAllowDelete", 2, true);
define("ewAllowEdit", 4, true);
define("ewAllowView", 8, true);
define("ewAllowList", 8, true);
define("ewAllowSearch", 8, true);
define("ewAllowAdmin", 16, true);
// database connect
$config["configShare"]["databaseType"] = "mysql";
$config["configShare"]["languageType"] = "hu";
$config["configShare"]["setNames"]="set names utf8";
// print_r(strtolower($_SERVER['HTTP_HOST'])."<br>");
switch(strtolower($_SERVER['HTTP_HOST'])) {
	case 'localhost':
	case 'rodnas.site':		// Wamp64\Xampp
	case 'mysys.site':
		$config["configShare"]["databaseServer"] = "localhost";
		$config["configShare"]["databaseSelect"] = "mysys";
		$config["configShare"]["databaseUser"] = "root";
		$config["configShare"]["databasePassword"] = "";
		break;
	case 'localhost:81':		// Laragon
	case 'mydevel.test:81':
	case 'mysys.test:81':
		$config["configShare"]["databaseServer"] = "localhost:3307";
		$config["configShare"]["databaseSelect"] = "mysys";
		$config["configShare"]["databaseUser"] = "root";
		$config["configShare"]["databasePassword"] = "";
		break;
	case 'localhost.docker:8100':	// Docker
	case 'mysys.docker:8100':
		$config["configShare"]["databaseServer"] = "database:3306";
		$config["configShare"]["databaseSelect"] = "mysys";
		$config["configShare"]["databaseUser"] = "root";
		$config["configShare"]["databasePassword"] = "tiger";
		break;
	case 'localhost.server':	// Guest Ubuntu Server
	case 'mysys.server':
	case 'localhost.desktop':	// Guest Ubuntu Server
	case 'mysys.desktop':
		$config["configShare"]["databaseServer"] = "localhost";
		$config["configShare"]["databaseSelect"] = "mysys";
		$config["configShare"]["databaseUser"] = "root";
		$config["configShare"]["databasePassword"] = "123";
		break;
	default:
		$config["configShare"]["databaseServer"] = "localhost";
		$config["configShare"]["databaseSelect"] = "mysys";
		$config["configShare"]["databaseUser"] = "root";
		$config["configShare"]["databasePassword"] = "";
		break;
}
$config["configShare"]["serverName"] = $_SERVER["HTTP_NAME"];
$config["configShare"]["whichSystem"] = "mysys";
$config["configShare"]["serverAddress"] = $_SERVER["SERVER_ADDR"];
$config["configShare"]["serverHost"] = $_SERVER["REMOTE_NAME"];
$config["configShare"]["remoteAddress"] = $_SERVER["REMOTE_ADDR"];
$config["configShare"]["remoteHost"] = $_SERVER["REMOTE_HOST"];
$config["configShare"]["baseModul"] = "index.php?modulSelect=video&modulAction=list&videocmd=resetall";
$config["configShare"]["homeModul"] = "video";
$config["configShare"]["registrationModul"] = "index.php?modulSelect=core_users&modulAction=registration";
$config["configShare"]["whichSystemMode"] = "backend";
$config["configShare"]["adminPath"] = "backend/";
$config["configShare"]["adminModulsPath"] = "backend/inc/";
$config["configShare"]["tplPath"] = "tpl/";
$config["configShare"]["cfgPath"] = "cfg/";
$config["configShare"]["incPath"] = "inc/";
$config["configShare"]["normalImgPath"] = "/backend/img/";
$config["configShare"]["imagePath"] = "img/";
$config["configShare"]["cssFileName"] = "css/admin.css";
$config["configShare"]["cssFileNameIE"] = "css/adminie.css";
$config["configShare"]["imageButton"] = "img/button/";
$config["configShare"]["themeStart"] = "olive";
$config["configShare"]["textWraplen"] = "100";
$config["configShare"]["adminLogo"] = "adminlogo.png";
$config["configShare"]["guestUser"] = "Guest";
$config["configShare"]["developerHome"] = "http://rodnas.fw.hu";
$config["configShare"]["docrootPath"] = "../docroot/";
$config["configShare"]["docrootPathHide"] = "../docroot/";
$config["configShare"]["sharePath"] = "share/";
$config["configShare"]["shareModulsPath"] = "share/inc/";
$config["configShare"]["modulFramePath"] = "share/modul/";
$config["configShare"]["modulFrameFile"] = "frame.inc.php";
$config["configShare"]["modulFrameName"] = "modulFrame";
$config["configShare"]["shareLibPath"] = "share/lib/";
$config["configShare"]["adminMail"] = "rodnas@uw.hu";
$config["configShare"]["siteLogo"] = "";
$config["configShare"]["developLogo"] = "developby.png";
$config["configShare"]["registrationUserLevel"] = "4";
$config["configShare"]["onlyView"] = "0";
$config["configShare"]["descriptionSign"] = "/#/";
$config["configShare"]["displayRecs"] = "5";
$config["configShare"]["recRange"] = "5";
$config["configShare"]["noView"] = "0";
$config["configShare"]["nocopy"] = "0";
$config["configShare"]["noEdit"] = "0";
$config["configShare"]["noAdd"] = "0";
$config["configShare"]["noDelete"] = "0";
$config["configShare"]["addButton"] = "plus.png";
$config["configShare"]["copyButton"] = "copy.png";
$config["configShare"]["editButton"] = "edit.png";
$config["configShare"]["deleteButton"] = "delete.png";
$config["configShare"]["adminButton"] = "admin.png";
$config["configShare"]["viewButton"] = "view.png";
$config["configShare"]["viewButtonNew"] = "viewnew.png";
$config["configShare"]["firstButton"] = "first.png";
$config["configShare"]["prevButton"] = "backward.png";
$config["configShare"]["prevItemButton"] = "backwardplay.png";
$config["configShare"]["nextButton"] = "forward.png";
$config["configShare"]["nextItemButton"] = "forwardplay.png";
$config["configShare"]["lastButton"] = "last.png";
$config["configShare"]["backButton"] = "back.png";
$config["configShare"]["openButton"] = "open.png";
$config["configShare"]["closeButton"] = "close.png";
$config["configShare"]["activeButton"] = "active.png";
$config["configShare"]["configsButton"] = "config.png";
$config["configShare"]["downloadURLButton"] = "download.png";
$config["configShare"]["noButton"] = "nobutton.png";
$config["configShare"]["treeBgColor"] = "#e1e0cc";
$config["configShare"]["logoWidth"] = "150";
$config["configShare"]["logoHeight"] = "150";
$config["configShare"]["pictSmallWidth"] = "120";
$config["configShare"]["pictSmallHeight"] = "120";
$config["configShare"]["pictSmallNamePlus"] = "_small";
$config["configShare"]["pictNormalWidth"] = "600";
$config["configShare"]["pictNormalHeight"] = "600";
$config["configShare"]["pictNormalNamePlus"] = "_normal";
$config["configShare"]["pictLargeWidth"] = "1280";
$config["configShare"]["pictLargeHeight"] = "1024";
$config["configShare"]["pictLargeNamePlus"] = "_large";
$config["configShare"]["leftWidthAdmin"] = "260";
$config["configShare"]["leftWidthUser"] = "200";
$config["configShare"]["listType"] = "normal";
$config["configShare"]["debugPrintValue"] = "0";
$config["configShare"]["noNavigationDefault"] = "0";
$config["configShare"]["awayButton"] = "away.png";
$config["configShare"]["bottomMenuSeparator"] = " - ";
$config["configShare"]["virBoxRefresh"] = "30";
$config["configShare"]["searchFilterNum"] = "=,<>,<,<=,>,>=,is null,is not null";
$config["configShare"]["searchFilterNumFin"] = "=,<>,<,<=,>,>=,is null,is not null,between";
$config["configShare"]["layoutMainHTML"] = "layoutsetup";
$config["configShare"]["layoutNoContent"] = "health,admin"; 

$config["configShare"]["topMenuItemCFG"] =
"video<subMenu><#>
health<subMenu>health<=>recipe<=>recipetopic<=>training<=>training_topic<=>medicine<=>medicine_topic<=>bloodpressure<#>
admin<subMenu>admin<=>core_users<=>core_userstitle<=>core_groups<=>core_groups_rights<=>core_configs<=>core_config<=>core_language<=>core_themes<#>
core_support<subMenu>core_support<=>core_support<=>core_support_action<=>core_support_topic<=>core_support_type<=>core_support_status<#>
core_messagewall<subMenu><#>";
?>