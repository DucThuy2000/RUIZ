<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoicesDetail extends Model
{
    protected $table = 'invoices';

    public function invoice(){
        return $this->belongsTo("App\Invoices", "invoice_id");
    }
}
