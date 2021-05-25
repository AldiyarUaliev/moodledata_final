<?php

class __Mustache_a67db7ea7a669490a80230ec0dd02d0c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'showauthorinfo' section
        $value = $context->find('showauthorinfo');
        $buffer .= $this->sectionD8faf4894951e6a32992912ff9abb694($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <title>';
        $value = $this->resolveValue($context->findDot('output.page_title'), $context);
        $buffer .= $value;
        $buffer .= '</title>
';
        $buffer .= $indent . '    <link rel="shortcut icon" href="';
        $value = $this->resolveValue($context->findDot('output.favicon'), $context);
        $buffer .= $value;
        $buffer .= '" />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        // 'CustomWebFont' inverted section
        $value = $context->find('CustomWebFont');
        if (empty($value)) {
            
            $buffer .= '<link href="';
            // 'googlefonturl' section
            $value = $context->find('googlefonturl');
            $buffer .= $this->section131dcda855640c5f53e0bcd694f75dea($context, $indent, $value);
            // 'googlefonturl' inverted section
            $value = $context->find('googlefonturl');
            if (empty($value)) {
                
                $buffer .= 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,700';
            }
            $buffer .= '" rel="stylesheet">';
        }
        $buffer .= '
';
        // 'CustomWebFont' section
        $value = $context->find('CustomWebFont');
        $buffer .= $this->sectionF9faf62214b160666b7cf0185480aae9($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'additionalcustomfont' section
        $value = $context->find('additionalcustomfont');
        $buffer .= $this->sectionDaf8ed1ee70cc5bbcc474d1c142312a4($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'isslider' section
        $value = $context->find('isslider');
        $buffer .= $this->section04a1688d689367bb1935133b053e1ee7($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <script src="';
        $value = $this->resolveValue($context->find('siteurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/theme/space/addons/overlayscrollbars/OverlayScrollbars.min.js"></script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_head_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0">
';
        $buffer .= $indent . '
';
        // 'morefonts' section
        $value = $context->find('morefonts');
        $buffer .= $this->sectionFcaaa691afbe0167bbd1158dc9b0fcac($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'CustomWebFontSH' section
        $value = $context->find('CustomWebFontSH');
        $buffer .= $this->section453a7b9dcde2a108a061f97b1b84540b($context, $indent, $value);

        return $buffer;
    }

    private function sectionD8faf4894951e6a32992912ff9abb694(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <!-- * * * * * * *

      Theme: SPACE Moodle Theme
      Author: Rosea Themes
      Version: 1.12.7

      Copyright © 2018 - 2021

    * * * * * * * -->
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
                
                $buffer .= $indent . '    <!-- * * * * * * *
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      Theme: SPACE Moodle Theme
';
                $buffer .= $indent . '      Author: Rosea Themes
';
                $buffer .= $indent . '      Version: 1.12.7
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      Copyright © 2018 - 2021
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    * * * * * * * -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section131dcda855640c5f53e0bcd694f75dea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{googlefonturl}}}';
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
                
                $value = $this->resolveValue($context->find('googlefonturl'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9faf62214b160666b7cf0185480aae9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{{ CustomWebFontHTML }}}
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
                
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('CustomWebFontHTML'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDaf8ed1ee70cc5bbcc474d1c142312a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{ CustomWebFontHTML }}}
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
                $value = $this->resolveValue($context->find('CustomWebFontHTML'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04a1688d689367bb1935133b053e1ee7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <script src="{{siteurl}}/theme/space/addons/tinyslider/tiny-slider.js"></script>
    <link rel="stylesheet" href="{{siteurl}}/theme/space/addons/tinyslider/tiny-slider.css">
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
                
                $buffer .= $indent . '    <script src="';
                $value = $this->resolveValue($context->find('siteurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/theme/space/addons/tinyslider/tiny-slider.js"></script>
';
                $buffer .= $indent . '    <link rel="stylesheet" href="';
                $value = $this->resolveValue($context->find('siteurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/theme/space/addons/tinyslider/tiny-slider.css">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a964d7293875e1e6006b774443ccfcc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    [lang="{{langcode}}"] body {
        font-family: {{{additionalfontname}}};
    }
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
                
                $buffer .= $indent . '    [lang="';
                $value = $this->resolveValue($context->find('langcode'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"] body {
';
                $buffer .= $indent . '        font-family: ';
                $value = $this->resolveValue($context->find('additionalfontname'), $context);
                $buffer .= $value;
                $buffer .= ';
';
                $buffer .= $indent . '    }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcaaa691afbe0167bbd1158dc9b0fcac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <style type="text/css">
    {{#fonts}}
    [lang="{{langcode}}"] body {
        font-family: {{{additionalfontname}}};
    }
    {{/fonts}}
    </style>
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
                
                $buffer .= $indent . '    <style type="text/css">
';
                // 'fonts' section
                $value = $context->find('fonts');
                $buffer .= $this->section2a964d7293875e1e6006b774443ccfcc($context, $indent, $value);
                $buffer .= $indent . '    </style>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
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
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section453a7b9dcde2a108a061f97b1b84540b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <style type="text/css">
    @font-face {
        font-family: {{{googlefontname}}};
        src: url(\'{{#customfontlighteot}}{{.}}{{/customfontlighteot}}\');
        src: url(\'{{#customfontlighteot}}{{.}}{{/customfontlighteot}}?#iefix\') format(\'embedded-opentype\'),
            url(\'{{#customfontlightwoff2}}{{.}}{{/customfontlightwoff2}}\') format(\'woff2\'),
            url(\'{{#customfontlightwoff}}{{.}}{{/customfontlightwoff}}\') format(\'woff\'),
            url(\'{{#customfontlightttf}}{{.}}{{/customfontlightttf}}\') format(\'truetype\'),
            url(\'{{#customfontlightsvg}}{{.}}{{/customfontlightsvg}}#{{#customfontlightname}}{{.}}{{/customfontlightname}}\') format(\'svg\');
        font-weight: 300;
        font-style: normal;
    }
    @font-face {
        font-family: {{{googlefontname}}};
        src: url(\'{{#customfontregulareot}}{{.}}{{/customfontregulareot}}\');
        src: url(\'{{#customfontregulareot}}{{.}}{{/customfontregulareot}}?#iefix\') format(\'embedded-opentype\'),
            url(\'{{#customfontregularwoff2}}{{.}}{{/customfontregularwoff2}}\') format(\'woff2\'),
            url(\'{{#customfontregularwoff}}{{.}}{{/customfontregularwoff}}\') format(\'woff\'),
            url(\'{{#customfontregularttf}}{{.}}{{/customfontregularttf}}\') format(\'truetype\'),
            url(\'{{#customfontregularsvg}}{{.}}{{/customfontregularsvg}}#{{#customfontregularname}}{{.}}{{/customfontregularname}}\') format(\'svg\');
        font-weight: 400;
        font-style: normal;
    }
    @font-face {
        font-family: {{{googlefontname}}};
        src: url(\'{{#customfontmediumeot}}{{.}}{{/customfontmediumeot}}\');
        src: url(\'{{#customfontmediumeot}}{{.}}{{/customfontmediumeot}}?#iefix\') format(\'embedded-opentype\'),
            url(\'{{#customfontmediumwoff2}}{{.}}{{/customfontmediumwoff2}}\') format(\'woff2\'),
            url(\'{{#customfontmediumwoff}}{{.}}{{/customfontmediumwoff}}\') format(\'woff\'),
            url(\'{{#customfontmediumttf}}{{.}}{{/customfontmediumttf}}\') format(\'truetype\'),
            url(\'{{#customfontmediumsvg}}{{.}}{{/customfontmediumsvg}}#{{#customfontmediumname}}{{.}}{{/customfontmediumname}}\') format(\'svg\');
        font-weight: 500;
        font-style: normal;
    }

    @font-face {
        font-family: {{{googlefontname}}};
        src: url(\'{{#customfontboldeot}}{{.}}{{/customfontboldeot}}\');
        src: url(\'{{#customfontboldeot}}{{.}}{{/customfontboldeot}}?#iefix\') format(\'embedded-opentype\'),
            url(\'{{#customfontboldwoff2}}{{.}}{{/customfontboldwoff2}}\') format(\'woff2\'),
            url(\'{{#customfontboldwoff}}{{.}}{{/customfontboldwoff}}\') format(\'woff\'),
            url(\'{{#customfontboldttf}}{{.}}{{/customfontboldttf}}\') format(\'truetype\'),
            url(\'{{#customfontboldsvg}}{{.}}{{/customfontboldsvg}}#{{#customfontboldname}}{{.}}{{/customfontboldname}}\') format(\'svg\');
        font-weight: 700;
        font-style: normal;
    }
    </style>
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
                
                $buffer .= $indent . '    <style type="text/css">
';
                $buffer .= $indent . '    @font-face {
';
                $buffer .= $indent . '        font-family: ';
                $value = $this->resolveValue($context->find('googlefontname'), $context);
                $buffer .= $value;
                $buffer .= ';
';
                $buffer .= $indent . '        src: url(\'';
                // 'customfontlighteot' section
                $value = $context->find('customfontlighteot');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\');
';
                $buffer .= $indent . '        src: url(\'';
                // 'customfontlighteot' section
                $value = $context->find('customfontlighteot');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '?#iefix\') format(\'embedded-opentype\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontlightwoff2' section
                $value = $context->find('customfontlightwoff2');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'woff2\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontlightwoff' section
                $value = $context->find('customfontlightwoff');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'woff\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontlightttf' section
                $value = $context->find('customfontlightttf');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'truetype\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontlightsvg' section
                $value = $context->find('customfontlightsvg');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '#';
                // 'customfontlightname' section
                $value = $context->find('customfontlightname');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'svg\');
';
                $buffer .= $indent . '        font-weight: 300;
';
                $buffer .= $indent . '        font-style: normal;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '    @font-face {
';
                $buffer .= $indent . '        font-family: ';
                $value = $this->resolveValue($context->find('googlefontname'), $context);
                $buffer .= $value;
                $buffer .= ';
';
                $buffer .= $indent . '        src: url(\'';
                // 'customfontregulareot' section
                $value = $context->find('customfontregulareot');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\');
';
                $buffer .= $indent . '        src: url(\'';
                // 'customfontregulareot' section
                $value = $context->find('customfontregulareot');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '?#iefix\') format(\'embedded-opentype\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontregularwoff2' section
                $value = $context->find('customfontregularwoff2');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'woff2\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontregularwoff' section
                $value = $context->find('customfontregularwoff');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'woff\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontregularttf' section
                $value = $context->find('customfontregularttf');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'truetype\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontregularsvg' section
                $value = $context->find('customfontregularsvg');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '#';
                // 'customfontregularname' section
                $value = $context->find('customfontregularname');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'svg\');
';
                $buffer .= $indent . '        font-weight: 400;
';
                $buffer .= $indent . '        font-style: normal;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '    @font-face {
';
                $buffer .= $indent . '        font-family: ';
                $value = $this->resolveValue($context->find('googlefontname'), $context);
                $buffer .= $value;
                $buffer .= ';
';
                $buffer .= $indent . '        src: url(\'';
                // 'customfontmediumeot' section
                $value = $context->find('customfontmediumeot');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\');
';
                $buffer .= $indent . '        src: url(\'';
                // 'customfontmediumeot' section
                $value = $context->find('customfontmediumeot');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '?#iefix\') format(\'embedded-opentype\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontmediumwoff2' section
                $value = $context->find('customfontmediumwoff2');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'woff2\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontmediumwoff' section
                $value = $context->find('customfontmediumwoff');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'woff\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontmediumttf' section
                $value = $context->find('customfontmediumttf');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'truetype\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontmediumsvg' section
                $value = $context->find('customfontmediumsvg');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '#';
                // 'customfontmediumname' section
                $value = $context->find('customfontmediumname');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'svg\');
';
                $buffer .= $indent . '        font-weight: 500;
';
                $buffer .= $indent . '        font-style: normal;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    @font-face {
';
                $buffer .= $indent . '        font-family: ';
                $value = $this->resolveValue($context->find('googlefontname'), $context);
                $buffer .= $value;
                $buffer .= ';
';
                $buffer .= $indent . '        src: url(\'';
                // 'customfontboldeot' section
                $value = $context->find('customfontboldeot');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\');
';
                $buffer .= $indent . '        src: url(\'';
                // 'customfontboldeot' section
                $value = $context->find('customfontboldeot');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '?#iefix\') format(\'embedded-opentype\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontboldwoff2' section
                $value = $context->find('customfontboldwoff2');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'woff2\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontboldwoff' section
                $value = $context->find('customfontboldwoff');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'woff\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontboldttf' section
                $value = $context->find('customfontboldttf');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'truetype\'),
';
                $buffer .= $indent . '            url(\'';
                // 'customfontboldsvg' section
                $value = $context->find('customfontboldsvg');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '#';
                // 'customfontboldname' section
                $value = $context->find('customfontboldname');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '\') format(\'svg\');
';
                $buffer .= $indent . '        font-weight: 700;
';
                $buffer .= $indent . '        font-style: normal;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '    </style>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
