<?php

class __Mustache_4501b2a64560521cdd18b17625f3ae9f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1>ҰБТ Статистикасы</h1>
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
        $buffer .= $indent . '    #katemen{
';
        $buffer .= $indent . '        padding: 0% 10% 0% 10%;
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 300px) {
';
        $buffer .= $indent . '        #katemen{
';
        $buffer .= $indent . '            padding: 0%;
';
        $buffer .= $indent . '            height: 15%;
';
        $buffer .= $indent . '            position: relative;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #canvas{
';
        $buffer .= $indent . '            height: 20%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 200px) {
';
        $buffer .= $indent . '        #katemen {
';
        $buffer .= $indent . '            padding: 0%;
';
        $buffer .= $indent . '            height: 15%;
';
        $buffer .= $indent . '            position: relative;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #canvas{
';
        $buffer .= $indent . '            height: 20%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 400px) {
';
        $buffer .= $indent . '        #katemen {
';
        $buffer .= $indent . '            padding: 0%;
';
        $buffer .= $indent . '            height: 15%;
';
        $buffer .= $indent . '            position: relative;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #canvas{
';
        $buffer .= $indent . '            height: 20%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    #univers{
';
        $buffer .= $indent . '        padding: 0% 10% 0% 10%;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 300px) {
';
        $buffer .= $indent . '        #univers{
';
        $buffer .= $indent . '            padding: 0%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 200px) {
';
        $buffer .= $indent . '        #univers {
';
        $buffer .= $indent . '            padding: 0%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media only screen and (max-width: 400px) {
';
        $buffer .= $indent . '        #univers {
';
        $buffer .= $indent . '            padding: 0%;
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
        $buffer .= $indent . '<div class="container">
';
        $buffer .= $indent . '    <div class="row d-flex justify-content-between" style="text-align: center;">
';
        $buffer .= $indent . '        <div class="col-md-3" >
';
        $buffer .= $indent . '            <div class="card">
';
        $buffer .= $indent . '                <div class="card-body">
';
        $buffer .= $indent . '                    <h5 class="card-title" style="text-align: center">Тапсырған тест саны</h5>
';
        $buffer .= $indent . '                    <p class="card-text">';
        $value = $this->resolveValue($context->find('finished_count'), $context);
        $buffer .= $value;
        $buffer .= '</p>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-3" >
';
        $buffer .= $indent . '            <div class="card">
';
        $buffer .= $indent . '                <div class="card-body">
';
        $buffer .= $indent . '                    <h5 class="card-title" style="text-align: center">Жоғарғы балл</h5>
';
        $buffer .= $indent . '                    <p class="card-text">';
        $value = $this->resolveValue($context->find('max_grade'), $context);
        $buffer .= $value;
        $buffer .= '</p>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-3" >
';
        $buffer .= $indent . '            <div class="card">
';
        $buffer .= $indent . '                <div class="card-body">
';
        $buffer .= $indent . '                    <h5 class="card-title" style="text-align: center"> Орташа балл</h5>
';
        $buffer .= $indent . '                    <p class="card-text">';
        $value = $this->resolveValue($context->find('avg_grade'), $context);
        $buffer .= $value;
        $buffer .= '</p>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<hr>
';
        $buffer .= $indent . '<br>
';
        $buffer .= $indent . '<div class="container">
';
        $buffer .= $indent . '    <div><h1>ҰБТ тестілеу кезіндегі жіберген қателіктерінмен жұмыс жаса!</h1></div>
';
        $buffer .= $indent . '    <div><h6>ҰБТ тестілеу кезіндегі жіберген қателіктерінмен жұмыс жаса!</h6></div>
';
        $buffer .= $indent . '    <br>
';
        $buffer .= $indent . '    <div id="katemen">
';
        $buffer .= $indent . '        <canvas id="canvas"></canvas>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="container" id="oku" style="overflow-x: auto;">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script type="text/javascript">
';
        $buffer .= $indent . '    function onClick(e) {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        $("#ent").toggle( \'slow\', function(){
';
        $buffer .= $indent . '            //alert("Type: " + e.dataSeries.type + ", dataPoint { x:" + e.dataPoint.x + ", y: " + e.dataPoint.y + " }");
';
        $buffer .= $indent . '            $("#hiddenClicker").get(0).click();
';
        $buffer .= $indent . '        });
';
        $buffer .= $indent . '    };
';
        $buffer .= $indent . '    $(function () {
';
        $buffer .= $indent . '        var jArray = ';
        $value = $this->resolveValue($context->find('result'), $context);
        $buffer .= $value;
        $buffer .= ';
';
        $buffer .= $indent . '        var subject = ';
        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= $value;
        $buffer .= ';
';
        $buffer .= $indent . '        var colors = ';
        $value = $this->resolveValue($context->find('colors'), $context);
        $buffer .= $value;
        $buffer .= ';
';
        $buffer .= $indent . '        if(jArray.length == 0){
';
        $buffer .= $indent . '            document.getElementById(\'oku\').innerHTML += "<h3>Нәтижелерді көру үшін ҰБТ тестілеуді өтуіңіз қажет =)</h3>";
';
        $buffer .= $indent . '        }else {
';
        $buffer .= $indent . '            // for(var i=0; i<jArray.length; i++){
';
        $buffer .= $indent . '            //     alert(jArray[i]);
';
        $buffer .= $indent . '            // }
';
        $buffer .= $indent . '            console.log(jArray);
';
        $buffer .= $indent . '            console.log(subject);
';
        $buffer .= $indent . '            console.log(colors);
';
        $buffer .= $indent . '            var barChartData = {
';
        $buffer .= $indent . '                labels: Object.keys(jArray[0]),
';
        $buffer .= $indent . '                datasets: []
';
        $buffer .= $indent . '            };
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            for (var i = 0; i < jArray.length; i++) {
';
        $buffer .= $indent . '                barChartData.datasets.push(
';
        $buffer .= $indent . '                        {
';
        $buffer .= $indent . '                            label: subject[i].shortname,
';
        $buffer .= $indent . '                            backgroundColor: colors[i % colors.length],
';
        $buffer .= $indent . '                            data: Object.values(jArray[i]),
';
        $buffer .= $indent . '                            barThickness: 150
';
        $buffer .= $indent . '                        }
';
        $buffer .= $indent . '                )
';
        $buffer .= $indent . '            }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            var barChartOptions = {
';
        $buffer .= $indent . '                title: {
';
        $buffer .= $indent . '                    display: false,
';
        $buffer .= $indent . '                    text: \'Chart.js Stacked Bar Chart\'
';
        $buffer .= $indent . '                },
';
        $buffer .= $indent . '                tooltips: {
';
        $buffer .= $indent . '                    mode: \'index\',
';
        $buffer .= $indent . '                    intersect: false
';
        $buffer .= $indent . '                },
';
        $buffer .= $indent . '                responsive: true,
';
        $buffer .= $indent . '                scales: {
';
        $buffer .= $indent . '                    xAxes: [{
';
        $buffer .= $indent . '                        stacked: true,
';
        $buffer .= $indent . '                    }],
';
        $buffer .= $indent . '                    yAxes: [{
';
        $buffer .= $indent . '                        stacked: true,
';
        $buffer .= $indent . '                        ticks: {
';
        $buffer .= $indent . '                            precision: 0,
';
        $buffer .= $indent . '                            max: 140,
';
        $buffer .= $indent . '                            min: 0,
';
        $buffer .= $indent . '                            stepSize: 10
';
        $buffer .= $indent . '                        }
';
        $buffer .= $indent . '                    }]
';
        $buffer .= $indent . '                },
';
        $buffer .= $indent . '                onClick: function (c, i) {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    $.ajax({
';
        $buffer .= $indent . '                        type: "POST",
';
        $buffer .= $indent . '                        url: \'chart_data.php\',
';
        $buffer .= $indent . '                        data: {test: "test"},
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
        $buffer .= $indent . '                                var courseId = [];
';
        $buffer .= $indent . '                                var createNew = false;
';
        $buffer .= $indent . '                                var row = 2;
';
        $buffer .= $indent . '                                var newRow = 1;
';
        $buffer .= $indent . '                                document.getElementById(\'oku\').innerHTML = "";
';
        $buffer .= $indent . '                                for (var prop in jsonData.test) {
';
        $buffer .= $indent . '                                    console.log(jsonData.test[prop]["courseid"]);
';
        $buffer .= $indent . '                                    if (courseId.includes(jsonData.test[prop]["courseid"]) == false) {
';
        $buffer .= $indent . '                                        courseId.push(jsonData.test[prop]["courseid"]);
';
        $buffer .= $indent . '                                        createNew = true;
';
        $buffer .= $indent . '                                        console.log(courseId);
';
        $buffer .= $indent . '                                    } else {
';
        $buffer .= $indent . '                                        createNew = false;
';
        $buffer .= $indent . '                                    }
';
        $buffer .= $indent . '                                    console.log(createNew);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                    if (createNew) {
';
        $buffer .= $indent . '                                        var newTable = \'</br>\' +
';
        $buffer .= $indent . '                                                \' <h3 style="text-align: center;font-weight: bold;">\'+jsonData.test[prop]["shortname"]+\'</h3>\\n\' +
';
        $buffer .= $indent . '                                                \'    <div class="row" style="padding-left: 10px;" >\\n\' +
';
        $buffer .= $indent . '                                                \'\\n\' +
';
        $buffer .= $indent . '                                                \'        <table class="table table-bordered " id="top">\\n\' +
';
        $buffer .= $indent . '                                                \'            <thead>\\n\' +
';
        $buffer .= $indent . '                                                \'            <tr>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col"  style="background-color: white">#</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col"  style="background-color: white">Сұрақ</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col"  style="background-color: white">Сіздің жауабыңыз</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col"  style="background-color: white">Дұрыс жауабы</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col"  style="background-color: white">Тест парағына өту</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col"  style="background-color: white">Сұрақты толықтай зерттеу</th>\\n\' +
';
        $buffer .= $indent . '                                                \'            </tr>\\n\' +
';
        $buffer .= $indent . '                                                \'            </thead>\\n\' +
';
        $buffer .= $indent . '                                                \'            <tbody id="\'+jsonData.test[prop]["courseid"]+\'">\\n\' +
';
        $buffer .= $indent . '                                                \'            <tr >\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="row">\'+newRow+\'</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col">\'+jsonData.test[prop]["questiontext"]+\'</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col">\'+jsonData.test[prop]["responsesummary"]+\'</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col">\'+jsonData.test[prop]["rightanswer"]+\'</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col"><a href="http://localhost/kyran/mod/quiz/review.php?attempt=\'+jsonData.test[prop]["variant"]+\'&cmid=\'+jsonData.test[prop]["category"]+\'#question-1-\'+jsonData.test[prop]["id"]+\'" class="btn btn-primary">Тест кору</a></th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col"><a href="http://localhost/kyran/mod/lesson/view.php?id=\'+jsonData.test[prop]["lesson_id"]+\'" class="btn btn-primary">Такырыпты ашу</a></th>\\n\' +
';
        $buffer .= $indent . '                                                \'            </tr>\\n\' +
';
        $buffer .= $indent . '                                                \'            </tbody>\\n\' +
';
        $buffer .= $indent . '                                                \'        </table>\\n\' +
';
        $buffer .= $indent . '                                                \'    </div>\\n\';
';
        $buffer .= $indent . '                                        document.getElementById(\'oku\').innerHTML += newTable;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                    } else {
';
        $buffer .= $indent . '                                        var tr =   \'            <tr>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="row">\'+row+\'</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col">\'+jsonData.test[prop]["questiontext"]+\'</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col">\'+jsonData.test[prop]["responsesummary"]+\'</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col">\'+jsonData.test[prop]["rightanswer"]+\'</th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col"><a href="http://localhost/kyran/mod/quiz/review.php?attempt=\'+jsonData.test[prop]["variant"]+\'&cmid=\'+jsonData.test[prop]["category"]+\'#question-1-\'+jsonData.test[prop]["id"]+\'" class="btn btn-primary">Тест кору</a></th>\\n\' +
';
        $buffer .= $indent . '                                                \'                <th scope="col"><a href="http://localhost/kyran/mod/lesson/view.php?id=\'+jsonData.test[prop]["lesson_id"]+\'" class="btn btn-primary">Такырыпты ашу</a></th>\\n\' +
';
        $buffer .= $indent . '                                                \'            </tr>\\n\';
';
        $buffer .= $indent . '                                        console.log(document.getElementById(jsonData.test[prop]["courseid"]))
';
        $buffer .= $indent . '                                        document.getElementById(jsonData.test[prop]["courseid"]).innerHTML += tr;
';
        $buffer .= $indent . '                                        row++;
';
        $buffer .= $indent . '                                    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                    console.log(jsonData.test[prop]);
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
        $buffer .= $indent . '                }
';
        $buffer .= $indent . '            }
';
        $buffer .= $indent . '            var ctx = document.getElementById(\'canvas\').getContext(\'2d\');
';
        $buffer .= $indent . '            window.myBar = new Chart(ctx, {
';
        $buffer .= $indent . '                type: \'bar\',
';
        $buffer .= $indent . '                data: barChartData,
';
        $buffer .= $indent . '                options: barChartOptions
';
        $buffer .= $indent . '            });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '<hr>
';
        $buffer .= $indent . '<br>
';
        $buffer .= $indent . '<h1>ҰБТ нәтижелеріне байланысты қай ЖОО түсе алатынынды тексер!</h1>
';
        $buffer .= $indent . '<div class="container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<canvas id="speedChart" width="600" height="400"></canvas>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="container" id="analysis" style="overflow-x: auto;">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<script type="text/javascript">
';
        $buffer .= $indent . '    $(function () {
';
        $buffer .= $indent . '        var speedCanvas = document.getElementById("speedChart");
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        Chart.defaults.global.defaultFontFamily = "Lato";
';
        $buffer .= $indent . '        Chart.defaults.global.defaultFontSize = 18;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        $.ajax({
';
        $buffer .= $indent . '            type: "POST",
';
        $buffer .= $indent . '            url: \'univer.php\',
';
        $buffer .= $indent . '            data: {test: "test"},
';
        $buffer .= $indent . '            success: function (response) {
';
        $buffer .= $indent . '                var jsonData = JSON.parse(response);
';
        $buffer .= $indent . '                var marks = [];
';
        $buffer .= $indent . '                var dates = [];
';
        $buffer .= $indent . '                // user is logged in successfully in the back-end
';
        $buffer .= $indent . '                // let\'s redirect
';
        $buffer .= $indent . '                console.log(jsonData);
';
        $buffer .= $indent . '                if (jsonData.success == "1") {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    for (let i in jsonData.test) {
';
        $buffer .= $indent . '                        var date = new Date(jsonData.test[i].timemodified * 1000);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        marks.push(jsonData.test[i].mark)
';
        $buffer .= $indent . '                        dates.push(date.getDate() +
';
        $buffer .= $indent . '                                "/" + (date.getMonth() + 1) +
';
        $buffer .= $indent . '                                "/" + date.getFullYear())
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '                    console.log(marks);
';
        $buffer .= $indent . '                    if(marks.length == 0){
';
        $buffer .= $indent . '                        document.getElementById(\'analysis\').innerHTML += "<h3>Нәтижелерді көру үшін ҰБТ тестілеуді өтуіңіз қажет =)</h3>";
';
        $buffer .= $indent . '                    }else {
';
        $buffer .= $indent . '                        var dataFirst = {
';
        $buffer .= $indent . '                            label: "Тестте жинаған ұпай саны",
';
        $buffer .= $indent . '                            data: marks,
';
        $buffer .= $indent . '                            lineTension: 0,
';
        $buffer .= $indent . '                            fill: false,
';
        $buffer .= $indent . '                            borderColor: \'red\'
';
        $buffer .= $indent . '                        };
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        var speedData = {
';
        $buffer .= $indent . '                            labels: dates,
';
        $buffer .= $indent . '                            datasets: [dataFirst]
';
        $buffer .= $indent . '                        };
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        var chartOptions = {
';
        $buffer .= $indent . '                            legend: {
';
        $buffer .= $indent . '                                display: true,
';
        $buffer .= $indent . '                                position: \'top\',
';
        $buffer .= $indent . '                                labels: {
';
        $buffer .= $indent . '                                    boxWidth: 100,
';
        $buffer .= $indent . '                                    fontColor: \'black\'
';
        $buffer .= $indent . '                                }
';
        $buffer .= $indent . '                            }
';
        $buffer .= $indent . '                        };
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        var lineChart = new Chart(speedCanvas, {
';
        $buffer .= $indent . '                            type: \'line\',
';
        $buffer .= $indent . '                            data: speedData,
';
        $buffer .= $indent . '                            options: chartOptions
';
        $buffer .= $indent . '                        });
';
        $buffer .= $indent . '                        speedCanvas.onclick = function (evt, array) {
';
        $buffer .= $indent . '                            var activePoints = lineChart.getElementAtEvent(evt);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            $.ajax({
';
        $buffer .= $indent . '                                type: "POST",
';
        $buffer .= $indent . '                                url: \'universBall.php\',
';
        $buffer .= $indent . '                                data: {point: marks[activePoints[0]._datasetIndex]},
';
        $buffer .= $indent . '                                success: function (response) {
';
        $buffer .= $indent . '                                    console.log(response);
';
        $buffer .= $indent . '                                    var jsonData = JSON.parse(response);
';
        $buffer .= $indent . '                                    var marks = [];
';
        $buffer .= $indent . '                                    var dates = [];
';
        $buffer .= $indent . '                                    console.log(jsonData);
';
        $buffer .= $indent . '                                    // user is logged in successfully in the back-end
';
        $buffer .= $indent . '                                    // let\'s redirect
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                    if (jsonData.success == "1") {
';
        $buffer .= $indent . '                                        debugger
';
        $buffer .= $indent . '                                        var courseId = [];
';
        $buffer .= $indent . '                                        var createNew = false;
';
        $buffer .= $indent . '                                        var row = 2;
';
        $buffer .= $indent . '                                        var newRow = 1;
';
        $buffer .= $indent . '                                        document.getElementById(\'analysis\').innerHTML = "";
';
        $buffer .= $indent . '                                        for (var prop in jsonData.test) {
';
        $buffer .= $indent . '                                            console.log(jsonData.test[prop]["specialname"]);
';
        $buffer .= $indent . '                                            if (courseId.includes(jsonData.test[prop]["specialname"]) == false) {
';
        $buffer .= $indent . '                                                courseId.push(jsonData.test[prop]["specialname"]);
';
        $buffer .= $indent . '                                                createNew = true;
';
        $buffer .= $indent . '                                                console.log(courseId);
';
        $buffer .= $indent . '                                            } else {
';
        $buffer .= $indent . '                                                createNew = false;
';
        $buffer .= $indent . '                                            }
';
        $buffer .= $indent . '                                            console.log(createNew);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            if (createNew) {
';
        $buffer .= $indent . '                                                var newTable = \'</br>\' +
';
        $buffer .= $indent . '                                                        \' <h3 style="text-align: center;font-weight: bold;">\' + jsonData.test[prop]["specialname"] + \'</h3>\\n\' +
';
        $buffer .= $indent . '                                                        \'    <div class="row" style="padding-left: 10px;"  >\\n\' +
';
        $buffer .= $indent . '                                                        \'\\n\' +
';
        $buffer .= $indent . '                                                        \'        <table class="table table-bordered" id="top">\\n\' +
';
        $buffer .= $indent . '                                                        \'            <thead>\\n\' +
';
        $buffer .= $indent . '                                                        \'            <tr>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col"  style="background-color: white">#</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col"  style="background-color: white">Университет</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col"  style="background-color: white">Регион</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col"  style="background-color: white">Адрес</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col"  style="background-color: white">Жинаған баллыңыз</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col"  style="background-color: white">Қанша балл керек</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col"  style="background-color: white">ЖОО</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'            </tr>\\n\' +
';
        $buffer .= $indent . '                                                        \'            </thead>\\n\' +
';
        $buffer .= $indent . '                                                        \'            <tbody id="\' + jsonData.test[prop]["specialname"] + \'">\\n\' +
';
        $buffer .= $indent . '                                                        \'            <tr>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="row">\' + newRow + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col">\' + jsonData.test[prop]["univername"] + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col">\' + jsonData.test[prop]["regionname"] + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col">\' + jsonData.test[prop]["address"] + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col">\' + jsonData.test[prop]["jinagan"] + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col">\' + jsonData.test[prop]["ostalos"] + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col"><a href="http://localhost/kyran_final/local/speciality/univer_info.php?id=\' + jsonData.test[prop]["id"] + \'" target="_blank" class="btn btn-primary">Толығырақ</a></th>\\n\' +
';
        $buffer .= $indent . '                                                        \'            </tr>\\n\' +
';
        $buffer .= $indent . '                                                        \'            </tbody>\\n\' +
';
        $buffer .= $indent . '                                                        \'        </table>\\n\' +
';
        $buffer .= $indent . '                                                        \'    </div>\\n\';
';
        $buffer .= $indent . '                                                document.getElementById(\'analysis\').innerHTML += newTable;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            } else {
';
        $buffer .= $indent . '                                                var tr = \'            <tr>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="row">\' + row + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col">\' + jsonData.test[prop]["univername"] + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col">\' + jsonData.test[prop]["regionname"] + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col">\' + jsonData.test[prop]["address"] + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col">\' + jsonData.test[prop]["jinagan"] + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col">\' + jsonData.test[prop]["ostalos"] + \'</th>\\n\' +
';
        $buffer .= $indent . '                                                        \'                <th scope="col"><a href="http://localhost/kyran_final/local/speciality/univer_info.php?id=\' + jsonData.test[prop]["id"] + \'" target="_blank" class="btn btn-primary">Толығырақ</a></th>\\n\' +
';
        $buffer .= $indent . '                                                        \'            </tr>\\n\';
';
        $buffer .= $indent . '                                                console.log(document.getElementById(jsonData.test[prop]["specialname"]))
';
        $buffer .= $indent . '                                                document.getElementById(jsonData.test[prop]["specialname"]).innerHTML += tr;
';
        $buffer .= $indent . '                                                row++;
';
        $buffer .= $indent . '                                            }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            console.log(jsonData.test[prop]);
';
        $buffer .= $indent . '                                        }
';
        $buffer .= $indent . '                                    } else {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                    }
';
        $buffer .= $indent . '                                }
';
        $buffer .= $indent . '                            });
';
        $buffer .= $indent . '                        }
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '                }
';
        $buffer .= $indent . '            }
';
        $buffer .= $indent . '        });
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
