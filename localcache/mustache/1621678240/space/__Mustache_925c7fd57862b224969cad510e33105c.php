<?php

class __Mustache_925c7fd57862b224969cad510e33105c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'fpblock11' section
        $value = $context->find('fpblock11');
        $buffer .= $this->section92a09635f9764bf22f175ccf957544f8($context, $indent, $value);

        return $buffer;
    }

    private function sectionDf752567e2d85f33cadd2e78aa2d3970(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="c-special-box-title mt-0">{{{fpblock11title}}}</h3>';
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
                
                $buffer .= '<h3 class="c-special-box-title mt-0">';
                $value = $this->resolveValue($context->find('fpblock11title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ca6009a354cb33d5e49255cf0e7c303(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="lead mb-3"">{{{fpblock11content}}}</div>';
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
                
                $buffer .= '<div class="lead mb-3"">';
                $value = $this->resolveValue($context->find('fpblock11content'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4ebd71c385802d3e7c80d59ff24c8f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="{{fphtmlblock11introclass}} {{^fphtmlblock11introclass}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/fphtmlblock11introclass}}">
  {{#fpblock11title}}<h3 class="c-special-box-title mt-0">{{{fpblock11title}}}</h3>{{/fpblock11title}}
  {{#fpblock11content}}<div class="lead mb-3"">{{{fpblock11content}}}</div>{{/fpblock11content}}
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
                $value = $this->resolveValue($context->find('fphtmlblock11introclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'fphtmlblock11introclass' inverted section
                $value = $context->find('fphtmlblock11introclass');
                if (empty($value)) {
                    
                    $buffer .= 'col-sm-11 col-md-8 col-lg-6 m-auto text-center';
                }
                $buffer .= '">
';
                $buffer .= $indent . '  ';
                // 'fpblock11title' section
                $value = $context->find('fpblock11title');
                $buffer .= $this->sectionDf752567e2d85f33cadd2e78aa2d3970($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  ';
                // 'fpblock11content' section
                $value = $context->find('fpblock11content');
                $buffer .= $this->section0ca6009a354cb33d5e49255cf0e7c303($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa287da3d4644bed7d929020d5fd04bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'courses-slider';
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
                
                $buffer .= 'courses-slider';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32ba221dba1d3d9cf049445b7bac469c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-course-slider-item mb-5">';
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
                
                $buffer .= '<div class="c-course-slider-item mb-5">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb1496a7e2f284527325a40d20bd44dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{fpblock11badge}}}';
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
                
                $value = $this->resolveValue($context->find('fpblock11badge'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section176461eacddcbcd894d03c2618c6868d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{fpblock11url}}">';
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
                $value = $this->resolveValue($context->find('fpblock11url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
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

    private function section9d0783f42679a3e865f05f6d85e648ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="c-course-card-img">
              {{#fpblock11badge}}{{{fpblock11badge}}}{{/fpblock11badge}}
              {{#fpblock11url}}<a href="{{fpblock11url}}">{{/fpblock11url}}<img src="{{{image}}}" alt="{{fpblock11coursetitle}}"/>{{#fpblock11url}}</a>{{/fpblock11url}}
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
                
                $buffer .= $indent . '            <div class="c-course-card-img">
';
                $buffer .= $indent . '              ';
                // 'fpblock11badge' section
                $value = $context->find('fpblock11badge');
                $buffer .= $this->sectionBb1496a7e2f284527325a40d20bd44dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '              ';
                // 'fpblock11url' section
                $value = $context->find('fpblock11url');
                $buffer .= $this->section176461eacddcbcd894d03c2618c6868d($context, $indent, $value);
                $buffer .= '<img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('fpblock11coursetitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/>';
                // 'fpblock11url' section
                $value = $context->find('fpblock11url');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b80658e76d31d7b42ba3b163e984740(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <h4 class="c-course-card-title">
                {{#fpblock11url}}<a href="{{fpblock11url}}">{{/fpblock11url}}{{{fpblock11coursetitle}}}{{#fpblock11url}}</a>{{/fpblock11url}}
              </h4>
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
                
                $buffer .= $indent . '              <h4 class="c-course-card-title">
';
                $buffer .= $indent . '                ';
                // 'fpblock11url' section
                $value = $context->find('fpblock11url');
                $buffer .= $this->section176461eacddcbcd894d03c2618c6868d($context, $indent, $value);
                $value = $this->resolveValue($context->find('fpblock11coursetitle'), $context);
                $buffer .= $value;
                // 'fpblock11url' section
                $value = $context->find('fpblock11url');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '              </h4>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58f6ed6dcb7cfc9d8ad3295377c2714a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-course-card-desc">{{{fpblock11desc}}}</div>';
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
                
                $buffer .= '<div class="c-course-card-desc">';
                $value = $this->resolveValue($context->find('fpblock11desc'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c8015515e366bc886d44cbfc72bd0fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</div>';
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
                
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c33481a7353aea1b8f9eea9c6199633(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
       
      <div class="col-12">
      {{{fpblock11subsectioncontent}}}
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
                
                $buffer .= $indent . '       
';
                $buffer .= $indent . '      <div class="col-12">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('fpblock11subsectioncontent'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe1af6bfcfba4dec7bb08b191ffc43bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{^showfpblock11subsection}}
      {{#fpblock11slider}}<div class="c-course-slider-item mb-5">{{/fpblock11slider}}
        <div class="{{^fpblock11slider}}c-course-card-item--size{{/fpblock11slider}} c-course-card-item">
          <div class="c-course-card" id="block11-{{{fpblock11no}}}">

            {{#image}}
            <div class="c-course-card-img">
              {{#fpblock11badge}}{{{fpblock11badge}}}{{/fpblock11badge}}
              {{#fpblock11url}}<a href="{{fpblock11url}}">{{/fpblock11url}}<img src="{{{image}}}" alt="{{fpblock11coursetitle}}"/>{{#fpblock11url}}</a>{{/fpblock11url}}
            </div>
            {{/image}}

            <div class="c-course-card-content">
              {{#fpblock11coursetitle}}
              <h4 class="c-course-card-title">
                {{#fpblock11url}}<a href="{{fpblock11url}}">{{/fpblock11url}}{{{fpblock11coursetitle}}}{{#fpblock11url}}</a>{{/fpblock11url}}
              </h4>
              {{/fpblock11coursetitle}}
              {{#fpblock11desc}}<div class="c-course-card-desc">{{{fpblock11desc}}}</div>{{/fpblock11desc}}
            </div>
            
          </div>
        </div>
      {{#fpblock11slider}}</div>{{/fpblock11slider}}
      {{/showfpblock11subsection}}

      {{#showfpblock11subsection}}
       
      <div class="col-12">
      {{{fpblock11subsectioncontent}}}
      </div>

      {{/showfpblock11subsection}}    

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
                
                // 'showfpblock11subsection' inverted section
                $value = $context->find('showfpblock11subsection');
                if (empty($value)) {
                    
                    $buffer .= $indent . '      ';
                    // 'fpblock11slider' section
                    $value = $context->find('fpblock11slider');
                    $buffer .= $this->section32ba221dba1d3d9cf049445b7bac469c($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '        <div class="';
                    // 'fpblock11slider' inverted section
                    $value = $context->find('fpblock11slider');
                    if (empty($value)) {
                        
                        $buffer .= 'c-course-card-item--size';
                    }
                    $buffer .= ' c-course-card-item">
';
                    $buffer .= $indent . '          <div class="c-course-card" id="block11-';
                    $value = $this->resolveValue($context->find('fpblock11no'), $context);
                    $buffer .= $value;
                    $buffer .= '">
';
                    $buffer .= $indent . '
';
                    // 'image' section
                    $value = $context->find('image');
                    $buffer .= $this->section9d0783f42679a3e865f05f6d85e648ab($context, $indent, $value);
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '            <div class="c-course-card-content">
';
                    // 'fpblock11coursetitle' section
                    $value = $context->find('fpblock11coursetitle');
                    $buffer .= $this->section3b80658e76d31d7b42ba3b163e984740($context, $indent, $value);
                    $buffer .= $indent . '              ';
                    // 'fpblock11desc' section
                    $value = $context->find('fpblock11desc');
                    $buffer .= $this->section58f6ed6dcb7cfc9d8ad3295377c2714a($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '            </div>
';
                    $buffer .= $indent . '            
';
                    $buffer .= $indent . '          </div>
';
                    $buffer .= $indent . '        </div>
';
                    $buffer .= $indent . '      ';
                    // 'fpblock11slider' section
                    $value = $context->find('fpblock11slider');
                    $buffer .= $this->section9c8015515e366bc886d44cbfc72bd0fd($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '
';
                // 'showfpblock11subsection' section
                $value = $context->find('showfpblock11subsection');
                $buffer .= $this->section2c33481a7353aea1b8f9eea9c6199633($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE0594890a16761cee05b3e9ca46701d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-block11-footer-content w-100">{{{block11footercontent}}}</div>';
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
                
                $buffer .= '<div class="c-block11-footer-content w-100">';
                $value = $this->resolveValue($context->find('block11footercontent'), $context);
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

    private function section531fe04ed24e334f183c1b94533d76c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script>
  var slider = tns({
    container: \'.courses-slider\',
    items: 1,
    slideBy: 1,
    mouseDrag: true,
    controlsText: [\'<i class="fas fa-chevron-left"></i>\', \'<i class="fas fa-chevron-right"></i>\'],
    loop: false,
    controls: true,
    responsive: {
      768: {
        items: 2,
        slideBy: 2,
      },
      1000: {
        items: 3,
        slideBy: 3,
      },
      1200: {
        items: {{fpblock11slidesperrow}},
        slideBy: {{fpblock11slidesperrow}},
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
                $buffer .= $indent . '    container: \'.courses-slider\',
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
                $buffer .= $indent . '      768: {
';
                $buffer .= $indent . '        items: 2,
';
                $buffer .= $indent . '        slideBy: 2,
';
                $buffer .= $indent . '      },
';
                $buffer .= $indent . '      1000: {
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
                $value = $this->resolveValue($context->find('fpblock11slidesperrow'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',
';
                $buffer .= $indent . '        slideBy: ';
                $value = $this->resolveValue($context->find('fpblock11slidesperrow'), $context);
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

    private function section92a09635f9764bf22f175ccf957544f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="block11" class="s-block-11 l-container s-special-box section-padding row no-gutters justify-content-sm-center justify-content-lg-between">

  {{#showfpblock11intro}}
  <div class="{{fphtmlblock11introclass}} {{^fphtmlblock11introclass}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/fphtmlblock11introclass}}">
  {{#fpblock11title}}<h3 class="c-special-box-title mt-0">{{{fpblock11title}}}</h3>{{/fpblock11title}}
  {{#fpblock11content}}<div class="lead mb-3"">{{{fpblock11content}}}</div>{{/fpblock11content}}
  </div>
  {{/showfpblock11intro}}

  <div class="{{#fpblock11slider}}courses-slider{{/fpblock11slider}} {{^fpblock11slider}} col-12 row no-gutters justify-content-sm-center justify-content-md-start{{/fpblock11slider}} c-course-container m-t-5 px-0 py-0">

    {{#block11}}
      {{^showfpblock11subsection}}
      {{#fpblock11slider}}<div class="c-course-slider-item mb-5">{{/fpblock11slider}}
        <div class="{{^fpblock11slider}}c-course-card-item--size{{/fpblock11slider}} c-course-card-item">
          <div class="c-course-card" id="block11-{{{fpblock11no}}}">

            {{#image}}
            <div class="c-course-card-img">
              {{#fpblock11badge}}{{{fpblock11badge}}}{{/fpblock11badge}}
              {{#fpblock11url}}<a href="{{fpblock11url}}">{{/fpblock11url}}<img src="{{{image}}}" alt="{{fpblock11coursetitle}}"/>{{#fpblock11url}}</a>{{/fpblock11url}}
            </div>
            {{/image}}

            <div class="c-course-card-content">
              {{#fpblock11coursetitle}}
              <h4 class="c-course-card-title">
                {{#fpblock11url}}<a href="{{fpblock11url}}">{{/fpblock11url}}{{{fpblock11coursetitle}}}{{#fpblock11url}}</a>{{/fpblock11url}}
              </h4>
              {{/fpblock11coursetitle}}
              {{#fpblock11desc}}<div class="c-course-card-desc">{{{fpblock11desc}}}</div>{{/fpblock11desc}}
            </div>
            
          </div>
        </div>
      {{#fpblock11slider}}</div>{{/fpblock11slider}}
      {{/showfpblock11subsection}}

      {{#showfpblock11subsection}}
       
      <div class="col-12">
      {{{fpblock11subsectioncontent}}}
      </div>

      {{/showfpblock11subsection}}    

    {{/block11}}

  </div><!-- Courses list end -->

    {{#block11footercontent}}<div class="c-block11-footer-content w-100">{{{block11footercontent}}}</div>{{/block11footercontent}}

</div>
{{#showfpblock11hr}}<hr class="hr my-0" />{{/showfpblock11hr}}

{{#fpblock11slider}}
<script>
  var slider = tns({
    container: \'.courses-slider\',
    items: 1,
    slideBy: 1,
    mouseDrag: true,
    controlsText: [\'<i class="fas fa-chevron-left"></i>\', \'<i class="fas fa-chevron-right"></i>\'],
    loop: false,
    controls: true,
    responsive: {
      768: {
        items: 2,
        slideBy: 2,
      },
      1000: {
        items: 3,
        slideBy: 3,
      },
      1200: {
        items: {{fpblock11slidesperrow}},
        slideBy: {{fpblock11slidesperrow}},
      }
    }
  });
</script>
{{/fpblock11slider}}

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
                
                $buffer .= $indent . '<div id="block11" class="s-block-11 l-container s-special-box section-padding row no-gutters justify-content-sm-center justify-content-lg-between">
';
                $buffer .= $indent . '
';
                // 'showfpblock11intro' section
                $value = $context->find('showfpblock11intro');
                $buffer .= $this->sectionF4ebd71c385802d3e7c80d59ff24c8f8($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="';
                // 'fpblock11slider' section
                $value = $context->find('fpblock11slider');
                $buffer .= $this->sectionDa287da3d4644bed7d929020d5fd04bd($context, $indent, $value);
                $buffer .= ' ';
                // 'fpblock11slider' inverted section
                $value = $context->find('fpblock11slider');
                if (empty($value)) {
                    
                    $buffer .= ' col-12 row no-gutters justify-content-sm-center justify-content-md-start';
                }
                $buffer .= ' c-course-container m-t-5 px-0 py-0">
';
                $buffer .= $indent . '
';
                // 'block11' section
                $value = $context->find('block11');
                $buffer .= $this->sectionCe1af6bfcfba4dec7bb08b191ffc43bb($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '  </div><!-- Courses list end -->
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    ';
                // 'block11footercontent' section
                $value = $context->find('block11footercontent');
                $buffer .= $this->sectionE0594890a16761cee05b3e9ca46701d5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                // 'showfpblock11hr' section
                $value = $context->find('showfpblock11hr');
                $buffer .= $this->sectionC34334deba208991c83e2ca655363fa0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                // 'fpblock11slider' section
                $value = $context->find('fpblock11slider');
                $buffer .= $this->section531fe04ed24e334f183c1b94533d76c7($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
