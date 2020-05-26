<?php

namespace App\Http\Controllers;

use App\Entities\Row;
use App\Services\GoogleSheetsService as Service;
use Sheets;
use Google_Client;
use Google_Service_Drive;
use Google_Service_Sheets;
use Illuminate\Http\Request;

class GoogleSheetsController extends Controller
{
    /**
     * @var Service
     */
    private $service;

    /**
     * SheetsService constructor.
     */
    public function __construct(
        Service $service
    ) {
        $this->service = $service;
    }

    public function getAllRows()
    {
        $rows = $this->service->getAllRows();

        return view('layouts.app', compact('rows'));
    }

    public function addRow(Request $request)
    {
        $row = new Row(
            $request->first,
            $request->second
        );

        $this->service->addRow($row);

        return redirect()->route('home');
    }
}
