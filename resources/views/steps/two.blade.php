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
                    <div class="row animate-label-row mb-4">
                        <div class="animate-label-outer col-md-12">
                            <label>Verification Type *</label>
                            <div class="form-group animate-label label-fixed ip-required ip 3">
                                <select class="form-control input e-verification-type" name="">
                                    <option></option>
                                    <option value="Academic">Academic</option>
                                    <option value="Experience">Work Experience</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="step-1 c-academic-ex" style="display: none">
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-6">
                                <label>Awarding Insitution's Name *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input autofocus class="form-control input" type="text" name="" value="">
                                    <label>Awarding insitution's name</label>
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>Institution's Address *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type institution's address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-6">
                                <label>Document Type *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type document type</label>
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>Completion Month/Year *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="month" name="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-12">
                                <label>Additional Details *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <textarea autofocus rows="5" class="form-control input" name=""></textarea>
                                    <label>Type additional details</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step-1 c-work-ex" style="display: none">
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-6">
                                <label>Employer Name *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type employer name here</label>
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>Employment Location Address *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type employment address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-6">
                                <label>Job Title *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type job title here</label>
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>Department *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type department here</label>
                                </div>
                            </div>
                        </div>
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-6">
                                <label>Employment Start Date *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="date" name="" value="">
                                </div>
                            </div>
                            <div class="animate-label-outer col-md-6">
                                <label>Employment End Date *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="date" name="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-12">
                                <label>Employee ID *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <input class="form-control input" type="text" name="" value="">
                                    <label>Type employee ID</label>
                                </div>
                            </div>
                        </div>
                        <div class="row animate-label-row mb-4">
                            <div class="animate-label-outer col-md-12">
                                <label>Work and Accomplishment Details *</label>
                                <div class="form-group animate-label ip-required ip 1">
                                    <textarea autofocus rows="5" class="form-control input" name=""></textarea>
                                    <label>Type Details</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <div class="form-actions justify-content-end">
                            <a href="{{ route('stepThree') }}"><button type="button" class="sweet-btn form-tab-next">Next <i class="fas fa-arrow-circle-right"></i></button></a>
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
                    <div class="form-tab-item-outer active">
                        <a class="form-tab-item" href="javascript:void(0);">
                            <span class="number">2</span>
                            <span class="text">
                                Step 2
                                <small>Lorem ipsum dolor</small>
                            </span>
                        </a>
                    </div>
                    <div class="form-tab-item-outer">
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
