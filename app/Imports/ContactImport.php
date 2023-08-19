<?php

namespace App\Imports;

use Illuminate\Support\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Contact;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;




class ContactImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    */
    public function model(array $row)
    {
        {
            return new Contact([
                'email'     => $row['email'],
                'phoneNumber'    => $row['phone'], 
                'whatsapp'    => $row['whatsapp'], 
                'contactName'    => $row['name'], 
            ]);
        }
       
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
    
}