<?php
/**
 * 这是uses标签示例
 * 此标签只能指向文档元素，使用此标会自动创建反向链接标签usesby
 */

class UsesClass
{
    /**
     * @var integer 
     */
    var $foo = 3;
    /**
     * @uses UsesSubclass 
     * @uses UsesSubclass::$foo 与USES进行比较
     * @uses USES 这是描述
     */
    function usesFunc()
    {
        if ($this->foo == 9)
            die;
        $test = new UsesSubclass;
        $a    = $test->foo;
        if ($a == USES)
            die;
    }
}
class UsesSubclass extends UsesClass
{
    /**
     * @var integer 
     */
    var $foo = 9;
}
define("USES", "uses");
?>