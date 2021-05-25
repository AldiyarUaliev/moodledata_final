<?php

class __Mustache_bb469af5fbb87e574844abd424af3c72 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.doctype'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '<html ';
        $value = $this->resolveValue($context->findDot('output.htmlattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '<head>
';
        if ($partial = $this->mustache->loadPartial('theme_space/head-content')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  ';
        $value = $this->resolveValue($context->find('additionalheadhtml'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</head>';

        return $buffer;
    }
}
