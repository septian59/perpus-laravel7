<?php

namespace App\Exports;

use App\BorrowHistory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BorrowHistory::all();
    }

    

    public function map($invoice): array
    {
        
        return [
            
            $invoice->user->name,
            $invoice->book->title,
            $invoice->created_at,
            $invoice->retuned_at,
            $invoice->returned_at == null ? 'Dipinjam' : 'Dikembalikan'

            
        ];
    }

    public function headings(): array
    {
        return [
            'User',
            'Judul Buku',
            'Tanggal Peminjaman',
            'Tanggal Pengembalian',
            'Keterangan',
        ];
    }

}
