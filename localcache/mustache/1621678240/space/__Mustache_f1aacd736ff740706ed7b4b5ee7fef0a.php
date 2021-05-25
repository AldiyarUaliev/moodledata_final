<?php

class __Mustache_f1aacd736ff740706ed7b4b5ee7fef0a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'fpblock10' section
        $value = $context->find('fpblock10');
        $buffer .= $this->section3a96712b10c0503a516f945ede3b897c($context, $indent, $value);

        return $buffer;
    }

    private function section13cfa73f14a9ddb9ac3c5a77658a3c66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="c-special-box-title mt-0">{{{fpblock10title}}}</h3>';
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
                $value = $this->resolveValue($context->find('fpblock10title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d0f251f49afc3139dfe6c607196050e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="lead mb-3"">{{{fpblock10content}}}</div>';
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
                $value = $this->resolveValue($context->find('fpblock10content'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e26f5a8bbf41c6901b5a17b1032bbdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="col-12">
    <div class="{{fpblock10introproperties}} {{^fpblock10introproperties}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/fpblock10introproperties}}">
      {{#fpblock10title}}<h3 class="c-special-box-title mt-0">{{{fpblock10title}}}</h3>{{/fpblock10title}}
      {{#fpblock10content}}<div class="lead mb-3"">{{{fpblock10content}}}</div>{{/fpblock10content}}
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
                
                $buffer .= $indent . '  <div class="col-12">
';
                $buffer .= $indent . '    <div class="';
                $value = $this->resolveValue($context->find('fpblock10introproperties'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'fpblock10introproperties' inverted section
                $value = $context->find('fpblock10introproperties');
                if (empty($value)) {
                    
                    $buffer .= 'col-sm-11 col-md-8 col-lg-6 m-auto text-center';
                }
                $buffer .= '">
';
                $buffer .= $indent . '      ';
                // 'fpblock10title' section
                $value = $context->find('fpblock10title');
                $buffer .= $this->section13cfa73f14a9ddb9ac3c5a77658a3c66($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'fpblock10content' section
                $value = $context->find('fpblock10content');
                $buffer .= $this->section1d0f251f49afc3139dfe6c607196050e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24b23575e454a4589935a6e149fad8ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="accordion-header" id="headingOne">
          <button class="btn btn-accordion text-left" type="button" data-toggle="collapse" data-target="#accordion-{{fpblock10no}}" aria-expanded="false" aria-controls="accordion-{{fpblock10no}}">
            {{{fpblock10question}}}
            <i class="accordion-icon fas fa-plus"></i>
          </button>
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
                
                $buffer .= $indent . '      <div class="accordion-header" id="headingOne">
';
                $buffer .= $indent . '          <button class="btn btn-accordion text-left" type="button" data-toggle="collapse" data-target="#accordion-';
                $value = $this->resolveValue($context->find('fpblock10no'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" aria-expanded="false" aria-controls="accordion-';
                $value = $this->resolveValue($context->find('fpblock10no'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('fpblock10question'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            <i class="accordion-icon fas fa-plus"></i>
';
                $buffer .= $indent . '          </button>
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe175cee7b859086da12fdd12ced4a97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div id="accordion-{{fpblock10no}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFaq">
        <div class="accordion-body">
          {{{fpblock10answer}}}
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
                
                $buffer .= $indent . '      <div id="accordion-';
                $value = $this->resolveValue($context->find('fpblock10no'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFaq">
';
                $buffer .= $indent . '        <div class="accordion-body">
';
                $buffer .= $indent . '          ';
                $value = $this->resolveValue($context->find('fpblock10answer'), $context);
                $buffer .= $value;
                $buffer .= '
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

    private function section820f5892f3237639a48ab3f7f911ed9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="accordion" id="block10-{{fpblock10no}}">

      {{#fpblock10question}}
      <div class="accordion-header" id="headingOne">
          <button class="btn btn-accordion text-left" type="button" data-toggle="collapse" data-target="#accordion-{{fpblock10no}}" aria-expanded="false" aria-controls="accordion-{{fpblock10no}}">
            {{{fpblock10question}}}
            <i class="accordion-icon fas fa-plus"></i>
          </button>
      </div>
      {{/fpblock10question}}

      {{#fpblock10answer}}
      <div id="accordion-{{fpblock10no}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFaq">
        <div class="accordion-body">
          {{{fpblock10answer}}}
        </div>
      </div>
      {{/fpblock10answer}}

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
                
                $buffer .= $indent . '    <div class="accordion" id="block10-';
                $value = $this->resolveValue($context->find('fpblock10no'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '
';
                // 'fpblock10question' section
                $value = $context->find('fpblock10question');
                $buffer .= $this->section24b23575e454a4589935a6e149fad8ef($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'fpblock10answer' section
                $value = $context->find('fpblock10answer');
                $buffer .= $this->sectionFe175cee7b859086da12fdd12ced4a97($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06eeb67dec590741951d067f10e20fd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-block10-footer-content w-100 mt-4">{{{block10footercontent}}}</div>';
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
                
                $buffer .= '<div class="c-block10-footer-content w-100 mt-4">';
                $value = $this->resolveValue($context->find('block10footercontent'), $context);
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

    private function section3a96712b10c0503a516f945ede3b897c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="block10" class="s-block-10 l-container s-special-box section-padding col-12 row no-gutters justify-content-sm-center justify-content-lg-between">


  {{#showfpblock10intro}}
  <div class="col-12">
    <div class="{{fpblock10introproperties}} {{^fpblock10introproperties}}col-sm-11 col-md-8 col-lg-6 m-auto text-center{{/fpblock10introproperties}}">
      {{#fpblock10title}}<h3 class="c-special-box-title mt-0">{{{fpblock10title}}}</h3>{{/fpblock10title}}
      {{#fpblock10content}}<div class="lead mb-3"">{{{fpblock10content}}}</div>{{/fpblock10content}}
    </div>
    {{/showfpblock10intro}}
  </div>

  <div id="accordionFaq" class="accordion col-12 justify-content-center align-items-center mt-4 px-0">

    {{#block10}}
    <div class="accordion" id="block10-{{fpblock10no}}">

      {{#fpblock10question}}
      <div class="accordion-header" id="headingOne">
          <button class="btn btn-accordion text-left" type="button" data-toggle="collapse" data-target="#accordion-{{fpblock10no}}" aria-expanded="false" aria-controls="accordion-{{fpblock10no}}">
            {{{fpblock10question}}}
            <i class="accordion-icon fas fa-plus"></i>
          </button>
      </div>
      {{/fpblock10question}}

      {{#fpblock10answer}}
      <div id="accordion-{{fpblock10no}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFaq">
        <div class="accordion-body">
          {{{fpblock10answer}}}
        </div>
      </div>
      {{/fpblock10answer}}

    </div>
    {{/block10}}

  </div>

    {{#block10footercontent}}<div class="c-block10-footer-content w-100 mt-4">{{{block10footercontent}}}</div>{{/block10footercontent}}

</div>
{{#showfpblock10hr}}<hr class="hr my-0" />{{/showfpblock10hr}}
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
                
                $buffer .= $indent . '<div id="block10" class="s-block-10 l-container s-special-box section-padding col-12 row no-gutters justify-content-sm-center justify-content-lg-between">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                // 'showfpblock10intro' section
                $value = $context->find('showfpblock10intro');
                $buffer .= $this->section6e26f5a8bbf41c6901b5a17b1032bbdb($context, $indent, $value);
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div id="accordionFaq" class="accordion col-12 justify-content-center align-items-center mt-4 px-0">
';
                $buffer .= $indent . '
';
                // 'block10' section
                $value = $context->find('block10');
                $buffer .= $this->section820f5892f3237639a48ab3f7f911ed9b($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    ';
                // 'block10footercontent' section
                $value = $context->find('block10footercontent');
                $buffer .= $this->section06eeb67dec590741951d067f10e20fd0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                // 'showfpblock10hr' section
                $value = $context->find('showfpblock10hr');
                $buffer .= $this->sectionC34334deba208991c83e2ca655363fa0($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
