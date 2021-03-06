<div class="datePicker">
    <div class="container-fluid">
        <div class="row-fluid text-center">
            <div class="col-md-12 col-xs-12">
                <?= $datePicker['headline'] ?>
            </div>
        </div>
        <div class="row-fluid text-center">
            <div class="col-md-4 col-xs-4" ng-click="datePicker.<?= $datePicker['attribute'] ?>.day = datePicker.<?= $datePicker['attribute'] ?>.day + 1">
                {{ HTML::image('images/datepicker_up.png') }}
            </div>
            <div class="col-md-4 col-xs-4" ng-click="datePicker.<?= $datePicker['attribute'] ?>.month = datePicker.<?= $datePicker['attribute'] ?>.month + 1">
                {{ HTML::image('images/datepicker_up.png') }}
            </div>
            <div class="col-md-4 col-xs-4" ng-click="datePicker.<?= $datePicker['attribute'] ?>.year = datePicker.<?= $datePicker['attribute'] ?>.year + 1">
                {{ HTML::image('images/datepicker_up.png') }}
            </div>
        </div>
        <div class="row-fluid text-center">
            <div class="col-md-4 col-xs-4" ng-init="datePicker.<?= $datePicker['attribute'] ?>.day = <?= date('d') ?>">
                <input style="padding-left:0px;padding-right:0px" class="col-md-12 col-xs-12 text-center" type="text" ng-model="datePicker.<?= $datePicker['attribute'] ?>.day" />
            </div>
            <div class="col-md-4 col-xs-4" ng-init="datePicker.<?= $datePicker['attribute'] ?>.month = <?= date('m') ?>">
                <input style="padding-left:0px;padding-right:0px" class="col-md-12 col-xs-12 text-center" type="text" ng-model="datePicker.<?= $datePicker['attribute'] ?>.month" />
            </div>
            <div class="col-md-4 col-xs-4" ng-init="datePicker.<?= $datePicker['attribute'] ?>.year = <?= date('Y') ?>">
                <input style="padding-left:0px;padding-right:0px" class="col-md-12 col-xs-12 text-center" type="text" ng-model="datePicker.<?= $datePicker['attribute'] ?>.year" />
            </div>
        </div>
        <div class="row-fluid text-center">
            <div class="col-md-4 col-xs-4" ng-click="datePicker.<?= $datePicker['attribute'] ?>.day = datePicker.<?= $datePicker['attribute'] ?>.day - 1">
                {{ HTML::image('images/datepicker_down.png') }}
            </div>
            <div class="col-md-4 col-xs-4" ng-click="datePicker.<?= $datePicker['attribute'] ?>.month = datePicker.<?= $datePicker['attribute'] ?>.month - 1">
                {{ HTML::image('images/datepicker_down.png') }}
            </div>
            <div class="col-md-4 col-xs-4" ng-click="datePicker.<?= $datePicker['attribute'] ?>.year = datePicker.<?= $datePicker['attribute'] ?>.year - 1">
                {{ HTML::image('images/datepicker_down.png') }}
            </div>
        </div>
    </div>

</div>