@section('content')
<form name="insertBon" ng-controller="insertBonController">
    <div class="container-fluid">
        <div class="row-fluid text-center">
            <div class="col-md-offset-2 col-md-4 col-xs-12">
                  <div class="form-group">
                        <label for="userselect">User:</label>
                        <select name="userselect" id="userselect" class="form-control"
                        ng-model="selectedUser" ng-options="user.id as user.name for user in userlist">
                            <option value="">-- Benutzer wählen --</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <label for="amount">Betrag:</label>
                        <input type="text" name="amount" id="amount" class="form-control" placeholder="bsp. 10.16" />
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
                        <tr ng-repeat="bon in bons">
                            <td width="50%"> [{bon.date}] </td>
                            <td width="50%"> [{bon.value}] </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>
@stop
