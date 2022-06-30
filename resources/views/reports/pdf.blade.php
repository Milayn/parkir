<!DOCTYPE html>
<html>
<head>
    <title>Laporan Kendaraan Parkir</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>LAPORAN KENDARAAN PARKIR</h4>
    </center>
    <!-- <div class="col-lg-12" style="d-flex flex-row justify-content-between"> -->
        <table border='0.5' class='table table-bordered' style="width:95%;margin:0 auto;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Reg #</th>
                    <th>Vehicle Name</th>
                    <th>Parking Area</th>
                    <th>Parking Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $key => $vo)
                <tr>
                    <td class="text-center">{{ $key+1 }}</td>
                    <td class="text-center">{{ $vo->vehicleIn->vehicle->registration_number }}</td>
                    <td class="text-center">{{ $vo->vehicleIn->vehicle->name }}</td>
                    <td class="text-center">{{ $vo->vehicleIn->parking_area }}</td>
                    <td class="text-center">{{ $vo->vehicleIn->parking_number }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <!-- </div> -->
</body>
</html>