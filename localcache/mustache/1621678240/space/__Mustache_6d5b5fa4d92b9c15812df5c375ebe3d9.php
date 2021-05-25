<?php

class __Mustache_6d5b5fa4d92b9c15812df5c375ebe3d9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="loading-placeholder-content" aria-hidden="true">
';
        // 'cards' section
        $value = $context->find('cards');
        $buffer .= $this->section1a35bd1569a7fe0fed69e947460d0045($context, $indent, $value);
        // 'list' section
        $value = $context->find('list');
        $buffer .= $this->section0ee29d53e606b827099bbc6cac0067c2($context, $indent, $value);
        // 'summary' section
        $value = $context->find('summary');
        $buffer .= $this->section016a51747eb06dbe06ec426cd973677c($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section1a35bd1569a7fe0fed69e947460d0045(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="card-deck dashboard-card-deck one-row" style="height: 13rem;">
        <div class="card dashboard-card border-0" style="padding: 0">
            <div class="bg-pulse-grey w-100" style="height: 3rem; margin; 0"></div>
            <div class="bg-pulse-grey w-100 mt-2" style="height: 1rem"></div>
        </div>
        <div class="card dashboard-card border-0" style="padding: 0">
            <div class="bg-pulse-grey w-100" style="height: 3rem; margin; 0"></div>
            <div class="bg-pulse-grey w-100 mt-2" style="height: 1rem"></div>
        </div>
        <div class="card dashboard-card border-0" style="padding: 0">
            <div class="bg-pulse-grey w-100" style="height: 3rem; margin; 0"></div>
            <div class="bg-pulse-grey w-100 mt-2" style="height: 1rem"></div>
        </div>
        <div class="card dashboard-card border-0" style="padding: 0">
            <div class="bg-pulse-grey w-100" style="height: 3rem; margin; 0"></div>
            <div class="bg-pulse-grey w-100 mt-2" style="height: 1rem"></div>
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
                
                $buffer .= $indent . '    <div class="card-deck dashboard-card-deck one-row" style="height: 13rem;">
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0" style="padding: 0">
';
                $buffer .= $indent . '            <div class="bg-pulse-grey w-100" style="height: 3rem; margin; 0"></div>
';
                $buffer .= $indent . '            <div class="bg-pulse-grey w-100 mt-2" style="height: 1rem"></div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0" style="padding: 0">
';
                $buffer .= $indent . '            <div class="bg-pulse-grey w-100" style="height: 3rem; margin; 0"></div>
';
                $buffer .= $indent . '            <div class="bg-pulse-grey w-100 mt-2" style="height: 1rem"></div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0" style="padding: 0">
';
                $buffer .= $indent . '            <div class="bg-pulse-grey w-100" style="height: 3rem; margin; 0"></div>
';
                $buffer .= $indent . '            <div class="bg-pulse-grey w-100 mt-2" style="height: 1rem"></div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0" style="padding: 0">
';
                $buffer .= $indent . '            <div class="bg-pulse-grey w-100" style="height: 3rem; margin; 0"></div>
';
                $buffer .= $indent . '            <div class="bg-pulse-grey w-100 mt-2" style="height: 1rem"></div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ee29d53e606b827099bbc6cac0067c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <ul class="list-group">
        <li class="list-group-item course-listitem">
            <div class="col-md-6 span6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
        <li class="list-group-item course-listitem">
            <div class="col-md-6 span6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
    </ul>
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
                
                $buffer .= $indent . '    <ul class="list-group">
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 span6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 span6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section016a51747eb06dbe06ec426cd973677c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="course-summaryitem m-b-1 p-2">
        <div class="d-flex">
            <div class="d-flex">
                <div class="bg-pulse-grey rounded m-0 p-0 m-r-1" style="height: 7rem; margin; 0; width: 7rem;"></div>
            </div>
            <div class="d-flex w-100 flex-column">
                <div class="bg-pulse-grey w-100" style="height: 13rem"></div>
            </div>
        </div>
        <div class="d-flex mt-3">
            <div class="d-flex">
                <div class="bg-pulse-grey rounded m-0 p-0 m-r-1" style="height: 7rem; margin; 0; width: 7rem;"></div>
            </div>
            <div class="d-flex w-100 flex-column">
                <div class="bg-pulse-grey w-100" style="height: 13rem"></div>
            </div>
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
                
                $buffer .= $indent . '    <div class="course-summaryitem m-b-1 p-2">
';
                $buffer .= $indent . '        <div class="d-flex">
';
                $buffer .= $indent . '            <div class="d-flex">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded m-0 p-0 m-r-1" style="height: 7rem; margin; 0; width: 7rem;"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="d-flex w-100 flex-column">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 13rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="d-flex mt-3">
';
                $buffer .= $indent . '            <div class="d-flex">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded m-0 p-0 m-r-1" style="height: 7rem; margin; 0; width: 7rem;"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="d-flex w-100 flex-column">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 13rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
