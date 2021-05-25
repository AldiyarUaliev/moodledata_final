<?php

class __Mustache_1d40f65974cb5e47ac29b34bf87ac3be extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1>Мамандықтар тізімі</h1>
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '    .container {
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        margin: 10px auto;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .p {
';
        $buffer .= $indent . '        text-align: center;
';
        $buffer .= $indent . '        font-size: 14px;
';
        $buffer .= $indent . '        padding-top: 140px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 300px) {
';
        $buffer .= $indent . '        #canvas {
';
        $buffer .= $indent . '            height: 400px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 200px) {
';
        $buffer .= $indent . '        #canvas {
';
        $buffer .= $indent . '            height: 400px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 400px) {
';
        $buffer .= $indent . '        #canvas {
';
        $buffer .= $indent . '            height: 400px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    @media only screen and (max-width: 300px) {
';
        $buffer .= $indent . '        .card-text {
';
        $buffer .= $indent . '            text-align: center;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 200px) {
';
        $buffer .= $indent . '        .card-text {
';
        $buffer .= $indent . '            text-align: center;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 400px) {
';
        $buffer .= $indent . '        .card-text {
';
        $buffer .= $indent . '            text-align: center;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .card{
';
        $buffer .= $indent . '        border: 2px solid silver;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .card-title{
';
        $buffer .= $indent . '        text-align: center;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    #pointRange{
';
        $buffer .= $indent . '        width: inherit;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .col-md-3{
';
        $buffer .= $indent . '        margin-top: 2%;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 300px) {
';
        $buffer .= $indent . '        .col-md-3{
';
        $buffer .= $indent . '            margin-top: 4%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 200px) {
';
        $buffer .= $indent . '        .col-md-3{
';
        $buffer .= $indent . '            margin-top: 4%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 400px) {
';
        $buffer .= $indent . '        .col-md-3{
';
        $buffer .= $indent . '            margin-top: 4%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 500px) {
';
        $buffer .= $indent . '        .col-md-3{
';
        $buffer .= $indent . '            margin-top: 4%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 300px) {
';
        $buffer .= $indent . '        #search{
';
        $buffer .= $indent . '            text-align: center;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 200px) {
';
        $buffer .= $indent . '        #search{
';
        $buffer .= $indent . '            text-align: center;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 400px) {
';
        $buffer .= $indent . '        #search{
';
        $buffer .= $indent . '            text-align: center;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 500px) {
';
        $buffer .= $indent . '        #search{
';
        $buffer .= $indent . '            text-align: center;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    @media only screen and (max-width: 300px) {
';
        $buffer .= $indent . '        #searchButt{
';
        $buffer .= $indent . '            width: inherit
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 200px) {
';
        $buffer .= $indent . '        #searchButt{
';
        $buffer .= $indent . '            width: inherit
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 400px) {
';
        $buffer .= $indent . '        #searchButt{
';
        $buffer .= $indent . '            width: inherit
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 500px) {
';
        $buffer .= $indent . '        #searchButt{
';
        $buffer .= $indent . '            width: inherit
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    #searchButt{
';
        $buffer .= $indent . '        width: 70%;
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
        $buffer .= $indent . '<div class="container" style="border: 2px solid silver; padding: 2%;">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-md-3">
';
        $buffer .= $indent . '            <label>1 бейіндік пән</label>
';
        $buffer .= $indent . '            <select id="first_subject">
';
        $buffer .= $indent . '            <option value="1">Математика</option>
';
        $buffer .= $indent . '            <option value="2">Физика</option>
';
        $buffer .= $indent . '            <option value="3">Қ тарих</option>
';
        $buffer .= $indent . '            <option value="4">Д тарих</option>
';
        $buffer .= $indent . '        </select>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-3">
';
        $buffer .= $indent . '            <label>2 бейіндік пән</label>
';
        $buffer .= $indent . '            <select id="second_subject">
';
        $buffer .= $indent . '            <option value="1">Математика</option>
';
        $buffer .= $indent . '            <option value="2">Физика</option>
';
        $buffer .= $indent . '            <option value="3">Қ тарих</option>
';
        $buffer .= $indent . '            <option value="4">Д тарих</option>
';
        $buffer .= $indent . '        </select></div>
';
        $buffer .= $indent . '        <div class="col-md-3">
';
        $buffer .= $indent . '            <label>Балл</label>
';
        $buffer .= $indent . '            <input type="range" id="pointRange" min="0" max="140" value="70" onchange="changeTextPointBySlider()">
';
        $buffer .= $indent . '            <input type="text" id="pointText" value="70" onchange="changeSliderPointByText()">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-3" id="search"><button  id="searchButt" class="btn btn-primary" onclick="searchSpec()">Іздеу</button></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="container">
';
        $buffer .= $indent . '    <div class="row" id="specList">
';
        $buffer .= $indent . '        <div id=\'loader\' style="display: none;float: center"><img src="../Spinner-1s-200px.gif"/></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script type="text/javascript">
';
        $buffer .= $indent . '    function changeTextPointBySlider(){
';
        $buffer .= $indent . '        $(\'#pointText\').val($(\'#pointRange\').val())
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    function changeSliderPointByText(){
';
        $buffer .= $indent . '        if($(\'#pointText\').val()>140){
';
        $buffer .= $indent . '            $(\'#pointRange\').val(140);
';
        $buffer .= $indent . '            $(\'#pointText\').val(140)
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        if($(\'#pointText\').val()<0){
';
        $buffer .= $indent . '            $(\'#pointRange\').val(0);
';
        $buffer .= $indent . '            $(\'#pointText\').val(0)
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        $(\'#pointRange\').val($(\'#pointText\').val())
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    $(function () {
';
        $buffer .= $indent . '        $.ajax({
';
        $buffer .= $indent . '                        type: "POST",
';
        $buffer .= $indent . '                        url: \'SpecList.php\',
';
        $buffer .= $indent . '                        data: {test: "test"},
';
        $buffer .= $indent . '                        beforeSend: function() {
';
        $buffer .= $indent . '                            $(\'#loader\').show();
';
        $buffer .= $indent . '                        },
';
        $buffer .= $indent . '                        complete: function(){
';
        $buffer .= $indent . '                            $(\'#loader\').hide();
';
        $buffer .= $indent . '                        },
';
        $buffer .= $indent . '                        success: function (response) {
';
        $buffer .= $indent . '                            console.log(response);
';
        $buffer .= $indent . '                            var jsonData = JSON.parse(response);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            // user is logged in successfully in the back-end
';
        $buffer .= $indent . '                            // let\'s redirect
';
        $buffer .= $indent . '                            if (jsonData.success == "1") {
';
        $buffer .= $indent . '                                debugger
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                document.getElementById(\'specList\').innerHTML = "";
';
        $buffer .= $indent . '                                for (var prop in jsonData.test) {
';
        $buffer .= $indent . '                                    var newTable = \'<div class="col-md-3" >\\n\' +
';
        $buffer .= $indent . '                                            \'            <div class="card">\\n\' +
';
        $buffer .= $indent . '                                            \'                <div class="card-body">\\n\' +
';
        $buffer .= $indent . '                                            \'                    <h5 class="card-title">\'+jsonData.test[prop]["name"]+\'</h5>\\n\' +
';
        $buffer .= $indent . '                                            \'                    <p class="card-text">\'+jsonData.test[prop]["salary"]+\'</p>\\n\' +
';
        $buffer .= $indent . '                                            \'                    <p class="card-text">Жұмысқа орналасу: \'+jsonData.test[prop]["suranys"]+\'</p>\\n\' +
';
        $buffer .= $indent . '                                            \'                    <a  href="http://localhost/kyran_final/local/speciality/spec_info.php?id=\'+jsonData.test[prop]["id"]+\'" class="btn btn-primary">Толығырақ</a>\\n\' +
';
        $buffer .= $indent . '                                            \'                </div>\\n\' +
';
        $buffer .= $indent . '                                            \'            </div>\\n\' +
';
        $buffer .= $indent . '                                            \'        </div>\'
';
        $buffer .= $indent . '                                        document.getElementById(\'specList\').innerHTML += newTable;
';
        $buffer .= $indent . '                                }
';
        $buffer .= $indent . '                            } else {
';
        $buffer .= $indent . '                                alert(\'Invalid Credentials!\');
';
        $buffer .= $indent . '                            }
';
        $buffer .= $indent . '                        }
';
        $buffer .= $indent . '                    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '    function searchSpec() {
';
        $buffer .= $indent . '      var first_subject =  $(\'#first_subject\').val();
';
        $buffer .= $indent . '        var second_subject =   $(\'#second_subject\').val();
';
        $buffer .= $indent . '        var point =   $(\'#pointText\').val();
';
        $buffer .= $indent . '        console.log(first_subject+":"+second_subject+":"+point);
';
        $buffer .= $indent . '        $.ajax({
';
        $buffer .= $indent . '            type: "POST",
';
        $buffer .= $indent . '            url: \'chart_data.php\',
';
        $buffer .= $indent . '            data: {first_subject: first_subject,
';
        $buffer .= $indent . '                second_subject:second_subject,
';
        $buffer .= $indent . '                point:point
';
        $buffer .= $indent . '            },
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
        $buffer .= $indent . '                    document.getElementById(\'specList\').innerHTML = "";
';
        $buffer .= $indent . '                    for (var prop in jsonData.test) {
';
        $buffer .= $indent . '                        var newTable = \'<div class="col-md-3" >\\n\' +
';
        $buffer .= $indent . '                                \'            <div class="card">\\n\' +
';
        $buffer .= $indent . '                                \'                <div class="card-body">\\n\' +
';
        $buffer .= $indent . '                                \'                    <h5 class="card-title">\'+jsonData.test[prop]["name"]+\'</h5>\\n\' +
';
        $buffer .= $indent . '                                \'                    <p class="card-text">\'+jsonData.test[prop]["salary"]+\'</p>\\n\' +
';
        $buffer .= $indent . '                                \'                    <p class="card-text">Жұмысқа орналасу: \'+jsonData.test[prop]["suranys"]+\'</p>\\n\' +
';
        $buffer .= $indent . '                                \'                    <a href="http://localhost/kyran_final/local/speciality/spec_info.php?id=\'+jsonData.test[prop]["id"]+\'" class="btn btn-primary">Толығырақ</a>\\n\' +
';
        $buffer .= $indent . '                                \'                </div>\\n\' +
';
        $buffer .= $indent . '                                \'            </div>\\n\' +
';
        $buffer .= $indent . '                                \'        </div>\'
';
        $buffer .= $indent . '                        document.getElementById(\'specList\').innerHTML += newTable;
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
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
