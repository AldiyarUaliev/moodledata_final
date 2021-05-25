<?php

class __Mustache_47ffcbccbd73eed537ecb1902461eefc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<label class="form-control-label col-4" for="choose-license-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section56c60baa62b965c8ddfac2882a15ac40($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</label>
';
        // 'licensehelpicon' section
        $value = $context->find('licensehelpicon');
        $buffer .= $this->sectionF799ccb794eb5635625696ee8944adc6($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="col-8">
';
        $buffer .= $indent . '    <select id="choose-license-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="form-control"></select>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section56c60baa62b965c8ddfac2882a15ac40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chooselicense, repository';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'chooselicense, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF799ccb794eb5635625696ee8944adc6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>core/help_icon}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
