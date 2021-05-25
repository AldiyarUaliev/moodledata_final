<?php

class __Mustache_4be459cf1c63926ff8335f6ad9492f5d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>';
        $value = $this->resolveValue($context->findDot('result.name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h1>
';
        $buffer .= $indent . '<h3>Пәндер: ';
        $value = $this->resolveValue($context->findDot('result.first_subject_text'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ', ';
        $value = $this->resolveValue($context->findDot('result.second_subject_text'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '    .test{
';
        $buffer .= $indent . '        margin-top: 2%;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 300px) {
';
        $buffer .= $indent . '        .test{
';
        $buffer .= $indent . '            margin-top: 4%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 200px) {
';
        $buffer .= $indent . '        .test{
';
        $buffer .= $indent . '            margin-top: 4%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 400px) {
';
        $buffer .= $indent . '        .test{
';
        $buffer .= $indent . '            margin-top: 4%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 500px) {
';
        $buffer .= $indent . '        .test{
';
        $buffer .= $indent . '            margin-top: 4%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
';
        $buffer .= $indent . '<br>
';
        $buffer .= $indent . '<ul class="nav nav-tabs" id="myTab" role="tablist">
';
        $buffer .= $indent . '    <li class="nav-item">
';
        $buffer .= $indent . '        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Сипаттама</a>
';
        $buffer .= $indent . '    </li>
';
        $buffer .= $indent . '    <li class="nav-item">
';
        $buffer .= $indent . '        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Университеттер</a>
';
        $buffer .= $indent . '    </li>
';
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '<br>
';
        $buffer .= $indent . '<div class="tab-content" id="myTabContent">
';
        $buffer .= $indent . '    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-md-7">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('result.description'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-md-1"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="col-md-3">
';
        $buffer .= $indent . '                <div class="card">
';
        $buffer .= $indent . '                    <div class="card-body">
';
        $buffer .= $indent . '                        <h5 class="card-title">Білім беру</h5>
';
        $buffer .= $indent . '                        <p class="card-text">Жалақы: ';
        $value = $this->resolveValue($context->findDot('result.salary'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                        <p class="card-text">Сұраныс: ';
        $value = $this->resolveValue($context->findDot('result.suranys'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <br>
';
        $buffer .= $indent . '                <div class="card">
';
        $buffer .= $indent . '                    <div class="card-body">
';
        $buffer .= $indent . '                        <h5 class="card-title">Код: ';
        $value = $this->resolveValue($context->findDot('result.code'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h5>
';
        $buffer .= $indent . '                        <p class="card-text">Мин. ұпай: ';
        $value = $this->resolveValue($context->findDot('result.point'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                        <p class="card-text">Грант саны: ';
        $value = $this->resolveValue($context->findDot('result.grant_count'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-md-1"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
';
        $buffer .= $indent . '        <div class="container">
';
        $buffer .= $indent . '            <div class="row" id="univerList">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '    $(function () {
';
        $buffer .= $indent . '        console.log(';
        $value = $this->resolveValue($context->findDot('result.id'), $context);
        $buffer .= $value;
        $buffer .= ');
';
        $buffer .= $indent . '        $.ajax({
';
        $buffer .= $indent . '            type: "POST",
';
        $buffer .= $indent . '            url: \'univerList.php\',
';
        $buffer .= $indent . '            data: {spec_id: ';
        $value = $this->resolveValue($context->findDot('result.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' },
';
        $buffer .= $indent . '            success: function (response) {
';
        $buffer .= $indent . '                console.log(response);
';
        $buffer .= $indent . '                var jsonData = JSON.parse(response);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                // user is logged in successfully in the back-end
';
        $buffer .= $indent . '                // let\'s redirect
';
        $buffer .= $indent . '                if (jsonData.success == "1") {
';
        $buffer .= $indent . '                    debugger
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    document.getElementById(\'univerList\').innerHTML = "";
';
        $buffer .= $indent . '                    for (var prop in jsonData.test) {
';
        $buffer .= $indent . '                        var newTable = \'<div class="col-md-3 test" >\\n\' +
';
        $buffer .= $indent . '                                \'            <div class="card">\\n\' +
';
        $buffer .= $indent . '                                \'                <div class="card-body">\\n\' +
';
        $buffer .= $indent . '                                \'                    <h5 class="card-title">\'+jsonData.test[prop]["name"]+\'</h5>\\n\' +
';
        $buffer .= $indent . '                                \'                    <p class="card-text">Мамандық саны: \'+jsonData.test[prop]["speccount"]+\'</p>\\n\' +
';
        $buffer .= $indent . '                                \'                    <a href="http://localhost/kyran_final/local/speciality/univer_info.php?id=\'+jsonData.test[prop]["id"]+\'" class="btn btn-primary">Толығырақ</a>\\n\' +
';
        $buffer .= $indent . '                                \'                </div>\\n\' +
';
        $buffer .= $indent . '                                \'            </div>\\n\' +
';
        $buffer .= $indent . '                                \'        </div>\'
';
        $buffer .= $indent . '                        document.getElementById(\'univerList\').innerHTML += newTable;
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '                } else {
';
        $buffer .= $indent . '                    alert(\'Invalid Credentials!\');
';
        $buffer .= $indent . '                }
';
        $buffer .= $indent . '            }
';
        $buffer .= $indent . '        });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }
}
