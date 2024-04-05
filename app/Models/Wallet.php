<?php

namespace App\Models;

use Spatie\Activitylog\Traits\LogsActivity;

class Wallet extends \Bavix\Wallet\Models\Wallet
{
    use LogsActivity;

    protected static $logAttributes = ['*'];
    protected static $dontLogIfAttributesChangedOnly = ['updated_at'];
    protected static $logOnlyDirty = true;
}