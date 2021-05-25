<?php

class __Mustache_a242e19ae795ca3cb811cf34544fe32d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'blockBe639775d6d0b198e2c2d801fd5ae62f'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function blockBe639775d6d0b198e2c2d801fd5ae62f($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="form-control-static">';
        $value = $this->resolveValue($context->findDot('element.html'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
    
        return $buffer;
    }
}
