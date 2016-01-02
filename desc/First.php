<?php
	/**
	 * 学习到的知识点：
	 * 		1. heredoc方式定义变量
	 * 			说明：
	 * 				1). 以<<< + 标记符(例如：END)开始，以标记符结束
	 * 				2). 标记符不能有任何缩进、空格
	 */
	 // 1、heredoc方式定义变量
	 $str = <<<THEEND
		 <html>我爱你</html>$ca
		 <p>fasfas><fann_test_data
		 fdsf>f
THEEND;
?>
