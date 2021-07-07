<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registered extends Model
{
    use Auditable;
    use HasFactory;

    public const HAVE_ACCOUNT_SELECT = [
        'not_set' => 'Not Set',
        'yes'     => 'Yes',
        'no'      => 'No',
    ];

    public $table = 'registereds';

    protected $dates = [
        'joined_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'code',
        'fname',
        'idnumber',
        'branch',
        'phone',
        'age',
        'country',
        'branch_code',
        'joined_date',
        'have_account',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getJoinedDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setJoinedDateAttribute($value)
    {
        $this->attributes['joined_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
