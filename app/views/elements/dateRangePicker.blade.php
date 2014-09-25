
            <div class="row-fluid text-center">
                <div class="col-md-6">
                    @include('elements.datePicker',array('datePicker'=>array('attribute'=>'start','headline'=>'Von')))
                </div>
            </div>
            <div class="row-fluid text-center visible-xs" >
                <div class="col-xs-12">&nbsp;</div>
            </div>
            <div class="row-fluid text-center">
                <div class="col-md-6">
                    @include('elements.datePicker',array('datePicker'=>array('attribute'=>'end','headline'=>'Bis')))
                </div>
            </div>
            <div class="row-fluid text-center visible-xs" >
                <div class="col-xs-12">&nbsp;</div>
            </div>
            <div class="row-fluid text-center" >
                <div class="col-md-12">
                    <div class="form-group">
                    <input type="hidden" ng-model="user1" ng-init="user1=1" />
                    <input type="hidden" ng-model="user2" ng-init="user2=2" />
                        <button type="button" class="btn btn-success"
                            ng-click="showDateRangePicker=false;getDateRangeDiff(user1,user2,datePicker.start.year+'-'+datePicker.start.month+'-'+datePicker.start.day+' 12:00:00',datePicker.end.year+'-'+datePicker.end.month+'-'+datePicker.end.day+' 12:00:00')">Anzeigen</button>
                    </div>
                </div>
            </div>
            <div class="row-fluid text-center">
                <div class="col-md-12" ng-click="showDateRangePicker=false">
                    {{ HTML::image('images/datepicker_up.png') }}
                </div>
            </div>