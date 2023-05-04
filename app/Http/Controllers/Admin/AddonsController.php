<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Acl\Repositories\AclRepository;
use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File; 
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Storage;
use ZipArchive;
use DB;

class AddonsController extends Controller
{

    private $aclRepo;

    public function __construct(AclRepository $aclRepository)
    {
        $this->aclRepo = $aclRepository;
        // check on permissions
        $this->middleware('user_role:1');
    }
    
    public function getSystemUpdate()
    {
        breadcrumb([
            [
                'name' => __('view.addons')
            ]
        ]); 
        $adminTheme = env('ADMIN_THEME', 'adminLte');
        return view($adminTheme.'.pages.upload-addons');
    }

}
