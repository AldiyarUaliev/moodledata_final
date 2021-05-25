<?php

class __Mustache_dc6e1259db4ddff591e9e50ae5939485 extends Mustache_Template
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
        $buffer .= $indent . '  <div id="topBar1" class="s-top s-top--sidebar justify-content-center ';
        // 'ShowTopBarUserName' section
        $value = $context->find('ShowTopBarUserName');
        $buffer .= $this->section61ede61975142ede64ca880a91dcf05b($context, $indent, $value);
        $buffer .= ' ';
        // 'customtopnavhtml' section
        $value = $context->find('customtopnavhtml');
        $buffer .= $this->section00a5d6fab418f374f525cfcc85d072e0($context, $indent, $value);
        $buffer .= ' ';
        // 'TopBarText' section
        $value = $context->find('TopBarText');
        $buffer .= $this->section3f55a39ea36d75bd3bb0d2edc0449516($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_space/navbar-mobile')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="navBar" class="s-top-container c-container row no-gutters justify-content-start align-items-center">
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_space/navbar-btn')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '
';
        // 'customlogotopbar' section
        $value = $context->find('customlogotopbar');
        $buffer .= $this->section0c4d112e47cc5dfb6f7bd5d2855f4a16($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'customtopnavhtml' section
        $value = $context->find('customtopnavhtml');
        $buffer .= $this->section524f92e753eae78f814c82514edd27af($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div class="c-nav-user nav ml-sm-0 ml-md-auto align-items-center justify-content-sm-end justify-content-lg-center">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          ';
        // 'TopBarText' section
        $value = $context->find('TopBarText');
        $buffer .= $this->sectionB9d3f79d17095d279efdf2ee2bab4ca1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '          <div class="search-box d-block">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.search_box'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          <!-- navbar_plugin_output -->
';
        $buffer .= $indent . '          <div class="top-icons-nav c-menu-sep mr-md-3">';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          ';
        // 'output.render_lang_menu' section
        $value = $context->findDot('output.render_lang_menu');
        $buffer .= $this->sectionA0390386ed31d1d4ad67f43ac5f67fcc($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          ';
        // 'ShowCustomNav' section
        $value = $context->find('ShowCustomNav');
        $buffer .= $this->sectionA527e40d0b0773e7cdbd7f077d2a452a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          <!-- user_menu -->
';
        $buffer .= $indent . '          <div class="c-user-menu">
';
        $buffer .= $indent . '              ';
        $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <!-- search_box -->
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  </div>
';

        return $buffer;
    }

    private function section61ede61975142ede64ca880a91dcf05b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showusername';
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
                
                $buffer .= 'showusername';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00a5d6fab418f374f525cfcc85d072e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'topbar-customtopnav';
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
                
                $buffer .= 'topbar-customtopnav';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f55a39ea36d75bd3bb0d2edc0449516(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'topbar-text';
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
                
                $buffer .= 'topbar-text';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92ba138132a826d34d9bc5ca4c95c99c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{customrooturl}}';
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
                
                $value = $this->resolveValue($context->find('customrooturl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c4d112e47cc5dfb6f7bd5d2855f4a16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="logo d-sm-none d-lg-inline px-sm-3 px-md-2 col-sm-12 col-md-auto text-sm-center text-md-left">
          <a href="{{#customrooturl}}{{customrooturl}}{{/customrooturl}}{{^customrooturl}}{{{ config.wwwroot }}}{{/customrooturl}}"><img src="{{customlogotopbar}}" alt="{{sitename}}" /></a>
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
                
                $buffer .= $indent . '      <div class="logo d-sm-none d-lg-inline px-sm-3 px-md-2 col-sm-12 col-md-auto text-sm-center text-md-left">
';
                $buffer .= $indent . '          <a href="';
                // 'customrooturl' section
                $value = $context->find('customrooturl');
                $buffer .= $this->section92ba138132a826d34d9bc5ca4c95c99c($context, $indent, $value);
                // 'customrooturl' inverted section
                $value = $context->find('customrooturl');
                if (empty($value)) {
                    
                    $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                    $buffer .= $value;
                }
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('customlogotopbar'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" /></a>
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section524f92e753eae78f814c82514edd27af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="col-sm col-md-auto s-custom-main-nav text-sm-center text-md-left mr-lg-3 p-0">
        <div class="c-custom-main-nav">
          {{{customtopnavhtml}}}
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
                
                $buffer .= $indent . '      <div class="col-sm col-md-auto s-custom-main-nav text-sm-center text-md-left mr-lg-3 p-0">
';
                $buffer .= $indent . '        <div class="c-custom-main-nav">
';
                $buffer .= $indent . '          ';
                $value = $this->resolveValue($context->find('customtopnavhtml'), $context);
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

    private function sectionB9d3f79d17095d279efdf2ee2bab4ca1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-top-text c-menu-sep p-md-0 mr-md-3 pr-md-3 text-sm-center text-lg-left">{{{TopBarText}}}</div>';
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
                
                $buffer .= '<div class="c-top-text c-menu-sep p-md-0 mr-md-3 pr-md-3 text-sm-center text-lg-left">';
                $value = $this->resolveValue($context->find('TopBarText'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0390386ed31d1d4ad67f43ac5f67fcc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-lang-menu c-menu-sep d-sm-none d-lg-inline">{{{ output.render_lang_menu }}}</div>';
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
                
                $buffer .= '<div class="c-lang-menu c-menu-sep d-sm-none d-lg-inline">';
                $value = $this->resolveValue($context->findDot('output.render_lang_menu'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA527e40d0b0773e7cdbd7f077d2a452a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-custom-nav-container c-menu-sep d-inline-block ml-sm-1 ml-md-0 mr-lg-3">{{> theme_space/custom-nav }}</div>';
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
                
                $buffer .= '<div class="c-custom-nav-container c-menu-sep d-inline-block ml-sm-1 ml-md-0 mr-lg-3">';
                if ($partial = $this->mustache->loadPartial('theme_space/custom-nav')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
