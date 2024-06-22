<?php

namespace App\Http\Controllers\Admin\PostTag;

use App\Models\Depot;
use App\Models\Order;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\DepotItem;
use App\Models\OrderDetail;
use App\Models\ProductLicense;
use App\Models\PaymentTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Admin\BaseComponent;
use App\Http\Controllers\Smsir\Facades\Smsir as SMS;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IndexPostTag extends Controller
{
	public function __invoke($id)
    {
		$OrderDetail = OrderDetail::findOrFail($id);
			
		return view('admin.PostTag.index',['OrderDetail'=>$OrderDetail,]);
    }
}