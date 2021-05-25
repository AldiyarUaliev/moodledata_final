<?php

class __Mustache_3781152295920719ba068e749ad3decf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'children' section
        $value = $context->find('children');
        $buffer .= $this->section0b303589c9c0e60acc2b32dcb4e726ae($context, $indent, $value);

        return $buffer;
    }

    private function sectionBce6020de383120fa8b78538ee3cc73b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="has-arrow w-100 d-block accordion" id="accordionAdditionalNavB-{{title}}" data-toggle="collapse" data-target="#accordionAdditionalNavC-{{title}}" aria-expanded="false" aria-controls="accordionAdditionalNav"';
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
                
                $buffer .= 'class="has-arrow w-100 d-block accordion" id="accordionAdditionalNavB-';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-toggle="collapse" data-target="#accordionAdditionalNavC-';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" aria-expanded="false" aria-controls="accordionAdditionalNav"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE868f2ddf5b10efc3000f20ca0eca0db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<i class="icon fas fa-caret-down"></i>';
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
                
                $buffer .= '<i class="icon fas fa-caret-down"></i>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f8df892c40c463f54b327a84cfb06f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <div id="accordionAdditionalNavC-{{title}}" class="sub-nav m-0 px-1 pb-2 collapse" data-parent="#accordionAdditionalNavB-{{title}}">
                      {{> theme_space/custom_menu }}
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
                
                $buffer .= $indent . '                  <div id="accordionAdditionalNavC-';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="sub-nav m-0 px-1 pb-2 collapse" data-parent="#accordionAdditionalNavB-';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('theme_space/custom_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                      ');
                }
                $buffer .= $indent . '                  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe4bfb7fe6d2083898b562058a187db4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a href="{{{url}}}" title="{{{title}}}" {{#haschildren}}class="has-arrow w-100 d-block accordion" id="accordionAdditionalNavB-{{title}}" data-toggle="collapse" data-target="#accordionAdditionalNavC-{{title}}" aria-expanded="false" aria-controls="accordionAdditionalNav"{{/haschildren}}>{{{text}}}{{#haschildren}}<i class="icon fas fa-caret-down"></i>{{/haschildren}}</a>
                  {{#haschildren}}
                  <div id="accordionAdditionalNavC-{{title}}" class="sub-nav m-0 px-1 pb-2 collapse" data-parent="#accordionAdditionalNavB-{{title}}">
                      {{> theme_space/custom_menu }}
                  </div>
                  {{/haschildren}}
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
                
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                // 'haschildren' section
                $value = $context->find('haschildren');
                $buffer .= $this->sectionBce6020de383120fa8b78538ee3cc73b($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                // 'haschildren' section
                $value = $context->find('haschildren');
                $buffer .= $this->sectionE868f2ddf5b10efc3000f20ca0eca0db($context, $indent, $value);
                $buffer .= '</a>
';
                // 'haschildren' section
                $value = $context->find('haschildren');
                $buffer .= $this->section9f8df892c40c463f54b327a84cfb06f2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ada1afeb1954d78231f22f7b12d06a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <div class="sub-nav">
                      {{> theme_space/custom_menu }}
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
                
                $buffer .= $indent . '                  <div class="sub-nav">
';
                if ($partial = $this->mustache->loadPartial('theme_space/custom_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                      ');
                }
                $buffer .= $indent . '                  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b303589c9c0e60acc2b32dcb4e726ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^divider}}
            {{#url}}
                  <a href="{{{url}}}" title="{{{title}}}" {{#haschildren}}class="has-arrow w-100 d-block accordion" id="accordionAdditionalNavB-{{title}}" data-toggle="collapse" data-target="#accordionAdditionalNavC-{{title}}" aria-expanded="false" aria-controls="accordionAdditionalNav"{{/haschildren}}>{{{text}}}{{#haschildren}}<i class="icon fas fa-caret-down"></i>{{/haschildren}}</a>
                  {{#haschildren}}
                  <div id="accordionAdditionalNavC-{{title}}" class="sub-nav m-0 px-1 pb-2 collapse" data-parent="#accordionAdditionalNavB-{{title}}">
                      {{> theme_space/custom_menu }}
                  </div>
                  {{/haschildren}}
            {{/url}}
            {{^url}}
                  {{{text}}}
                  {{#haschildren}}
                  <div class="sub-nav">
                      {{> theme_space/custom_menu }}
                  </div>
                  {{/haschildren}}
            {{/url}}
        {{/divider}}
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
                
                // 'divider' inverted section
                $value = $context->find('divider');
                if (empty($value)) {
                    
                    // 'url' section
                    $value = $context->find('url');
                    $buffer .= $this->sectionBe4bfb7fe6d2083898b562058a187db4($context, $indent, $value);
                    // 'url' inverted section
                    $value = $context->find('url');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                  ';
                        $value = $this->resolveValue($context->find('text'), $context);
                        $buffer .= $value;
                        $buffer .= '
';
                        // 'haschildren' section
                        $value = $context->find('haschildren');
                        $buffer .= $this->section4ada1afeb1954d78231f22f7b12d06a6($context, $indent, $value);
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
