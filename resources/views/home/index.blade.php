<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MAschedule</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.15/r-2.1.1/datatables.min.css"/>
        <link href="{{secure_asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="top-right links">
            <span class="schedule-view"><i class="fa fa-table fa-2x"></i></span>
            <span class="main-view"><i class="fa fa-calendar-check-o fa-2x"></i></span>
            <span class="admin-link"><a href="{{ url('/admin')  }}"><i class="fa fa-cog fa-2x"></i></a></span>
        </div>

        <div class="home-title hidden-xs">
            <h1><b>MA</b>schedule</h1>
        </div>
        <div class="home-title-small hidden-sm hidden-md hidden-lg">
            <h1><b>MA</b>schedule</h1>
        </div>

        <div id="main-view">
            <div class="flex-center position-ref main-content">
                <div class="content content-center">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="inline-block arrow-right"></div>
                            <div class="inline-block arrow-left"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 home-subtitle noselect">
                            @if(isset($next_performance))
                                <h3>NEXT PERFORMANCE</h3>
                            @else
                                <h3>NO NEXT PERFORMANCES</h3>
                            @endif
                        </div>
                    </div>

                    @if(isset($next_performance_date))
                        <div class="row">
                            @if($now_date->diff($next_performance_date)->days >= 1)
                                <div class="col-xs-12">
                                    <div class="counter">{{$now_date->diff($next_performance_date)->days}}
                                        {{ $now_date->diff($next_performance_date)->days == 1 ?
                                           trans('home.day') :
                                           trans('home.days') }}</div>
                                </div>
                            @else
                                <div class="col-xs-6">
                                    <div class="counter circle circle-left">{{ $now_date->diff($next_performance_date)->h }}</div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="counter circle">{{ $now_date->diff($next_performance_date)->i }}</div>
                                </div>
                            @endif
                        </div>
                    @endif

                    <div class="row baton-container">
                        <div class="col-xs-12">
                            <div class="baton-base"></div>
                            <div class="baton-stick"></div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($next_performance))
                <div class="row home-info">
                    <div class="col-xs-6 text-right">
                        <b>Production</b>
                    </div>
                    <div class="col-xs-6 text-left">
                        {{ $next_performance->period->production->name }}
                    </div>
                    <div class="col-xs-6 text-right">
                        <b>Location</b>
                    </div>
                    <div class="col-xs-6 text-left">
                        {{ $next_performance->period->location->name }}
                    </div>
                    <div class="col-xs-6 text-right">
                        <b>City</b>
                    </div>
                    <div class="col-xs-6 text-left">
                        {{ $next_performance->period->location->city->name }}
                    </div>

                    @if(count($next_performance->period->performances) > 1)
                        <div class="row all-performances">
                            <div class="col-xs-6 text-right">
                                <b>All Performances</b>
                            </div>
                            @foreach($next_performance->period->performances as $key => $performance)
                                @if($key == 0)
                                    <div class="col-xs-6 text-left">
                                        <span class="{{ $performance->getPerformanceClass($next_performance) }}">
                                            {{ \Carbon\Carbon::parse($performance->performance_date)->format('d/m/Y H:i') }}
                                        </span>
                                    </div>
                                @else
                                    <div class="col-xs-6">
                                    </div>
                                    <div class="col-xs-6 text-left">
                                            <span class="{{ $performance->getPerformanceClass($next_performance) }}">
                                                {{ \Carbon\Carbon::parse($performance->performance_date)->format('d/m/Y H:i') }}
                                            </span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
        </div>

        <div id="schedule-view">
            <div class="schedule-container container">
                <div class="content">
                    <table id="schedule" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Production</th>
                            <th>Location</th>
                            <th>City</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Performances</th>
                            <th>Performances N.</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($periods as $period)
                            <tr>
                                <td>{{ $period->production->name }}</td>
                                <td>{{ $period->location->name }}</td>
                                <td>{{ $period->location->city->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($period->start)->format('d/m/Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($period->end)->format('d/m/Y') }}</td>
                                <td>@foreach($period->performances as $performance) {{ \Carbon\Carbon::parse($performance->performance_date)->format('d/m') . " " }}@endforeach</td>
                                <td>{{ count($period->performances) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="{{secure_asset('js/app.js')}}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.15/r-2.1.1/datatables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/1.10.15/sorting/datetime-moment.js"></script>
        <script src="{{secure_asset('js/home.js')}}"></script>
    </body>
</html>

