<?php

class __Mustache_7b863c0bab7c0fbb58faccca906b71c6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'display' section
        $value = $context->find('display');
        $buffer .= $this->section68f6239cb02778fc96b39300d43d419a($context, $indent, $value);

        return $buffer;
    }

    private function sectionEee4e6ef95965dcddbe2f125f056fd35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li><a href="{{{action}}}">{{text}}</a></li>
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
                
                $buffer .= $indent . '        <li><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5bd64459baf248ad1580ea8d30a2df9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core/settings_link_page_single }}
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
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7057984631cb2a5c3a68b3c2c172df4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li>
            <ul class="list-unstyled ml-2 pl-3">
                {{#children}}
                    {{> core/settings_link_page_single }}
                {{/children}}
            </ul>
        </li>
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
                
                $buffer .= $indent . '        <li>
';
                $buffer .= $indent . '            <ul class="list-unstyled ml-2 pl-3">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section5bd64459baf248ad1580ea8d30a2df9b($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68f6239cb02778fc96b39300d43d419a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#action}}
        <li><a href="{{{action}}}">{{text}}</a></li>
    {{/action}}
    {{^action}}
        <li><strong>{{text}}</strong></li>
    {{/action}}
    {{#children.count}}
        <li>
            <ul class="list-unstyled ml-2 pl-3">
                {{#children}}
                    {{> core/settings_link_page_single }}
                {{/children}}
            </ul>
        </li>
    {{/children.count}}
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
                
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionEee4e6ef95965dcddbe2f125f056fd35($context, $indent, $value);
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <li><strong>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</strong></li>
';
                }
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionA7057984631cb2a5c3a68b3c2c172df4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
