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
    <form>
        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content container d-sm-flex">
                <div class="page-title">
                    <h4><span class="font-weight-semibold">Generate Invoices</span></h4>
                </div>

                <div class="my-sm-auto ml-sm-auto mb-3 mb-sm-0">
                    <button type="button" class="btn w-100 w-sm-auto" style="background-color: #EEEEEE; color: black">
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

                <div class="col-lg-6 ">
                    <!-- Vertical form -->
                    <div class="card">
                        <div class="card-header header-elements-inline" data-toggle="modal"
                             data-target="#modal-account">
                            <h5>Account</h5>
                        </div>
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

                        <div class="collapse show">
                            <div class="card-body">
                                <h5 class="">Sender Name</h5>
                                <p class="">Phone and other details</p>
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
        </div>
    </form>
    <!-- account form -->
    <div id="modal-account" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!-- Form -->
                <form class="modal-body form-validate account">
                    @csrf
                    <div class="text-center mb-3">
                        <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">New Account</h5>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Bank Selection:</label>
                        <select class="coolSelect form-control" id="bank_name" name="bank_name">
                            @foreach($banks as $key => $value)
                                <option value="{{$value['name']}}">{{$value['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Account Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Account No/IBAN:</label>
                        <input type="text" class="form-control" id="account_number" name="account_number" required>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Code Key:</label>
                        <input type="text" class="form-control" id="code_key" name="code_key" required>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Code Value:</label>
                        <input type="text" class="form-control" id="code_value" name="code_value" required>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Country:</label>
                        <select class="coolSelect form-control" id="bank_country" name="country">
                            <option value="" disabled="">Select Country</option>
                            @foreach($countries as $key => $value)
                                <option value="{{$value['name']}}">{{$value['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>City:</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Address:</label>
                        <textarea type="text" class="form-control" id="address" name="address" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" id="save_account">Save</button>
                    </div>

                </form>
                <!-- /form -->

            </div>
        </div>
    </div>
    <!-- /account form -->

    <!-- Sender form -->
    <div id="modal-sender" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!-- Form -->
                <form class="modal-body form-validate" action="index.html">
                    <div class="text-center mb-3">
                        <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>

                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">

                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>

                </form>
                <!-- /form -->

            </div>
        </div>
    </div>
    <!-- /Sender form -->

    <!-- Client form -->
    <div id="modal-client" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="text-center mb-3">
                    <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                    <h5 class="mb-0">Set the client for this invoice</h5>
                </div>
                <div>
                    @foreach($clients as $client)
                        <div class="text-center mb-3" data-id="{{$client->id}}" style="background-color: #939390FF"
                             onclick="showClient(this.getAttribute('data-id'))">
                            <div>
                                <h5>{{$client->FullName}}</h5>
                                <p>{{$client->email}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mb-3">
                    <a class="btn btn-primary secondClient">Create New Client</a>
                </div>

            </div>
        </div>
    </div>
    <!-- /Client form -->

    <!-- Client second form -->
    <div id="modal-client-second" class="modal fade" tabindex="-1" style="overflow: auto">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!-- Form -->
                <form class="modal-body form-validate client-submit">
                    @csrf
                    <div class="text-center mb-3">
                        <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">New Client</h5>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Name / Company Name</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" required>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Country</label>
                        {{--                                    <input type="text" class="form-control" name="country" required>--}}

                        <select class="coolSelect form-control" id="country" name="country">
                            @foreach($countries as $key => $value)
                                <option value="{{$value['name']}}">{{$value['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Address Line 1</label>
                        <input type="text" class="form-control" id="address1" name="address1" required>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Address Line 2</label>
                        <input type="text" class="form-control" id="address2" name="address2" required>
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <label>Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" id="send_form">Submit</button>
                    </div>

                </form>
                <!-- /form -->
            </div>
        </div>
    </div>
    <!-- /Client second form -->

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
        $('.secondClient').click(function () {
            $('#modal-client').modal('hide');
            $('#modal-client-second').modal('show');

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
                        } else {
                            showError();
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
                        } else {
                            showError();
                        }
                    }
                    if (optionalParams == "accountSave") {
                        if (data.status == 200) {
                            $('#modal-client-second').remove();
                            $('.bank_name').html(data.bank_name);
                            $('.account_title').html(data.account_title);
                            $('.account_number').html(data.account_number);
                        } else {
                            showError();
                        }
                    }

                }
            });
        }

        function showError()
        {
            $(".errorDiv").show();
            $('.clientError').html(data.message);
        }

    </script>
@endsection
