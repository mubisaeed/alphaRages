
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                <thead>
                <tr >
                    <th class="text-center">
                        Item
                    </th>
                    <th class="text-center">
                        HRS/QTY
                    </th>
                    <th class="text-center">
                        Rate
                    </th>
                    <th class="text-center">
                        Tax
                    </th>
                    <th class="text-center">
                        SubTotal
                    </th>
                    <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr id="addr0" data-id="0" >
                    <td data-name="item_name">
                        <input type="text" name='item_name' class="form-control"/>
                    </td>
                    <td data-name="quantity">
                        <input type="number" id="qty" name='quantity' class="form-control" />
                    </td>
                    <td data-name="rate">
                        <input type="number" id="rate" name='rate' class="form-control" onkeyup='myRate(this.id);'/>
                    </td>
                    <td data-name="tax">
                        <select class="coolSelect form-control" id="newTaxRate" name="tax">
                            <option></option>
                            <option value="0">Non taxable</option>
                            <option value="new"><span>+ New Tax Rate</span></option>

                        </select>
{{--                        <input type="text" name='tax' class="form-control"/>--}}
                    </td>
                    <td class='subTotal'>
                        <span id='mySubtotal'></span>
{{--                        <input type="text" name='subTotal' class="form-control" id='mySubtotal'/>--}}
                    </td>
                    <td data-name="del">
                        <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a id="add_item" class="btn btn-primary float-right">Add New Item</a>
</div>
