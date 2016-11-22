

<div class="box-header with-border">
    <h4 class="box-title">Senior Citizens </h4>

    <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>

    </div>
</div>
<div class="box-body">
    <div class="progress-group" ng-repeat="row in seniorCitizens">
        <span class="progress-text"><b><%row.barangay%> </b> (<%getPercentage(row) | number:2%>%)</span>
        <span class="progress-number"><b><%row.seniors%></b></span>
        <div class="progress sm" style="margin-bottom: -1px;">
            <div class="progress-bar progress-bar-aqua" ng-style="{width : (getPercentage(row) + '%') }">></div>
        </div>
    </div>
    <div class="progress-group" style="font-size: 18px;">
        <span class="progress-text"><b>TOTAL</b></span>
        <span class="progress-number"><b><%total_senior_citizens | number%></b></span>
    </div>
</div>


