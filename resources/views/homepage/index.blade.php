@extends('layouts.master')

@section('content')
    <!-- BEGIN OVERVIEW STATISTIC BARS-->
    <div class="row stats-overview-cont">
        <div class="col-md-3 col-sm-4">
            <div class="stats-overview stat-block">
                <div class="details">
                    <div class="title">
                        Orders
                    </div>
                    <div class="numbers">
                        {{$orders}}
                    </div>
                    <div class="progress">
								<span style="width: {{$orders}}%;" class="progress-bar progress-bar-warning" aria-valuenow="{{$orders}}" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								{{$orders}}% Complete </span>
								</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="stats-overview stat-block">
                <div class="details">
                    <div class="title">
                        Order Income
                    </div>
                    <div class="numbers">
                        {{$order_income}}
                    </div>
                    <div class="progress">
								<span style="width: {{$order_income}}%;" class="progress-bar progress-bar-danger" aria-valuenow="{{$order_income}}" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								{{$order_income}}% Complete </span>
								</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="stats-overview stat-block">
                <div class="details">
                    <div class="title">
                        Clients
                    </div>
                    <div class="numbers">
                        {{$clients}}
                    </div>
                    <div class="progress">
								<span style="width: {{$clients}}%;" class="progress-bar progress-bar-success" aria-valuenow="{{$clients}}" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								{{$clients}}% Complete </span>
								</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row stats-overview-cont">
        <div class="col-md-3 col-sm-4">
            <div class="stats-overview stat-block">
                <div class="details">
                    <div class="title">
                        Gas Stations Earnings
                    </div>
                    <div class="numbers">
                        {{$gs_earnings}}
                    </div>
                </div>
                <div class="progress">
							<span style="width: {{$gs_earnings}}%;" class="progress-bar progress-bar-info" aria-valuenow="{{$gs_earnings}}" aria-valuemin="0" aria-valuemax="100">
							<span class="sr-only">
							{{$gs_earnings}}% Complete </span>
							</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="stats-overview stat-block">
                <div class="details">
                    <div class="title">
                        Provisioners
                    </div>
                    <div class="numbers">
                        {{$provisioners}}
                    </div>
                    <div class="progress">
								<span style="width: {{$provisioners}}%;" class="progress-bar progress-bar-warning" aria-valuenow="{{$provisioners}}" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								{{$provisioners}}% Complete </span>
								</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="stats-overview stat-block">
                <div class="details">
                    <div class="title">
                        Costs
                    </div>
                    <div class="numbers">
                        {{$costs}}
                    </div>
                    <div class="progress">
								<span style="width: {{$costs}}%;" class="progress-bar progress-bar-success" aria-valuenow="{{$costs}}" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								{{$costs}}% Complete </span>
								</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OVERVIEW STATISTIC BARS-->


@endsection