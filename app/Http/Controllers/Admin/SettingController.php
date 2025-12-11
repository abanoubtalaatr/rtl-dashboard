<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::firstOrCreate(
            ['key' => 'enable_check_the_car_available'],
            ['value' => '1', 'type' => 'boolean', 'description' => 'التحقق من توفر السيارة عند الحجز']
        );

        return view('settings.index', compact('setting'));
    }


    public function update(SettingUpdateRequest $request, Setting $setting)
    {
        
        $settings = Setting::updateOrCreate(
            ['key' => 'enable_check_the_car_available'],
            [
                'value' => $request->enable_check_the_car_available ? '1' : '0',
                'type' => 'boolean'
            ]
        );

        

        return redirect()->back()
            ->with('success', 'تم تحديث الإعدادات بنجاح');
    }
}