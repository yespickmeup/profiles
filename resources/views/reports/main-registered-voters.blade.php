

<div class="box-header with-border">
    <h4 class="box-title">Registered Voters </h4>

    <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>

    </div>
</div>

<div class="box-body">

    <div class="progress-group" ng-repeat="row in voters">
        <span class="progress-text"><b><%row.barangay%> </b> (<%getVoterPercentage(row) | number:2%>%)</span>
        <span class="progress-number"><b><%row.voters%></b></span>
        <div class="progress sm" style="margin-bottom: -1px;">
            <div class="progress-bar progress-bar-aqua" ng-style="{width : (getVoterPercentage(row) + '%') }">></div>
        </div>
    </div>

    <div class="progress-group" style="font-size: 18px;">
        <span class="progress-text"><b>TOTAL</b></span>
        <span class="progress-number"><b><%total_voters | number%></b></span>

    </div>
   
</div>


