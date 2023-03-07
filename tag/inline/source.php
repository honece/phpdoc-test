<?php
/**
 * 这是source标签内联的示例
 *
 * 看起来没什么用了
 * 此标签只能用于函数或方法的文档块中
 * 此标签{@source 3}将会展示从第三行开始的第一行
 */
function sourceInlineFunc($pages)
{
    if (empty($pages)) {
        die("<b>ERROR</b>: nothing parsed");
    }
    foreach ($test as $hello) {
        echo "I love $hello";
    }
}