@section('content')
<form name="insertBon" ng-controller="insertBonController">
    <div class="container-fluid">
        <div class="row-fluid text-center">
            <div class="col-md-offset-2 col-md-4 col-xs-12">
                  <div class="form-group">
                        <label for="userselect">User:</label>
                        <select name="userselect" id="userselect" class="form-control"
                        ng-model="selectedUser"
                        ng-options="user.id as user.name for user in userlist"
                        ng-change="getLastBons(selectedUser,false)">
                            <option value="">-- Benutzer wählen --</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <label for="amount">Betrag:</label>
                        <input type="text" name="amount" id="amount" class="form-control" placeholder="bsp. 10.16"
                        ng-model="amount" />
                  </div>

                    @include('elements.datePicker',array('datePicker'=>array('attribute'=>'pickdate','headline'=>'Datum')))

                    <div class="row-fluid text-center">
                        <div class="col-md-12">&nbsp;</div>
                    </div>

                  <div class="form-group">
                    <button type="button" class="btn btn-success"
                    ng-click="saveBon(selectedUser,amount,datePicker.pickdate.year+'-'+datePicker.pickdate.month+'-'+datePicker.pickdate.day+' 12:00:00')">Speichern</button>
                  </div>
            </div>
        </div>
        <div class="visible-xs row-fluid text-center">
            <div class="col-xs-12">
                  <hr /><br />
            </div>
        </div>
        <div class="row-fluid text-center">
            <div class="col-md-4 col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td colspan="2">Letzte 10 Eingaben</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="bon in lastBons">
                            <td width="40%"> [{bon.date | dateToISO | date:'shortDate'}] </td>
                            <td width="40%"> [{bon.value}] </td>
                            <td width="20%" style="cursor:pointer;"
                            ng-click="deleteBon(bon.id)">
                                <span class="glyphicon glyphicon-remove"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>
@stop
