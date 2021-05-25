<?php

class __Mustache_8e4aba547afed5d105d0a276fbdbac1e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="page-footer" class="s-footer">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="c-container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        // 'footercustomnav' section
        $value = $context->find('footercustomnav');
        $buffer .= $this->sectionD9d658e13e44142285eb9daaa18079b4($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="s-footer--copy row no-gutters">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          <div class="s-footer--additional col-12 contact p-0">
';
        $buffer .= $indent . '              <ul class="list-inline">
';
        $buffer .= $indent . '                  ';
        // 'website' section
        $value = $context->find('website');
        $buffer .= $this->sectionDee01cf23035d7cda481d2cb3946e28b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                  ';
        // 'mobile' section
        $value = $context->find('mobile');
        $buffer .= $this->sectionC7d094c4b03429ffa5b158c1140aa7a4($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                  ';
        // 'mail' section
        $value = $context->find('mail');
        $buffer .= $this->sectionB4cfffdbe517c314a797b9896366283c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '              </ul>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '
';
        // 'showsociallist' section
        $value = $context->find('showsociallist');
        $buffer .= $this->section12c186386446dcbfb834bbe03fde813c($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '          <div class="col-12 my-3 p-0">
';
        $buffer .= $indent . '            <span class="copy">';
        $value = $this->resolveValue($context->find('sitename'), $context);
        $buffer .= $value;
        $buffer .= '</span>';
        // 'copyrightText' section
        $value = $context->find('copyrightText');
        $buffer .= $this->section4dfd711be8c36a4abd643260f51597a9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '
';
        // 'CustomFooterText' section
        $value = $context->find('CustomFooterText');
        $buffer .= $this->sectionA96a6052f53ea7b8c5daf8d1c38cbadb($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="o-course-footer">
';
        $buffer .= $indent . '            <div id="course-footer">';
        $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '            <div class="tool_usertours-resettourcontainer"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="o-standard-footer-html">';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        // 'output.page_doc_link' section
        $value = $context->findDot('output.page_doc_link');
        $buffer .= $this->section4541761871dbba4b162924e4bc02102d($context, $indent, $value);
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        // 'CustomAlert' section
        $value = $context->find('CustomAlert');
        $buffer .= $this->section7a38fe2fa1bb42a25f07d23982ec43ed($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'CustomModal' section
        $value = $context->find('CustomModal');
        $buffer .= $this->section8c40464c16197c2430440f3c0c779c15($context, $indent, $value);
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }

    private function sectionD9d658e13e44142285eb9daaa18079b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{ footercustomnav }}}';
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
                
                $value = $this->resolveValue($context->find('footercustomnav'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDee01cf23035d7cda481d2cb3946e28b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li class="d-sm-block d-lg-inline mb-sm-3 mb-lg-0 mr-sm-0 mr-lg-4"><i class="mx-2 fas fa-globe-africa"></i><a href="{{{cwebsiteurl}}}" target="_blank">{{{website}}}</a></li>';
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
                
                $buffer .= '<li class="d-sm-block d-lg-inline mb-sm-3 mb-lg-0 mr-sm-0 mr-lg-4"><i class="mx-2 fas fa-globe-africa"></i><a href="';
                $value = $this->resolveValue($context->find('cwebsiteurl'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('website'), $context);
                $buffer .= $value;
                $buffer .= '</a></li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7d094c4b03429ffa5b158c1140aa7a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li class="d-sm-block d-lg-inline mb-sm-3 mb-lg-0 mr-sm-0 mr-lg-4"><i class="mx-2 fas fa-mobile-alt"></i>{{{mobile}}}</li>';
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
                
                $buffer .= '<li class="d-sm-block d-lg-inline mb-sm-3 mb-lg-0 mr-sm-0 mr-lg-4"><i class="mx-2 fas fa-mobile-alt"></i>';
                $value = $this->resolveValue($context->find('mobile'), $context);
                $buffer .= $value;
                $buffer .= '</li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4cfffdbe517c314a797b9896366283c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li class="d-sm-block d-lg-inline"><i class="mx-2 far fa-envelope-open"></i><a href="mailto:{{mail}}">{{{mail}}}</a></li>';
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
                
                $buffer .= '<li class="d-sm-block d-lg-inline"><i class="mx-2 far fa-envelope-open"></i><a href="mailto:';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= $value;
                $buffer .= '</a></li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF115140b1fb6ae38ea97e00714e5159c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li class="list-inline-item">
                    <a href="{{{facebook}}}" target="_blank" class="facebook">
                      <i class="mr-2 fab fa-facebook"></i>
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
                
                $buffer .= $indent . '                  <li class="list-inline-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="facebook">
';
                $buffer .= $indent . '                      <i class="mr-2 fab fa-facebook"></i>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fc1b5af290c00cf7f2bf07d7d4db069(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li class="list-inline-item">
                    <a href="{{{twitter}}}" target="_blank" class="twitter">
                      <i class="mr-2 fab fa-twitter"></i>
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
                
                $buffer .= $indent . '                  <li class="list-inline-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="twitter">
';
                $buffer .= $indent . '                      <i class="mr-2 fab fa-twitter"></i>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d62832e71082a800b8514de3b6b863f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li class="list-inline-item">
                    <a href="{{{googleplus}}}" target="_blank" class="googleplus">
                      <i class="mr-2 fab fa-google-plus-g"></i>
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
                
                $buffer .= $indent . '                  <li class="list-inline-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('googleplus'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="googleplus">
';
                $buffer .= $indent . '                      <i class="mr-2 fab fa-google-plus-g"></i>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section021306f7aea5cfaf3685d0b39a9eeff7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li class="list-inline-item">
                    <a href="{{{linkedin}}}" target="_blank" class="linkedin">
                      <i class="mr-2 fab fa-linkedin"></i>
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
                
                $buffer .= $indent . '                  <li class="list-inline-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="linkedin">
';
                $buffer .= $indent . '                      <i class="mr-2 fab fa-linkedin"></i>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71065d073841a0535871becebe743581(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li class="list-inline-item">
                    <a href="{{{youtube}}}" target="_blank" class="youtube">
                      <i class="mr-2 fab fa-youtube"></i>
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
                
                $buffer .= $indent . '                  <li class="list-inline-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="youtube">
';
                $buffer .= $indent . '                      <i class="mr-2 fab fa-youtube"></i>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8bc9ccdef023fa633b7fd7024b188b17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li class="list-inline-item">
                    <a href="{{{instagram}}}" target="_blank" class="instagram">
                      <i class="mr-2 fab fa-instagram"></i>
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
                
                $buffer .= $indent . '                  <li class="list-inline-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="instagram">
';
                $buffer .= $indent . '                      <i class="mr-2 fab fa-instagram"></i>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section461e6300fcd5dce87b21fc7423f71986(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  {{{customsocialicon}}}
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
                
                $buffer .= $indent . '                  ';
                $value = $this->resolveValue($context->find('customsocialicon'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12c186386446dcbfb834bbe03fde813c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="s-footer--social col-12 mt-2 mb-1 social p-0">
            <ul class="list-social list-inline m-b-1 mx-0">
                {{#facebook}}
                  <li class="list-inline-item">
                    <a href="{{{facebook}}}" target="_blank" class="facebook">
                      <i class="mr-2 fab fa-facebook"></i>
                    </a>
                  </li>
                {{/facebook}}

                {{#twitter}}
                  <li class="list-inline-item">
                    <a href="{{{twitter}}}" target="_blank" class="twitter">
                      <i class="mr-2 fab fa-twitter"></i>
                    </a>
                  </li>
                {{/twitter}}

                {{#googleplus}}
                  <li class="list-inline-item">
                    <a href="{{{googleplus}}}" target="_blank" class="googleplus">
                      <i class="mr-2 fab fa-google-plus-g"></i>
                    </a>
                  </li>
                {{/googleplus}}

                {{#linkedin}}
                  <li class="list-inline-item">
                    <a href="{{{linkedin}}}" target="_blank" class="linkedin">
                      <i class="mr-2 fab fa-linkedin"></i>
                    </a>
                  </li>
                {{/linkedin}}

                {{#youtube}}
                  <li class="list-inline-item">
                    <a href="{{{youtube}}}" target="_blank" class="youtube">
                      <i class="mr-2 fab fa-youtube"></i>
                    </a>
                  </li>
                {{/youtube}}

                {{#instagram}}
                  <li class="list-inline-item">
                    <a href="{{{instagram}}}" target="_blank" class="instagram">
                      <i class="mr-2 fab fa-instagram"></i>
                    </a>
                  </li>
                {{/instagram}}

                {{#customsocialicon}}
                  {{{customsocialicon}}}
                {{/customsocialicon}}                
            </ul>
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
                
                $buffer .= $indent . '          <div class="s-footer--social col-12 mt-2 mb-1 social p-0">
';
                $buffer .= $indent . '            <ul class="list-social list-inline m-b-1 mx-0">
';
                // 'facebook' section
                $value = $context->find('facebook');
                $buffer .= $this->sectionF115140b1fb6ae38ea97e00714e5159c($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'twitter' section
                $value = $context->find('twitter');
                $buffer .= $this->section6fc1b5af290c00cf7f2bf07d7d4db069($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'googleplus' section
                $value = $context->find('googleplus');
                $buffer .= $this->section7d62832e71082a800b8514de3b6b863f($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'linkedin' section
                $value = $context->find('linkedin');
                $buffer .= $this->section021306f7aea5cfaf3685d0b39a9eeff7($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'youtube' section
                $value = $context->find('youtube');
                $buffer .= $this->section71065d073841a0535871becebe743581($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'instagram' section
                $value = $context->find('instagram');
                $buffer .= $this->section8bc9ccdef023fa633b7fd7024b188b17($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'customsocialicon' section
                $value = $context->find('customsocialicon');
                $buffer .= $this->section461e6300fcd5dce87b21fc7423f71986($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4dfd711be8c36a4abd643260f51597a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="sep">{{{copyrightText}}}</span>';
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
                
                $buffer .= '<span class="sep">';
                $value = $this->resolveValue($context->find('copyrightText'), $context);
                $buffer .= $value;
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9e934908223ced0d051c31025b5a220(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="c-lang-menu d-sm-block d-lg-none mt-4">{{{ output.render_lang_menu }}}</div>';
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
                
                $buffer .= '<div class="c-lang-menu d-sm-block d-lg-none mt-4">';
                $value = $this->resolveValue($context->findDot('output.render_lang_menu'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA96a6052f53ea7b8c5daf8d1c38cbadb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="footer-custom-text--small col-md-11 col-lg-6 m-b-2 p-0">
            {{{CustomFooterText}}}

            {{#output.render_lang_menu}}<div class="c-lang-menu d-sm-block d-lg-none mt-4">{{{ output.render_lang_menu }}}</div>{{/output.render_lang_menu}}

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
                
                $buffer .= $indent . '          <div class="footer-custom-text--small col-md-11 col-lg-6 m-b-2 p-0">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('CustomFooterText'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            ';
                // 'output.render_lang_menu' section
                $value = $context->findDot('output.render_lang_menu');
                $buffer .= $this->sectionC9e934908223ced0d051c31025b5a220($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4541761871dbba4b162924e4bc02102d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="o-page-doc-link">
            <p class="helplink">{{{ output.page_doc_link }}}</p>
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
                
                $buffer .= $indent . '        <div class="o-page-doc-link">
';
                $buffer .= $indent . '            <p class="helplink">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a38fe2fa1bb42a25f07d23982ec43ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="customAlert" class="cookiealert c-alert alert alert-warning alert-dismissible" role="alert">
  <div class="c-alert-content">{{{CustomAlertContent}}}</div>
  <button id="customAlertClose" type="button" class="acceptcookies c-alert-close-btn" aria-label="Close">{{{CustomAlertButton}}}</button>
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
                
                $buffer .= $indent . '<div id="customAlert" class="cookiealert c-alert alert alert-warning alert-dismissible" role="alert">
';
                $buffer .= $indent . '  <div class="c-alert-content">';
                $value = $this->resolveValue($context->find('CustomAlertContent'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '  <button id="customAlertClose" type="button" class="acceptcookies c-alert-close-btn" aria-label="Close">';
                $value = $this->resolveValue($context->find('CustomAlertButton'), $context);
                $buffer .= $value;
                $buffer .= '</button>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c40464c16197c2430440f3c0c779c15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="customModal" class="modal-fixed" tabindex="-1" role="dialog">
  <div class="modal-header">
    <button id="customModalClose" type="button" class="close" data-dismiss="modal-fixed" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        {{{CustomModalContent}}}
        {{{CustomModalContentHTML}}}
      </div>
    </div>
  </div>
  <div class="modal-backdrop in show" aria-hidden="true" data-region="modal-backdrop" style="z-index: -1;"></div>
</div>

<script>
  var customModal = $("#customModal"),
      customModalToggle = $("#customModalClose");

  customModalToggle.on("click", function(e) {
     e.preventDefault();
     customModal.toggleClass("fade");
  });
</script>
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
                
                $buffer .= $indent . '<div id="customModal" class="modal-fixed" tabindex="-1" role="dialog">
';
                $buffer .= $indent . '  <div class="modal-header">
';
                $buffer .= $indent . '    <button id="customModalClose" type="button" class="close" data-dismiss="modal-fixed" aria-label="Close">
';
                $buffer .= $indent . '      <span aria-hidden="true">&times;</span>
';
                $buffer .= $indent . '    </button>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '  <div class="modal-dialog" role="document">
';
                $buffer .= $indent . '    <div class="modal-content">
';
                $buffer .= $indent . '      <div class="modal-body">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('CustomModalContent'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('CustomModalContentHTML'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '  <div class="modal-backdrop in show" aria-hidden="true" data-region="modal-backdrop" style="z-index: -1;"></div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<script>
';
                $buffer .= $indent . '  var customModal = $("#customModal"),
';
                $buffer .= $indent . '      customModalToggle = $("#customModalClose");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  customModalToggle.on("click", function(e) {
';
                $buffer .= $indent . '     e.preventDefault();
';
                $buffer .= $indent . '     customModal.toggleClass("fade");
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '</script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
