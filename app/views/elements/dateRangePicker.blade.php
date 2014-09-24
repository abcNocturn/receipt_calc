<div class="dateRangePicker">
    <div class="container-fluid">
        <div class="row-fluid text-center">
            <div class="col-md-12 col-xs-12">
                <?= $datePicker['headline'] ?>
            </div>
        </div>
        <div class="row-fluid text-center">
            <div class="col-md-4 col-xs-4" ng-click="dateRangePicker.<?= $datePicker['attribute'] ?>.day = dateRangePicker.<?= $datePicker['attribute'] ?>.day + 1">
                {{ HTML::image('images/datepicker_up.png') }}
            </div>
            <div class="col-md-4 col-xs-4" ng-click="dateRangePicker.<?= $datePicker['attribute'] ?>.month = dateRangePicker.<?= $datePicker['attribute'] ?>.month + 1">
                {{ HTML::image('images/datepicker_up.png') }}
            </div>
            <div class="col-md-4 col-xs-4" ng-click="dateRangePicker.<?= $datePicker['attribute'] ?>.year = dateRangePicker.<?= $datePicker['attribute'] ?>.year + 1">
                {{ HTML::image('images/datepicker_up.png') }}
            </div>
        </div>
        <div class="row-fluid text-center">
            <div class="col-md-4 col-xs-4" ng-init="dateRangePicker.<?= $datePicker['attribute'] ?>.day = <?= date('d') ?>">
                <input style="padding-left:0px;padding-right:0px" class="col-md-12 col-xs-12 text-center" type="text" ng-model="dateRangePicker.<?= $datePicker['attribute'] ?>.day" />
            </div>
            <div class="col-md-4 col-xs-4" ng-init="dateRangePicker.<?= $datePicker['attribute'] ?>.month = <?= date('m') ?>">
                <input style="padding-left:0px;padding-right:0px" class="col-md-12 col-xs-12 text-center" type="text" ng-model="dateRangePicker.<?= $datePicker['attribute'] ?>.month" />
            </div>
            <div class="col-md-4 col-xs-4" ng-init="dateRangePicker.<?= $datePicker['attribute'] ?>.year = <?= date('Y') ?>">
                <input style="padding-left:0px;padding-right:0px" class="col-md-12 col-xs-12 text-center" type="text" ng-model="dateRangePicker.<?= $datePicker['attribute'] ?>.year" />
            </div>
        </div>
        <div class="row-fluid text-center">
            <div class="col-md-4 col-xs-4" ng-click="dateRangePicker.<?= $datePicker['attribute'] ?>.day = dateRangePicker.<?= $datePicker['attribute'] ?>.day - 1">
                {{ HTML::image('images/datepicker_down.png') }}
            </div>
            <div class="col-md-4 col-xs-4" ng-click="dateRangePicker.<?= $datePicker['attribute'] ?>.month = dateRangePicker.<?= $datePicker['attribute'] ?>.month - 1">
                {{ HTML::image('images/datepicker_down.png') }}
            </div>
            <div class="col-md-4 col-xs-4" ng-click="dateRangePicker.<?= $datePicker['attribute'] ?>.year = dateRangePicker.<?= $datePicker['attribute'] ?>.year - 1">
                {{ HTML::image('images/datepicker_down.png') }}
            </div>
        </div>
    </div>

</div>