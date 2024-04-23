<?php

namespace App\Livewire;

use Livewire\Component;
use App\Jobs\ProcessReport;

class Report extends Component
{
    public string $status = 'idle';

    public function getListeners()
    {
        return [
            'echo-private:Processed.Report.' . auth()->user()->id . ',ProcessedReport' => 'onReportProcessed'
        ];
    }


    public function processReport()
    {
        $this->status = "processing";
        ProcessReport::dispatch(auth()->user()->id);
    }

    public function onReportProcessed()
    {
        if ($this->status === 'processing'){
            $this->status = "done";
        }
    }

    public function render()
    {
        return view('livewire.report');
    }
}
