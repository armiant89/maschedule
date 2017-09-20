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

            @if(isset($next_performance))
                <div class="row">
                    <div class="col-xs-12">
                        <div class="counter">
                            {{ $diff_in_days < 1 ?
                                    'today' :
                                    $diff_for_humans }}
                        </div>
                    </div>
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
        <div class="container home-info">
            <div class="row">
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
                    <div class="col-xs-12">
                        <div class="row all-performances">
                            <div class="col-xs-6 text-right">
                                <b>All Performances</b>
                            </div>
                            @foreach($next_performance->period->performances->sortBy('performance_date') as $key => $performance)
                                @if($key == 0)
                                    <div class="col-xs-6 text-left">
                                                <span class="{{ $performance->getPerformanceClass($next_performance) }}">
                                                    {{ $carbon::parse($performance->performance_date)->format('d/m') }}
                                                </span>
                                    </div>
                                @else
                                    <div class="col-xs-6">
                                    </div>
                                    <div class="col-xs-6 text-left">
                                                    <span class="{{ $performance->getPerformanceClass($next_performance) }}">
                                                        {{ $carbon::parse($performance->performance_date)->format('d/m') }}
                                                    </span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endif
</div>