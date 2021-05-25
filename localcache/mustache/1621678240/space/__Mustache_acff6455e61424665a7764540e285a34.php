<?php

class __Mustache_acff6455e61424665a7764540e285a34 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'FPLogos' section
        $value = $context->find('FPLogos');
        $buffer .= $this->sectionA24279140a3f56169e5a89e71adf3d22($context, $indent, $value);

        return $buffer;
    }

    private function section1c681d36a684def7f67c5d68fb12e64a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4 class="c-special-box-subtitle">{{{FPLogosSubHeading}}}</h4>';
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
                $value = $this->resolveValue($context->find('FPLogosSubHeading'), $context);
                $buffer .= $value;
                $buffer .= '</h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3bb1be8985846c31008fee850709a54(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="c-special-box-title">{{{FPLogosHeading}}}</h3>';
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
                $value = $this->resolveValue($context->find('FPLogosHeading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd78d88a148e3c86450780e6b5f6e140(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="lead mb-3">{{{FPLogosText}}}</div>';
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
                $value = $this->resolveValue($context->find('FPLogosText'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fbbc99bafb72fe4dd438103461dd81e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="{{FPLogosIntroProperties}} {{^FPLogosIntroProperties}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/FPLogosIntroProperties}}">
      {{#FPLogosSubHeading}}<h4 class="c-special-box-subtitle">{{{FPLogosSubHeading}}}</h4>{{/FPLogosSubHeading}}
      {{#FPLogosHeading}}<h3 class="c-special-box-title">{{{FPLogosHeading}}}</h3>{{/FPLogosHeading}}
      {{#FPLogosText}}<div class="lead mb-3">{{{FPLogosText}}}</div>{{/FPLogosText}}
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
                
                $buffer .= $indent . '    <div class="';
                $value = $this->resolveValue($context->find('FPLogosIntroProperties'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'FPLogosIntroProperties' inverted section
                $value = $context->find('FPLogosIntroProperties');
                if (empty($value)) {
                    
                    $buffer .= 'col-sm-11 col-md-8 col-lg-6 m-auto text-center';
                }
                $buffer .= '">
';
                $buffer .= $indent . '      ';
                // 'FPLogosSubHeading' section
                $value = $context->find('FPLogosSubHeading');
                $buffer .= $this->section1c681d36a684def7f67c5d68fb12e64a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'FPLogosHeading' section
                $value = $context->find('FPLogosHeading');
                $buffer .= $this->sectionC3bb1be8985846c31008fee850709a54($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'FPLogosText' section
                $value = $context->find('FPLogosText');
                $buffer .= $this->sectionBd78d88a148e3c86450780e6b5f6e140($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF41ccd7007a5834f183544caee57ac51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'logos-slider pb-5';
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
                
                $buffer .= 'logos-slider pb-5';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6d4ff12dbc6d33a2264cfbb5d732d4f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{logosurl}}" target="_blank">';
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
                $value = $this->resolveValue($context->find('logosurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf1a549f981409363ac34cbd589e6791(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img src="{{{image}}}" alt="{{logosname}}" class="c-logos-img"/>';
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
                $value = $this->resolveValue($context->find('logosname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="c-logos-img"/>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ae39e3dce9945d5872a2a828daa4528(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</a>';
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
                
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c68d9b13dd0a1432745a51d0c059396(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="c-logos-item col-sm-6 {{logosno}} text-center p-3 my-2">
          {{#logosurl}}<a href="{{logosurl}}" target="_blank">{{/logosurl}}
              {{#image}}<img src="{{{image}}}" alt="{{logosname}}" class="c-logos-img"/>{{/image}}
          {{#logosurl}}</a>{{/logosurl}}
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
                
                $buffer .= $indent . '      <div class="c-logos-item col-sm-6 ';
                $value = $this->resolveValue($context->find('logosno'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' text-center p-3 my-2">
';
                $buffer .= $indent . '          ';
                // 'logosurl' section
                $value = $context->find('logosurl');
                $buffer .= $this->sectionE6d4ff12dbc6d33a2264cfbb5d732d4f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '              ';
                // 'image' section
                $value = $context->find('image');
                $buffer .= $this->sectionEf1a549f981409363ac34cbd589e6791($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          ';
                // 'logosurl' section
                $value = $context->find('logosurl');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ad65fd45b752693dd9f967d57bf45b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-logos-footer-content w-100 mt-4">{{{FPLogosFooterContent}}}</div>';
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
                
                $buffer .= '<div class="c-logos-footer-content w-100 mt-4">';
                $value = $this->resolveValue($context->find('FPLogosFooterContent'), $context);
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

    private function section225dfd01cf4d7e79537815085dc88716(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script>
  var slider = tns({
    container: \'.logos-slider\',
    items: 1,
    slideBy: 1,
    mouseDrag: true,
    controlsText: [\'<i class="fas fa-chevron-left"></i>\', \'<i class="fas fa-chevron-right"></i>\'],
    loop: false,
    controls: true,
    responsive: {
      600: {
        items: 3,
        slideBy: 3,
      },
      1200: {
        items: {{logosslidesperrow}},
        slideBy: {{logosslidesperrow}},
      }
    }
  });
</script>
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
                
                $buffer .= $indent . '<script>
';
                $buffer .= $indent . '  var slider = tns({
';
                $buffer .= $indent . '    container: \'.logos-slider\',
';
                $buffer .= $indent . '    items: 1,
';
                $buffer .= $indent . '    slideBy: 1,
';
                $buffer .= $indent . '    mouseDrag: true,
';
                $buffer .= $indent . '    controlsText: [\'<i class="fas fa-chevron-left"></i>\', \'<i class="fas fa-chevron-right"></i>\'],
';
                $buffer .= $indent . '    loop: false,
';
                $buffer .= $indent . '    controls: true,
';
                $buffer .= $indent . '    responsive: {
';
                $buffer .= $indent . '      600: {
';
                $buffer .= $indent . '        items: 3,
';
                $buffer .= $indent . '        slideBy: 3,
';
                $buffer .= $indent . '      },
';
                $buffer .= $indent . '      1200: {
';
                $buffer .= $indent . '        items: ';
                $value = $this->resolveValue($context->find('logosslidesperrow'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',
';
                $buffer .= $indent . '        slideBy: ';
                $value = $this->resolveValue($context->find('logosslidesperrow'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',
';
                $buffer .= $indent . '      }
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '</script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA24279140a3f56169e5a89e71adf3d22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="logosBlock" class="s-logos">

  <div class="s-block-7 l-container s-special-box row section-padding no-gutters justify-content-center align-items-center">
    {{#ShowFPLogosIntro}}
    <div class="{{FPLogosIntroProperties}} {{^FPLogosIntroProperties}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/FPLogosIntroProperties}}">
      {{#FPLogosSubHeading}}<h4 class="c-special-box-subtitle">{{{FPLogosSubHeading}}}</h4>{{/FPLogosSubHeading}}
      {{#FPLogosHeading}}<h3 class="c-special-box-title">{{{FPLogosHeading}}}</h3>{{/FPLogosHeading}}
      {{#FPLogosText}}<div class="lead mb-3">{{{FPLogosText}}}</div>{{/FPLogosText}}
    </div>
    {{/ShowFPLogosIntro}}
    <div class="{{#logosslider}}logos-slider pb-5{{/logosslider}} {{^logosslider}}col-12 row justify-content-center align-items-center{{/logosslider}} text-center mt-4">
      {{#logos}}
      <div class="c-logos-item col-sm-6 {{logosno}} text-center p-3 my-2">
          {{#logosurl}}<a href="{{logosurl}}" target="_blank">{{/logosurl}}
              {{#image}}<img src="{{{image}}}" alt="{{logosname}}" class="c-logos-img"/>{{/image}}
          {{#logosurl}}</a>{{/logosurl}}
      </div>
      {{/logos}}
    </div>

    {{#FPLogosFooterContent}}<div class="c-logos-footer-content w-100 mt-4">{{{FPLogosFooterContent}}}</div>{{/FPLogosFooterContent}}

  </div>
</div>
{{#showfpblock7hr}}<hr class="hr my-0" />{{/showfpblock7hr}}

{{#logosslider}}
<script>
  var slider = tns({
    container: \'.logos-slider\',
    items: 1,
    slideBy: 1,
    mouseDrag: true,
    controlsText: [\'<i class="fas fa-chevron-left"></i>\', \'<i class="fas fa-chevron-right"></i>\'],
    loop: false,
    controls: true,
    responsive: {
      600: {
        items: 3,
        slideBy: 3,
      },
      1200: {
        items: {{logosslidesperrow}},
        slideBy: {{logosslidesperrow}},
      }
    }
  });
</script>
{{/logosslider}}

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
                
                $buffer .= $indent . '<div id="logosBlock" class="s-logos">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="s-block-7 l-container s-special-box row section-padding no-gutters justify-content-center align-items-center">
';
                // 'ShowFPLogosIntro' section
                $value = $context->find('ShowFPLogosIntro');
                $buffer .= $this->section4fbbc99bafb72fe4dd438103461dd81e($context, $indent, $value);
                $buffer .= $indent . '    <div class="';
                // 'logosslider' section
                $value = $context->find('logosslider');
                $buffer .= $this->sectionF41ccd7007a5834f183544caee57ac51($context, $indent, $value);
                $buffer .= ' ';
                // 'logosslider' inverted section
                $value = $context->find('logosslider');
                if (empty($value)) {
                    
                    $buffer .= 'col-12 row justify-content-center align-items-center';
                }
                $buffer .= ' text-center mt-4">
';
                // 'logos' section
                $value = $context->find('logos');
                $buffer .= $this->section6c68d9b13dd0a1432745a51d0c059396($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    ';
                // 'FPLogosFooterContent' section
                $value = $context->find('FPLogosFooterContent');
                $buffer .= $this->section9ad65fd45b752693dd9f967d57bf45b4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '</div>
';
                // 'showfpblock7hr' section
                $value = $context->find('showfpblock7hr');
                $buffer .= $this->sectionC34334deba208991c83e2ca655363fa0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                // 'logosslider' section
                $value = $context->find('logosslider');
                $buffer .= $this->section225dfd01cf4d7e79537815085dc88716($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
