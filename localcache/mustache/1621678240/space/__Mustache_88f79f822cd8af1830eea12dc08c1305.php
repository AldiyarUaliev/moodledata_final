<?php

class __Mustache_88f79f822cd8af1830eea12dc08c1305 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'heroimgenabled' section
        $value = $context->find('heroimgenabled');
        $buffer .= $this->sectionF54ebb7b5b209be3b78fd1cae4720106($context, $indent, $value);

        return $buffer;
    }

    private function section7819ffad923262f097f75975a044583d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'c-hero-container-shadow {{heroshadowstyle}}';
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
                
                $buffer .= 'c-hero-container-shadow ';
                $value = $this->resolveValue($context->find('heroshadowstyle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3739cb7fc57486039e7a39d3beac1138(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'c-hero-box-shadow {{heroshadowstyle}}';
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
                
                $buffer .= 'c-hero-box-shadow ';
                $value = $this->resolveValue($context->find('heroshadowstyle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA51dc40a798fb86d5802b309ea2d901f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'c-hero--fw';
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
                
                $buffer .= 'c-hero--fw';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE54776379e509ce93e55bda65d71a583(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'c-hero-img';
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
                
                $buffer .= 'c-hero-img';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb0bcc32aa28d0dde43d98649da6842b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h5 class="h5">{{{HeroText2}}}</h5>';
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
                
                $buffer .= '<h5 class="h5">';
                $value = $this->resolveValue($context->find('HeroText2'), $context);
                $buffer .= $value;
                $buffer .= '</h5>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47955529432531a507a576547a88421d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h1 class="h1">{{{HeroHeading}}}</h1>';
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
                
                $buffer .= '<h1 class="h1">';
                $value = $this->resolveValue($context->find('HeroHeading'), $context);
                $buffer .= $value;
                $buffer .= '</h1>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4685fbf1f7cf355c9221ba9daf0d9507(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="h3">{{{HeroText}}}</h3>';
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
                
                $buffer .= '<h3 class="h3">';
                $value = $this->resolveValue($context->find('HeroText'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb67eb67ec394feaa62afb29ccfced61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{HeroURL}}" class="my-2 mr-2 ml-2 btn btn-cta btn-cta--primary">{{{HeroLabel}}}</a>';
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
                $value = $this->resolveValue($context->find('HeroURL'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="my-2 mr-2 ml-2 btn btn-cta btn-cta--primary">';
                $value = $this->resolveValue($context->find('HeroLabel'), $context);
                $buffer .= $value;
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0841df5bffcde3c4666aef68f5df39d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{HeroURL2}}" class="my-2 mr-2 ml-2 btn btn-cta btn-cta--secondary">{{{HeroLabel2}}}</a>';
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
                $value = $this->resolveValue($context->find('HeroURL2'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="my-2 mr-2 ml-2 btn btn-cta btn-cta--secondary">';
                $value = $this->resolveValue($context->find('HeroLabel2'), $context);
                $buffer .= $value;
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44e418191f81c4c10ab021d041dc9057(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <img src="{{{ heroimg }}}" alt="" width="100%" class="c-hero-img d-inline" />
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
                
                $buffer .= $indent . '    <img src="';
                $value = $this->resolveValue($context->find('heroimg'), $context);
                $buffer .= $value;
                $buffer .= '" alt="" width="100%" class="c-hero-img d-inline" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ddfd8311873a8cad1237d019cd7525f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="c-hero-shadow-img-box" style="background-image: url({{{heroshadowimg}}}); {{heroshadowproperties}}"></div>
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
                
                $buffer .= $indent . '    <div class="c-hero-shadow-img-box" style="background-image: url(';
                $value = $this->resolveValue($context->find('heroshadowimg'), $context);
                $buffer .= $value;
                $buffer .= '); ';
                $value = $this->resolveValue($context->find('heroshadowproperties'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section815e54aeacba543840838963c2adf2a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#heroshadowimg}}
    <div class="c-hero-shadow-img-box" style="background-image: url({{{heroshadowimg}}}); {{heroshadowproperties}}"></div>
    {{/heroshadowimg}}
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
                
                // 'heroshadowimg' section
                $value = $context->find('heroshadowimg');
                $buffer .= $this->section1ddfd8311873a8cad1237d019cd7525f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF54ebb7b5b209be3b78fd1cae4720106(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="heroimg" class="c-hero-container {{^herofwenabled}}{{#heroshadow}}c-hero-container-shadow {{heroshadowstyle}}{{/heroshadow}}{{/herofwenabled}} {{#heroboxshadow}}c-hero-box-shadow {{heroshadowstyle}}{{/heroboxshadow}}">
  <div class="c-hero {{#herofwenabled}}c-hero--fw{{/herofwenabled}} {{#heroimgonly}}c-hero-img{{/heroimgonly}} {{^herofwenabled}}l-container{{/herofwenabled}} row no-gutters justify-content-center align-items-center" {{^heroimgonly}}style="background-image: url({{{ heroimg }}});"{{/heroimgonly}}>
    {{^heroimgonly}}
      {{^herohtml}}
      <div class="c-hero-content col-sm-11 col-lg-7 text-center">

        {{#HeroText2}}<h5 class="h5">{{{HeroText2}}}</h5>{{/HeroText2}}
        {{#HeroHeading}}<h1 class="h1">{{{HeroHeading}}}</h1>{{/HeroHeading}}
        {{#HeroText}}<h3 class="h3">{{{HeroText}}}</h3>{{/HeroText}}

        <div class="row mt-5 justify-content-center">
          {{#HeroURL}}<a href="{{HeroURL}}" class="my-2 mr-2 ml-2 btn btn-cta btn-cta--primary">{{{HeroLabel}}}</a>{{/HeroURL}}
          {{#HeroURL2}}<a href="{{HeroURL2}}" class="my-2 mr-2 ml-2 btn btn-cta btn-cta--secondary">{{{HeroLabel2}}}</a>{{/HeroURL2}}
        </div>

      </div>
      {{/herohtml}}

      {{{ herohtml }}}
    {{/heroimgonly}}

    {{#heroimgonly}}
    <img src="{{{ heroimg }}}" alt="" width="100%" class="c-hero-img d-inline" />
    {{/heroimgonly}}

  </div>

  {{^herofwenabled}}
  {{#heroshadow}}
    {{#heroshadowimg}}
    <div class="c-hero-shadow-img-box" style="background-image: url({{{heroshadowimg}}}); {{heroshadowproperties}}"></div>
    {{/heroshadowimg}}
  {{/heroshadow}}
  {{/herofwenabled}}

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
                
                $buffer .= $indent . '<div id="heroimg" class="c-hero-container ';
                // 'herofwenabled' inverted section
                $value = $context->find('herofwenabled');
                if (empty($value)) {
                    
                    // 'heroshadow' section
                    $value = $context->find('heroshadow');
                    $buffer .= $this->section7819ffad923262f097f75975a044583d($context, $indent, $value);
                }
                $buffer .= ' ';
                // 'heroboxshadow' section
                $value = $context->find('heroboxshadow');
                $buffer .= $this->section3739cb7fc57486039e7a39d3beac1138($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '  <div class="c-hero ';
                // 'herofwenabled' section
                $value = $context->find('herofwenabled');
                $buffer .= $this->sectionA51dc40a798fb86d5802b309ea2d901f($context, $indent, $value);
                $buffer .= ' ';
                // 'heroimgonly' section
                $value = $context->find('heroimgonly');
                $buffer .= $this->sectionE54776379e509ce93e55bda65d71a583($context, $indent, $value);
                $buffer .= ' ';
                // 'herofwenabled' inverted section
                $value = $context->find('herofwenabled');
                if (empty($value)) {
                    
                    $buffer .= 'l-container';
                }
                $buffer .= ' row no-gutters justify-content-center align-items-center" ';
                // 'heroimgonly' inverted section
                $value = $context->find('heroimgonly');
                if (empty($value)) {
                    
                    $buffer .= 'style="background-image: url(';
                    $value = $this->resolveValue($context->find('heroimg'), $context);
                    $buffer .= $value;
                    $buffer .= ');"';
                }
                $buffer .= '>
';
                // 'heroimgonly' inverted section
                $value = $context->find('heroimgonly');
                if (empty($value)) {
                    
                    // 'herohtml' inverted section
                    $value = $context->find('herohtml');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '      <div class="c-hero-content col-sm-11 col-lg-7 text-center">
';
                        $buffer .= $indent . '
';
                        $buffer .= $indent . '        ';
                        // 'HeroText2' section
                        $value = $context->find('HeroText2');
                        $buffer .= $this->sectionDb0bcc32aa28d0dde43d98649da6842b($context, $indent, $value);
                        $buffer .= '
';
                        $buffer .= $indent . '        ';
                        // 'HeroHeading' section
                        $value = $context->find('HeroHeading');
                        $buffer .= $this->section47955529432531a507a576547a88421d($context, $indent, $value);
                        $buffer .= '
';
                        $buffer .= $indent . '        ';
                        // 'HeroText' section
                        $value = $context->find('HeroText');
                        $buffer .= $this->section4685fbf1f7cf355c9221ba9daf0d9507($context, $indent, $value);
                        $buffer .= '
';
                        $buffer .= $indent . '
';
                        $buffer .= $indent . '        <div class="row mt-5 justify-content-center">
';
                        $buffer .= $indent . '          ';
                        // 'HeroURL' section
                        $value = $context->find('HeroURL');
                        $buffer .= $this->sectionBb67eb67ec394feaa62afb29ccfced61($context, $indent, $value);
                        $buffer .= '
';
                        $buffer .= $indent . '          ';
                        // 'HeroURL2' section
                        $value = $context->find('HeroURL2');
                        $buffer .= $this->sectionF0841df5bffcde3c4666aef68f5df39d($context, $indent, $value);
                        $buffer .= '
';
                        $buffer .= $indent . '        </div>
';
                        $buffer .= $indent . '
';
                        $buffer .= $indent . '      </div>
';
                    }
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '      ';
                    $value = $this->resolveValue($context->find('herohtml'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
                $buffer .= $indent . '
';
                // 'heroimgonly' section
                $value = $context->find('heroimgonly');
                $buffer .= $this->section44e418191f81c4c10ab021d041dc9057($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                // 'herofwenabled' inverted section
                $value = $context->find('herofwenabled');
                if (empty($value)) {
                    
                    // 'heroshadow' section
                    $value = $context->find('heroshadow');
                    $buffer .= $this->section815e54aeacba543840838963c2adf2a2($context, $indent, $value);
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
