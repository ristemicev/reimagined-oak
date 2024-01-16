<?php

namespace App\Http\Controllers;

use App\Repositories\ReportRepository;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(ReportRepository $reportRepository) {
        $reports = $reportRepository->get();
        return view('pages.reports.index', compact('reports'));

    }

    public function show(ReportRepository $reportRepository, $id) {
        $report = $reportRepository->published()->get()->where('id', $id)->first();

        dd($report->comments);
        return view('pages.reports.single_report', compact('report'));
    }
}
