<?php

class __Mustache_a9149f48d5bbc14eb6b5c8d977940b5e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'FPHTMLBlock3' section
        $value = $context->find('FPHTMLBlock3');
        $buffer .= $this->section623b164ba1873080dd5f74d47cac39e0($context, $indent, $value);

        return $buffer;
    }

    private function section784ef9e12375b32e3921a1acfffa2128(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style="background-image: url({{{ fphtmlblock3bgimg }}});"';
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
                
                $buffer .= 'style="background-image: url(';
                $value = $this->resolveValue($context->find('fphtmlblock3bgimg'), $context);
                $buffer .= $value;
                $buffer .= ');"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF913361a8417094fe865c41b45451f8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-special-box-icon">{{{FPHTMLBlock3Icon}}}</div>';
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
                
                $buffer .= '<div class="c-special-box-icon">';
                $value = $this->resolveValue($context->find('FPHTMLBlock3Icon'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0e4c2223cf4dfbd9a80b412a0395ca4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="c-special-box-title">{{{FPHTMLBlock3Heading}}}</h3>';
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
                
                $buffer .= '<h3 class="c-special-box-title">';
                $value = $this->resolveValue($context->find('FPHTMLBlock3Heading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cbf1cd8074a7c9a05026998acb26106(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-special-box-desc m-t-1">{{{FPHTMLBlock3Text}}}</div>';
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
                
                $buffer .= '<div class="c-special-box-desc m-t-1">';
                $value = $this->resolveValue($context->find('FPHTMLBlock3Text'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section593fd67254ed3bbd6d8640a947117462(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{FPHTMLBlock3URL}}" class="c-block-3-btn m-t-2 btn btn-primary">{{{FPHTMLBlock3Label}}}</a>';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('FPHTMLBlock3URL'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="c-block-3-btn m-t-2 btn btn-primary">';
                $value = $this->resolveValue($context->find('FPHTMLBlock3Label'), $context);
                $buffer .= $value;
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section623b164ba1873080dd5f74d47cac39e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="HTMLBlock3" class="s-block-3 s-special-box s-special-box-bg-gradient" {{# fphtmlblock3bgimg }}style="background-image: url({{{ fphtmlblock3bgimg }}});"{{/ fphtmlblock3bgimg }}>
  <div class="l-container s-special-box row section-padding no-gutters justify-content-center align-items-center">
    <div class="col-sm-11 col-md-7 text-center">
      {{#FPHTMLBlock3Icon}}<div class="c-special-box-icon">{{{FPHTMLBlock3Icon}}}</div>{{/FPHTMLBlock3Icon}}
      {{#FPHTMLBlock3Heading}}<h3 class="c-special-box-title">{{{FPHTMLBlock3Heading}}}</h3>{{/FPHTMLBlock3Heading}}
      {{#FPHTMLBlock3Text}}<div class="c-special-box-desc m-t-1">{{{FPHTMLBlock3Text}}}</div>{{/FPHTMLBlock3Text}}
      {{#FPHTMLBlock3URL}}<a href="{{FPHTMLBlock3URL}}" class="c-block-3-btn m-t-2 btn btn-primary">{{{FPHTMLBlock3Label}}}</a>{{/FPHTMLBlock3URL}}
    </div>
  </div>
</div>
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
                
                $buffer .= $indent . '<div id="HTMLBlock3" class="s-block-3 s-special-box s-special-box-bg-gradient" ';
                // 'fphtmlblock3bgimg' section
                $value = $context->find('fphtmlblock3bgimg');
                $buffer .= $this->section784ef9e12375b32e3921a1acfffa2128($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '  <div class="l-container s-special-box row section-padding no-gutters justify-content-center align-items-center">
';
                $buffer .= $indent . '    <div class="col-sm-11 col-md-7 text-center">
';
                $buffer .= $indent . '      ';
                // 'FPHTMLBlock3Icon' section
                $value = $context->find('FPHTMLBlock3Icon');
                $buffer .= $this->sectionF913361a8417094fe865c41b45451f8b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'FPHTMLBlock3Heading' section
                $value = $context->find('FPHTMLBlock3Heading');
                $buffer .= $this->sectionA0e4c2223cf4dfbd9a80b412a0395ca4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'FPHTMLBlock3Text' section
                $value = $context->find('FPHTMLBlock3Text');
                $buffer .= $this->section1cbf1cd8074a7c9a05026998acb26106($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'FPHTMLBlock3URL' section
                $value = $context->find('FPHTMLBlock3URL');
                $buffer .= $this->section593fd67254ed3bbd6d8640a947117462($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
