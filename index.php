<?php

    /************************************* 常用目录定义 **************************************/

    // 定义目录
    define("DIR_APPLICATION", dirname(__FILE__));
    define("DIR_CONTROLLER", DIR_APPLICATION . "/Controller");
    define("DIR_COMMON", DIR_APPLICATION . "/Common");
    define("DIR_UTIL", DIR_APPLICATION . "/Common/Util");
    define("DIR_ENUM", DIR_APPLICATION . "/Common/ENUM");

    /************************************* 方法引用 **************************************/

    // 引用工具类
    include DIR_UTIL . "/" . "AutoLoadUtil.php";
    include DIR_UTIL . "/" . "Util.php";

    /************************************* 初始化 **************************************/

    // 初始化工具类
    init();


    /************************************* 测试层 **************************************/

    encodeHead(EncodeEnum::UTF_8);
    die("我爱你");

    /************************************* 控制器模块 **************************************/

    /**
     * 控制器模块
     */
    // 进入控制器
    // 获取 c
    $controllerStr = getParam("c");
    if ($controllerStr === false) {
        $controllerStr = "IndexController";
    } else {
        $controllerStr = $controllerStr . "Controller";
    }
    // 获取 a
    $action = getParam("a");
    if ($action === false) {
        $action = "indexAction";
    } else {
        $action = $action . "Action";
    }

    try {
        // 实例化 Controller，并调用 action
        $controller = new $controllerStr();
        $controller->$action();
    } catch(Exception $e) {
        die("处理异常了!");
    }



    /************************************* 方法 **************************************/
    /**
     * 初始化一些文件
     * @return [type] [description]
     */
    function init() {
        // 加载 自动加载工具类
        new AutoLoadUtil();
    }
?>
