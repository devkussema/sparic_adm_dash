@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE HEADER -->
                            <div class="page-header d-sm-flex d-block">
                                <ol class="breadcrumb mb-sm-0 mb-3">
                                    <!-- breadcrumb -->
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Bootstrap</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Typography</li>
                                </ol><!-- End breadcrumb -->
                                <div class="ms-auto">
                                    <div>
                                        <a href="javascript:void(0);" class="btn bg-secondary-transparent text-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="Rating">
                                            <span>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </a>
                                        <a href="{{url('lockscreen')}}" class="btn bg-primary-transparent text-primary mx-2 btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="lock">
                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                        <a href="javascript:void(0);" class="btn bg-warning-transparent text-warning btn-sm" data-bs-toggle="tooltip"
                                            title="" data-bs-placement="bottom" data-bs-original-title="Add New">
                                            <span>
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- PAGE HEADER -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Default Heading Text</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
                                                <h1 class="mt-0">h1. Heading</h1>
                                                <h2>h2. Heading</h2>
                                                <h3>h3. Heading</h3>
                                                <h4>h4. Heading</h4>
                                                <h5>h5. Heading</h5>
                                                <h6>h6. Heading</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col end -->
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Heading with color Text</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
                                                <h1 class="text-primary  mt-0">h1. Heading</h1>
                                                <h2 class="text-secondary">h2. Heading</h2>
                                                <h3 class="text-success">h3. Heading</h3>
                                                <h4 class="text-danger">h4. Heading</h4>
                                                <h5 class="text-info">h5. Heading</h5>
                                                <h6 class="text-warning">h6. Heading</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col end -->
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Heading-Inverse</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <p>Examples using <code>heading-inverse</code> css</p>
                                                <h1 class="heading-inverse  mt-0">h1. Heading</h1>
                                                <h2 class="heading-inverse">h2. Heading</h2>
                                                <h3 class="heading-inverse">h3. Heading</h3>
                                                <h4 class="heading-inverse">h4. Heading</h4>
                                                <h5 class="heading-inverse">h5. Heading</h5>
                                                <h6 class="heading-inverse">h6. Heading</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col end -->
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Heading primary to danger</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <p>Examples using <code>heading-primary</code> to
                                                    <code>heading-danger</code>
                                                    css
                                                </p>
                                                <h1 class="heading-primary mt-0">h1. Heading</h1>
                                                <h2 class="heading-secondary">h2. Heading</h2>
                                                <h3 class="heading-success">h3. Heading</h3>
                                                <h4 class="heading-info">h4. Heading</h4>
                                                <h5 class="heading-warning">h5. Heading</h5>
                                                <h6 class="heading-danger">h6. Heading</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col end -->
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Paragraph Text</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <p>Richard McClintock, a Latin professor at Hampden-Sydney College in
                                                    Virginia,
                                                    looked up one of the more obscure Latin words, consectetur, from a Lorem
                                                    Ipsum passage, and going through the cites of the word in classical
                                                    literature.</p>
                                                <p class="lead">Most designers set their type arbitrarily, either by pulling
                                                    values out of the sky or by adhering to a baseline grid. The former case
                                                    isn’t worth discussing here, but the latter requires a closer look.</p>
                                                <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Text alignment</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <p>Easily realign text to components with text alignment classes.</p>
                                                <div class="example border">
                                                    <p class="text-start">Left aligned text on all viewport sizes.</p>
                                                    <p class="text-center">Center aligned text on all viewport sizes.</p>
                                                    <p class="text-end">Right aligned text on all viewport sizes.</p>
                                                    <p class="text-justify m-0">Both aligned text on all viewport sizes.
                                                        Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus
                                                        sit
                                                        amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Text transform</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <p>Transform text in components with text capitalization classes.</p>
                                                <div class="example border">
                                                    <p class="text-lowercase">Lowercased text.</p>
                                                    <p class="text-uppercase">Uppercased text.</p>
                                                    <p class="text-capitalize m-0">Capitalized text.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Letter spacing</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <p>Utilities for controlling the tracking (letter spacing) of an element.
                                                </p>
                                                <div class="example border">
                                                    <p class="tracking-tight">Lorem ipsum dolor sit amet. Tight letter
                                                        spacing.
                                                    </p>
                                                    <p class="tracking-normal">Lorem ipsum dolor sit amet. Normal letter
                                                        spacing.</p>
                                                    <p class="tracking-wide m-0">Lorem ipsum dolor sit amet. Wide letter
                                                        spacing.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Height</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <p>Utilities for controlling the leading (line height) of an element.</p>
                                                <div class="example border">
                                                    <p class="leading-none">Lorem ipsum dolor sit amet.
                                                        Dolor sit amet.
                                                    </p>
                                                    <p class="leading-tight">Lorem ipsum dolor sit amet.
                                                        Dolor sit amet.
                                                    </p>
                                                    <p class="leading-normal">Lorem ipsum dolor sit amet.
                                                        Dolor sit amet.
                                                    </p>
                                                    <p class="leading-loose m-0">Lorem ipsum dolor sit amet.
                                                        Dolor sit amet.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Text-styles</h3>
                                        </div>
                                        <div class="card-body">
                                            <p>You can use the mark tag to
                                                <mark>highlight</mark> text.
                                            </p>
                                            <p>
                                                <del>This line of text is meant to be treated as deleted text.</del>
                                            </p>
                                            <p>
                                                <s>This line of text is meant to be treated as no longer accurate.</s>
                                            </p>
                                            <p>
                                                <ins>This line of text is meant to be treated as an addition to the
                                                    document.</ins>
                                            </p>
                                            <p><u>This line of text will render as underlined</u></p>
                                            <p>
                                                <small>This line of text is meant to be treated as fine print.</small>
                                            </p>
                                            <p><strong>This line rendered as bold text.</strong></p>
                                            <p><em>This line rendered as italicized text.</em></p>
                                            <p><b>This line rendered as italicized text.</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

@endsection