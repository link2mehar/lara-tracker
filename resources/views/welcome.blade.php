@extends('layouts.app')


@section('content')
<livewire:search-box />
<div id="container" class="m-5">

</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">

    var Data = [12,54,65]

    Highcharts.chart('container', {
        title: {
            text: 'Explorer'
        },
        subtitle: {
            text: 'Source: Fiverr Order'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: ''
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Clicks',
            data: Data
        },
        {
            name: 'CTR',
            data: [65,78,99]
        },
        {
            name: 'Impression',
            data: [88,55,44]
        },
        {
            name: 'Position',
            data: [22,55,44]
        },
        ],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>

@endsection