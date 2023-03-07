<?php
/**
 * 这是package标签示例
 * 
 * 页面级DocBlock示例。
 * 此DocBlock位于另一个DocBlock之前，将被解析为页面级别。
 * 将您的@package和@subpackage标记放在此处
 * @package packageTest
 */

/**
 * function bluh
 */
function bluh()
{
}
?>
<?php
/**
* 类 PackageClass
*
* 类级DocBlock示例。以下示例代表packageTestSub包在packageTest内,
* 需要注意下划线[_]也会被解析成包分割符
* @package packageTest\packageTestSub 
*/
class PackageClass
{

    /**
    * 此变量作为包applies_to_bluh的一部分进行解析
    */
    var $foo;

    /**
    * 这个函数也是
    */
    function bar()
    {
    }
}

?>