@extends('layouts.app')

@section('content')
<section class="form-main-section">
    <div class="container">
        <div class="heading">
            <h2 class="title">Purple link</h2>
        </div>
        <div class="form-outer row justify-content-between">
            <div class="col-lg-7 form-inner">
                <form class="form-main form-step-submit" method="post" action="step-2.html" enctype="multipart/form-data">
                    <p>Curabitur quis libero tellus. Lorem ipsum dolor sit amet, econsect turu adipiscing elit. Aliquam <a href="">aliquam mauris</a> ut rhoncusu.</p>
                    <div class="step-1">
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-6">
                                <label>Cardholder Name *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input autofocus class="form-control input" type="text" name="" value="">
                                    <label>Type cardholder name</label>
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>Billing City *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type billing city</label>
                                </div>
                            </div>
                        </div>
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-12">
                                <label>Billing Country *</label>
                                <div class="form-group animate-label label-fixed ip-required ip 3">
                                    <select class="form-control input country-selection" name="">
                                        <option></option>
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-6">
                                <label>Billing Zip *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type billing zip</label>
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>Card Number *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type card number</label>
                                </div>
                            </div>
                        </div>
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-6">
                                <label>Expiration Month/Year *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="month" name="" value="">
                                    <label>Type expiration date</label>
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>CVC *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type card cvc</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <div class="form-actions justify-content-end">
                            <button type="button" class="sweet-btn form-tab-next">Next <i class="fas fa-arrow-circle-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            @include('steps.step-bar')
            {{-- <div class="col-lg-4 form-tab-outer">
                <div class="form-tab-inner">
                    <div class="form-tab-item-outer">
                        <a class="form-tab-item" href="step-1.html">
                            <span class="number">1</span>
                            <span class="text">
                                Step 1
                                <small>Lorem ipsum dolor</small>
                            </span>
                        </a>
                    </div>
                    <div class="form-tab-item-outer">
                        <a class="form-tab-item" href="step-2.html">
                            <span class="number">2</span>
                            <span class="text">
                                Step 2
                                <small>Lorem ipsum dolor</small>
                            </span>
                        </a>
                    </div>
                    <div class="form-tab-item-outer">
                        <a class="form-tab-item" href="step-3.html">
                            <span class="number">3</span>
                            <span class="text">
                                Step 3
                                <small>Lorem ipsum dolor</small>
                            </span>
                        </a>
                    </div>
                    <div class="form-tab-item-outer active">
                        <a class="form-tab-item" href="javascript:void(0);">
                            <span class="number">4</span>
                            <span class="text">
                                Step 4
                                <small>Lorem ipsum dolor</small>
                            </span>
                        </a>
                    </div>

                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection
