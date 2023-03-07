<?php
/**
 * 这是ignore标签示例
 * 
 * 直接忽略当前的文档块包含的所有元素
 * 此标签用于组织phpdoc记录元素
 */

if ($ostest) {
    /**
     * This define will either be 'Unix' or 'Windows'
     */
    define("OS", "Unix");
}
else {
    /**
     * @ignore 这里是忽略的常量
     */
    define("OS", "Windows");
}