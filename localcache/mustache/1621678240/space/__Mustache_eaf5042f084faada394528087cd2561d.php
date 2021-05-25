<?php

class __Mustache_eaf5042f084faada394528087cd2561d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_space/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_space/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" class="container-fluid">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="page-content" class="row no-gutters page-main-content">
';
        $buffer .= $indent . '            <div id="region-main-box">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionAaf155ee2ca9aea8251171aef5690ba9($context, $indent, $value);
        $buffer .= $indent . '                <section id="region-main" ';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionA8b30bc710534302fe5cc09141cbd5c7($context, $indent, $value);
        $buffer .= '>
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section14effe9713e59041d76feda62ee8bfc2($context, $indent, $value);
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'hasmaintopwidgets' section
        $value = $context->find('hasmaintopwidgets');
        $buffer .= $this->sectionF9c1e78721a95bbf036acbfcfa7f8bdd($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'hasmainfwidgets' section
        $value = $context->find('hasmainfwidgets');
        $buffer .= $this->section3702a51ed4a4ba8eb49fe7383beb88da($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </section>
';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionEc9a54de28b81e84543d05aee177a2ea($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('theme_space/nav-drawer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_space/footer')) {
            $buffer .= $partial->renderInternal($context);
        }
        if ($partial = $this->mustache->loadPartial('theme_space/footer-scripts')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section97d356f7d39b3bba1750cd2b875cd60f($context, $indent, $value);

        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
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
                
                $buffer .= 'has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAaf155ee2ca9aea8251171aef5690ba9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div id="region-main-settings-menu" class="region-main-settings-menu d-print-none {{#hasblocks}}has-blocks{{/hasblocks}}">
                    <div> {{{ output.region_main_settings_menu }}} </div>
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
                
                $buffer .= $indent . '                <div id="region-main-settings-menu" class="region-main-settings-menu d-print-none ';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= $value;
                $buffer .= ' </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8b30bc710534302fe5cc09141cbd5c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="has-blocks mb-3"';
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
                
                $buffer .= 'class="has-blocks mb-3"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14effe9713e59041d76feda62ee8bfc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="region_main_settings_menu_proxy"></div>
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
                
                $buffer .= $indent . '                    <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9c1e78721a95bbf036acbfcfa7f8bdd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <section data-region="blocks-main-top-widget" class="blocks-main-top-widget d-print-none">
                    {{{ maintopwidgets }}}
                    </section>
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
                
                $buffer .= $indent . '                    <section data-region="blocks-main-top-widget" class="blocks-main-top-widget d-print-none">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('maintopwidgets'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3702a51ed4a4ba8eb49fe7383beb88da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <section data-region="blocks-main-footer-widget" class="blocks-main-footer-widget d-print-none">
                    {{{ mainfwidgets }}}
                    </section>
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
                
                $buffer .= $indent . '                    <section data-region="blocks-main-footer-widget" class="blocks-main-footer-widget d-print-none">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('mainfwidgets'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc9a54de28b81e84543d05aee177a2ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <section data-region="blocks-column" class="sidebar-widgets d-print-none">
                    {{{ sidepreblocks }}}
                </section>
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
                
                $buffer .= $indent . '                <section data-region="blocks-column" class="sidebar-widgets d-print-none">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97d356f7d39b3bba1750cd2b875cd60f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_space/loader\');
require([\'theme_space/loader\'], function() {
    M.util.js_complete(\'theme_space/loader\');
});
require([\'theme_space/backtotop\'], function(mod) {
    mod.init();
});

M.util.js_pending(\'theme_space/drawer\');
require([\'theme_space/drawer\'], function(drawer) {
    drawer.init();
    M.util.js_complete(\'theme_space/drawer\');
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
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_space/loader\');
';
                $buffer .= $indent . 'require([\'theme_space/loader\'], function() {
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_space/loader\');
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . 'require([\'theme_space/backtotop\'], function(mod) {
';
                $buffer .= $indent . '    mod.init();
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'M.util.js_pending(\'theme_space/drawer\');
';
                $buffer .= $indent . 'require([\'theme_space/drawer\'], function(drawer) {
';
                $buffer .= $indent . '    drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_space/drawer\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
