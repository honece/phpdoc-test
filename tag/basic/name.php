<?php
/**
 * 这是name标签示例
 * 
 * 应该是我没用懂，但是没有效果
 */

/**
 * 当在函数中使用@global时，它将链接到$baz
 * @global array $GLOBALS['baz'] 
 */
$GLOBALS['baz'] = array('foo', 'bar');

/**
 * @global array used for stuff
 */
function name()
{
    global $baz;
}