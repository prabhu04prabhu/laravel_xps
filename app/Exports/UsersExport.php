<?php

namespace App\Exports;
  
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
  
class UsersExport implements FromCollection, WithHeadings, WithEvents
{   
    protected $data;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function collection()
    {
        return collect($this->data);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
            'Product Id',
            'Category Name',
            'Brand Name',
            'Sub Brand Name',
            'Product Code',
            'Product Modal No',
            'Warranty',
            'Online Price',
            'MRP',
            'Purchase Price',
            'Availability',
            'Discount Price',
            'Scrab Amount',
        ];
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {

                $event->sheet->getDelegate()->getStyle('A1:M1')
                    ->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB('03A9F3');

                $event->sheet->getDelegate()->getStyle('A1:M1')
                    ->getFont()
                    ->setBold(true)
                    ->setSize(13);
                $event->sheet->getDelegate()->getStyle('A1:M1')
                    ->getAlignment()
                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)
                    ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
                    
                $sheet =  $event->sheet;
                for( $i = 1; $i <= 1000; $i++){
                   
                    $event->sheet->getDelegate()->getRowDimension($i)->setRowHeight(40);
                    $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(30);
                    $event->sheet->getDelegate()->getRowDimension($i)->setRowHeight(40);
                    $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(30);
                    $event->sheet->getDelegate()->getRowDimension($i)->setRowHeight(40);
                    $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(30);
                    $event->sheet->getDelegate()->getRowDimension($i)->setRowHeight(40);
                    $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(30);
                    $event->sheet->getDelegate()->getRowDimension($i)->setRowHeight(40);
                    $event->sheet->getDelegate()->getColumnDimension('E')->setWidth(30);
                    $event->sheet->getDelegate()->getRowDimension($i)->setRowHeight(40);
                    $event->sheet->getDelegate()->getColumnDimension('F')->setWidth(30);
                    $event->sheet->getDelegate()->getRowDimension($i)->setRowHeight(40);
                    $event->sheet->getDelegate()->getColumnDimension('G')->setWidth(30);
                }
                $event->sheet->getDelegate()->freezePane('A2'); 
            },

        ];
    }
}
