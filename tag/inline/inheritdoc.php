<?php
/**
 * 这是inheritdoc标签内联示例
 *
 * 应该是我没用懂，看起来没什么用
 * 我是InheritdocSubInlineClass的父类
 */
class InheritdocInlineClass
{
}
/**
 * 我是InheritdocSubInlineClass类
 *
 * 这是InheritdocInlineClass类的描述
 * {@inheritdoc}  , 关于InheritdocSubInlineClass描述写在这里，balabala
 */
class InheritdocSubInlineClass extends InheritdocInlineClass
{
}