<?php

class __Mustache_3b442f3953b1a278582bc971adf16082 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'FPHTMLBlock2' section
        $value = $context->find('FPHTMLBlock2');
        $buffer .= $this->section6a32d3a3a98fd95afae589814619a9fb($context, $indent, $value);

        return $buffer;
    }

    private function section3622859494b07c22ea2657658af71555(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="c-special-box-title">{{{FPBlock2Title}}}</h3>';
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
                $value = $this->resolveValue($context->find('FPBlock2Title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2a49eb2310f70310bba0faa4043a9bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="lead mb-3">{{{FPBlock2Content}}}</div>';
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
                $value = $this->resolveValue($context->find('FPBlock2Content'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section189212c15cbc5106bf2fc99817ba0626(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="{{FPHTMLBlock2IntroProperties}} {{^FPHTMLBlock2IntroProperties}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/FPHTMLBlock2IntroProperties}}">
    {{#FPBlock2Title}}<h3 class="c-special-box-title">{{{FPBlock2Title}}}</h3>{{/FPBlock2Title}}
    {{#FPBlock2Content}}<div class="lead mb-3">{{{FPBlock2Content}}}</div>{{/FPBlock2Content}}
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
                $value = $this->resolveValue($context->find('FPHTMLBlock2IntroProperties'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'FPHTMLBlock2IntroProperties' inverted section
                $value = $context->find('FPHTMLBlock2IntroProperties');
                if (empty($value)) {
                    
                    $buffer .= 'col-sm-11 col-md-8 col-lg-6 m-auto text-center';
                }
                $buffer .= '">
';
                $buffer .= $indent . '    ';
                // 'FPBlock2Title' section
                $value = $context->find('FPBlock2Title');
                $buffer .= $this->section3622859494b07c22ea2657658af71555($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    ';
                // 'FPBlock2Content' section
                $value = $context->find('FPBlock2Content');
                $buffer .= $this->sectionC2a49eb2310f70310bba0faa4043a9bb($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b8a4cecd978bfe4d19c386165fcdeaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img src="{{{image}}}" alt="{{FPHTMLBlock2Heading}}" class="img-fluid"/>';
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
                $value = $this->resolveValue($context->find('FPHTMLBlock2Heading'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="img-fluid"/>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE0a0e608d3868fda4e91e4f82deb07e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4 class="c-special-box-subtitle mt-4">{{{FPHTMLBlock2SubHeading}}}</h4>';
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
                
                $buffer .= '<h4 class="c-special-box-subtitle mt-4">';
                $value = $this->resolveValue($context->find('FPHTMLBlock2SubHeading'), $context);
                $buffer .= $value;
                $buffer .= '</h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65d811e3fa55c828f4eeef7e0669cca8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="h3 c-block2-title">{{{FPHTMLBlock2Heading}}}</h3>';
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
                
                $buffer .= '<h3 class="h3 c-block2-title">';
                $value = $this->resolveValue($context->find('FPHTMLBlock2Heading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f01bef73c037dd0c638c262ebc990a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-special-box-desc">{{{FPHTMLBlock2Text}}}</div>';
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
                $value = $this->resolveValue($context->find('FPHTMLBlock2Text'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f1e5199144005157ecad420e38db1c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{FPHTMLBlock2URL}}" class="m-t-2 btn btn-primary">{{{FPHTMLBlock2Label}}}</a>';
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
                $value = $this->resolveValue($context->find('FPHTMLBlock2URL'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="m-t-2 btn btn-primary">';
                $value = $this->resolveValue($context->find('FPHTMLBlock2Label'), $context);
                $buffer .= $value;
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4aa718b3ff8a2a1fc950445aea262245(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="block2-{{{FPHTMLBlock2Count}}}" class="{{FPHTMLBlock2ItemProperties}} {{^FPHTMLBlock2ItemProperties}}col-sm-12 col-md-6{{/FPHTMLBlock2ItemProperties}}">
      <div {{^FPHTMLBlock2ItemBlockProperties}}class="my-5 p-sm-3 p-md-5"{{/FPHTMLBlock2ItemBlockProperties}} {{{FPHTMLBlock2ItemBlockProperties}}}>
        {{#image}}<img src="{{{image}}}" alt="{{FPHTMLBlock2Heading}}" class="img-fluid"/>{{/image}}
        {{#FPHTMLBlock2SubHeading}}<h4 class="c-special-box-subtitle mt-4">{{{FPHTMLBlock2SubHeading}}}</h4>{{/FPHTMLBlock2SubHeading}}
        {{#FPHTMLBlock2Heading}}<h3 class="h3 c-block2-title">{{{FPHTMLBlock2Heading}}}</h3>{{/FPHTMLBlock2Heading}}
        {{#FPHTMLBlock2Text}}<div class="c-special-box-desc">{{{FPHTMLBlock2Text}}}</div>{{/FPHTMLBlock2Text}}
        {{#FPHTMLBlock2URL}}<a href="{{FPHTMLBlock2URL}}" class="m-t-2 btn btn-primary">{{{FPHTMLBlock2Label}}}</a>{{/FPHTMLBlock2URL}}
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
                
                $buffer .= $indent . '    <div id="block2-';
                $value = $this->resolveValue($context->find('FPHTMLBlock2Count'), $context);
                $buffer .= $value;
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('FPHTMLBlock2ItemProperties'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'FPHTMLBlock2ItemProperties' inverted section
                $value = $context->find('FPHTMLBlock2ItemProperties');
                if (empty($value)) {
                    
                    $buffer .= 'col-sm-12 col-md-6';
                }
                $buffer .= '">
';
                $buffer .= $indent . '      <div ';
                // 'FPHTMLBlock2ItemBlockProperties' inverted section
                $value = $context->find('FPHTMLBlock2ItemBlockProperties');
                if (empty($value)) {
                    
                    $buffer .= 'class="my-5 p-sm-3 p-md-5"';
                }
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('FPHTMLBlock2ItemBlockProperties'), $context);
                $buffer .= $value;
                $buffer .= '>
';
                $buffer .= $indent . '        ';
                // 'image' section
                $value = $context->find('image');
                $buffer .= $this->section6b8a4cecd978bfe4d19c386165fcdeaa($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                // 'FPHTMLBlock2SubHeading' section
                $value = $context->find('FPHTMLBlock2SubHeading');
                $buffer .= $this->sectionE0a0e608d3868fda4e91e4f82deb07e7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                // 'FPHTMLBlock2Heading' section
                $value = $context->find('FPHTMLBlock2Heading');
                $buffer .= $this->section65d811e3fa55c828f4eeef7e0669cca8($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                // 'FPHTMLBlock2Text' section
                $value = $context->find('FPHTMLBlock2Text');
                $buffer .= $this->section8f01bef73c037dd0c638c262ebc990a4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                // 'FPHTMLBlock2URL' section
                $value = $context->find('FPHTMLBlock2URL');
                $buffer .= $this->section0f1e5199144005157ecad420e38db1c2($context, $indent, $value);
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

    private function section30c38460f514e8e51d8607eb835b1bf3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-block2-footer-content w-100 mt-4">{{{FPBlock2FooterContent}}}</div>';
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
                $value = $this->resolveValue($context->find('FPBlock2FooterContent'), $context);
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

    private function section6a32d3a3a98fd95afae589814619a9fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

<div id="block2" class="s-block-2 l-container s-special-box section-padding row no-gutters justify-content-sm-center justify-content-lg-between">
 {{#ShowFPBlock2Intro}}
  <div class="{{FPHTMLBlock2IntroProperties}} {{^FPHTMLBlock2IntroProperties}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/FPHTMLBlock2IntroProperties}}">
    {{#FPBlock2Title}}<h3 class="c-special-box-title">{{{FPBlock2Title}}}</h3>{{/FPBlock2Title}}
    {{#FPBlock2Content}}<div class="lead mb-3">{{{FPBlock2Content}}}</div>{{/FPBlock2Content}}
  </div>
 {{/ShowFPBlock2Intro}}

  <div class="col-12 row no-gutters justify-content-between py-0 px-1">
    {{#block2}}
    <div id="block2-{{{FPHTMLBlock2Count}}}" class="{{FPHTMLBlock2ItemProperties}} {{^FPHTMLBlock2ItemProperties}}col-sm-12 col-md-6{{/FPHTMLBlock2ItemProperties}}">
      <div {{^FPHTMLBlock2ItemBlockProperties}}class="my-5 p-sm-3 p-md-5"{{/FPHTMLBlock2ItemBlockProperties}} {{{FPHTMLBlock2ItemBlockProperties}}}>
        {{#image}}<img src="{{{image}}}" alt="{{FPHTMLBlock2Heading}}" class="img-fluid"/>{{/image}}
        {{#FPHTMLBlock2SubHeading}}<h4 class="c-special-box-subtitle mt-4">{{{FPHTMLBlock2SubHeading}}}</h4>{{/FPHTMLBlock2SubHeading}}
        {{#FPHTMLBlock2Heading}}<h3 class="h3 c-block2-title">{{{FPHTMLBlock2Heading}}}</h3>{{/FPHTMLBlock2Heading}}
        {{#FPHTMLBlock2Text}}<div class="c-special-box-desc">{{{FPHTMLBlock2Text}}}</div>{{/FPHTMLBlock2Text}}
        {{#FPHTMLBlock2URL}}<a href="{{FPHTMLBlock2URL}}" class="m-t-2 btn btn-primary">{{{FPHTMLBlock2Label}}}</a>{{/FPHTMLBlock2URL}}
      </div>
    </div>
    {{/block2}}
  </div>

  {{#FPBlock2FooterContent}}<div class="c-block2-footer-content w-100 mt-4">{{{FPBlock2FooterContent}}}</div>{{/FPBlock2FooterContent}}

</div>

{{#showfpblock2hr}}<hr class="hr my-0" />{{/showfpblock2hr}}

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
                $buffer .= $indent . '<div id="block2" class="s-block-2 l-container s-special-box section-padding row no-gutters justify-content-sm-center justify-content-lg-between">
';
                // 'ShowFPBlock2Intro' section
                $value = $context->find('ShowFPBlock2Intro');
                $buffer .= $this->section189212c15cbc5106bf2fc99817ba0626($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="col-12 row no-gutters justify-content-between py-0 px-1">
';
                // 'block2' section
                $value = $context->find('block2');
                $buffer .= $this->section4aa718b3ff8a2a1fc950445aea262245($context, $indent, $value);
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  ';
                // 'FPBlock2FooterContent' section
                $value = $context->find('FPBlock2FooterContent');
                $buffer .= $this->section30c38460f514e8e51d8607eb835b1bf3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                // 'showfpblock2hr' section
                $value = $context->find('showfpblock2hr');
                $buffer .= $this->sectionC34334deba208991c83e2ca655363fa0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
