<?php

class __Mustache_aa4214ef670cf86853b5df85d7f2ff4b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div data-region="drawer-toggle" class="d-sm-none d-lg-inline">
';
        $buffer .= $indent . '        <button id="sidebarBtn" type="button" class="sidebar-btn ml-md-0 mr-md-3" aria-expanded="';
        // 'navdraweropen' section
        $value = $context->find('navdraweropen');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '" aria-controls="nav-drawer" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
';
        // 'SidebarButtonIconOpen' section
        $value = $context->find('SidebarButtonIconOpen');
        $buffer .= $this->section89c9f04d69be0f10e6e0eef3191c062d($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'SidebarButtonIconOpen' inverted section
        $value = $context->find('SidebarButtonIconOpen');
        if (empty($value)) {
            
            $buffer .= $indent . '          <i class="fas fa-equals opened"></i>
';
            $buffer .= $indent . '          <i class="fas fa-arrow-left closed"></i>
';
        }
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>';

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

    private function section732c9c7e0a58aebae319ec93bd46d3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{SidebarButtonIconClose}}}';
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
                
                $value = $this->resolveValue($context->find('SidebarButtonIconClose'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89c9f04d69be0f10e6e0eef3191c062d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          {{{SidebarButtonIconOpen}}}
          {{^SidebarButtonIconClose}}<i class="fas fa-arrow-left closed"></i>{{/SidebarButtonIconClose}}
          {{#SidebarButtonIconClose}}{{{SidebarButtonIconClose}}}{{/SidebarButtonIconClose}}
          ';
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
                
                $buffer .= $indent . '          ';
                $value = $this->resolveValue($context->find('SidebarButtonIconOpen'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '          ';
                // 'SidebarButtonIconClose' inverted section
                $value = $context->find('SidebarButtonIconClose');
                if (empty($value)) {
                    
                    $buffer .= '<i class="fas fa-arrow-left closed"></i>';
                }
                $buffer .= '
';
                $buffer .= $indent . '          ';
                // 'SidebarButtonIconClose' section
                $value = $context->find('SidebarButtonIconClose');
                $buffer .= $this->section732c9c7e0a58aebae319ec93bd46d3bf($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
