@section('content')

    <div ng-controller="getStatisticsController"  ng-init="showDateRangePicker=true" >

        <div ng-show="showDateRangePicker==true">
            <div class="row-fluid text-center">
                <div class="col-md-6">
                    @include('elements.dateRangePicker',array('datePicker'=>array('attribute'=>'start','headline'=>'Von')))
                </div>
            </div>
            <div class="row-fluid text-center visible-xs" >
                <div class="col-md-12">&nbsp;</div>
            </div>
            <div class="row-fluid text-center">
                <div class="col-md-6">
                    @include('elements.dateRangePicker',array('datePicker'=>array('attribute'=>'end','headline'=>'Bis')))
                </div>
            </div>
            <div class="row-fluid text-center visible-xs" >
                <div class="col-md-12">&nbsp;</div>
            </div>
            <div class="row-fluid text-center" >
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="button" class="btn btn-success"
                            ng-click="showDateRangePicker=false">Anzeigen</button>
                    </div>
                </div>
            </div>
            <div class="row-fluid text-center">
                <div class="col-md-12" ng-click="showDateRangePicker=false">
                    {{ HTML::image('images/datepicker_up.png') }}
                </div>
            </div>
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
                <div class="col-md-12">Result</div>
            </div>
        </div>
    </div>
@stop