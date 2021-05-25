<?php

class __Mustache_688f3b72cea251b5c295be47d7fc2bc3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="c-flat-nav mt-0 m-b-1 list-group" aria-label="';
        $value = $this->resolveValue($context->find('firstcollectionlabel'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '  <ul class="m-1 p-0">
';
        // 'flatnavigation' section
        $value = $context->find('flatnavigation');
        $buffer .= $this->section14b87d8938a35f2aacd9b3d0e2557975($context, $indent, $value);
        $buffer .= $indent . '  </ul>
';
        $buffer .= $indent . '</nav>
';

        return $buffer;
    }

    private function section66c348244dc268c9579ed322adbef015(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          </ul>
        </nav>
        <nav class="c-nav mt-0 m-b-1 list-group" aria-label="{{get_collectionlabel}}">
          <ul class="m-0 p-0">
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
                
                $buffer .= $indent . '          </ul>
';
                $buffer .= $indent . '        </nav>
';
                $buffer .= $indent . '        <nav class="c-nav mt-0 m-b-1 list-group" aria-label="';
                $value = $this->resolveValue($context->find('get_collectionlabel'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '          <ul class="m-0 p-0">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e96ec75439305fc88c78e77946e47bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}} ';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2233087813f2f0dc85c21e6f8a0b28de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-parent-key="{{.}}"';
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
                
                $buffer .= 'data-parent-key="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c636b8d211c8807beb0b37869ad3b26(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}';
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
                
                $value = $this->resolveValue($context->findDot('icon.pix'), $context);
                $buffer .= $value;
                $buffer .= ', ';
                $value = $this->resolveValue($context->findDot('icon.component'), $context);
                $buffer .= $value;
                $buffer .= ', ';
                $value = $this->resolveValue($context->findDot('icon.alt'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF74d6e1fd91cea7ff61814bcd2d198a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="nav-icon">
                    {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                </span>
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
                
                $buffer .= $indent . '                <span class="nav-icon">
';
                $buffer .= $indent . '                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0c636b8d211c8807beb0b37869ad3b26($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section439e06ff4a9ccfa1078af853d782d1cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li>
            <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}} {{#classes}}{{.}} {{/classes}}" href="{{{action}}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
                <div class="c-nav-item-container">
                {{#icon.pix}}
                <span class="nav-icon">
                    {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                </span>
                {{/icon.pix}}
                <span class="text m-l-{{get_indent}}">{{{text}}}</span>
                </div>
            </a>
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
                $buffer .= $indent . '            <a class="list-group-item list-group-item-action ';
                // 'isactive' section
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                // 'classes' section
                $value = $context->find('classes');
                $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '" data-key="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-isexpandable="';
                $value = $this->resolveValue($context->find('isexpandable'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-indent="';
                $value = $this->resolveValue($context->find('get_indent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-showdivider="';
                $value = $this->resolveValue($context->find('showdivider'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-nodetype="';
                $value = $this->resolveValue($context->find('nodetype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-collapse="';
                $value = $this->resolveValue($context->find('collapse'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-forceopen="';
                $value = $this->resolveValue($context->find('forceopen'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-isactive="';
                $value = $this->resolveValue($context->find('isactive'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-hidden="';
                $value = $this->resolveValue($context->find('hidden'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-preceedwithhr="';
                $value = $this->resolveValue($context->find('preceedwithhr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'parent.key' section
                $value = $context->findDot('parent.key');
                $buffer .= $this->section2233087813f2f0dc85c21e6f8a0b28de($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                <div class="c-nav-item-container">
';
                // 'icon.pix' section
                $value = $context->findDot('icon.pix');
                $buffer .= $this->sectionF74d6e1fd91cea7ff61814bcd2d198a5($context, $indent, $value);
                $buffer .= $indent . '                <span class="text m-l-';
                $value = $this->resolveValue($context->find('get_indent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
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
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
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
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a62447be66d0d625de89fdae267475f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                      <span class="nav-icon">
                                          {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                                      </span>
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
                
                $buffer .= $indent . '                                      <span class="nav-icon">
';
                $buffer .= $indent . '                                          ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0c636b8d211c8807beb0b37869ad3b26($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                      </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section014cd23ede37d1aa8f6d70fb3280c182(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                          {{^is_section}}
                              <li class="{{#isactive}}active{{/isactive}}" data-key="{{key}}">
                                <div class="list-group-item {{#classes}}{{.}} {{/classes}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
                                  <a class="{{#isactive}}active{{/isactive}}" href="{{{action}}}">
                                    <div class="c-nav-item-container">
                                      {{#icon.pix}}
                                      <span class="nav-icon">
                                          {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                                      </span>
                                      {{/icon.pix}}
                                      <span class="text">{{{text}}}</span>
                                    </div>
                                  </a>
                                </div>
                              </li>
                          {{/is_section}}
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
                
                // 'is_section' inverted section
                $value = $context->find('is_section');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                              <li class="';
                    // 'isactive' section
                    $value = $context->find('isactive');
                    $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                    $buffer .= '" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                                <div class="list-group-item ';
                    // 'classes' section
                    $value = $context->find('classes');
                    $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                    $buffer .= '" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-isexpandable="';
                    $value = $this->resolveValue($context->find('isexpandable'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-indent="';
                    $value = $this->resolveValue($context->find('get_indent'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-showdivider="';
                    $value = $this->resolveValue($context->find('showdivider'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-type="';
                    $value = $this->resolveValue($context->find('type'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-nodetype="';
                    $value = $this->resolveValue($context->find('nodetype'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-collapse="';
                    $value = $this->resolveValue($context->find('collapse'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-forceopen="';
                    $value = $this->resolveValue($context->find('forceopen'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-isactive="';
                    $value = $this->resolveValue($context->find('isactive'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-hidden="';
                    $value = $this->resolveValue($context->find('hidden'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-preceedwithhr="';
                    $value = $this->resolveValue($context->find('preceedwithhr'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" ';
                    // 'parent.key' section
                    $value = $context->findDot('parent.key');
                    $buffer .= $this->section2233087813f2f0dc85c21e6f8a0b28de($context, $indent, $value);
                    $buffer .= '>
';
                    $buffer .= $indent . '                                  <a class="';
                    // 'isactive' section
                    $value = $context->find('isactive');
                    $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                    $buffer .= '" href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= $value;
                    $buffer .= '">
';
                    $buffer .= $indent . '                                    <div class="c-nav-item-container">
';
                    // 'icon.pix' section
                    $value = $context->findDot('icon.pix');
                    $buffer .= $this->section5a62447be66d0d625de89fdae267475f($context, $indent, $value);
                    $buffer .= $indent . '                                      <span class="text">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                                    </div>
';
                    $buffer .= $indent . '                                  </a>
';
                    $buffer .= $indent . '                                </div>
';
                    $buffer .= $indent . '                              </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14b87d8938a35f2aacd9b3d0e2557975(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{#showdivider}}
          </ul>
        </nav>
        <nav class="c-nav mt-0 m-b-1 list-group" aria-label="{{get_collectionlabel}}">
          <ul class="m-0 p-0">
      {{/showdivider}}
      {{#action}}
        <li>
            <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}} {{#classes}}{{.}} {{/classes}}" href="{{{action}}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
                <div class="c-nav-item-container">
                {{#icon.pix}}
                <span class="nav-icon">
                    {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                </span>
                {{/icon.pix}}
                <span class="text m-l-{{get_indent}}">{{{text}}}</span>
                </div>
            </a>
        </li>
      {{/action}}
      {{^action}}
              <li class="sidebar-accordion list-group-item p-0 my-1" data-key="{{key}}">
                  <button class="accordion btn btn-accordion has-arrow w-100 d-block {{^showmycourses}}collapsed{{/showmycourses}} mt-2" id="accordionNav-{{key}}" data-toggle="collapse" data-target="#accordionNavC-{{key}}" aria-expanded="{{^showmycourses}}false{{/showmycourses}}{{#showmycourses}}true{{/showmycourses}}" aria-controls="accordionNavC">

                      <i class="icon fas fa-align-left"></i>
                      <span class="text">{{{text}}}</span>
                      <i class="accordion-icon fas fa-caret-down"></i>

                  </button>
                  
                  <ul id="accordionNavC-{{key}}" class="sidebar-accordion-body m-0 p-1 {{^showmycourses}}collapse{{/showmycourses}}{{#showmycourses}}show{{/showmycourses}}" data-parent="#accordionNav-{{key}}">
                      {{#children}}
                          {{^is_section}}
                              <li class="{{#isactive}}active{{/isactive}}" data-key="{{key}}">
                                <div class="list-group-item {{#classes}}{{.}} {{/classes}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
                                  <a class="{{#isactive}}active{{/isactive}}" href="{{{action}}}">
                                    <div class="c-nav-item-container">
                                      {{#icon.pix}}
                                      <span class="nav-icon">
                                          {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                                      </span>
                                      {{/icon.pix}}
                                      <span class="text">{{{text}}}</span>
                                    </div>
                                  </a>
                                </div>
                              </li>
                          {{/is_section}}
                      {{/children}}
                  </ul>
              </li>
      {{/action}}
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
                
                // 'showdivider' section
                $value = $context->find('showdivider');
                $buffer .= $this->section66c348244dc268c9579ed322adbef015($context, $indent, $value);
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->section439e06ff4a9ccfa1078af853d782d1cd($context, $indent, $value);
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '              <li class="sidebar-accordion list-group-item p-0 my-1" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                  <button class="accordion btn btn-accordion has-arrow w-100 d-block ';
                    // 'showmycourses' inverted section
                    $value = $context->find('showmycourses');
                    if (empty($value)) {
                        
                        $buffer .= 'collapsed';
                    }
                    $buffer .= ' mt-2" id="accordionNav-';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-toggle="collapse" data-target="#accordionNavC-';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" aria-expanded="';
                    // 'showmycourses' inverted section
                    $value = $context->find('showmycourses');
                    if (empty($value)) {
                        
                        $buffer .= 'false';
                    }
                    // 'showmycourses' section
                    $value = $context->find('showmycourses');
                    $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
                    $buffer .= '" aria-controls="accordionNavC">
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '                      <i class="icon fas fa-align-left"></i>
';
                    $buffer .= $indent . '                      <span class="text">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                      <i class="accordion-icon fas fa-caret-down"></i>
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '                  </button>
';
                    $buffer .= $indent . '                  
';
                    $buffer .= $indent . '                  <ul id="accordionNavC-';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" class="sidebar-accordion-body m-0 p-1 ';
                    // 'showmycourses' inverted section
                    $value = $context->find('showmycourses');
                    if (empty($value)) {
                        
                        $buffer .= 'collapse';
                    }
                    // 'showmycourses' section
                    $value = $context->find('showmycourses');
                    $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
                    $buffer .= '" data-parent="#accordionNav-';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    // 'children' section
                    $value = $context->find('children');
                    $buffer .= $this->section014cd23ede37d1aa8f6d70fb3280c182($context, $indent, $value);
                    $buffer .= $indent . '                  </ul>
';
                    $buffer .= $indent . '              </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
