<?php

class __Mustache_2b9814713bead05b7408909e28cfc369 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'sliderenabled' section
        $value = $context->find('sliderenabled');
        $buffer .= $this->sectionCa84c102d8924b871e683f13edc680f7($context, $indent, $value);

        return $buffer;
    }

    private function section64a6dcb9a66d14662e1f97bcda114d16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'c-hero-container--fw';
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
                
                $buffer .= 'c-hero-container--fw';
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

    private function section8b807323f185a44e011ea29f75071c1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{url}}">';
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
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fc43ea6ac8cfb85251cb89160a387d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h5 class="h5">{{{ subtitle }}}</h5>';
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
                $value = $this->resolveValue($context->find('subtitle'), $context);
                $buffer .= $value;
                $buffer .= '</h5>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section417e8253bb02ad86dd85634f1f62fab5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="h1">{{{ title }}}</h3>';
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
                
                $buffer .= '<h3 class="h1">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a835dc136e6f48a92074c2759a086b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="h3">{{{ caption }}}</div>';
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
                
                $buffer .= '<div class="h3">';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
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

    private function section77765956cd823323d4f061f50b829a23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="c-hero-slider-item">
        {{#sliderclickable}}<a href="{{url}}">{{/sliderclickable}}

          {{^sliderhtml}}
          <div class="c-hero-content">
            {{#subtitle}}<h5 class="h5">{{{ subtitle }}}</h5>{{/subtitle}}
            {{#title}}<h3 class="h1">{{{ title }}}</h3>{{/title}}
            {{#caption}}<div class="h3">{{{ caption }}}</div>{{/caption}}
          </div>
          {{/sliderhtml}}

          {{{ sliderhtml }}}

          <img src="{{{ image }}}" alt="" class="c-hero-img w-100 d-inline" />

        {{#sliderclickable}}</a>{{/sliderclickable}}
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
                
                $buffer .= $indent . '        <div class="c-hero-slider-item">
';
                $buffer .= $indent . '        ';
                // 'sliderclickable' section
                $value = $context->find('sliderclickable');
                $buffer .= $this->section8b807323f185a44e011ea29f75071c1f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                // 'sliderhtml' inverted section
                $value = $context->find('sliderhtml');
                if (empty($value)) {
                    
                    $buffer .= $indent . '          <div class="c-hero-content">
';
                    $buffer .= $indent . '            ';
                    // 'subtitle' section
                    $value = $context->find('subtitle');
                    $buffer .= $this->section4fc43ea6ac8cfb85251cb89160a387d9($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '            ';
                    // 'title' section
                    $value = $context->find('title');
                    $buffer .= $this->section417e8253bb02ad86dd85634f1f62fab5($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '            ';
                    // 'caption' section
                    $value = $context->find('caption');
                    $buffer .= $this->section1a835dc136e6f48a92074c2759a086b0($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '          </div>
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '          ';
                $value = $this->resolveValue($context->find('sliderhtml'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '          <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= $value;
                $buffer .= '" alt="" class="c-hero-img w-100 d-inline" />
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        ';
                // 'sliderclickable' section
                $value = $context->find('sliderclickable');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0259252ebf49d794bc1452cc0001a1ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'height: {{slideheight}};';
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
                
                $buffer .= 'height: ';
                $value = $this->resolveValue($context->find('slideheight'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ';';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9821401547af2e0a7ba37eb1ab56b8fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

        {{#imgslidesonly}}
        <div class="c-hero-slider-item">
        {{#sliderclickable}}<a href="{{url}}">{{/sliderclickable}}

          {{^sliderhtml}}
          <div class="c-hero-content">
            {{#subtitle}}<h5 class="h5">{{{ subtitle }}}</h5>{{/subtitle}}
            {{#title}}<h3 class="h1">{{{ title }}}</h3>{{/title}}
            {{#caption}}<div class="h3">{{{ caption }}}</div>{{/caption}}
          </div>
          {{/sliderhtml}}

          {{{ sliderhtml }}}

          <img src="{{{ image }}}" alt="" class="c-hero-img w-100 d-inline" />

        {{#sliderclickable}}</a>{{/sliderclickable}}
        </div>
        {{/imgslidesonly}}

        {{^imgslidesonly}}
        <div class="c-hero-slider-item c-hero-slider-item--h" style="background-image: url({{{ image }}}); {{#slideheight}}height: {{slideheight}};{{/slideheight}}">
        {{#sliderclickable}}<a href="{{url}}">{{/sliderclickable}}

          {{^sliderhtml}}
          <div class="c-hero-content">
            {{#subtitle}}<h5 class="h5">{{{ subtitle }}}</h5>{{/subtitle}}
            {{#title}}<h3 class="h1">{{{ title }}}</h3>{{/title}}
            {{#caption}}<div class="h3">{{{ caption }}}</div>{{/caption}}
          </div>
          {{/sliderhtml}}

          {{{ sliderhtml }}}

          <img src="{{{ image }}}" alt="" class="c-hero-img w-100 d-sm-none d-md-inline" />

        {{#sliderclickable}}</a>{{/sliderclickable}}
        </div>
        {{/imgslidesonly}}

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
                // 'imgslidesonly' section
                $value = $context->find('imgslidesonly');
                $buffer .= $this->section77765956cd823323d4f061f50b829a23($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'imgslidesonly' inverted section
                $value = $context->find('imgslidesonly');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <div class="c-hero-slider-item c-hero-slider-item--h" style="background-image: url(';
                    $value = $this->resolveValue($context->find('image'), $context);
                    $buffer .= $value;
                    $buffer .= '); ';
                    // 'slideheight' section
                    $value = $context->find('slideheight');
                    $buffer .= $this->section0259252ebf49d794bc1452cc0001a1ba($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '        ';
                    // 'sliderclickable' section
                    $value = $context->find('sliderclickable');
                    $buffer .= $this->section8b807323f185a44e011ea29f75071c1f($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '
';
                    // 'sliderhtml' inverted section
                    $value = $context->find('sliderhtml');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '          <div class="c-hero-content">
';
                        $buffer .= $indent . '            ';
                        // 'subtitle' section
                        $value = $context->find('subtitle');
                        $buffer .= $this->section4fc43ea6ac8cfb85251cb89160a387d9($context, $indent, $value);
                        $buffer .= '
';
                        $buffer .= $indent . '            ';
                        // 'title' section
                        $value = $context->find('title');
                        $buffer .= $this->section417e8253bb02ad86dd85634f1f62fab5($context, $indent, $value);
                        $buffer .= '
';
                        $buffer .= $indent . '            ';
                        // 'caption' section
                        $value = $context->find('caption');
                        $buffer .= $this->section1a835dc136e6f48a92074c2759a086b0($context, $indent, $value);
                        $buffer .= '
';
                        $buffer .= $indent . '          </div>
';
                    }
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '          ';
                    $value = $this->resolveValue($context->find('sliderhtml'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '          <img src="';
                    $value = $this->resolveValue($context->find('image'), $context);
                    $buffer .= $value;
                    $buffer .= '" alt="" class="c-hero-img w-100 d-sm-none d-md-inline" />
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '        ';
                    // 'sliderclickable' section
                    $value = $context->find('sliderclickable');
                    $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '        </div>
';
                }
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90883c720fddd292bffb94f16f8db69f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loop: true,';
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
                
                $buffer .= 'loop: true,';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8bd6db44801dc4eb75fc9f4a6d1a3855(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'autoplayButtonOutput: false, autoplay: true, autoplayTimeout: {{sliderinterval}},';
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
                
                $buffer .= 'autoplayButtonOutput: false, autoplay: true, autoplayTimeout: ';
                $value = $this->resolveValue($context->find('sliderinterval'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa84c102d8924b871e683f13edc680f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="heroSlider" class="c-heroimg c-hero-slider {{#sliderfwenabled}}c-hero-container--fw{{/sliderfwenabled}} {{#heroboxshadow}}c-hero-box-shadow {{heroshadowstyle}}{{/heroboxshadow}}">

  <div class="c-hero-container">

      <div class="hero-slider">
      {{#slides}}

        {{#imgslidesonly}}
        <div class="c-hero-slider-item">
        {{#sliderclickable}}<a href="{{url}}">{{/sliderclickable}}

          {{^sliderhtml}}
          <div class="c-hero-content">
            {{#subtitle}}<h5 class="h5">{{{ subtitle }}}</h5>{{/subtitle}}
            {{#title}}<h3 class="h1">{{{ title }}}</h3>{{/title}}
            {{#caption}}<div class="h3">{{{ caption }}}</div>{{/caption}}
          </div>
          {{/sliderhtml}}

          {{{ sliderhtml }}}

          <img src="{{{ image }}}" alt="" class="c-hero-img w-100 d-inline" />

        {{#sliderclickable}}</a>{{/sliderclickable}}
        </div>
        {{/imgslidesonly}}

        {{^imgslidesonly}}
        <div class="c-hero-slider-item c-hero-slider-item--h" style="background-image: url({{{ image }}}); {{#slideheight}}height: {{slideheight}};{{/slideheight}}">
        {{#sliderclickable}}<a href="{{url}}">{{/sliderclickable}}

          {{^sliderhtml}}
          <div class="c-hero-content">
            {{#subtitle}}<h5 class="h5">{{{ subtitle }}}</h5>{{/subtitle}}
            {{#title}}<h3 class="h1">{{{ title }}}</h3>{{/title}}
            {{#caption}}<div class="h3">{{{ caption }}}</div>{{/caption}}
          </div>
          {{/sliderhtml}}

          {{{ sliderhtml }}}

          <img src="{{{ image }}}" alt="" class="c-hero-img w-100 d-sm-none d-md-inline" />

        {{#sliderclickable}}</a>{{/sliderclickable}}
        </div>
        {{/imgslidesonly}}

      {{/slides}}
      </div>
    </div>
</div>

<script>
  var slider = tns({
    container: \'.hero-slider\',
    items: 1,
    mode: \'carousel\',
    slideBy: 1,
    mouseDrag: true,
    autoHeight: true,
    controlsText: [\'<i class="fas fa-chevron-left"></i>\', \'<i class="fas fa-chevron-right"></i>\'],
    {{#sliderloop}}loop: true,{{/sliderloop}}
    {{#sliderintervalenabled}}autoplayButtonOutput: false, autoplay: true, autoplayTimeout: {{sliderinterval}},{{/sliderintervalenabled}}
    controls: true
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
                
                $buffer .= $indent . '<div id="heroSlider" class="c-heroimg c-hero-slider ';
                // 'sliderfwenabled' section
                $value = $context->find('sliderfwenabled');
                $buffer .= $this->section64a6dcb9a66d14662e1f97bcda114d16($context, $indent, $value);
                $buffer .= ' ';
                // 'heroboxshadow' section
                $value = $context->find('heroboxshadow');
                $buffer .= $this->section3739cb7fc57486039e7a39d3beac1138($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="c-hero-container">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      <div class="hero-slider">
';
                // 'slides' section
                $value = $context->find('slides');
                $buffer .= $this->section9821401547af2e0a7ba37eb1ab56b8fe($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<script>
';
                $buffer .= $indent . '  var slider = tns({
';
                $buffer .= $indent . '    container: \'.hero-slider\',
';
                $buffer .= $indent . '    items: 1,
';
                $buffer .= $indent . '    mode: \'carousel\',
';
                $buffer .= $indent . '    slideBy: 1,
';
                $buffer .= $indent . '    mouseDrag: true,
';
                $buffer .= $indent . '    autoHeight: true,
';
                $buffer .= $indent . '    controlsText: [\'<i class="fas fa-chevron-left"></i>\', \'<i class="fas fa-chevron-right"></i>\'],
';
                $buffer .= $indent . '    ';
                // 'sliderloop' section
                $value = $context->find('sliderloop');
                $buffer .= $this->section90883c720fddd292bffb94f16f8db69f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    ';
                // 'sliderintervalenabled' section
                $value = $context->find('sliderintervalenabled');
                $buffer .= $this->section8bd6db44801dc4eb75fc9f4a6d1a3855($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    controls: true
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

}
