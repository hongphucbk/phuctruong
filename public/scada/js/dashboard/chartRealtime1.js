        var lastDate = 0;
        var data = []
        var yvalue = 0;
        var TICKINTERVAL = 86400000/24/60/60
        let XAXISRANGE =   777600000/24/60/60
        function getDayWiseTimeSeries(baseval, count, yrange) {
            var i = 0;
            while (i < count) {
                var x = baseval;
                var y = 0 //Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

                data.push({
                    x, y
                });
                lastDate = baseval
                baseval += TICKINTERVAL;
                i++;
            }
        }

        getDayWiseTimeSeries(new Date().getTime(), 10, {
            min: 10,
            max: 90
        })

        function getNewSeries(baseval, yrange) {
            var newDate = baseval + TICKINTERVAL;
            lastDate = newDate

            for(var i = 0; i< data.length - 10; i++) {
                // IMPORTANT
                // we reset the x and y of the data which is out of drawing area
                // to prevent memory leaks
                data[i].x = newDate - XAXISRANGE - TICKINTERVAL
                data[i].y = 0
            }
            
            data.push({
                x: newDate,
                y: yvalue //Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
            })
           
        }

        function resetData(){
            // Alternatively, you can also reset the data at certain intervals to prevent creating a huge series 
            data = data.slice(data.length - 10, data.length);
        }

        var options = {
            chart: {
                height: 450,
                type: 'line',
                animations: {
                    enabled: true,
                    easing: 'linear',
                    dynamicAnimation: {
                        speed: 5*1000
                    }
                },
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: true
            },
            stroke: {
                curve: 'smooth'
            },
            series: [{
                data: data
            }],
            title: {
                text: 'Nhiệt độ',
                align: 'left'
            },
            markers: {
                size: 0
            },
            xaxis: {
                type: 'datetime',
                range: XAXISRANGE,
            },
            yaxis: {
                max: 100
            },
            legend: {
                show: true
            },
        }

        var chart = new ApexCharts(
            document.querySelector("#chart"),
            options
        );

        chart.render();

        window.setInterval(function () {
            getNewSeries(lastDate, {
                min: 10,
                max: 90
            })
            chart.updateSeries([{
                data: data
            }])
        }, 1* 1000)
        
