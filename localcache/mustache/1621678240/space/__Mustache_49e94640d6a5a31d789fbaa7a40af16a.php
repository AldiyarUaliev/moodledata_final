<?php

class __Mustache_49e94640d6a5a31d789fbaa7a40af16a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'FPTeam' section
        $value = $context->find('FPTeam');
        $buffer .= $this->sectionBdaec2c58f881fe3ace36e85fd4e93aa($context, $indent, $value);

        return $buffer;
    }

    private function section8113c0b0e00d4135b676ba93b960bf8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4 class="c-special-box-subtitle">{{{FPTeamSubHeading}}}</h4>';
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
                $value = $this->resolveValue($context->find('FPTeamSubHeading'), $context);
                $buffer .= $value;
                $buffer .= '</h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7bd3fbbb57d230247f8becc849c58ad4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="c-special-box-title">{{{FPTeamHeading}}}</h3>';
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
                $value = $this->resolveValue($context->find('FPTeamHeading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAacb0e9283f42d5d82a34da18357ef42(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="lead">{{{FPTeamText}}}</div>';
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
                $value = $this->resolveValue($context->find('FPTeamText'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03cf6b623446ffdbe02c5d91968bf41e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'team-slider pb-5';
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
                
                $buffer .= 'team-slider pb-5';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbb4935372b15bb3adc17e00c3fe7023(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{{teamurl}}}">';
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
                $value = $this->resolveValue($context->find('teamurl'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a5a27b5a28d328ce8647f27c32f7c64(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img src="{{{image}}}" alt="{{teamname}}" class="c-team-img"/>';
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
                $value = $this->resolveValue($context->find('teamname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="c-team-img"/>';
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

    private function section9eedf5f4054ac5abf3beecadc3799552(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4 class="c-team-title">{{{teamname}}}</h4>';
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
                
                $buffer .= '<h4 class="c-team-title">';
                $value = $this->resolveValue($context->find('teamname'), $context);
                $buffer .= $value;
                $buffer .= '</h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05c147cae5a425bafc4a27d9a9363897(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-team-desc">{{{teamtext}}}</div>';
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
                
                $buffer .= '<div class="c-team-desc">';
                $value = $this->resolveValue($context->find('teamtext'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3db462e881f145fe18bf05dbffe92d0a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-team-social-icons">{{{teamcustomhtml}}}</div>';
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
                
                $buffer .= '<div class="c-team-social-icons">';
                $value = $this->resolveValue($context->find('teamcustomhtml'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5d97f0e17178c901d8aae1bcf353f58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="team-slide {{^teamslider}}col-sm-12 m-t-2{{teammemberperrow}}{{/teamslider}}">
          {{#teamurl}}<a href="{{{teamurl}}}">{{/teamurl}}
              {{#image}}<img src="{{{image}}}" alt="{{teamname}}" class="c-team-img"/>{{/image}}
          {{#teamurl}}</a>{{/teamurl}}
          {{#teamname}}<h4 class="c-team-title">{{{teamname}}}</h4>{{/teamname}}
          {{#teamtext}}<div class="c-team-desc">{{{teamtext}}}</div>{{/teamtext}}
          {{#teamcustomhtml}}<div class="c-team-social-icons">{{{teamcustomhtml}}}</div>{{/teamcustomhtml}}
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
                
                $buffer .= $indent . '      <div class="team-slide ';
                // 'teamslider' inverted section
                $value = $context->find('teamslider');
                if (empty($value)) {
                    
                    $buffer .= 'col-sm-12 m-t-2';
                    $value = $this->resolveValue($context->find('teammemberperrow'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                }
                $buffer .= '">
';
                $buffer .= $indent . '          ';
                // 'teamurl' section
                $value = $context->find('teamurl');
                $buffer .= $this->sectionAbb4935372b15bb3adc17e00c3fe7023($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '              ';
                // 'image' section
                $value = $context->find('image');
                $buffer .= $this->section1a5a27b5a28d328ce8647f27c32f7c64($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          ';
                // 'teamurl' section
                $value = $context->find('teamurl');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          ';
                // 'teamname' section
                $value = $context->find('teamname');
                $buffer .= $this->section9eedf5f4054ac5abf3beecadc3799552($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          ';
                // 'teamtext' section
                $value = $context->find('teamtext');
                $buffer .= $this->section05c147cae5a425bafc4a27d9a9363897($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          ';
                // 'teamcustomhtml' section
                $value = $context->find('teamcustomhtml');
                $buffer .= $this->section3db462e881f145fe18bf05dbffe92d0a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6febbf050e90f1fb291d778c6e23a8c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-team-footer-content w-100 mt-4">{{{FPTeamFooterContent}}}</div>';
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
                
                $buffer .= '<div class="c-team-footer-content w-100 mt-4">';
                $value = $this->resolveValue($context->find('FPTeamFooterContent'), $context);
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

    private function sectionB7dc743cbf8bf8012615a63cdc20f4a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'autoplayTimeout: {{sliderteaminterval}},';
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
                
                $buffer .= 'autoplayTimeout: ';
                $value = $this->resolveValue($context->find('sliderteaminterval'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7952eaae06ca8f058cd2f881e5c9ab8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'autoplayButtonOutput: false, autoplay: true, {{#sliderteaminterval}}autoplayTimeout: {{sliderteaminterval}},{{/sliderteaminterval}}';
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
                
                $buffer .= 'autoplayButtonOutput: false, autoplay: true, ';
                // 'sliderteaminterval' section
                $value = $context->find('sliderteaminterval');
                $buffer .= $this->sectionB7dc743cbf8bf8012615a63cdc20f4a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fcdd1792ee1568bf3b7e117ec309278(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script>
  var slider = tns({
    container: \'.team-slider\',
    items: 1,
    slideBy: 1,
    mouseDrag: true,
    controlsText: [\'<i class="fas fa-chevron-left"></i>\', \'<i class="fas fa-chevron-right"></i>\'],
    controls: true,
    {{#sliderteamloop}}loop: true,{{/sliderteamloop}}
    {{#sliderteamintervalenabled}}autoplayButtonOutput: false, autoplay: true, {{#sliderteaminterval}}autoplayTimeout: {{sliderteaminterval}},{{/sliderteaminterval}}{{/sliderteamintervalenabled}}
    responsive: {
      600: {
        items: 2,
        slideBy: 2,
      },
      1200: {
        items: {{teamslidesperrow}},
        slideBy: {{teamslidesperrow}},
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
                $buffer .= $indent . '    container: \'.team-slider\',
';
                $buffer .= $indent . '    items: 1,
';
                $buffer .= $indent . '    slideBy: 1,
';
                $buffer .= $indent . '    mouseDrag: true,
';
                $buffer .= $indent . '    controlsText: [\'<i class="fas fa-chevron-left"></i>\', \'<i class="fas fa-chevron-right"></i>\'],
';
                $buffer .= $indent . '    controls: true,
';
                $buffer .= $indent . '    ';
                // 'sliderteamloop' section
                $value = $context->find('sliderteamloop');
                $buffer .= $this->section90883c720fddd292bffb94f16f8db69f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    ';
                // 'sliderteamintervalenabled' section
                $value = $context->find('sliderteamintervalenabled');
                $buffer .= $this->section7952eaae06ca8f058cd2f881e5c9ab8f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    responsive: {
';
                $buffer .= $indent . '      600: {
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
                $value = $this->resolveValue($context->find('teamslidesperrow'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',
';
                $buffer .= $indent . '        slideBy: ';
                $value = $this->resolveValue($context->find('teamslidesperrow'), $context);
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

    private function sectionBdaec2c58f881fe3ace36e85fd4e93aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="teamBlock" class="s-team s-special-box row no-gutters">
  <div class="l-container row section-padding no-gutters justify-content-center">

    <div class="{{FPTeamIntroProperties}} {{^FPTeamIntroProperties}}col-sm-11 col-md-8 col-lg-6 text-center{{/FPTeamIntroProperties}}">
      {{#FPTeamSubHeading}}<h4 class="c-special-box-subtitle">{{{FPTeamSubHeading}}}</h4>{{/FPTeamSubHeading}}
      {{#FPTeamHeading}}<h3 class="c-special-box-title">{{{FPTeamHeading}}}</h3>{{/FPTeamHeading}}
      {{#FPTeamText}}<div class="lead">{{{FPTeamText}}}</div>{{/FPTeamText}}
    </div>

    <div class="{{#teamslider}}team-slider pb-5{{/teamslider}} c-team m-t-3 {{^teamslider}}col-12 row{{/teamslider}} justify-content-center">

      {{#team}}
      <div class="team-slide {{^teamslider}}col-sm-12 m-t-2{{teammemberperrow}}{{/teamslider}}">
          {{#teamurl}}<a href="{{{teamurl}}}">{{/teamurl}}
              {{#image}}<img src="{{{image}}}" alt="{{teamname}}" class="c-team-img"/>{{/image}}
          {{#teamurl}}</a>{{/teamurl}}
          {{#teamname}}<h4 class="c-team-title">{{{teamname}}}</h4>{{/teamname}}
          {{#teamtext}}<div class="c-team-desc">{{{teamtext}}}</div>{{/teamtext}}
          {{#teamcustomhtml}}<div class="c-team-social-icons">{{{teamcustomhtml}}}</div>{{/teamcustomhtml}}
      </div>
      {{/team}}

    </div>

    {{#FPTeamFooterContent}}<div class="c-team-footer-content w-100 mt-4">{{{FPTeamFooterContent}}}</div>{{/FPTeamFooterContent}}

  </div>
</div>
{{#showfpblockteamhr}}<hr class="hr my-0" />{{/showfpblockteamhr}}

{{#teamslider}}
<script>
  var slider = tns({
    container: \'.team-slider\',
    items: 1,
    slideBy: 1,
    mouseDrag: true,
    controlsText: [\'<i class="fas fa-chevron-left"></i>\', \'<i class="fas fa-chevron-right"></i>\'],
    controls: true,
    {{#sliderteamloop}}loop: true,{{/sliderteamloop}}
    {{#sliderteamintervalenabled}}autoplayButtonOutput: false, autoplay: true, {{#sliderteaminterval}}autoplayTimeout: {{sliderteaminterval}},{{/sliderteaminterval}}{{/sliderteamintervalenabled}}
    responsive: {
      600: {
        items: 2,
        slideBy: 2,
      },
      1200: {
        items: {{teamslidesperrow}},
        slideBy: {{teamslidesperrow}},
      }
    }
  });
</script>
{{/teamslider}}

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
                
                $buffer .= $indent . '<div id="teamBlock" class="s-team s-special-box row no-gutters">
';
                $buffer .= $indent . '  <div class="l-container row section-padding no-gutters justify-content-center">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="';
                $value = $this->resolveValue($context->find('FPTeamIntroProperties'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'FPTeamIntroProperties' inverted section
                $value = $context->find('FPTeamIntroProperties');
                if (empty($value)) {
                    
                    $buffer .= 'col-sm-11 col-md-8 col-lg-6 text-center';
                }
                $buffer .= '">
';
                $buffer .= $indent . '      ';
                // 'FPTeamSubHeading' section
                $value = $context->find('FPTeamSubHeading');
                $buffer .= $this->section8113c0b0e00d4135b676ba93b960bf8a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'FPTeamHeading' section
                $value = $context->find('FPTeamHeading');
                $buffer .= $this->section7bd3fbbb57d230247f8becc849c58ad4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'FPTeamText' section
                $value = $context->find('FPTeamText');
                $buffer .= $this->sectionAacb0e9283f42d5d82a34da18357ef42($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="';
                // 'teamslider' section
                $value = $context->find('teamslider');
                $buffer .= $this->section03cf6b623446ffdbe02c5d91968bf41e($context, $indent, $value);
                $buffer .= ' c-team m-t-3 ';
                // 'teamslider' inverted section
                $value = $context->find('teamslider');
                if (empty($value)) {
                    
                    $buffer .= 'col-12 row';
                }
                $buffer .= ' justify-content-center">
';
                $buffer .= $indent . '
';
                // 'team' section
                $value = $context->find('team');
                $buffer .= $this->sectionE5d97f0e17178c901d8aae1bcf353f58($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    ';
                // 'FPTeamFooterContent' section
                $value = $context->find('FPTeamFooterContent');
                $buffer .= $this->section6febbf050e90f1fb291d778c6e23a8c9($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '</div>
';
                // 'showfpblockteamhr' section
                $value = $context->find('showfpblockteamhr');
                $buffer .= $this->sectionC34334deba208991c83e2ca655363fa0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                // 'teamslider' section
                $value = $context->find('teamslider');
                $buffer .= $this->section0fcdd1792ee1568bf3b7e117ec309278($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
