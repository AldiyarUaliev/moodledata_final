<?php

class __Mustache_36c1debba6a3d73521bd8280fc9053d1 extends Mustache_Template
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
        $buffer .= $indent . '  <div class="d-sm-inline d-lg-none">
';
        $buffer .= $indent . '      <button type="button" class="sidebar-btn" aria-expanded="';
        // 'navdraweropen' section
        $value = $context->find('navdraweropen');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '" aria-controls="nav-drawer" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav"></button>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="d-sm-inline d-lg-none">
';
        $buffer .= $indent . '      <button id="showMobileTopBar" type="button" class="mobile-topbar-btn">
';
        $buffer .= $indent . '        <i class="fas fa-th-large" id="mobileTopBarBtn"></i>
';
        $buffer .= $indent . '        <i class="fas fa-times hidden" id="mobileTopBarCloseBtn"></i>
';
        $buffer .= $indent . '      </button>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
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
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
