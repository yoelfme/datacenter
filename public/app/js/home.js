var home = function() {
    var pie= function(element,data,value){
        // Pie Chart
        $.plot(element, data,
            {
                colors: ['#454e59', '#5cafde', '#5ccdde'],
                legend: {show: false},
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        label: {
                            show: true,
                            radius: 2/3,
                            formatter: function(label, pieSeries) {
                                var sValue = "";
                                if (value)
                                    sValue = '<br>'  + pieSeries.data[0][1];

                                return '<div class="chart-pie-label">' + label + '<br>' + Math.round(pieSeries.percent) + '%' + sValue + ' </div>';
                            },
                            background: {opacity: .75, color: '#000000'}
                        }
                    }
                }
            }
        );
    };

    return {
        init: function() {
            // Obtener elementos
            var eProjects = $('#projects');
            var eProjects2 = $('#projects2');
            var ePayments = $('#incomes');
            var ePayments2 = $('#noincomes');

            $.ajax({
                'url':'/dashboard',
                'dataType':'json',
                'success': function(result){
                    debugger;
                    pie(eProjects,result.projects);
                    pie(eProjects2,result.projects2,true);
                    pie(ePayments,result.incomes,true);
                    pie(ePayments2,result.noincomes,true);
                },
                'error': function(result){
                    console.err(result);
                }
            });
        }
    }
}();