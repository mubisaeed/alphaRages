<div class="card-body">
    <div class="d-lg-flex flex-lg-wrap">
        <div class="pt-2 mb-3">
            <h6 class="mb-3">Authorized person</h6>
            <div class="mb-3">
                <img src="{{asset('assets/global_assets/images/signature_light.png')}}" width="150" alt="">
            </div>

            <ul class="list-unstyled text-muted">
                <li>Eugene Kopyov</li>
                <li>2269 Elba Lane</li>
                <li>Paris, France</li>
                <li>888-555-2311</li>
            </ul>
        </div>

        <div class="pt-2 mb-3 wmin-lg-400 ml-auto">
            <h6 class="mb-3">Invoice Summary</h6>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <input type="hidden" id="hiddenSubTotal">
                        <th>Subtotal</th>
                        <td class="text-right" id="invoiceSubTotal">-</td>
                    </tr>
                    <tr>
                        <th>Tax</th>
                        <td class="text-right" id="taxx">-</td>
                    </tr>
                    <tr>
                        <th>Total (USD)</th>
                        <td class="text-right text-warning"><h5 class="font-weight-semibold" id="invoiceTotal">-</h5></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="text-right mt-3">
                <button type="button" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-paperplane"></i></b> Send invoice</button>
            </div>
        </div>
    </div>
</div>
