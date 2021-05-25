<?php

class __Mustache_9bee4408ef65df1556a4187d8df35354 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'FPHTMLBlock4' section
        $value = $context->find('FPHTMLBlock4');
        $buffer .= $this->section3f53da09553cdced2d4394423d7d7dd6($context, $indent, $value);

        return $buffer;
    }

    private function section4b7b5fcdb5aec144a209323c47b6ff2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4 class="c-special-box-subtitle">{{{FPHTMLBlock4Subheading}}}</h4>';
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
                
                $buffer .= '<h4 class="c-special-box-subtitle">';
                $value = $this->resolveValue($context->find('FPHTMLBlock4Subheading'), $context);
                $buffer .= $value;
                $buffer .= '</h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section996bf9c6c26dbe76326fb302e6f742cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="c-special-box-title">{{{FPHTMLBlock4Heading}}}</h3>';
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
                $value = $this->resolveValue($context->find('FPHTMLBlock4Heading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD869de6de629b95104061c1db7a1dabb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="lead">{{{FPHTMLBlock4Text}}}</div>';
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
                
                $buffer .= '<div class="lead">';
                $value = $this->resolveValue($context->find('FPHTMLBlock4Text'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7eb3585a12ebae3c496744f126685b80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="col-12 mt-5">
    {{{FPHTMLBlock4Content}}}
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
                
                $buffer .= $indent . '  <div class="col-12 mt-5">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('FPHTMLBlock4Content'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC34334deba208991c83e2ca655363fa0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<hr class="hr my-0" />';
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
                
                $buffer .= $indent . '<hr class="hr my-0" />';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f53da09553cdced2d4394423d7d7dd6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

<div id="HTMLBlock4" class="s-block-4 l-container s-special-box section-padding">

  <div class="{{FPHTMLBlock4Properties}} {{^FPHTMLBlock4Properties}}col-sm-11 col-md-8 col-lg-6 text-center m-auto{{/FPHTMLBlock4Properties}}">
  {{#FPHTMLBlock4Subheading}}<h4 class="c-special-box-subtitle">{{{FPHTMLBlock4Subheading}}}</h4>{{/FPHTMLBlock4Subheading}}
  {{#FPHTMLBlock4Heading}}<h3 class="c-special-box-title">{{{FPHTMLBlock4Heading}}}</h3>{{/FPHTMLBlock4Heading}}
  {{#FPHTMLBlock4Text}}<div class="lead">{{{FPHTMLBlock4Text}}}</div>{{/FPHTMLBlock4Text}}
  </div>
  {{#FPHTMLBlock4Content}}
  <div class="col-12 mt-5">
    {{{FPHTMLBlock4Content}}}
  </div>
  {{/FPHTMLBlock4Content}}

</div>

{{#showfpblock4hr}}<hr class="hr my-0" />{{/showfpblock4hr}}
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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div id="HTMLBlock4" class="s-block-4 l-container s-special-box section-padding">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="';
                $value = $this->resolveValue($context->find('FPHTMLBlock4Properties'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'FPHTMLBlock4Properties' inverted section
                $value = $context->find('FPHTMLBlock4Properties');
                if (empty($value)) {
                    
                    $buffer .= 'col-sm-11 col-md-8 col-lg-6 text-center m-auto';
                }
                $buffer .= '">
';
                $buffer .= $indent . '  ';
                // 'FPHTMLBlock4Subheading' section
                $value = $context->find('FPHTMLBlock4Subheading');
                $buffer .= $this->section4b7b5fcdb5aec144a209323c47b6ff2e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  ';
                // 'FPHTMLBlock4Heading' section
                $value = $context->find('FPHTMLBlock4Heading');
                $buffer .= $this->section996bf9c6c26dbe76326fb302e6f742cf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  ';
                // 'FPHTMLBlock4Text' section
                $value = $context->find('FPHTMLBlock4Text');
                $buffer .= $this->sectionD869de6de629b95104061c1db7a1dabb($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  </div>
';
                // 'FPHTMLBlock4Content' section
                $value = $context->find('FPHTMLBlock4Content');
                $buffer .= $this->section7eb3585a12ebae3c496744f126685b80($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                // 'showfpblock4hr' section
                $value = $context->find('showfpblock4hr');
                $buffer .= $this->sectionC34334deba208991c83e2ca655363fa0($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
