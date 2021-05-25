<?php

class __Mustache_d61f20926668a5a7c36d7ddbc6881ee9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="nav-drawer" data-region="drawer" class="';
        // 'showsidebarlogo' section
        $value = $context->find('showsidebarlogo');
        $buffer .= $this->sectionDf88f8d083c46723401f44a26c24164a($context, $indent, $value);
        $buffer .= ' ';
        // 'showsidebarlogo' inverted section
        $value = $context->find('showsidebarlogo');
        if (empty($value)) {
            
            $buffer .= 'nav-drawer-without-logo';
        }
        $buffer .= ' d-print-none moodle-has-zindex ';
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'closed';
        }
        $buffer .= '" aria-hidden="';
        // 'navdraweropen' section
        $value = $context->find('navdraweropen');
        $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'true';
        }
        $buffer .= '">
';
        $buffer .= $indent . '
';
        // 'showsidebarlogo' section
        $value = $context->find('showsidebarlogo');
        $buffer .= $this->section04523da33a093ea32a9f13d0ef96472a($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hassidebartopblocks' section
        $value = $context->find('hassidebartopblocks');
        $buffer .= $this->sectionF298b025230719ab0e4ae3c66b8a3f2a($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('SidebarCustomHTML'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_space/flat_navigation')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        // 'hassidebarblocks' section
        $value = $context->find('hassidebarblocks');
        $buffer .= $this->section35b00e535633f589739dcf5a1b5871a7($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        // 'output.custom_menu_flat' section
        $value = $context->findDot('output.custom_menu_flat');
        $buffer .= $this->section5b64ea43b3cb7e796e3ab24e5bd7900c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'SidebarCustomNav' section
        $value = $context->find('SidebarCustomNav');
        $buffer .= $this->section28ebc57657db0b49af16ea4be031f44c($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'SidebarCustomBox' section
        $value = $context->find('SidebarCustomBox');
        $buffer .= $this->sectionE32d20e05cbabaf5b30b3525e4ebbfdd($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionDf88f8d083c46723401f44a26c24164a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nav-drawer-with-logo';
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
                
                $buffer .= 'nav-drawer-with-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
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
                
                $buffer .= 'false';
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

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
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
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86747da5ca23bdff42a836f64ca737de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h1 class="logo d-none d-sm-block">
                    <img src="{{output.get_compact_logo_url}}" alt="{{sitename}}" class="img-fluid">
                </h1>
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
                
                $buffer .= $indent . '                <h1 class="logo d-none d-sm-block">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="img-fluid">
';
                $buffer .= $indent . '                </h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37c1e1177e26955e50a654357211977f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <h1 class="logo d-none d-sm-block">
              <img src="{{customlogosidebar}}" alt="{{sitename}}" class="img-fluid">
          </h1>
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
                
                $buffer .= $indent . '          <h1 class="logo d-none d-sm-block">
';
                $buffer .= $indent . '              <img src="';
                $value = $this->resolveValue($context->find('customlogosidebar'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="img-fluid">
';
                $buffer .= $indent . '          </h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a7fc588e5e2ac7453379d33a752316e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidden';
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
                
                $buffer .= 'hidden';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04523da33a093ea32a9f13d0ef96472a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="c-logo text-center">
      <a href="{{#customrooturl}}{{customrooturl}}{{/customrooturl}}{{^customrooturl}}{{{ config.wwwroot }}}{{/customrooturl}}" class="navbar-brand {{#customlogosidebar}}has-logo{{/customlogosidebar}}{{# output.should_display_navbar_logo }}has-logo{{/ output.should_display_navbar_logo }} {{^ output.should_display_navbar_logo }}d-none d-sm-inline{{/ output.should_display_navbar_logo }}">

          {{^ customlogosidebar}}
            {{# output.should_display_navbar_logo }}
                <h1 class="logo d-none d-sm-block">
                    <img src="{{output.get_compact_logo_url}}" alt="{{sitename}}" class="img-fluid">
                </h1>
            {{/ output.should_display_navbar_logo }}
          {{/ customlogosidebar}}


          {{#customlogosidebar}}
          <h1 class="logo d-none d-sm-block">
              <img src="{{customlogosidebar}}" alt="{{sitename}}" class="img-fluid">
          </h1>
          {{/customlogosidebar}}

          <h1 class="{{#customlogosidebar}}hidden{{/customlogosidebar}}{{^customlogosidebar}}{{# output.should_display_navbar_logo }}hidden{{/ output.should_display_navbar_logo }}{{/customlogosidebar}} site-name text-center">{{{ sitename }}}</h1>

      </a>
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
                
                $buffer .= $indent . '    <div class="c-logo text-center">
';
                $buffer .= $indent . '      <a href="';
                // 'customrooturl' section
                $value = $context->find('customrooturl');
                $buffer .= $this->section92ba138132a826d34d9bc5ca4c95c99c($context, $indent, $value);
                // 'customrooturl' inverted section
                $value = $context->find('customrooturl');
                if (empty($value)) {
                    
                    $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                    $buffer .= $value;
                }
                $buffer .= '" class="navbar-brand ';
                // 'customlogosidebar' section
                $value = $context->find('customlogosidebar');
                $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
                // 'output.should_display_navbar_logo' section
                $value = $context->findDot('output.should_display_navbar_logo');
                $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
                $buffer .= ' ';
                // 'output.should_display_navbar_logo' inverted section
                $value = $context->findDot('output.should_display_navbar_logo');
                if (empty($value)) {
                    
                    $buffer .= 'd-none d-sm-inline';
                }
                $buffer .= '">
';
                $buffer .= $indent . '
';
                // 'customlogosidebar' inverted section
                $value = $context->find('customlogosidebar');
                if (empty($value)) {
                    
                    // 'output.should_display_navbar_logo' section
                    $value = $context->findDot('output.should_display_navbar_logo');
                    $buffer .= $this->section86747da5ca23bdff42a836f64ca737de($context, $indent, $value);
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                // 'customlogosidebar' section
                $value = $context->find('customlogosidebar');
                $buffer .= $this->section37c1e1177e26955e50a654357211977f($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '          <h1 class="';
                // 'customlogosidebar' section
                $value = $context->find('customlogosidebar');
                $buffer .= $this->section9a7fc588e5e2ac7453379d33a752316e($context, $indent, $value);
                // 'customlogosidebar' inverted section
                $value = $context->find('customlogosidebar');
                if (empty($value)) {
                    
                    // 'output.should_display_navbar_logo' section
                    $value = $context->findDot('output.should_display_navbar_logo');
                    $buffer .= $this->section9a7fc588e5e2ac7453379d33a752316e($context, $indent, $value);
                }
                $buffer .= ' site-name text-center">';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= $value;
                $buffer .= '</h1>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      </a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF298b025230719ab0e4ae3c66b8a3f2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{ sidebartopblocks }}}
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
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('sidebartopblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35b00e535633f589739dcf5a1b5871a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{ sidebarblocks }}}
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
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('sidebarblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b64ea43b3cb7e796e3ab24e5bd7900c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<nav class="c-flat-nav my-4"><div class="c-flat-nav-items">{{> theme_space/custom_menu }}</div></nav>';
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
                
                $buffer .= '<nav class="c-flat-nav my-4"><div class="c-flat-nav-items">';
                if ($partial = $this->mustache->loadPartial('theme_space/custom_menu')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</div></nav>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28ebc57657db0b49af16ea4be031f44c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="sidebar-custom-box-nav my-4">
        <hr class="hr" />
        <h4 class="sidebar-custom-box-nav-title">{{{SidebarCustomNavTitle}}}</h4>
        {{{SidebarCustomNavigationLinks}}}
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
                
                $buffer .= $indent . '    <div class="sidebar-custom-box-nav my-4">
';
                $buffer .= $indent . '        <hr class="hr" />
';
                $buffer .= $indent . '        <h4 class="sidebar-custom-box-nav-title">';
                $value = $this->resolveValue($context->find('SidebarCustomNavTitle'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('SidebarCustomNavigationLinks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE32d20e05cbabaf5b30b3525e4ebbfdd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="sidebar-custom-box my-4">
        <hr class="hr" />
        <h4 class="sidebar-custom-box-title">{{{SidebarCustomHeading}}}</h4>
        <div class="sidebar-custom-box-desc">{{{SidebarCustomText}}}</div>
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
                
                $buffer .= $indent . '    <div class="sidebar-custom-box my-4">
';
                $buffer .= $indent . '        <hr class="hr" />
';
                $buffer .= $indent . '        <h4 class="sidebar-custom-box-title">';
                $value = $this->resolveValue($context->find('SidebarCustomHeading'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '        <div class="sidebar-custom-box-desc">';
                $value = $this->resolveValue($context->find('SidebarCustomText'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
