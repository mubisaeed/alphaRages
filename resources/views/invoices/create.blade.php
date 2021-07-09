@extends('layouts.app')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="alert alert-danger alert-block errorDiv">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong class="clientError"></strong>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('store-invoice') }}" method="POST">
        @csrf
        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content container d-sm-flex">
                <div class="page-title">
                    <h4><span class="font-weight-semibold">Generate Invoices</span></h4>
                </div>

                <div class="my-sm-auto ml-sm-auto mb-3 mb-sm-0">
                    <button type="submit" class="btn w-100 w-sm-auto" style="background-color: #EEEEEE; color: black">
                        Save
                    </button>
                    <button type="button" class="btn btn-primary w-100 w-sm-auto">Download</button>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Horizontal form -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <input type="file" accept="image/*" id="imgUpload" onchange="readURL(this);"
                                   style="display:none" name="image" required>
                            <h6 class="card-title">Drag your logo or <span id="uploadImage">select file</span></h6>
                            <img src="#" id="invoiceImage" width="100px" class="imgSrc">
                        </div>
                        <!-- /horizotal form -->
                    </div>
                </div>

                <div class="col-lg-6 accountInfo">
                    <!-- Vertical form -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5>Account</h5>
                        </div>
                        <input type="hidden" name="account_id" id="accountId" value="">
                        <div class="collapse show">
                            <div class="card-body">
                                <h5 class="account_number"></h5>
                                <p class="bank_name"></p>
                                <p class="account_title"></p>
                            </div>
                        </div>
                    </div>
                    <!-- /vertical form -->

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" data-toggle="modal" data-target="#modal-sender">
                    <!-- Horizontal form -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">From</h5>
                        </div>
                        <input type="hidden" id="sname" name="sender_name" value="">
                        <input type="hidden" id="semail" name="sender_email" value="">
                        <input type="hidden" id="scountry" name="sender_country" value="">
                        <input type="hidden" id="sphone" name="sender_phone" value="">
                        <input type="hidden" id="sadd1" name="sender_address1" value="">
                        <input type="hidden" id="sadd2" name="sender_address2" value="">
                        <input type="hidden" id="swebsite" name="sender_website" value="">
                        <input type="hidden" id="stax" name="sender_tax" value="">

                        <div class="collapse show">
                            <div class="card-body">
                                <h5 class="sender_name">Sender Name</h5>
                                <p class="sender_email">Phone and other details</p>
                                <p class="sender_phone"></p>
                                <p class="sender_address"></p>
                                <p class="sender_country"></p>
                                <p class="sender_website"></p>
                                <p class="sender_tax"></p>
                            </div>
                        </div>
                    </div>
                    <!-- /horizotal form -->

                </div>

                <div class="col-lg-6 clientInfo">
                    <!-- Vertical form -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">To</h5>
                        </div>
                        <input type="hidden" name="recipient_id" id="recipientId" value="">
                        <div class="collapse show">
                            <div class="card-body">
                                <h5 class="recipient_name">Recipient Name</h5>
                                <p class="first_last"></p>
                                <p class="address1"></p>
                                <p class="address2"></p>
                                <p class="country"></p>
                                <p class="recipient_email">Phone and other details</p>
                            </div>
                        </div>
                    </div>
                    <!-- /vertical form -->
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Invoice Number:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="invoice_number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Invoice Date:</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                    </span>
                                    <input type="text" name="invoice_date" class="form-control daterange-single" value="03/18/2013">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @include('partials.items')

            @include('partials.modals')
            <br>
            @include('partials.invoice_summary')

        </div>
    </form>



@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {
            $(".imgSrc").hide();
            $(".errorDiv").hide();


            $("#add_item").on("click", function() {

                var newid = 0;
                $.each($("#tab_logic tr"), function() {
                    if (parseInt($(this).data("id")) > newid) {
                        newid = parseInt($(this).data("id"));
                    }
                });
                newid++;
                var tr = $("<tr></tr>", {
                    id: "addr"+newid,
                    "data-id": newid
                });

                // loop through each td and create new elements with name of newid
                $.each($("#tab_logic tbody tr:nth(0) td"), function() {
                    var td;
                    var cur_td = $(this);

                    var children = cur_td.children();

                    // add new td and element if it has a nane
                    if ($(this).data("name") !== undefined) {
                        td = $("<td></td>", {
                            "data-name": $(cur_td).data("name")
                        });

                        var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                        c.attr("name", $(cur_td).data("name") + newid);
                        c.appendTo($(td));
                        td.appendTo($(tr));
                    } else {
                        td = $("<td class='subTotal'><span id='mySubtotal'></span></td>", {
                            'text': $('#tab_logic tr').length
                        }).appendTo($(tr));
                    }
                });

                // add delete button and td

                // $("<td></td>").append(
                //     $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
                //         .click(function() {
                //             $(this).closest("tr").remove();
                //         })
                // ).appendTo($(tr));


                // add the new row
                $(tr).appendTo($('#tab_logic'));

                $(tr).find("td button.row-remove").on("click", function() {
                    $(this).closest("tr").remove();
                });
            });

            // Sortable Code
            var fixHelperModified = function(e, tr) {
                var $originals = tr.children();
                var $helper = tr.clone();

                $helper.children().each(function(index) {
                    $(this).width($originals.eq(index).width())
                });

                return $helper;
            };

            $(".table-sortable tbody").sortable({
                helper: fixHelperModified
            }).disableSelection();

            $(".table-sortable thead").disableSelection();



            $("#add_row").trigger("click");

        });
        function readURL(input) {
            $(".imgSrc").show();
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#invoiceImage')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#uploadImage').click(function () {
            $('#imgUpload').trigger('click');
        });

        function showClient(data_id) {
            var id = data_id;
            var Url = '/client/show/' + id;
            var requestMethod = 'get';
            var dataParams = {
                'id': id,
            };
            var optionalParams = "clientShow";
            ajaxFunction(dataParams, Url, requestMethod, optionalParams);

        }

        function showAccount(data_id) {
            var id = data_id;
            var Url = '/account/show/' + id;
            var requestMethod = 'get';
            var dataParams = {
                'id': id,
            };
            var optionalParams = "accountShow";
            ajaxFunction(dataParams, Url, requestMethod, optionalParams);

        }

        $('#modal-client-second').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
        })
        $('div.clientInfo').click(function () {
            var clients = {!! json_encode($clients, JSON_HEX_TAG) !!};
            {{--var clients = '{{ $clients }}';--}}
            // console.log(clients.length);
            if (clients.length > 0) {
                $('#modal-client').modal('show');
            } else {
                $('#modal-client-second').modal('show');
            }
        });

        $('#newTaxRate').change(function () {
            var optValue = $(this).val();
            if(optValue == "new")
            {
                $(this).val("");
                $('#modal-tax').modal('show');
            }
        });

        $('div.accountInfo').click(function () {
            var accounts = {!! json_encode($accounts, JSON_HEX_TAG) !!};
            {{--var clients = '{{ $clients }}';--}}
            // console.log(clients.length);
            if (accounts.length > 0) {
                $('#modal-account').modal('show');
            } else {
                $('#modal-account-second').modal('show');
            }
        });
        $('.secondClient').click(function () {
            $('#modal-client').modal('hide');
            $('#modal-client-second').modal('show');

        });

        $('.secondAccount').click(function () {
            $('#modal-account').modal('hide');
            $('#modal-account-second').modal('show');

        });

        $("#save_rate").click(function (e) {
            e.preventDefault();
            var tax_name = $("#tax_name").val();
            var rate_percent = $("#rate_percent").val();

            $('#modal-tax').modal('hide');

            var opt = '';
            opt += "<option value=" + rate_percent + " selected='selected'>" + tax_name + " </option>";
            $('#newTaxRate').append(opt);



            if($('#hiddenSubTotal').val() != "")
            {
                $subTotl = $('#hiddenSubTotal').val();
                $taxValue = $subTotl*rate_percent/100;

                var tax = '';
                tax += '<p>USD'+" "+$taxValue+'</p>';

                $('#taxx').html(tax);
            }
        });

        $("#save_account").click(function (e) {
            e.preventDefault();
            var bank_name = $("#bank_name").val();
            var title = $("#title").val();
            var account_number = $("#account_number").val();
            var code_key = $("#code_key").val();
            var code_value = $("#code_value").val();
            var country = $("#country").val();
            var address = $("#address").val();
            var city = $("#city").val();
            var Url = "{{ route('store-account') }}";
            var requestMethod = 'POST';
            var dataParams = {
                'bank_name': bank_name,
                'account_title': title,
                'account_number': account_number,
                'code_key': code_key,
                'code_value': code_value,
                'country': country,
                'city': city,
                'address': address,
            };

            var optionalParams = "accountSave";

            ajaxFunction(dataParams, Url, requestMethod, optionalParams);
        });

        $("#save_sender").click(function () {
            var sender_name = $("#sender_name").val();
            var sender_country = $("#sender_country").val();
            var sender_email = $("#sender_email").val();
            var sender_address1 = $("#sender_address1").val();
            var sender_address2 = $("#sender_address2").val();
            var sender_phone = $("#sender_phone").val();
            var sender_website = $("#sender_website").val();
            var sender_tax = $("#sender_tax").val();

            $('#modal-sender').modal('hide');
            $('.sender_name').html(sender_name);
            $('.sender_email').html(sender_email);
            $('.sender_phone').html(sender_phone);
            $('.sender_address').html(sender_address1);
            $('.sender_country').html(sender_country);
            $('.sender_website').html(sender_website);
            $('.sender_tax').html(sender_tax);

            $('#sname').val(sender_name);
            $('#semail').val(sender_email);
            $('#sphone').val(sender_phone);
            $('#sadd1').val(sender_address1);
            $('#sadd2').val(sender_address2);
            $('#scountry').val(sender_country);
            $('#swebsite').val(sender_website);
            $('#stax').val(sender_tax);


        });

        $("#send_form").click(function (e) {
            e.preventDefault();
            var company_name = $("#company_name").val();
            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var email = $("#email").val();
            var country = $("#country").val();
            var address1 = $("#address1").val();
            var address2 = $("#address2").val();
            var phone = $("#phone").val();
            var Url = "{{ route('store-client') }}";
            var requestMethod = 'POST';
            var dataParams = {
                'company_name': company_name,
                'first_name': first_name,
                'last_name': last_name,
                'email': email,
                'country': country,
                'address1': address1,
                'address2': address2,
                'phone': phone,
            };

            var optionalParams = "clientSave";

            ajaxFunction(dataParams, Url, requestMethod, optionalParams);
        });


        function ajaxFunction(dataParams, Url, requestMethod, optionalParams) {
            $.ajax({
                method: requestMethod,
                url: Url,
                data: dataParams,
                success: function (data) {
                    console.log(data);
                    if (optionalParams == "clientSave") {
                        if (data.status == 200) {
                            $('.recipient_name').html(data.company_name);
                            $('.first_last').html(data.full_name);
                            $('.address1').html(data.address1);
                            $('.address2').html(data.address2);
                            $('.country').html(data.country);
                            $('.recipient_email').html(data.email);
                            $('#modal-client-second').modal('hide');
                            $('#recipientId').val(data.id);
                        } else {
                            showError(data);
                        }
                    }
                    if (optionalParams == "clientShow") {
                        if (data.status == 200) {
                            $('#modal-client-second').remove();
                            $('.recipient_name').html(data.company_name);
                            $('.first_last').html(data.full_name);
                            $('.address1').html(data.address1);
                            $('.address2').html(data.address2);
                            $('.country').html(data.country);
                            $('.recipient_email').html(data.email);
                            $('#recipientId').val(data.id);
                        } else {
                            showError(data);
                        }
                    }
                    if (optionalParams == "accountSave") {
                        if (data.status == 200) {
                            $('#modal-client-second').remove();
                            $('.bank_name').html(data.bank_name);
                            $('.account_title').html(data.account_title);
                            $('.account_number').html(data.account_number);
                            $('#accountId').val(data.id);
                        } else {
                            showError(data);
                        }
                    }

                    if (optionalParams == "accountShow") {
                        if (data.status == 200) {
                            $('#modal-account-second').remove();
                            $('.bank_name').html(data.bank_name);
                            $('.account_title').html(data.account_title);
                            $('.account_number').html(data.account_number);
                            $('#accountId').val(data.id);
                        } else {
                            showError(data);
                        }
                    }

                }
            });
        }

        function showError(data)
        {
            $(".errorDiv").show();
            $('.clientError').html(data.message);
        }


        function myRate(id)
        {
            var quantity = $("#qty").val();
            if(quantity)
            {
                var rate = document.getElementById(id).value;
                var rowId = jQuery(this).closest('tr').attr('id');


                var dataParams = {
                    'quantity': quantity,
                    'rate': rate,
                };
                $.ajax({
                    method: 'POST',
                    url:"{{ route('rate-subTotal') }}",
                    data: dataParams,
                    success: function (data) {

                        var res = '';
                        res += '<p>USD'+" "+data+'</p>';

                        $('#mySubtotal').html("");
                        $('#mySubtotal').html(res);

                        $('#invoiceSubTotal').html(res);
                        $('#invoiceTotal').html(res);
                        $('#hiddenSubTotal').val(data);

                        if($('#newTaxRate').val() != "")
                        {
                            var rate =  $('#newTaxRate').val();
                            $taxValue = data*rate/100;

                            var tax = '';
                            tax += '<p>USD'+" "+$taxValue+'</p>';

                            $('#taxx').html(tax);
                        }

                    }
                });

            }



            // var output = document.getElementById("mySubtotal");
            // output.innerHTML = input;
        }
    </script>
@endsection
