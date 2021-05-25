<?php

class __Mustache_e9de987361c26cbf37a3f3c56f653f91 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'herovideoenabled' section
        $value = $context->find('herovideoenabled');
        $buffer .= $this->section4f099fd84c6a118b073bf6e8b7ab8ba1($context, $indent, $value);

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

    private function section28cda24968a124667ed50e4505f29d7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="c-hero-video-content">
      {{{herovideocontent}}}
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
                
                $buffer .= $indent . '      <div class="c-hero-video-content">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('herovideocontent'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f099fd84c6a118b073bf6e8b7ab8ba1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="heroVideo" class="c-hero-video c-hero-container--video {{#herovideofwenabled}}c-hero--fw{{/herovideofwenabled}}">
  <div class="row no-gutters justify-content-center align-items-center">
      {{#herovideocontent}}
      <div class="c-hero-video-content">
      {{{herovideocontent}}}
      </div>
      {{/herovideocontent}}
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
                
                $buffer .= $indent . '<div id="heroVideo" class="c-hero-video c-hero-container--video ';
                // 'herovideofwenabled' section
                $value = $context->find('herovideofwenabled');
                $buffer .= $this->sectionA51dc40a798fb86d5802b309ea2d901f($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '  <div class="row no-gutters justify-content-center align-items-center">
';
                // 'herovideocontent' section
                $value = $context->find('herovideocontent');
                $buffer .= $this->section28cda24968a124667ed50e4505f29d7e($context, $indent, $value);
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
