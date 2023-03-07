<?php
namespace Error;

/**
 * 这是see标签示例
 * 
 * 此标签用于链接到文档内的任何元素，也可以给指定的{@see https://www.ietf.org/rfc/rfc2396.txt <URI>}
 */
class SeeFather
{
    var $foo = 3;

    /**
     * 子类继承此方法。
     * 常量或类名的单词示例，在本例中为类名
     * @see SeeChild
     * @see SeeChild::$foo
     */
    function parent_method()
    {
        if ($this->foo == 9)
            die;
    }
}
/**
 * 这个类扩展了Father
 * 链接到常量以及将多个元素放在同一行的示例
 * @see SeeFather
 * @see \TEST_CONST
 */
class SeeChild extends SeeFather
{
    var $foo = 9;
}

define("TEST_CONST", "foobar");