<?php
/**
 * 这是staticvar标签示例
 * 
 * 标签作用是记录静态变量在函数/方法中的使用
 * 这个标签看起来没什么用
 * @staticvar integer $foo 包括$foo都是描述
 * @staticvar array $bar 包括$bar都是描述
 * @param bool $baz 
 * @return mixed 
 */

function staticvarFunc($baz)
{
    static $foo = 6, $bar = array();
    if ($baz) {
        $a = 5;
    }
    else {
        $a = array(1, 4);
    }
    return $a;
}
var_dump(function1(0));