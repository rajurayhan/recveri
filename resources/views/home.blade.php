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
                                <label>Full Legal Name *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input autofocus class="form-control input" type="text" name="" value="">
                                    <label>Type your full name here</label>
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>Date of Birth *</label>
                                <div class="form-group animate-label ip-required ip 2">
                                    <input class="form-control input" type="date" name="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-12">
                                <label>Country of Residence *</label>
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
                                <label>Nationality *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type your nationality here</label>
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>Mobile Number *</label>
                                <div class="form-group animate-label ip-required ip 2">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type your mobile number here</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <div class="form-actions justify-content-end">
                            <a href="{{ route('stepTwo') }}"><button type="button" class="sweet-btn form-tab-next">Next <i class="fas fa-arrow-circle-right"></i></button></a>
                        </div>
                    </div>
                </form>
            </div>
            @include('steps.step-bar')
        </div>
    </div>
</section>
@endsection
