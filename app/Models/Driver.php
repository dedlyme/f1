<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'drivers'; // Assuming your table name is 'drivers'

    protected $primaryKey = 'driver_id'; // Assuming your primary key column name is 'driver_id'

    // Add any other model-specific configurations or relationships here
}