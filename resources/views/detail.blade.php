@extends('layouts.app')


@section('content')
<livewire:search-box />
<div id="container" class="m-5">
   

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script type="text/javascript">

    var Data = [12,54,65]
    
    Highcharts.chart('container', {
        title: {
            text: 'Explorer'
        },
        subtitle: {
            text: ''
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
<div class="antialiased sans-serif bg-gray-200 h-screen">
	

	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
	<style>
		[x-cloak] {
			display: none;
		}

		.form-checkbox {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			-webkit-print-color-adjust: exact;
			color-adjust: exact;
			display: inline-block;
			vertical-align: middle;
			background-origin: border-box;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			flex-shrink: 0;
			color: currentColor;
			background-color: #fff;
			border-color: #e2e8f0;
			border-width: 1px;
			border-radius: 0.25rem;
			height: 1.2em;
    		width: 1.2em;
		}

	</style>

	<div class="mx-auto py-6 px-4" x-data="datatables()" x-cloak>
		<h1 class="text-3xl py-4 border-b mb-10">Keyword Rankings</h1>
		<div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
			style="height: 600px;">
			<table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
				<thead>
					<tr class="text-left">
						<template x-for="heading in headings">
							<th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"
								x-text="heading.value" :x-ref="heading.key" :class="{ [heading.key]: true }"></th>
						</template>
					</tr>
				</thead>
				<tbody>
					<template x-for="d in data" :key="d.query">
						<tr>
							
							<td class="border-dashed border-t border-gray-200 firstName">
								<span class="text-gray-700 px-6 py-3 flex items-center" x-text="d.query"></span>
							</td>
							<td class="border-dashed border-t border-gray-200 lastName">
								<span class="text-gray-700 px-6 py-3 flex items-center" x-text="d.position"></span>
							</td>
						</tr>
					</template>
				</tbody>
			</table>
		</div>
    </div>
	<script>
		function datatables() {
			return {
				headings: [
					{
						'key': 'query',
						'value': 'Keyword'
					},
					{
						'key': 'position',
						'value': 'Old Position'
					},
					// {
					// 	'key': 'newposition',
					// 	'value': 'New Position'
					// },
					
				],
				data: {!! json_encode($data->toArray(), JSON_HEX_TAG) !!}
			}
		}
	</script>
</div>
</div>

@endsection