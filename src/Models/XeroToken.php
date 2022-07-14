<?php

namespace Tarisaxero\Xero\Models;

use Illuminate\Database\Eloquent\Model;

class XeroToken extends Model
{
    // protected $guarded = [];
    protected $table ="tblcompanyxerosettings";
    protected $primaryKey = 'id';
    protected $fillable = [
        'company_id', 'application_id', 'access_token', 'expires_in', 'id_token', 'token_type', 'refresh_token', 'auth_event_id', 'tenant_id', 'tenant_type', 'tenant_name', 'scopes', 'status'
    ];
}
