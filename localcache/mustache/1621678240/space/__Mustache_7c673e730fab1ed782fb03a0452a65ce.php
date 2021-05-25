<?php

class __Mustache_7c673e730fab1ed782fb03a0452a65ce extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<header id="page-header">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="row no-gutters">
';
        $buffer .= $indent . '
';
        // 'hasnavbar' section
        $value = $context->find('hasnavbar');
        $buffer .= $this->sectionD570ada7a4fdf2152f3e4dfaa72bc59b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div class="w-100 row no-gutters align-items-center c-header-content">
';
        $buffer .= $indent . '        ';
        // 'contextheader' section
        $value = $context->find('contextheader');
        $buffer .= $this->sectionC374375d64d5c01c5fc9a5f2d65614c0($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="settingsMenu" class="settings-menu d-inline-flex">
';
        // 'settingsmenu' section
        $value = $context->find('settingsmenu');
        $buffer .= $this->section6f77ecaac95faf813883f410d70b5505($context, $indent, $value);
        // 'headeractions' section
        $value = $context->find('headeractions');
        $buffer .= $this->sectionEebd927434de1072d3ae818d7d47bafc($context, $indent, $value);
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        // 'pageheading' section
        $value = $context->find('pageheading');
        $buffer .= $this->section02176c8ee7d3096fec933193d77df943($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'courseheader' section
        $value = $context->find('courseheader');
        $buffer .= $this->sectionD59c22d7aed021e7ea301fb4f312030b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</header>
';

        return $buffer;
    }

    private function sectionD570ada7a4fdf2152f3e4dfaa72bc59b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="breadcrumbs w-100 row no-gutters">
        <div id="page-navbar" class="breadcrumbs-container w-100">
            {{{navbar}}}
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
                
                $buffer .= $indent . '      <div class="breadcrumbs w-100 row no-gutters">
';
                $buffer .= $indent . '        <div id="page-navbar" class="breadcrumbs-container w-100">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('navbar'), $context);
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

    private function sectionC374375d64d5c01c5fc9a5f2d65614c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="page-title">{{{contextheader}}}</div>';
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
                
                $buffer .= '<div class="page-title">';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f77ecaac95faf813883f410d70b5505(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div id="headerBtn" class="header-settings-menu-box">
              {{{settingsmenu}}}
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
                
                $buffer .= $indent . '          <div id="headerBtn" class="header-settings-menu-box">
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('settingsmenu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEebd927434de1072d3ae818d7d47bafc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="header-actions-container ml-1" data-region="header-actions-container">
            <div class="header-action">{{{.}}}</div>
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
                
                $buffer .= $indent . '          <div class="header-actions-container ml-1" data-region="header-actions-container">
';
                $buffer .= $indent . '            <div class="header-action">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02176c8ee7d3096fec933193d77df943(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="page-sub-title">{{{pageheading}}}</h3>';
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
                
                $buffer .= '<h3 class="page-sub-title">';
                $value = $this->resolveValue($context->find('pageheading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD59c22d7aed021e7ea301fb4f312030b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div id="course-header" class="col-12 row">{{{courseheader}}}</div>
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
                
                $buffer .= $indent . '        <div id="course-header" class="col-12 row">';
                $value = $this->resolveValue($context->find('courseheader'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
