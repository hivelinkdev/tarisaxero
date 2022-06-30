<?php

namespace Tarisaxero\Xero\Models;

use Illuminate\Database\Eloquent\Model;

class XeroToken extends Model
{
    // protected $guarded = [];
    protected $table ="tblcompanyxerosettings";
    protected $primaryKey = 'id';
    protected $fillable = [
        'companyid', 'applicationid', 'accesstoken', 'expiresin', 'tenantid', 'idtoken', 'refreshtoken', 'scopes', 'status'
    ];
}
