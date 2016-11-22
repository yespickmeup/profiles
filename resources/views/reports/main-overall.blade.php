
<div class="box-header with-border">
    <h4 ><i class="fa fa-bar-chart-o"></i>&nbsp;Summary (<b>Municipality/City of Majuyod</b>)</h4>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>
    </div>
</div>
<!-- /.box-header -->
<div class="box-body">
    <div class="table-responsive" >
        <table st-table="rowCollection" class="table no-margin">
            <thead>
                <tr>
                    <th >Barangay</th>
                    <th style="width: 80px;">Houses</th>
                    <th style="width: 80px;">Households</th>
                    <th style="width: 150px;">Household Members</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="row in rowCollection" >
                    <td ><a href="#"><%row.barangay%></a></td>
                    <td style="text-align: right;"><%row.houses | number%></td>
                    <td style="text-align: right;"><%row.households| number%></td>
                    <td style="text-align: right;"><%row.household_members| number%></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Total</th>
                    <th style="text-align: right;"><%total_houses | number%></th>
                    <th style="text-align: right;"><%total_households | number%></th>
                    <th style="text-align: right;"><%total_household_members | number%></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
