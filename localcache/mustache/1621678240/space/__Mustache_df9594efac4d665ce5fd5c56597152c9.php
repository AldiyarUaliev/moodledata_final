<?php

class __Mustache_df9594efac4d665ce5fd5c56597152c9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'fpblock12' section
        $value = $context->find('fpblock12');
        $buffer .= $this->sectionA8ff26691684a32e193f2c755547dd49($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section48b76f6988e5c005b0e727450d1ce4a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="c-special-box-title mt-0">{{{fpblock12title}}}</h3>';
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
                $value = $this->resolveValue($context->find('fpblock12title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19f012dc145fd5b03c281619f9f2b2ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="lead mb-3"">{{{fpblock12content}}}</div>';
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
                $value = $this->resolveValue($context->find('fpblock12content'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section684411da0f79dc97d021744d659773cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="{{fpblock12introclass}} {{^fpblock12introclass}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/fpblock12introclass}}">
    {{#fpblock12title}}<h3 class="c-special-box-title mt-0">{{{fpblock12title}}}</h3>{{/fpblock12title}}
    {{#fpblock12content}}<div class="lead mb-3"">{{{fpblock12content}}}</div>{{/fpblock12content}}
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
                $value = $this->resolveValue($context->find('fpblock12introclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'fpblock12introclass' inverted section
                $value = $context->find('fpblock12introclass');
                if (empty($value)) {
                    
                    $buffer .= 'col-sm-11 col-md-8 col-lg-6 m-auto text-center';
                }
                $buffer .= '">
';
                $buffer .= $indent . '    ';
                // 'fpblock12title' section
                $value = $context->find('fpblock12title');
                $buffer .= $this->section48b76f6988e5c005b0e727450d1ce4a2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    ';
                // 'fpblock12content' section
                $value = $context->find('fpblock12content');
                $buffer .= $this->section19f012dc145fd5b03c281619f9f2b2ef($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a86ac6e9428d54bc8d3fc59df8f501f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'masonry w-100';
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
                
                $buffer .= 'masonry w-100';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cacdd4fc2111e2140c70855d05a0322(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'brick';
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
                
                $buffer .= 'brick';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69fc5d5cd623376e868162e68bbea8b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-testimonials-html">{{{fpblock12html}}}</div>';
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
                
                $buffer .= '<div class="c-testimonials-html">';
                $value = $this->resolveValue($context->find('fpblock12html'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d889c204d6e6f93cfb49dc29f83c58b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-testimonials-content">{{{fpblock12first}}}</div>';
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
                
                $buffer .= '<div class="c-testimonials-content">';
                $value = $this->resolveValue($context->find('fpblock12first'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section596e6b6fd24157a64a9b5dabd243d5f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-testimonials-img-box"><img src="{{{image}}}" alt="" class="c-testimonials-img"/></div>';
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
                
                $buffer .= '<div class="c-testimonials-img-box"><img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= $value;
                $buffer .= '" alt="" class="c-testimonials-img"/></div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6aeb97124c64abcab5564d136d58c70a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-testimonials-author d-block">{{{fpblock12second}}}</div>';
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
                
                $buffer .= '<div class="c-testimonials-author d-block">';
                $value = $this->resolveValue($context->find('fpblock12second'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7710c1a735817e111baeb4138e95d35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-testimonials-source d-block">{{{fpblock12third}}}</div>';
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
                
                $buffer .= '<div class="c-testimonials-source d-block">';
                $value = $this->resolveValue($context->find('fpblock12third'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbe4e1afb8f2a6725540a8e2456c48ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="{{#fpblock12grid}}brick{{/fpblock12grid}}">
        <div class="c-testimonials-item">

              {{#fpblock12html}}<div class="c-testimonials-html">{{{fpblock12html}}}</div>{{/fpblock12html}}
              {{#fpblock12first}}<div class="c-testimonials-content">{{{fpblock12first}}}</div>{{/fpblock12first}}
              
              <div class="d-inline-flex align-items-center">
                <div class="d-inline-flex">
                  {{#image}}<div class="c-testimonials-img-box"><img src="{{{image}}}" alt="" class="c-testimonials-img"/></div>{{/image}}
                </div>

                <div>
                  {{#fpblock12second}}<div class="c-testimonials-author d-block">{{{fpblock12second}}}</div>{{/fpblock12second}}
                  {{#fpblock12third}}<div class="c-testimonials-source d-block">{{{fpblock12third}}}</div>{{/fpblock12third}}
                </div>
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
                
                $buffer .= $indent . '      <div class="';
                // 'fpblock12grid' section
                $value = $context->find('fpblock12grid');
                $buffer .= $this->section6cacdd4fc2111e2140c70855d05a0322($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <div class="c-testimonials-item">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              ';
                // 'fpblock12html' section
                $value = $context->find('fpblock12html');
                $buffer .= $this->section69fc5d5cd623376e868162e68bbea8b3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '              ';
                // 'fpblock12first' section
                $value = $context->find('fpblock12first');
                $buffer .= $this->section3d889c204d6e6f93cfb49dc29f83c58b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '              
';
                $buffer .= $indent . '              <div class="d-inline-flex align-items-center">
';
                $buffer .= $indent . '                <div class="d-inline-flex">
';
                $buffer .= $indent . '                  ';
                // 'image' section
                $value = $context->find('image');
                $buffer .= $this->section596e6b6fd24157a64a9b5dabd243d5f4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div>
';
                $buffer .= $indent . '                  ';
                // 'fpblock12second' section
                $value = $context->find('fpblock12second');
                $buffer .= $this->section6aeb97124c64abcab5564d136d58c70a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                  ';
                // 'fpblock12third' section
                $value = $context->find('fpblock12third');
                $buffer .= $this->sectionA7710c1a735817e111baeb4138e95d35($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a49fc8ddd7da0207f9c2c5a2fcd0be6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-block12-footer-content w-100 mt-4">{{{block12footercontent}}}</div>';
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
                
                $buffer .= '<div class="c-block12-footer-content w-100 mt-4">';
                $value = $this->resolveValue($context->find('block12footercontent'), $context);
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

    private function sectionA8ff26691684a32e193f2c755547dd49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="block12" class="s-block-12 l-container s-special-box section-padding row no-gutters justify-content-sm-center justify-content-lg-between">

  {{#showfpblock12intro}}
  <div class="{{fpblock12introclass}} {{^fpblock12introclass}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/fpblock12introclass}}">
    {{#fpblock12title}}<h3 class="c-special-box-title mt-0">{{{fpblock12title}}}</h3>{{/fpblock12title}}
    {{#fpblock12content}}<div class="lead mb-3"">{{{fpblock12content}}}</div>{{/fpblock12content}}
  </div>
  {{/showfpblock12intro}}

  <div class="c-testimonials-item-grid mt-5 py-0 row col-12 no-gutters justify-content-sm-center justify-content-md-start">

    <div class="{{^fpblock12grid}}testimonials-slider{{/fpblock12grid}} c-testimonials-item-grid-content {{#fpblock12grid}}masonry w-100{{/fpblock12grid}} d-block position-relative">
      {{#block12}}
      <div class="{{#fpblock12grid}}brick{{/fpblock12grid}}">
        <div class="c-testimonials-item">

              {{#fpblock12html}}<div class="c-testimonials-html">{{{fpblock12html}}}</div>{{/fpblock12html}}
              {{#fpblock12first}}<div class="c-testimonials-content">{{{fpblock12first}}}</div>{{/fpblock12first}}
              
              <div class="d-inline-flex align-items-center">
                <div class="d-inline-flex">
                  {{#image}}<div class="c-testimonials-img-box"><img src="{{{image}}}" alt="" class="c-testimonials-img"/></div>{{/image}}
                </div>

                <div>
                  {{#fpblock12second}}<div class="c-testimonials-author d-block">{{{fpblock12second}}}</div>{{/fpblock12second}}
                  {{#fpblock12third}}<div class="c-testimonials-source d-block">{{{fpblock12third}}}</div>{{/fpblock12third}}
                </div>
              </div>

        </div>
      </div>
      {{/block12}}
    </div>
  </div><!-- Courses list end -->

  {{#block12footercontent}}<div class="c-block12-footer-content w-100 mt-4">{{{block12footercontent}}}</div>{{/block12footercontent}}

</div>
{{#showfpblock12hr}}<hr class="hr my-0" />{{/showfpblock12hr}}

{{^fpblock12grid}}
<script>
  var slider = tns({
    container: \'.testimonials-slider\',
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
      1200: {
        items: {{fpblock12slidesperrow}},
        slideBy: {{fpblock12slidesperrow}},
      }
    }
  });
</script>
{{/fpblock12grid}}

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
                
                $buffer .= $indent . '<div id="block12" class="s-block-12 l-container s-special-box section-padding row no-gutters justify-content-sm-center justify-content-lg-between">
';
                $buffer .= $indent . '
';
                // 'showfpblock12intro' section
                $value = $context->find('showfpblock12intro');
                $buffer .= $this->section684411da0f79dc97d021744d659773cd($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="c-testimonials-item-grid mt-5 py-0 row col-12 no-gutters justify-content-sm-center justify-content-md-start">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="';
                // 'fpblock12grid' inverted section
                $value = $context->find('fpblock12grid');
                if (empty($value)) {
                    
                    $buffer .= 'testimonials-slider';
                }
                $buffer .= ' c-testimonials-item-grid-content ';
                // 'fpblock12grid' section
                $value = $context->find('fpblock12grid');
                $buffer .= $this->section1a86ac6e9428d54bc8d3fc59df8f501f($context, $indent, $value);
                $buffer .= ' d-block position-relative">
';
                // 'block12' section
                $value = $context->find('block12');
                $buffer .= $this->sectionAbe4e1afb8f2a6725540a8e2456c48ac($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  </div><!-- Courses list end -->
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  ';
                // 'block12footercontent' section
                $value = $context->find('block12footercontent');
                $buffer .= $this->section9a49fc8ddd7da0207f9c2c5a2fcd0be6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                // 'showfpblock12hr' section
                $value = $context->find('showfpblock12hr');
                $buffer .= $this->sectionC34334deba208991c83e2ca655363fa0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                // 'fpblock12grid' inverted section
                $value = $context->find('fpblock12grid');
                if (empty($value)) {
                    
                    $buffer .= $indent . '<script>
';
                    $buffer .= $indent . '  var slider = tns({
';
                    $buffer .= $indent . '    container: \'.testimonials-slider\',
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
                    $buffer .= $indent . '      1200: {
';
                    $buffer .= $indent . '        items: ';
                    $value = $this->resolveValue($context->find('fpblock12slidesperrow'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= ',
';
                    $buffer .= $indent . '        slideBy: ';
                    $value = $this->resolveValue($context->find('fpblock12slidesperrow'), $context);
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
                }
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
