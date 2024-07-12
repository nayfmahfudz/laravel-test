<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="input-group  col-12 mb-3 ">                            
                            <input type="text" id="mesinid" class="form-control  m-3 " placeholder="Mesin ID">
                            <input type="text" id="site" class="form-control  m-3" placeholder="Site Code">
                            <input type="text" id="month" class="form-control  m-3" placeholder="Month">
                            <input type="text" id="operator" class="form-control   m-3" placeholder="Operator">
                            <input type="text" id="activity" class="form-control  m-3" placeholder="Activity">
                            
                            
               
                    </div>  
                    <div class="card-body col-sm-3 float-right  align-items-end ">
                    <input type="text" id="cari" class="form-control mb-3" placeholder="Cari...">
                   </div>
                    <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>mesin id</th>
                                        <th>site code</th>
                                        <th>month</th>
                                        <th>submitted by</th>
                                        <th>submitted when</th>
                                        <th>activity</th>
                                        <th>uom</th>
                                        <th>block</th>
                                        <th>task</th>
                                        <th>start</th>
                                        <th>end</th>
                                        <th>check by</th>
                                        <th>check when</th>
                                        <th>verified by</th>
                                        <th>when verified</th>
                                        <th>duty</th>
                                        <th>reason</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ $data['mesin id'] }}</td>
                                        <td>{{ $data['site code'] }}</td>
                                        <td>{{ $data['month'] }}</td>
                                        <td>{{ $data['submitted by'] }}</td>
                                        <td>{{ $data['submitted when'] }}</td>
                                        <td>{{ $data['activity'] }}</td>
                                        <td>{{ $data['uom'] }}</td>
                                        <td>{{ $data['block'] }}</td>
                                        <td>{{ $data['task'] }}</td>
                                        <td>{{ $data['start'] }}</td>
                                        <td>{{ $data['end'] }}</td>
                                        <td>{{ $data['check by'] }}</td>
                                        <td>{{ $data['check when'] }}</td>
                                        <td>{{ $data['verified by'] }}</td>
                                        <td>{{ $data['when verified'] }}</td>
                                        <td>{{ $data['duty'] }}</td>
                                        <td>{{ $data['reason'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

    document.addEventListener('DOMContentLoaded', function() {
        let cariInput = document.getElementById('mesinid');
        cariInput.addEventListener('input', function() {
            let filter = cariInput.value.toUpperCase();
            let tableBody = document.getElementById('tableBody');
            let mesinIdCell = tableBody.getElementsByTagName('tr');
for (let row of mesinIdCell) {
                let cell = row.getElementsByTagName('td')[0];
                console.log(cell)
                let found = false;
                    let textValue = cell.textContent || cell.innerText;
                    if (textValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                    }
                    console.log(found)
                if (found) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
            
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        let cariInput = document.getElementById('operator');
        cariInput.addEventListener('input', function() {
            let filter = cariInput.value.toUpperCase();
            let tableBody = document.getElementById('tableBody');
            let mesinIdCell = tableBody.getElementsByTagName('tr');
for (let row of mesinIdCell) {
                let cell = row.getElementsByTagName('td')[3];
                console.log(cell)
                let found = false;
                    let textValue = cell.textContent || cell.innerText;
                    if (textValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                    }
                    console.log(found)
                if (found) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
            
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        let cariInput = document.getElementById('activity');
        cariInput.addEventListener('input', function() {
            let filter = cariInput.value.toUpperCase();
            let tableBody = document.getElementById('tableBody');
            let mesinIdCell = tableBody.getElementsByTagName('tr');
for (let row of mesinIdCell) {
                let cell = row.getElementsByTagName('td')[5];
                console.log(cell)
                let found = false;
                    let textValue = cell.textContent || cell.innerText;
                    if (textValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                    }
                    console.log(found)
                if (found) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
            
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        let cariInput = document.getElementById('month');
        cariInput.addEventListener('input', function() {
            let filter = cariInput.value.toUpperCase();
            let tableBody = document.getElementById('tableBody');
            let mesinIdCell = tableBody.getElementsByTagName('tr');
for (let row of mesinIdCell) {
                let cell = row.getElementsByTagName('td')[2];
                console.log(cell)
                let found = false;
                    let textValue = cell.textContent || cell.innerText;
                    if (textValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                    }
                    console.log(found)
                if (found) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
            
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        let cariInput = document.getElementById('site');
        cariInput.addEventListener('input', function() {
            let filter = cariInput.value.toUpperCase();
            let tableBody = document.getElementById('tableBody');
            let mesinIdCell = tableBody.getElementsByTagName('tr');
for (let row of mesinIdCell) {
                let cell = row.getElementsByTagName('td')[1];
                console.log(cell)
                let found = false;
                    let textValue = cell.textContent || cell.innerText;
                    if (textValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                    }
                    console.log(found)
                if (found) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
            
        });
    });
    
        
    // Script untuk filter data berdasarkan input pencarian
    document.addEventListener('DOMContentLoaded', function() {
        let cariInput = document.getElementById('cari');
        cariInput.addEventListener('input', function() {
            let filter = cariInput.value.toUpperCase();
            let tableBody = document.getElementById('tableBody');
            let rows = tableBody.getElementsByTagName('tr');

            for (let row of rows) {
                let cells = row.getElementsByTagName('td');
                let found = false;
                for (let cell of cells) {
                    let textValue = cell.textContent || cell.innerText;
                    if (textValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                    }
                }
                if (found) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        });
    });
</script>

</body>
</html>
