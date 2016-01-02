<?php
    /**
    * 取出html标签
    *
    * @access public
    * @param string str
    * @return string
    *
    */
    function deletehtml($str) {
        $str = trim($str); //清除字符串两边的空格
        $str = strip_tags($str,"<p>"); //利用php自带的函数清除html格式。保留P标签
        $str = preg_replace("/\t/","",$str); //使用正则表达式匹配需要替换的内容，如：空格，换行，并将替换为空。
        $str = preg_replace("/\r\n/","",$str);
        $str = preg_replace("/\r/","",$str);
        $str = preg_replace("/\n/","",$str);
        $str = preg_replace("/ /","",$str);
        $str = preg_replace("/&nbsp; /","",$str);  //匹配html中的空格
        return trim($str); //返回字符串
    }

    /**
     * 获取参数
     * @param  [type] $param [description]
     * @return [type]        [description]
     */
    function getParam($key = false) {

        // 参数为空，返回false
        if ($key === false) {
            return false;
        }

        return isset($_GET[$key]) ? $_GET[$key] : (isset($_POST[$key]) ? $_POST[$key] : false);
    }

    /**
     * 输出编码头
     * @return [type] [description]
     */
    function encodeHead($encode = '', $isJSON = true) {

        // 编码
        $encodeStr = false;

        // 转换编码
        switch (strtolower($encode)) {
            case 'utf-8':
                $encodeStr = 'charset=utf-8';
                break;
            case 'gbk':
                $encodeStr = 'charset=GBK';
                break;
            case 'iso-8859-1':
                $encodeStr = 'charset=ISO-8859-1';
                break;

            default:
                # code...
                break;
        }

        // 设置编码
        if ($isJSON === true) {
            header("Content-Type:application/json; " . $encodeStr);
        } else {
            header("Content-Type:text/html; " . $encodeStr);
        }
    }

?>
