<?php
    class IndexController {

        /**
         * 默认方法
         * @return {[type]} [description]
         */
        public function indexAction() {

            die("Fas");

            $ca = "额。。。";

            // 测试
            $str = <<<THEEND
                <html>我爱你</html>$ca
                <p>fasfas><fann_test_data
                fdsf>f
THEEND;

            echo deletehtml($str) . "<br />";
            die("fa");
        }
    }

?>
