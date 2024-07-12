<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $now= date('Y-m-d H:i:s');
    $datas = [
        [
            'mesin id' => 'M001',
            'site code' => 'SC001',
            'month' => 'January',
            'submitted by' => 'John Doe',
            'submitted when' => $now,
            'activity' => 'Maintenance',
            'uom' => 'Units',
            'block' => 'Block A',
            'task' => 'Inspect machinery',
            'start' => '2024-07-01',
            'end' => '2024-07-02',
            'check by' => 'Jane Smith',
            'check when' => $now,
            'verified by' => 'David Brown',
            'when verified' => $now,
            'duty' => 'Supervisor',
            'reason' => 'Routine inspection'
        ],
        [
            'mesin id' => 'M002',
            'site code' => 'SC002',
            'month' => 'February',
            'submitted by' => 'Jane Smith',
            'submitted when' => $now,
            'activity' => 'Repair',
            'uom' => 'Hours',
            'block' => 'Block B',
            'task' => 'Replace parts',
            'start' => '2024-07-05',
            'end' => '2024-07-06',
            'check by' => 'John Doe',
            'check when' => $now,
            'verified by' => 'Emily Green',
            'when verified' => $now,
            'duty' => 'Technician',
            'reason' => 'Component failure'
        ],
        // Tambahkan data dummy lainnya jika diperlukan
    ];
    return view('welcome', compact('datas'));
});
