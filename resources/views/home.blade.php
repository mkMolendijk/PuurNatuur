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
                        Graph #1
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
                        Graph #2
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
                        Graph #3
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
                {value: 70, label: 'foo'},
                {value: 15, label: 'bar'},
                {value: 10, label: 'baz'},
                {value: 5, label: 'A really really long label'}
            ],
            formatter: function (x) { return x + "%"}
        }).on('click', function(i, row){
            console.log(i, row);
        });
        Morris.Donut({
            element: 'graph2',
            data: [
                {value: 50, label: 'foo'},
                {value: 50, label: 'bar'}
            ],
            formatter: function (x) { return x + "%"}
        }).on('click', function(i, row){
            console.log(i, row);
        });
        Morris.Donut({
            element: 'graph3',
            data: [
                {value: 60, label: 'foo'},
                {value: 20, label: 'bar'},
                {value: 20, label: 'baz'}
            ],
            formatter: function (x) { return x + "%"}
        }).on('click', function(i, row){
            console.log(i, row);
        });

    </script>
@endsection