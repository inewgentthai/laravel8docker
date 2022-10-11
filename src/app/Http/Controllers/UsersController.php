<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Nick\SecureSpreadsheet\Encrypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
  public function export()
  {
    $file_temp = 'public/invoices-temp.xlsx';
    $file_path = 'public/invoices.xlsx';

	// Creage Excel file use lib "maatwebsite/excel"
    Excel::store(new UsersExport(), $file_temp);

	// Encrypt Excel file use lib "nick322/secure-spreadsheet"
    $test = new Encrypt();
    $test->input(storage_path('app') . '/' .  $file_temp)
      ->password('1234') // Set password
      ->output(storage_path('app') . '/' . $file_path);

	// Remove Temp file
    if (File::exists(storage_path('app') . '/' .  $file_temp)) {
      unlink(storage_path('app') . '/' . $file_temp);
    }

	return Storage::download('public/invoices.xlsx');
  }
}
