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
                        <td>{{ $carbon::parse($period->start)->format('d/m/Y') }}</td>
                        <td>{{ $carbon::parse($period->end)->format('d/m/Y') }}</td>
                        <td>@foreach($period->performances->sortBy('performance_date') as $performance) {{ \Carbon\Carbon::parse($performance->performance_date)->format('d/m') . " " }}@endforeach</td>
                        <td>{{ count($period->performances) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>