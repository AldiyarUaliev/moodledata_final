<?php

class __Mustache_6c15131c07ad9b4ff8206528e16c3ac1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        // 'contextheader' section
        $value = $context->find('contextheader');
        $buffer .= $this->section6b5e3e1b559b8f6601aa7acec68a15d5($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="settingsMenu" class="settings-menu ';
        // 'topbarstyle1' section
        $value = $context->find('topbarstyle1');
        $buffer .= $this->section8ecd59418af54ab6306a436ad5079b82($context, $indent, $value);
        // 'topbarstyle2' section
        $value = $context->find('topbarstyle2');
        $buffer .= $this->sectionF88378f23afbcbf091522225baad459e($context, $indent, $value);
        // 'topbarstyle3' section
        $value = $context->find('topbarstyle3');
        $buffer .= $this->sectionA6831a7d96557bd57a53cafb1015ecc5($context, $indent, $value);
        // 'topbarstyle4' section
        $value = $context->find('topbarstyle4');
        $buffer .= $this->sectionA432dada255c741a9df657b45e7ed09d($context, $indent, $value);
        // 'topbarstyle5' section
        $value = $context->find('topbarstyle5');
        $buffer .= $this->sectionD7ad3d39437d778098dc431de35c66dc($context, $indent, $value);
        // 'topbarstyle6' section
        $value = $context->find('topbarstyle6');
        $buffer .= $this->section967e21d8de482c665ba08567c12f435a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '          <div id="headerBtn" class="header-settings-menu-box">
';
        $buffer .= $indent . '              ';
        $value = $this->resolveValue($context->find('settingsmenu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';

        return $buffer;
    }

    private function section6b5e3e1b559b8f6601aa7acec68a15d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="row no-gutters">{{{contextheader}}}</div>';
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
                
                $buffer .= '<div class="row no-gutters">';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ecd59418af54ab6306a436ad5079b82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'c-top-style-1';
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
                
                $buffer .= 'c-top-style-1';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF88378f23afbcbf091522225baad459e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'c-top-style-2';
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
                
                $buffer .= 'c-top-style-2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6831a7d96557bd57a53cafb1015ecc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'c-top-style-3';
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
                
                $buffer .= 'c-top-style-3';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA432dada255c741a9df657b45e7ed09d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'c-top-style-4';
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
                
                $buffer .= 'c-top-style-4';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7ad3d39437d778098dc431de35c66dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'c-top-style-5';
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
                
                $buffer .= 'c-top-style-5';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section967e21d8de482c665ba08567c12f435a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'c-top-style-6';
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
                
                $buffer .= 'c-top-style-6';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
