<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Classes\PushBots;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pb = new PushBots();
// Application ID
//$appID = '5d181c5bb79412324c1de645';
// Application Secret
//$appSecret = 'eec56601681ede64c0baf1cf7ff94e74';
//$pb->App($appID, $appSecret);
//$pb->Platform(array("0","1"));
//$alias = '0961340227';
//$pb->Alias($alias);
// Notification Settings
//$pb->Alert("narathorn");
//$pb->Push();
$role = Role::create(['name' => 'admin_ischool']);
$permission = Permission::create(['name' => 'edit articles']);
        return view('home');
    }
}
