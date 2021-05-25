<?php

class __Mustache_4c626b929f7cc5a8e070d042c2332159 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'FPHTMLCustomCategoryBlock' section
        $value = $context->find('FPHTMLCustomCategoryBlock');
        $buffer .= $this->section6f86c11b31b02d0fbeafb486a4043ede($context, $indent, $value);

        return $buffer;
    }

    private function section36480d11c4b1d70eb34102179da56301(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="title">{{{FPHTMLCustomCategoryHeading}}}</h3>';
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
                
                $buffer .= '<h3 class="title">';
                $value = $this->resolveValue($context->find('FPHTMLCustomCategoryHeading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cc34bf648f479528b0ce58e7957addd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="mt-3 mb-3 pr-sm-0 pr-lg-4 lead text-left">{{{FPHTMLCustomCategoryContent}}}</div>';
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
                
                $buffer .= '<div class="mt-3 mb-3 pr-sm-0 pr-lg-4 lead text-left">';
                $value = $this->resolveValue($context->find('FPHTMLCustomCategoryContent'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16fce0b575ea420e50f67854595439af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{FPHTMLCustomCategoryBlockHTML3}}}';
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
                
                $value = $this->resolveValue($context->find('FPHTMLCustomCategoryBlockHTML3'), $context);
                $buffer .= $value;
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

    private function section6f86c11b31b02d0fbeafb486a4043ede(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="customCategoryBlock" class="s-block-6 l-container s-courses-list row no-gutters section-padding justify-content-sm-center justify-content-lg-start px-sm-1 px-md-5">

  <div class="col-sm-11 col-lg-4 m-b-3">

    <div class="special-heading text-left">
      {{{FPHTMLCustomCategoryIcon}}}
      {{#FPHTMLCustomCategoryHeading}}<h3 class="title">{{{FPHTMLCustomCategoryHeading}}}</h3>{{/FPHTMLCustomCategoryHeading}}
      {{#FPHTMLCustomCategoryContent}}<div class="mt-3 mb-3 pr-sm-0 pr-lg-4 lead text-left">{{{FPHTMLCustomCategoryContent}}}</div>{{/FPHTMLCustomCategoryContent}}
      {{#FPHTMLCustomCategoryBlockHTML3}}{{{FPHTMLCustomCategoryBlockHTML3}}}{{/FPHTMLCustomCategoryBlockHTML3}}
    </div>

  </div>

  <div class="col-sm-11 col-lg row no-gutters pl-sm-0 pl-lg-4 justify-content-sm-center">

    <div class="col-sm-12 col-md text-left">
      {{{FPHTMLCustomCategoryBlockHTML1}}}
    </div>
    <div class="col-sm-12 col-md text-left">
      {{{FPHTMLCustomCategoryBlockHTML2}}}
    </div>

  </div>
</div>
{{#showfpblock6hr}}<hr class="hr my-0" />{{/showfpblock6hr}}
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
                
                $buffer .= $indent . '<div id="customCategoryBlock" class="s-block-6 l-container s-courses-list row no-gutters section-padding justify-content-sm-center justify-content-lg-start px-sm-1 px-md-5">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="col-sm-11 col-lg-4 m-b-3">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="special-heading text-left">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('FPHTMLCustomCategoryIcon'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'FPHTMLCustomCategoryHeading' section
                $value = $context->find('FPHTMLCustomCategoryHeading');
                $buffer .= $this->section36480d11c4b1d70eb34102179da56301($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'FPHTMLCustomCategoryContent' section
                $value = $context->find('FPHTMLCustomCategoryContent');
                $buffer .= $this->section3cc34bf648f479528b0ce58e7957addd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'FPHTMLCustomCategoryBlockHTML3' section
                $value = $context->find('FPHTMLCustomCategoryBlockHTML3');
                $buffer .= $this->section16fce0b575ea420e50f67854595439af($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="col-sm-11 col-lg row no-gutters pl-sm-0 pl-lg-4 justify-content-sm-center">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="col-sm-12 col-md text-left">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('FPHTMLCustomCategoryBlockHTML1'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="col-sm-12 col-md text-left">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('FPHTMLCustomCategoryBlockHTML2'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '</div>
';
                // 'showfpblock6hr' section
                $value = $context->find('showfpblock6hr');
                $buffer .= $this->sectionC34334deba208991c83e2ca655363fa0($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
