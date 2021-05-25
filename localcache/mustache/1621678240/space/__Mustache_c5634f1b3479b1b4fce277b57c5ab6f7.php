<?php

class __Mustache_c5634f1b3479b1b4fce277b57c5ab6f7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="c-logo-mobile d-lg-none text-center">
';
        $buffer .= $indent . '      <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= $value;
        $buffer .= '" class="navbar-brand ';
        // 'mobiletopbarlogo' section
        $value = $context->find('mobiletopbarlogo');
        $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
        // 'output.should_display_navbar_logo' section
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
        $buffer .= ' ';
        // 'output.should_display_navbar_logo' inverted section
        $value = $context->findDot('output.should_display_navbar_logo');
        if (empty($value)) {
            
            $buffer .= 'd-none d-sm-inline';
        }
        $buffer .= '">
';
        // 'mobiletopbarlogo' section
        $value = $context->find('mobiletopbarlogo');
        $buffer .= $this->section0ebed9616520f3a0fd1b3b7f99fb8728($context, $indent, $value);
        $buffer .= $indent . '          <h1 class="';
        // 'mobiletopbarlogo' section
        $value = $context->find('mobiletopbarlogo');
        $buffer .= $this->section9a7fc588e5e2ac7453379d33a752316e($context, $indent, $value);
        // 'mobiletopbarlogo' inverted section
        $value = $context->find('mobiletopbarlogo');
        if (empty($value)) {
            
            // 'output.should_display_navbar_logo' section
            $value = $context->findDot('output.should_display_navbar_logo');
            $buffer .= $this->section9a7fc588e5e2ac7453379d33a752316e($context, $indent, $value);
        }
        $buffer .= ' site-name text-center">';
        $value = $this->resolveValue($context->find('sitename'), $context);
        $buffer .= $value;
        $buffer .= '</h1>
';
        $buffer .= $indent . '      </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="topBarContainer">
';
        $buffer .= $indent . '        ';
        // 'topbarstyle1' section
        $value = $context->find('topbarstyle1');
        $buffer .= $this->sectionE42eee1f0d1e590758d09924eeeec232($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'topbarstyle2' section
        $value = $context->find('topbarstyle2');
        $buffer .= $this->section7d84ec3bd0b2d55774620b4310fed6f7($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'topbarstyle3' section
        $value = $context->find('topbarstyle3');
        $buffer .= $this->section66249be53c76f5ad3fb978346870e45e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'topbarstyle4' section
        $value = $context->find('topbarstyle4');
        $buffer .= $this->section10415802012814f68fe407d1d9f2f1e2($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'topbarstyle5' section
        $value = $context->find('topbarstyle5');
        $buffer .= $this->section9e531ecbc4cee9b2ebe75fbaee56db3c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'topbarstyle6' section
        $value = $context->find('topbarstyle6');
        $buffer .= $this->sectionDb286383751ab300a1cd7bb53046da8b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';

        return $buffer;
    }

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
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
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ebed9616520f3a0fd1b3b7f99fb8728(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <h1 class="logo d-none d-sm-block my-0">
              <img src="{{mobiletopbarlogo}}" alt="{{sitename}}" class="img-fluid">
          </h1>
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
                
                $buffer .= $indent . '          <h1 class="logo d-none d-sm-block my-0">
';
                $buffer .= $indent . '              <img src="';
                $value = $this->resolveValue($context->find('mobiletopbarlogo'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="img-fluid">
';
                $buffer .= $indent . '          </h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a7fc588e5e2ac7453379d33a752316e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidden';
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
                
                $buffer .= 'hidden';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE42eee1f0d1e590758d09924eeeec232(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>theme_space/navbar-style-1}}';
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
                
                if ($partial = $this->mustache->loadPartial('theme_space/navbar-style-1')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d84ec3bd0b2d55774620b4310fed6f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>theme_space/navbar-style-2}}';
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
                
                if ($partial = $this->mustache->loadPartial('theme_space/navbar-style-2')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66249be53c76f5ad3fb978346870e45e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>theme_space/navbar-style-3}}';
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
                
                if ($partial = $this->mustache->loadPartial('theme_space/navbar-style-3')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10415802012814f68fe407d1d9f2f1e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>theme_space/navbar-style-4}}';
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
                
                if ($partial = $this->mustache->loadPartial('theme_space/navbar-style-4')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e531ecbc4cee9b2ebe75fbaee56db3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>theme_space/navbar-style-5}}';
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
                
                if ($partial = $this->mustache->loadPartial('theme_space/navbar-style-5')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb286383751ab300a1cd7bb53046da8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>theme_space/navbar-style-6}}';
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
                
                if ($partial = $this->mustache->loadPartial('theme_space/navbar-style-6')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
