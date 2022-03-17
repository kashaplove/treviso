<?php

namespace App\Console\Commands;

use App\Exports\MessagesExport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ExportExcelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:excel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'put data to excel';

    /**
     * Execute the console command.
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function handle()
    {
        return Excel::download(new MessagesExport(), 'messages.xlsx');
    }
}
