@extends('layouts.app')

@section('head')
    <!-- Morris.js CSS files -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">--}}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Temperature
                    </div>
                    <div class="panel-body">
                        <div id="graph1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Soil
                    </div>
                    <div class="panel-body">
                        <div id="graph2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Light
                    </div>
                    <div class="panel-body">
                        <div id="graph3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Description
                    </div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget orci ut est consectetur tincidunt at et ex. Praesent fermentum dolor est, ut tristique metus viverra id. Ut a tortor ex. Vivamus vel sapien in mi finibus porta vel cursus nibh. Donec lobortis orci in justo imperdiet aliquam. In dapibus lectus sit amet leo tempus lacinia. Vestibulum dolor odio, rhoncus sit amet tortor non, tempor vulputate leo.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <!-- Raphael.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.6/raphael.min.js"></script>

    <!-- Morris.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- Pie chart data -->
    <script>
        Morris.Donut({
            element: 'graph1',
            data: [
                {value: 100, label: 'Celsius'}
            ],
            formatter: function (x) { return 27 + "C"}
        }).on('click', function(i, row){
            console.log(i, row);

        });
        Morris.Donut({
            element: 'graph2',
            data: [
                {value: 100, label: 'Soil'},
            ],
            formatter: function (x) { return 768 + ""}
        }).on('click', function(i, row){
            console.log(i, row);
        });
        Morris.Donut({
            element: 'graph3',
            data: [
                {value: 100, label: 'Light'}
            ],
            formatter: function (x) { return 628 + ""}
        }).on('click', function(i, row){
            console.log(i, row);
        });

    </script>
@endsection