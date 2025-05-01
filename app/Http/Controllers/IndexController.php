<?php

namespace App\Http\Controllers;

use App\Models\Admin\ActivityInfo;
use App\Models\Admin\LatestAnnouncementsInfo;
use App\Models\Admin\TeamInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/*');
        $teamsInfo = TeamInfo::orderBy('id', 'asc')->get();
        $activityInfo = ActivityInfo::orderBy('created_at', 'desc')->get();
        return view('index')
            ->with('seoInfo', $seoInfo)
            ->with('teamsInfo', $teamsInfo)
            ->with('activityInfo', $activityInfo);
    }
}
