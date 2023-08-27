<?php

namespace App\Imports;

use Illuminate\Support\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Contact;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithEvents;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\ImportHasFailedNotification;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;
//Veuillez consulter cette documentation en cas de problème: https://docs.laravel-excel.com/3.1/imports/basics.html

class ContactImport implements ToModel, WithHeadingRow, WithValidation, WithBatchInserts, WithChunkReading, WithUpserts, ShouldQueue
{
  use Importable;
  use RemembersRowNumber;
    /**
    * @param array $row
    */
    public function model(array $row)
    {

      $currentRowNumber = $this->getRowNumber();
      return new Contact([
        'email'     => $row['email'],
        'phoneNumber'    => $row['phone'],
        'whatsapp'    => $row['whatsapp'],
        'contactName'    => $row['name'],
       ]);
    }

    public function rules(): array
    {
        return[
            'email' => ['required','email','unique:users,email','max:255'],
            'phone' => ['required', 'regex:/^[0-9]/', 'min:5'],
            'whatsapp' => ['required', 'regex:/^[0-9]/', 'min:5'],
            'name' => ['required','max:255'],

        ];

      }
    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
    public function uniqueBy()
    {
        return 'whatsapp';
    }
 /*    public function __construct(Contact $importedBy)
    {
        $this->importedBy = $importedBy;
    }
    public function registerEvents(): array
    {
        return [
            ImportFailed::class => function(ImportFailed $event) {
                $this->importedBy->notify(new ImportHasFailedNotification);
            },
        ];
    } */

}
