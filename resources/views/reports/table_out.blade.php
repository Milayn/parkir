<table id="data_table" class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Reg #</th>
            <th>Nama Kendaraan</th>
            <th>Area Parkir</th>
            <th>Nomer Parkir</th>
            <th>Dibuat Pada</th>
            <th>Dibuat Oleh</th>
            <th class="nosort">Aksi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($reports as $key => $vehicleOut)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $vehicleOut->vehicleIn->vehicle->registration_number }}</td>
            <td>{{ $vehicleOut->vehicleIn->vehicle->name }}</td>
            <td>{{ $vehicleOut->vehicleIn->parking_area }}</td>
            <td>{{ $vehicleOut->vehicleIn->parking_number }}</td>
            <td>{{ $vehicleOut->created_at->format('Y/m/d H:i A') }}</td>
            <td>{{ $vehicleOut->user->name }}</td>
            <td>
                <div class="table-actions">
                    <a href="{{ route('reports.cetak_pdf') }}" class="ik ik-printer"></a>
                </div>
            </td>
            <td></td>
        </tr>
        @empty
        <tr>
            <td colspan="12" class="text-center"> No data Found</td>
        </tr>
        @endforelse
    </tbody>
</table>
