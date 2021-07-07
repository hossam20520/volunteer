@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="{{ $chart1->options['column_class'] }}">
                            <h3>{!! $chart1->options['chart_title'] !!}</h3>
                            {!! $chart1->renderHtml() !!}
                        </div>
                        <div class="{{ $chart2->options['column_class'] }}">
                            <h3>{!! $chart2->options['chart_title'] !!}</h3>
                            {!! $chart2->renderHtml() !!}
                        </div>
                        <div class="{{ $chart3->options['column_class'] }}">
                            <h3>{!! $chart3->options['chart_title'] !!}</h3>
                            {!! $chart3->renderHtml() !!}
                        </div>
                        <div class="{{ $chart4->options['column_class'] }}">
                            <h3>{!! $chart4->options['chart_title'] !!}</h3>
                            {!! $chart4->renderHtml() !!}
                        </div>
                        <div class="{{ $settings5['column_class'] }}">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-0">
                                    <div class="text-value">{{ number_format($settings5['total_number']) }}</div>
                                    <div>{{ $settings5['chart_title'] }}</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="{{ $settings6['column_class'] }}">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-0">
                                    <div class="text-value">{{ number_format($settings6['total_number']) }}</div>
                                    <div>{{ $settings6['chart_title'] }}</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="{{ $settings7['column_class'] }}">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-0">
                                    <div class="text-value">{{ number_format($settings7['total_number']) }}</div>
                                    <div>{{ $settings7['chart_title'] }}</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="{{ $settings8['column_class'] }}">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-0">
                                    <div class="text-value">{{ number_format($settings8['total_number']) }}</div>
                                    <div>{{ $settings8['chart_title'] }}</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="{{ $chart9->options['column_class'] }}">
                            <h3>{!! $chart9->options['chart_title'] !!}</h3>
                            {!! $chart9->renderHtml() !!}
                        </div>
                        <div class="{{ $chart10->options['column_class'] }}">
                            <h3>{!! $chart10->options['chart_title'] !!}</h3>
                            {!! $chart10->renderHtml() !!}
                        </div>
                        <div class="{{ $settings11['column_class'] }}">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-0">
                                    <div class="text-value">{{ number_format($settings11['total_number']) }}</div>
                                    <div>{{ $settings11['chart_title'] }}</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="{{ $settings12['column_class'] }}">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-0">
                                    <div class="text-value">{{ number_format($settings12['total_number']) }}</div>
                                    <div>{{ $settings12['chart_title'] }}</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="{{ $chart13->options['column_class'] }}">
                            <h3>{!! $chart13->options['chart_title'] !!}</h3>
                            {!! $chart13->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>{!! $chart1->renderJs() !!}{!! $chart2->renderJs() !!}{!! $chart3->renderJs() !!}{!! $chart4->renderJs() !!}{!! $chart9->renderJs() !!}{!! $chart10->renderJs() !!}{!! $chart13->renderJs() !!}
@endsection