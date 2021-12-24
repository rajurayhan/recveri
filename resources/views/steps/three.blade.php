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
                                <label>Name of Approving *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input autofocus class="form-control input" type="text" name="" value="">
                                    <label>Type name of approving</label>
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>Approver's Email *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input autofocus class="form-control input" type="text" name="" value="">
                                    <label>Type approver's email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-6">
                                <label>Approver's Phone *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input autofocus class="form-control input" type="text" name="" value="">
                                    <label>Type approver's phone</label>
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>Approver's Name *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input autofocus class="form-control input" type="text" name="" value="">
                                    <label>Type approver's name</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <div class="form-actions justify-content-end">
                            <a href="{{ route('stepFour') }}"><button type="button" class="sweet-btn form-tab-next">Next <i class="fas fa-arrow-circle-right"></i></button></a>

                        </div>
                    </div>
                </form>
            </div>
            @include('steps.step-bar')
            {{-- <div class="col-lg-4 form-tab-outer">
                <div class="form-tab-inner">
                    <div class="form-tab-item-outer active">
                        <a class="form-tab-item" href="step-1.html">
                            <span class="number">1</span>
                            <span class="text">
                                Step 1
                                <small>Lorem ipsum dolor</small>
                            </span>
                        </a>
                        <!-- <div class="required-ip-wrapper">
                            <div class="reqiured-ip" ip-pos="1"></div>
                            <div class="reqiured-ip" ip-pos="2"></div>
                            <div class="reqiured-ip" ip-pos="3"></div>
                            <div class="reqiured-ip" ip-pos="4"></div>
                        </div> -->
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
                    <div class="form-tab-item-outer active">
                        <a class="form-tab-item" href="javascript:void(0);">
                            <span class="number">3</span>
                            <span class="text">
                                Step 3
                                <small>Lorem ipsum dolor</small>
                            </span>
                        </a>
                    </div>
                    <div class="form-tab-item-outer">
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
