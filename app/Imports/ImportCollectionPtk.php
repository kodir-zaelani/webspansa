<?php

namespace App\Imports;

use App\Models\Ptk;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportCollectionPtk implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ptk([
            //
        ]);
    }
}
