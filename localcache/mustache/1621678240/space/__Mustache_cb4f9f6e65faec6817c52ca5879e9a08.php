<?php

class __Mustache_cb4f9f6e65faec6817c52ca5879e9a08 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<a ';
        $buffer .= ' id="calendar-day-popover-link-';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-';
        $value = $this->resolveValue($context->find('year'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-';
        $value = $this->resolveValue($context->find('yday'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' href="';
        $blockFunction = $context->findInBlock('url');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('url'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
        }
        $buffer .= '"';
        $buffer .= ' data-container="body"';
        $buffer .= ' data-toggle="popover"';
        $buffer .= ' data-html="true"';
        $buffer .= ' data-region="mini-day-link"';
        $buffer .= ' data-trigger="hover focus"';
        $buffer .= ' data-placement="top"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->find('year'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-categoryid="';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-title="';
        $blockFunction = $context->findInBlock('title');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('title'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
        }
        $buffer .= '"';
        $buffer .= ' data-alternate="';
        $blockFunction = $context->findInBlock('nocontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"';
        $buffer .= ' aria-label="';
        $value = $this->resolveValue($context->find('viewdaylinktitle'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= '>';
        $blockFunction = $context->findInBlock('day');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('day'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
        }
        $buffer .= '</a>
';
        $buffer .= $indent . '<div class="hidden">
';
        $buffer .= $indent . '    ';
        $blockFunction = $context->findInBlock('content');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section2495d3def3c8afb000a1404cb94e9699($context, $indent, $value);

        return $buffer;
    }

    private function section2495d3def3c8afb000a1404cb94e9699(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {
    require([\'theme_space/bootstrap/popover\'], function() {
        var target = $("#calendar-day-popover-link-{{courseid}}-{{year}}-{{yday}}-{{uniqid}}");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not(\'.hidden\')");
                var content = $(\'<div>\');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data(\'alternate\'));
                }

                return content.html();
            }
        });
    });
});
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
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    require([\'theme_space/bootstrap/popover\'], function() {
';
                $buffer .= $indent . '        var target = $("#calendar-day-popover-link-';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->find('year'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->find('yday'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '");
';
                $buffer .= $indent . '        target.popover({
';
                $buffer .= $indent . '            content: function() {
';
                $buffer .= $indent . '                var source = target.next().find("> *:not(\'.hidden\')");
';
                $buffer .= $indent . '                var content = $(\'<div>\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                if (source.length) {
';
                $buffer .= $indent . '                    content.html(source.clone(false));
';
                $buffer .= $indent . '                } else {
';
                $buffer .= $indent . '                    content.html(target.data(\'alternate\'));
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                return content.html();
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
