		<script src="amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/export.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/pie.js" type="text/javascript"></script>
        
<?php
 include_once("connect.php");?>
         <script>
          <?php
                               

                                $sqlu = "SELECT region, count(region) as total from user group by region";
                                $resultu = $conn->query($sqlu); ?>
            var chartpie;
            var legend;

            var chartDatapie = [ <?php

                while($rowu = $resultu->fetch_assoc()) {

                echo "{
                    \"Region\": \"".$rowu['region']."\",
                    \"Total\": ".$rowu['total']."
                },"; }?>
                {  }
            ];

            AmCharts.ready(function () {
                // PIE CHART
                chartpie = new AmCharts.AmPieChart();
                chartpie.dataProvider = chartDatapie;
                chartpie.titleField = "Region";
                chartpie.valueField = "Total";
                chartpie.outlineColor = "#FFFFFF";
                chartpie.outlineAlpha = 0.8;
                chartpie.outlineThickness = 2;
                chartpie.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[Total]]</b> ([[percents]]%)</span>";
                // this makes the chart 3D
                chartpie.depth3D = 15;
                chartpie.angle = 30;

                chartpie["export"] = {
                  "enabled": true
                };


                // WRITE
                chartpie.write("pie");
            });
        </script>

        <script>

         <?php
                               

                                $sql = "SELECT * FROM panel ORDER BY year ASC";
                                $result = $conn->query($sql); ?>
            var chart3d;

            var chartData = [ <?php

                while($row = $result->fetch_assoc()) {

               echo "{
                \"YEAR\": \"".$row['year']."\",
                \"TOTAL_EVENTS\": ".$row['total'].",
                \"color\": \"".$row['id']."\"
            },"; }?> {
                "YEAR": "2018",
                "TOTAL_EVENTS": 50,
                "color": "#000000"
            }];


            var chart3d = AmCharts.makeChart("chartdiv", {
                type: "serial",
                dataProvider: chartData,
                categoryField: "YEAR",
                depth3D: 20,
                angle: 30,

                categoryAxis: {
                    labelRotation: 90,
                    gridPosition: "start"
                },

                valueAxes: [{
                    title: "NUMBER OF EVENTS"
                }],

                graphs: [{

                    valueField: "TOTAL_EVENTS",
                    colorField: "color",
                    type: "column",
                    lineAlpha: 0,
                    fillAlphas: 1
                }],

                chartCursor: {
                    cursorAlpha: 0,
                    zoomable: false,
                    categoryBalloonEnabled: false
                },
                "export": {
                    "enabled": true
                }

            });
        </script>
         <script>
            var chart3;
            var chartData = [
                {
                    "year": 2009,
                    "income": 23.5,
                    "expenses": 18.1
                },
                {
                    "year": 2010,
                    "income": 26.2,
                    "expenses": 22.8
                },
                {
                    "year": 2011,
                    "income": 30.1,
                    "expenses": 23.9
                },
                {
                    "year": 2011,
                    "income": 30.1,
                    "expenses": 23.9
                },
                {
                    "year": 2011,
                    "income": 30.1,
                    "expenses": 23.9
                },
                {
                    "year": 2011,
                    "income": 30.1,
                    "expenses": 23.9
                },
                {
                    "year": 2011,
                    "income": 30.1,
                    "expenses": 23.9
                },
                {
                    "year": 2012,
                    "income": 29.5,
                    "expenses": 25.1
                },
                {
                    "year": 2013,
                    "income": 30.6,
                    "expenses": 27.2,
                    "dashLengthLine": 5
                },
                {
                    "year": 2014,
                    "income": 34.1,
                    "expenses": 29.9,
                    "dashLengthColumn": 5,
                    "alpha":0.2,
                    "additional":"(projection)"
                }

            ];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart3 = new AmCharts.AmSerialChart();

                chart3.dataProvider = chartData;
                chart3.categoryField = "year";
                chart3.startDuration = 1;

                chart3.handDrawn = true;
                chart3.handDrawnScatter = 3;

                // AXES
                // category
                var categoryAxis = chart3.categoryAxis;
                categoryAxis.gridPosition = "start";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 0;
                chart3.addValueAxis(valueAxis);

                // GRAPHS
                // column graph
                var graph1 = new AmCharts.AmGraph();
                graph1.type = "column";
                graph1.title = "Income";
                graph1.lineColor = "#a668d5";
                graph1.valueField = "income";
                graph1.lineAlpha = 1;
                graph1.fillAlphas = 1;
                graph1.dashLengthField = "dashLengthColumn";
                graph1.alphaField = "alpha";
                graph1.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>";
                chart3.addGraph(graph1);

                // line
                var graph2 = new AmCharts.AmGraph();
                graph2.type = "line";
                graph2.title = "Expenses";
                graph2.lineColor = "#fcd202";
                graph2.valueField = "expenses";
                graph2.lineThickness = 3;
                graph2.bullet = "round";
                graph2.bulletBorderThickness = 3;
                graph2.bulletBorderColor = "#fcd202";
                graph2.bulletBorderAlpha = 1;
                graph2.bulletColor = "#ffffff";
                graph2.dashLengthField = "dashLengthLine";
                graph2.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>";
                chart3.addGraph(graph2);

                // LEGEND
                var legend = new AmCharts.AmLegend();
                legend.useGraphSettings = true;
                chart3.addLegend(legend);

                //Export Into Different Format
                chart3["export"] = {
                  "enabled": true
                };

                // WRITE
                chart3.write("bar_line_mix");
            });
        </script>