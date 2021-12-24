@php
    $route = request()->route()->getName();
    // dd($route);
@endphp

<div class="col-lg-4 form-tab-outer">
    <div class="form-tab-inner">
        <div class="form-tab-item-outer @if($route == 'home') active @endif">
            <a class="form-tab-item" href="javascript:void(0);">
                <span class="number">1</span>
                <span class="text">
                    Contact Details
                    <small>Your information</small>
                </span>
            </a>
        </div>
        <div class="form-tab-item-outer @if($route == 'stepTwo') active @endif">
            <a class="form-tab-item" href="javascript:void(0);">
                <span class="number">2</span>
                <span class="text">
                    Verification Type
                    <small>Enter verification Data</small>
                </span>
            </a>
        </div>
        <div class="form-tab-item-outer @if($route == 'stepThree') active @endif">
            <a class="form-tab-item" href="javascript:void(0);">
                <span class="number">3</span>
                <span class="text">
                    Approver
                    <small>Approver Detials</small>
                </span>
            </a>
        </div>
        <div class="form-tab-item-outer @if($route == 'stepFour') active @endif">
            <a class="form-tab-item" href="javascript:void(0);">
                <span class="number">4</span>
                <span class="text">
                    Payment
                    <small>Payment Details</small>
                </span>
            </a>
        </div>

    </div>
</div>
