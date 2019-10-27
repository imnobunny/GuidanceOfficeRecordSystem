<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Record;


class ExportController extends Controller
{
    public function exportdatatopdf($id)
    {
        $record = Record::find($id);
        $student_name = $record->student->name;
        //$data = $record;
        //return view ('pdf.record')->with('record', $record);
        $pdf = \PDF::loadview('pdf.record', compact('record'));
        return $pdf->download("$student_name Case_Record.pdf");
    }
}
