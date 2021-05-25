<?php

class __Mustache_a1349c816dbbd13fd480072d1f52d58f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'FPHTMLBlock1' section
        $value = $context->find('FPHTMLBlock1');
        $buffer .= $this->section3002dbb4df9d5e5de4ea996722bf81fb($context, $indent, $value);

        return $buffer;
    }

    private function section000837658aaa5dec428d5f037ace604e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2 class="c-special-box-title">{{{FPBlock1Title}}}</h2>';
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
                
                $buffer .= '<h2 class="c-special-box-title">';
                $value = $this->resolveValue($context->find('FPBlock1Title'), $context);
                $buffer .= $value;
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc50d87f630bfdd7bf3909fc6685a9c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="lead mb-3">{{{FPBlock1Content}}}</div>';
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
                
                $buffer .= '<div class="lead mb-3">';
                $value = $this->resolveValue($context->find('FPBlock1Content'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85f8f1f5dd8b1284bc857908f7cc57bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="{{FPHTMLBlock1IntroProperties}} {{^FPHTMLBlock1IntroProperties}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/FPHTMLBlock1IntroProperties}}">
    {{#FPBlock1Title}}<h2 class="c-special-box-title">{{{FPBlock1Title}}}</h2>{{/FPBlock1Title}}
    {{#FPBlock1Content}}<div class="lead mb-3">{{{FPBlock1Content}}}</div>{{/FPBlock1Content}}
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
                
                $buffer .= $indent . '  <div class="';
                $value = $this->resolveValue($context->find('FPHTMLBlock1IntroProperties'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'FPHTMLBlock1IntroProperties' inverted section
                $value = $context->find('FPHTMLBlock1IntroProperties');
                if (empty($value)) {
                    
                    $buffer .= 'col-sm-11 col-md-8 col-lg-6 m-auto text-center';
                }
                $buffer .= '">
';
                $buffer .= $indent . '    ';
                // 'FPBlock1Title' section
                $value = $context->find('FPBlock1Title');
                $buffer .= $this->section000837658aaa5dec428d5f037ace604e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    ';
                // 'FPBlock1Content' section
                $value = $context->find('FPBlock1Content');
                $buffer .= $this->sectionEc50d87f630bfdd7bf3909fc6685a9c8($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f40390a5d46f527b3e174e4b5471642(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img src="{{{image}}}" alt="{{FPHTMLBlock1Heading}}" class="img-fluid"/>';
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
                
                $buffer .= '<img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('FPHTMLBlock1Heading'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="img-fluid"/>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52a28672dd4552347407b4c372f6dd76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-special-box-icon">{{{FPHTMLBlock1Icon}}}</div>';
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
                $value = $this->resolveValue($context->find('FPHTMLBlock1Icon'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdf1a0e39510af3ff6e1c794e91a13df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="c-block1-title">{{{FPHTMLBlock1Heading}}}</h3>';
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
                
                $buffer .= '<h3 class="c-block1-title">';
                $value = $this->resolveValue($context->find('FPHTMLBlock1Heading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7cb908b76fa3aee7e22d1f456f58df4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-special-box-desc">{{{FPHTMLBlock1Text}}}</div>';
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
                
                $buffer .= '<div class="c-special-box-desc">';
                $value = $this->resolveValue($context->find('FPHTMLBlock1Text'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92e3882c5c6391981dfc11388bd77d62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="block1-{{FPHTMLBlock1Count}}" class="{{FPHTMLBlock1ItemProperties}} {{^FPHTMLBlock1ItemProperties}}col-sm-11 col-md-6 col-lg-4{{/FPHTMLBlock1ItemProperties}}">
      <div {{^FPHTMLBlock1ItemBlockProperties}}class="p-3 m-3"{{/FPHTMLBlock1ItemBlockProperties}} {{{FPHTMLBlock1ItemBlockProperties}}}>
        {{#image}}<img src="{{{image}}}" alt="{{FPHTMLBlock1Heading}}" class="img-fluid"/>{{/image}}
        {{^image}}{{#FPHTMLBlock1Icon}}<div class="c-special-box-icon">{{{FPHTMLBlock1Icon}}}</div>{{/FPHTMLBlock1Icon}}{{/image}}
        {{#FPHTMLBlock1Heading}}<h3 class="c-block1-title">{{{FPHTMLBlock1Heading}}}</h3>{{/FPHTMLBlock1Heading}}
        {{#FPHTMLBlock1Text}}<div class="c-special-box-desc">{{{FPHTMLBlock1Text}}}</div>{{/FPHTMLBlock1Text}}
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
                
                $buffer .= $indent . '    <div id="block1-';
                $value = $this->resolveValue($context->find('FPHTMLBlock1Count'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('FPHTMLBlock1ItemProperties'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'FPHTMLBlock1ItemProperties' inverted section
                $value = $context->find('FPHTMLBlock1ItemProperties');
                if (empty($value)) {
                    
                    $buffer .= 'col-sm-11 col-md-6 col-lg-4';
                }
                $buffer .= '">
';
                $buffer .= $indent . '      <div ';
                // 'FPHTMLBlock1ItemBlockProperties' inverted section
                $value = $context->find('FPHTMLBlock1ItemBlockProperties');
                if (empty($value)) {
                    
                    $buffer .= 'class="p-3 m-3"';
                }
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('FPHTMLBlock1ItemBlockProperties'), $context);
                $buffer .= $value;
                $buffer .= '>
';
                $buffer .= $indent . '        ';
                // 'image' section
                $value = $context->find('image');
                $buffer .= $this->section9f40390a5d46f527b3e174e4b5471642($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                // 'image' inverted section
                $value = $context->find('image');
                if (empty($value)) {
                    
                    // 'FPHTMLBlock1Icon' section
                    $value = $context->find('FPHTMLBlock1Icon');
                    $buffer .= $this->section52a28672dd4552347407b4c372f6dd76($context, $indent, $value);
                }
                $buffer .= '
';
                $buffer .= $indent . '        ';
                // 'FPHTMLBlock1Heading' section
                $value = $context->find('FPHTMLBlock1Heading');
                $buffer .= $this->sectionAdf1a0e39510af3ff6e1c794e91a13df($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                // 'FPHTMLBlock1Text' section
                $value = $context->find('FPHTMLBlock1Text');
                $buffer .= $this->sectionC7cb908b76fa3aee7e22d1f456f58df4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section45476826518c21c2ea0e75b3b64f9a54(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-block2-footer-content w-100 mt-4">{{{FPBlock1FooterContent}}}</div>';
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
                
                $buffer .= '<div class="c-block2-footer-content w-100 mt-4">';
                $value = $this->resolveValue($context->find('FPBlock1FooterContent'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
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

    private function section3002dbb4df9d5e5de4ea996722bf81fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="block1" class="s-block-1 l-container s-special-box section-padding row no-gutters justify-content-sm-center justify-content-lg-between">

 {{#ShowFPBlock1Intro}}
  <div class="{{FPHTMLBlock1IntroProperties}} {{^FPHTMLBlock1IntroProperties}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/FPHTMLBlock1IntroProperties}}">
    {{#FPBlock1Title}}<h2 class="c-special-box-title">{{{FPBlock1Title}}}</h2>{{/FPBlock1Title}}
    {{#FPBlock1Content}}<div class="lead mb-3">{{{FPBlock1Content}}}</div>{{/FPBlock1Content}}
  </div>
 {{/ShowFPBlock1Intro}}

  <div class="col-12 row no-gutters justify-content-sm-center justify-content-md-start py-0 px-1">
    {{#block1}}
    <div id="block1-{{FPHTMLBlock1Count}}" class="{{FPHTMLBlock1ItemProperties}} {{^FPHTMLBlock1ItemProperties}}col-sm-11 col-md-6 col-lg-4{{/FPHTMLBlock1ItemProperties}}">
      <div {{^FPHTMLBlock1ItemBlockProperties}}class="p-3 m-3"{{/FPHTMLBlock1ItemBlockProperties}} {{{FPHTMLBlock1ItemBlockProperties}}}>
        {{#image}}<img src="{{{image}}}" alt="{{FPHTMLBlock1Heading}}" class="img-fluid"/>{{/image}}
        {{^image}}{{#FPHTMLBlock1Icon}}<div class="c-special-box-icon">{{{FPHTMLBlock1Icon}}}</div>{{/FPHTMLBlock1Icon}}{{/image}}
        {{#FPHTMLBlock1Heading}}<h3 class="c-block1-title">{{{FPHTMLBlock1Heading}}}</h3>{{/FPHTMLBlock1Heading}}
        {{#FPHTMLBlock1Text}}<div class="c-special-box-desc">{{{FPHTMLBlock1Text}}}</div>{{/FPHTMLBlock1Text}}
      </div>
    </div>
    {{/block1}}
  </div>

  {{#FPBlock1FooterContent}}<div class="c-block2-footer-content w-100 mt-4">{{{FPBlock1FooterContent}}}</div>{{/FPBlock1FooterContent}}

</div>

{{#showfpblock1hr}}<hr class="hr my-0" />{{/showfpblock1hr}}
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
                
                $buffer .= $indent . '<div id="block1" class="s-block-1 l-container s-special-box section-padding row no-gutters justify-content-sm-center justify-content-lg-between">
';
                $buffer .= $indent . '
';
                // 'ShowFPBlock1Intro' section
                $value = $context->find('ShowFPBlock1Intro');
                $buffer .= $this->section85f8f1f5dd8b1284bc857908f7cc57bc($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="col-12 row no-gutters justify-content-sm-center justify-content-md-start py-0 px-1">
';
                // 'block1' section
                $value = $context->find('block1');
                $buffer .= $this->section92e3882c5c6391981dfc11388bd77d62($context, $indent, $value);
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  ';
                // 'FPBlock1FooterContent' section
                $value = $context->find('FPBlock1FooterContent');
                $buffer .= $this->section45476826518c21c2ea0e75b3b64f9a54($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                // 'showfpblock1hr' section
                $value = $context->find('showfpblock1hr');
                $buffer .= $this->sectionC34334deba208991c83e2ca655363fa0($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
