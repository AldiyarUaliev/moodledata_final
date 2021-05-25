<?php

class __Mustache_90be84bb9ecdeab739f664e60c5291b1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="nav-tabs-container w-100 m-b-1 mr-auto">
';
        $buffer .= $indent . '    <ul class="nav nav-tabs role="tablist">
';
        // 'displaygroupingallincludinghidden' section
        $value = $context->find('displaygroupingallincludinghidden');
        $buffer .= $this->section0ab81ec0027997ba0909a1d0b0347f97($context, $indent, $value);
        // 'displaygroupingall' section
        $value = $context->find('displaygroupingall');
        $buffer .= $this->sectionA60d6a3b9b43116d3d7f8362e85a81eb($context, $indent, $value);
        // 'displaygroupinginprogress' section
        $value = $context->find('displaygroupinginprogress');
        $buffer .= $this->sectionA74440397f926889db54ba73d0d4f5b8($context, $indent, $value);
        // 'displaygroupingfuture' section
        $value = $context->find('displaygroupingfuture');
        $buffer .= $this->section3c95791a278988adf78611d911ad3c39($context, $indent, $value);
        // 'displaygroupingpast' section
        $value = $context->find('displaygroupingpast');
        $buffer .= $this->section04d2d209969cb455446d781180541c89($context, $indent, $value);
        // 'displaygroupingcustomfield' section
        $value = $context->find('displaygroupingcustomfield');
        $buffer .= $this->section1a9d923627661f2d704ad857fa39ae9d($context, $indent, $value);
        // 'displaygroupingfavourites' section
        $value = $context->find('displaygroupingfavourites');
        $buffer .= $this->section7800938b00aaee67b5d2861038319f4b($context, $indent, $value);
        // 'displaygroupinghidden' section
        $value = $context->find('displaygroupinghidden');
        $buffer .= $this->section86b652b62caf9bf5fda785a5efce4953($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</div>
';

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

    private function section2baefc80a6c574d8f63074ae198cd792(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:allcoursesincludinghidden, block_myoverview ';
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
                
                $buffer .= ' aria:allcoursesincludinghidden, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8249148f760da3e109caa3663f633ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' allincludinghidden, block_myoverview ';
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
                
                $buffer .= ' allincludinghidden, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ab81ec0027997ba0909a1d0b0347f97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link {{#active}}active{{/active}} {{#allincludinghidden}}active{{/allincludinghidden}}" href="#" data-filter="grouping" data-value="allincludinghidden" data-pref="allincludinghidden" aria-label="{{#str}} aria:allcoursesincludinghidden, block_myoverview {{/str}}" aria-controls="courses-view-{{uniqid}}">
              {{#str}} allincludinghidden, block_myoverview {{/str}}
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
                
                $buffer .= $indent . '      <li class="nav-item">
';
                $buffer .= $indent . '          <a data-toggle="tab" role="tab" class="nav-link ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                // 'allincludinghidden' section
                $value = $context->find('allincludinghidden');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="#" data-filter="grouping" data-value="allincludinghidden" data-pref="allincludinghidden" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2baefc80a6c574d8f63074ae198cd792($context, $indent, $value);
                $buffer .= '" aria-controls="courses-view-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '              ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF8249148f760da3e109caa3663f633ad($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          </a>
';
                $buffer .= $indent . '      </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfccddfcef129c993aebf4ea499b00f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:allcourses, block_myoverview ';
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
                
                $buffer .= ' aria:allcourses, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7aa86992f913c684aa982299bc5b0237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' all, block_myoverview ';
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
                
                $buffer .= ' all, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA60d6a3b9b43116d3d7f8362e85a81eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link {{#active}}active{{/active}} {{#all}}active{{/all}}" href="#" data-filter="grouping" data-value="all" data-pref="all" aria-label="{{#str}} aria:allcourses, block_myoverview {{/str}}" aria-controls="courses-view-{{uniqid}}">
              {{#str}} all, block_myoverview {{/str}}
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
                
                $buffer .= $indent . '      <li class="nav-item">
';
                $buffer .= $indent . '          <a data-toggle="tab" role="tab" class="nav-link ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                // 'all' section
                $value = $context->find('all');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="#" data-filter="grouping" data-value="all" data-pref="all" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBfccddfcef129c993aebf4ea499b00f4($context, $indent, $value);
                $buffer .= '" aria-controls="courses-view-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '              ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7aa86992f913c684aa982299bc5b0237($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          </a>
';
                $buffer .= $indent . '      </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a2e4a8597805bb70bcf8a5cd54793e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:inprogress, block_myoverview ';
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
                
                $buffer .= ' aria:inprogress, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section943672e65d749500a0e39a5c5732165b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' inprogress, block_myoverview ';
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
                
                $buffer .= ' inprogress, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA74440397f926889db54ba73d0d4f5b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link {{#active}}active{{/active}} {{#inprogress}}active{{/inprogress}}" href="#" data-filter="grouping" data-value="inprogress" data-pref="inprogress" aria-label="{{#str}} aria:inprogress, block_myoverview {{/str}}" aria-controls="courses-view-{{uniqid}}">
              {{#str}} inprogress, block_myoverview {{/str}}
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
                
                $buffer .= $indent . '      <li class="nav-item">
';
                $buffer .= $indent . '          <a data-toggle="tab" role="tab" class="nav-link ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                // 'inprogress' section
                $value = $context->find('inprogress');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="#" data-filter="grouping" data-value="inprogress" data-pref="inprogress" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6a2e4a8597805bb70bcf8a5cd54793e1($context, $indent, $value);
                $buffer .= '" aria-controls="courses-view-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '              ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section943672e65d749500a0e39a5c5732165b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          </a>
';
                $buffer .= $indent . '      </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8035b57ae92326df403c45b19619cf49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:future, block_myoverview ';
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
                
                $buffer .= ' aria:future, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73e2d31fbcff71568286bba0816b9728(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' future, block_myoverview ';
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
                
                $buffer .= ' future, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c95791a278988adf78611d911ad3c39(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link {{#active}}active{{/active}} {{#future}}active{{/future}}" href="#" data-filter="grouping" data-value="future" data-pref="future" aria-label="{{#str}} aria:future, block_myoverview {{/str}}" aria-controls="courses-view-{{uniqid}}">
              {{#str}} future, block_myoverview {{/str}}
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
                
                $buffer .= $indent . '      <li class="nav-item">
';
                $buffer .= $indent . '          <a data-toggle="tab" role="tab" class="nav-link ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                // 'future' section
                $value = $context->find('future');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="#" data-filter="grouping" data-value="future" data-pref="future" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8035b57ae92326df403c45b19619cf49($context, $indent, $value);
                $buffer .= '" aria-controls="courses-view-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '              ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section73e2d31fbcff71568286bba0816b9728($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          </a>
';
                $buffer .= $indent . '      </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60cb1bc6b8bef86f0ebcc4100b812ad9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:past, block_myoverview ';
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
                
                $buffer .= ' aria:past, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e8dea46004e4fe5964bd9187fa70241(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' past, block_myoverview ';
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
                
                $buffer .= ' past, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04d2d209969cb455446d781180541c89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link {{#active}}active{{/active}} {{#past}}active{{/past}}" href="#" data-filter="grouping" data-value="past" data-pref="past" aria-label="{{#str}} aria:past, block_myoverview {{/str}}" aria-controls="courses-view-{{uniqid}}">
              {{#str}} past, block_myoverview {{/str}}
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
                
                $buffer .= $indent . '      <li class="nav-item">
';
                $buffer .= $indent . '          <a data-toggle="tab" role="tab" class="nav-link ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                // 'past' section
                $value = $context->find('past');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="#" data-filter="grouping" data-value="past" data-pref="past" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section60cb1bc6b8bef86f0ebcc4100b812ad9($context, $indent, $value);
                $buffer .= '" aria-controls="courses-view-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '              ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1e8dea46004e4fe5964bd9187fa70241($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          </a>
';
                $buffer .= $indent . '      </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf3b21f97bc8fe4506d69d5331b9f4b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:customfield, block_myoverview, {{name}}';
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
                
                $buffer .= 'aria:customfield, block_myoverview, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3697c66ad10fe55b2a9bdd907ce0a152(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <li class="nav-item">
                  <a data-toggle="tab" role="tab" class="nav-link {{#active}}active{{/active}}" href="#" data-filter="grouping"
                     data-value="customfield" data-pref="customfield" data-customfieldvalue="{{value}}"
                     aria-label="{{#str}}aria:customfield, block_myoverview, {{name}}{{/str}}"
                     aria-controls="courses-view-{{uniqid}}">
                      {{name}}
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
                
                $buffer .= $indent . '              <li class="nav-item">
';
                $buffer .= $indent . '                  <a data-toggle="tab" role="tab" class="nav-link ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="#" data-filter="grouping"
';
                $buffer .= $indent . '                     data-value="customfield" data-pref="customfield" data-customfieldvalue="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                     aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEf3b21f97bc8fe4506d69d5331b9f4b9($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                     aria-controls="courses-view-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                      ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '              </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a9d923627661f2d704ad857fa39ae9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          {{#customfieldvalues}}
              <li class="nav-item">
                  <a data-toggle="tab" role="tab" class="nav-link {{#active}}active{{/active}}" href="#" data-filter="grouping"
                     data-value="customfield" data-pref="customfield" data-customfieldvalue="{{value}}"
                     aria-label="{{#str}}aria:customfield, block_myoverview, {{name}}{{/str}}"
                     aria-controls="courses-view-{{uniqid}}">
                      {{name}}
                  </a>
              </li>
          {{/customfieldvalues}}
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
                
                // 'customfieldvalues' section
                $value = $context->find('customfieldvalues');
                $buffer .= $this->section3697c66ad10fe55b2a9bdd907ce0a152($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section153539089d04b17ab672bafd0b927502(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:favourites, block_myoverview ';
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
                
                $buffer .= ' aria:favourites, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a8fa4f1d83488a4bff00ad9c6b4e87c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' favourites, block_myoverview ';
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
                
                $buffer .= ' favourites, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7800938b00aaee67b5d2861038319f4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link {{#active}}active{{/active}} {{#favourites}}active{{/favourites}}" href="#" data-filter="grouping" data-value="favourites"  data-pref="favourites" aria-label="{{#str}} aria:favourites, block_myoverview {{/str}}" aria-controls="courses-view-{{uniqid}}">
              {{#str}} favourites, block_myoverview {{/str}}
          </a>
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
                $buffer .= $indent . '          <a data-toggle="tab" role="tab" class="nav-link ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                // 'favourites' section
                $value = $context->find('favourites');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="#" data-filter="grouping" data-value="favourites"  data-pref="favourites" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section153539089d04b17ab672bafd0b927502($context, $indent, $value);
                $buffer .= '" aria-controls="courses-view-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '              ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6a8fa4f1d83488a4bff00ad9c6b4e87c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0d6bc2dd5f49bbd3f2040aaf69a67b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:hiddencourses, block_myoverview ';
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
                
                $buffer .= ' aria:hiddencourses, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62c24258cc369df41565ccf8e4d02cf8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hiddencourses, block_myoverview ';
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
                
                $buffer .= ' hiddencourses, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86b652b62caf9bf5fda785a5efce4953(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link {{#active}}active{{/active}} {{#hidden}}active{{/hidden}}" href="#" data-filter="grouping" data-value="hidden"  data-pref="hidden" aria-label="{{#str}} aria:hiddencourses, block_myoverview {{/str}}" aria-controls="courses-view-{{uniqid}}">
              {{#str}} hiddencourses, block_myoverview {{/str}}
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
                
                $buffer .= $indent . '      <li class="nav-item">
';
                $buffer .= $indent . '          <a data-toggle="tab" role="tab" class="nav-link ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                // 'hidden' section
                $value = $context->find('hidden');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="#" data-filter="grouping" data-value="hidden"  data-pref="hidden" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA0d6bc2dd5f49bbd3f2040aaf69a67b9($context, $indent, $value);
                $buffer .= '" aria-controls="courses-view-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '              ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section62c24258cc369df41565ccf8e4d02cf8($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          </a>
';
                $buffer .= $indent . '      </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
