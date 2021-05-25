<?php

class __Mustache_3e66b5bc7012a85893e7d7c30bca6546 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="nav-tabs-container w-100">
';
        $buffer .= $indent . '  <ul class="nav nav-tabs mb-3">
';
        // 'tabs' section
        $value = $context->find('tabs');
        $buffer .= $this->sectionA253c1af152024c56124ce06f8a55079($context, $indent, $value);
        $buffer .= $indent . '  </ul>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="nav-tabs-sm">
';
        // 'secondrow' section
        $value = $context->find('secondrow');
        $buffer .= $this->section0bae7cee9771829fdcd21373b8944602($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3ff98c1deac347d8c4a99550583d4940(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' active';
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
                
                $buffer .= ' active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05828eb925ccd1e324128320ddd16fea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' disabled';
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
                
                $buffer .= ' disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC570aaea2e978e1ed4e4df195bd17bd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'href="{{{link}}}"';
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
                
                $buffer .= 'href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA253c1af152024c56124ce06f8a55079(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <li class="nav-item">
        <a class="nav-link{{#active}} active{{/active}}{{#inactive}} disabled{{/inactive}}" {{#link}}href="{{{link}}}"{{/link}} title="{{title}}">{{{text}}}</a>
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
                
                $buffer .= $indent . '      <li class="nav-item">
';
                $buffer .= $indent . '        <a class="nav-link';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section3ff98c1deac347d8c4a99550583d4940($context, $indent, $value);
                // 'inactive' section
                $value = $context->find('inactive');
                $buffer .= $this->section05828eb925ccd1e324128320ddd16fea($context, $indent, $value);
                $buffer .= '" ';
                // 'link' section
                $value = $context->find('link');
                $buffer .= $this->sectionC570aaea2e978e1ed4e4df195bd17bd0($context, $indent, $value);
                $buffer .= ' title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '      </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bae7cee9771829fdcd21373b8944602(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>core/tabtree}}
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
                
                if ($partial = $this->mustache->loadPartial('core/tabtree')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
