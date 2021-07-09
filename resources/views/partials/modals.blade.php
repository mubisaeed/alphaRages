<!-- Account form -->
<div id="modal-account" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="text-center mb-3">
                <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                <h5 class="mb-0">Set the account for this invoice</h5>
            </div>
            <div>
                @foreach($accounts as $account)
                    <div class="text-center mb-3" data-id="{{$account->id}}" style="background-color: #939390FF"
                         onclick="showAccount(this.getAttribute('data-id'))">
                        <div>
                            <h5>{{$account->account_number}}</h5>
                            <p>{{$account->bank_name}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mb-3">
                <a class="btn btn-primary secondAccount">Create New Account</a>
            </div>

        </div>
    </div>
</div>
<!-- /Account form -->

<!-- account second form -->
<div id="modal-account-second" class="modal fade" tabindex="-1"  style="overflow: auto">
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
<!-- /account second form -->

<!-- tax form form -->
<div id="modal-tax" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <!-- Form -->
            <form class="modal-body form-validate sender-submit">
                @csrf
                <div class="text-center mb-3">
                    <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                    <h5 class="mb-0">New Tax Rate</h5>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <label>Name</label>
                    <input type="text" class="form-control" id="tax_name" name="tax_name" required>
                </div>
                <div class="form-group form-group-feedback form-group-feedback-left">
                    <label>Rate (%)</label>
                    <input type="text" class="form-control" id="rate_percent" name="rate_percent" required>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" id="save_rate">Submit</button>
                </div>

            </form>
            <!-- /form -->

        </div>
    </div>
</div>
<!-- /tax form -->

<!-- Sender form -->
<div id="modal-sender" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <!-- Form -->
            <form class="modal-body form-validate sender-submit">
                @csrf
                <div class="text-center mb-3">
                    <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                    <h5 class="mb-0">New Sender</h5>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <label>Sender / Name</label>
                    <input type="text" class="form-control" id="sender_name" name="sender_name" required>
                </div>
                <div class="form-group form-group-feedback form-group-feedback-left">
                    <label>Email Address</label>
                    <input type="email" class="form-control" id="sender_email" name="sender_email" required>
                </div>
                <div class="form-group form-group-feedback form-group-feedback-left">
                    <label>Country</label>
                    <select class="coolSelect form-control" id="sender_country" name="sender_country">
                        @foreach($countries as $key => $value)
                            <option value="{{$value['name']}}">{{$value['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group form-group-feedback form-group-feedback-left">
                    <label>Address 1</label>
                    <input type="text" class="form-control" id="sender_address1" name="sender_address1" required>
                </div>
                <div class="form-group form-group-feedback form-group-feedback-left">
                    <label>Address 2</label>
                    <input type="text" class="form-control" id="sender_address2" name="sender_address2" required>
                </div>
                <div class="form-group form-group-feedback form-group-feedback-left">
                    <label>Phone</label>
                    <input type="text" class="form-control" id="sender_phone" name="sender_phone" required>
                </div>
                <div class="form-group form-group-feedback form-group-feedback-left">
                    <label>Website</label>
                    <input type="text" class="form-control" id="sender_website" name="sender_phone" required>
                </div>
                <div class="form-group form-group-feedback form-group-feedback-left">
                    <label>PAN / Tax registration Number</label>
                    <input type="text" class="form-control" id="sender_tax" name="sender_tax" required>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" id="save_sender">Submit</button>
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
