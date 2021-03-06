@section('content')

    <div ng-controller="getStatisticsController"  ng-init="showDateRangePicker=true" >

        <div ng-show="showDateRangePicker==true">
            @include('elements.dateRangePicker',array())
        </div>

        <div ng-show="showDateRangePicker==false">
            <div class="row-fluid text-center">
                <div class="col-md-12" ng-click="showDateRangePicker=true">
                    {{ HTML::image('images/datepicker_down.png') }}
                </div>
            </div>
        </div>

        <div ng-init="showResult=false" ng-show="showResult==true">
            <div class="row-fluid text-center" >
                <div class="col-md-offset-4 col-md-4">
                    &nbsp;
                </div>
            </div>
            <div class="row-fluid text-center" >
                <div class="col-md-offset-4 col-md-4 col-xs-12">
                    <strong>[{datePicker.start.day}].[{datePicker.start.month}].[{datePicker.start.year}] - [{datePicker.end.day}].[{datePicker.end.month}].[{datePicker.end.year}]</strong>
                </div>
            </div>
            <div class="row-fluid text-center" >
                <div class="col-md-offset-4 col-md-4">
                    &nbsp;
                </div>
            </div>
            <div class="row-fluid text-center" >
                <div class="col-md-offset-4 col-md-2  col-xs-6">
                    [{dateRangeResult.1.0.name}]<br />
                    [{dateRangeResult.1.0.sum_value}] €
                </div>
                <div class="col-md-2">
                    [{dateRangeResult.2.0.name}]<br />
                    [{dateRangeResult.2.0.sum_value}] €
                </div>
            </div>
            <div class="row-fluid text-center" >
                <div class="col-md-offset-4 col-md-4  col-xs-6">
                    &nbsp;
                </div>
            </div>
            <div class="row-fluid text-center" >
                <div class="col-md-offset-4 col-md-4 col-xs-12">
                    Differenz : [{dateRangeResult.1.0.sum_value - dateRangeResult.2.0.sum_value}]
            </div>
        </div>
    </div>
@stop