<?php
/**
 * 这是global标签示例
 * 
 * 这个标签应该弃用了，没看到作用
 * 主要用于记录全局变量的用法
 * 建议直接声明在定义全局变量的上一行，以免引发放在错误的作用域内不识别的错误
 */

/** 
 * @global mixed $_GLOBALS["myvar"] 
 */
$_GLOBALS["myvar"] = array("this" => '工作正常');



/**
 * 将@name与@global一起使用的示例
 * 在@name标签中，name必须有$,否则将引发错误
 * @global array $GLOBALS['neato'] 
 * @name $neato
 */
$GLOBALS['neato'] = '这个常量记录名称是 $neato, 不是$GLOBALS[\'neato\']';