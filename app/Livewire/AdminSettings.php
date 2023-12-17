<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GeneralSetting;
use App\Models\SocialNetwork;

class AdminSettings extends Component
{
    public $tab = null;
    public $tabname = 'general_settings';
    protected $queryString = ['tab'];
    public $site_name, $site_email, $site_phone, $site_meta_keywords, $site_description, $site_logo, $site_favicon;
    public $github_url, $youtube_url, $tiktok_url, $facebook_url, $instagram_url, $twitter_url;

    public function selectTab($tab) {
        $this->tab = $tab;

    }

    public function mount() {
        $this->tab = request()->tab ? request()->tab : $this->tabname;

        // if(Auth::guard('admin')->check()){
        //     $admin = Admin::findOrFail(auth()->id());
        //     $this->admin_id = $admin->id;
        //     $this->name = $admin->name;
        //     $this->email = $admin->email;
        //     $this->username = $admin->username;
        // }

        $this->site_name = get_settings()->site_name;
        $this->site_email = get_settings()->site_email;
        $this->site_phone = get_settings()->site_phone;
        $this->site_meta_keywords = get_settings()->site_meta_keywords;
        $this->site_description = get_settings()->site_description;
        $this->site_logo = get_settings()->site_logo;
        $this->site_favicon = get_settings()->site_favicon;

        $this->github_url = get_social_network()->github_url;
        $this->youtube_url = get_social_network()->youtube_url;
        $this->tiktok_url = get_social_network()->tiktok_url;
        $this->facebook_url = get_social_network()->facebook_url;
        $this->instagram_url = get_social_network()->instagram_url;
        $this->twitter_url = get_social_network()->twitter_url;
    }

    public function updateGeneralSettings() {
        $this->validate([
            'site_name'=>'required',
            'site_email'=>'required|email'
        ]);

        $settings = new GeneralSetting();

        $settings = $settings->first();
        $settings->site_name = $this->site_name;
        $settings->site_email = $this->site_email;
        $settings->site_phone = $this->site_phone;
        $settings->site_meta_keywords = $this->site_meta_keywords;
        $settings->site_description = $this->site_description;

        $update = $settings->save();

        if($update) {
            // $this->site_name = $this->site_email = $this->site_phone =  $this->site_meta_keywords =  $this->site_description = null;
            $this->showToastr('success', 'General settings successfully changed!!');
        }else{
            $this->showToastr('error', 'Something went wrong!!');
        }

    }

    public function updateSocialNetwork() {
        $socials = new SocialNetwork();

        $socials = $socials->first();
        $socials->github_url = $this->github_url;
        $socials->youtube_url = $this->youtube_url;
        $socials->tiktok_url = $this->tiktok_url;
        $socials->facebook_url = $this->facebook_url;
        $socials->instagram_url = $this->instagram_url;
        $socials->twitter_url = $this->twitter_url;

        $update = $socials->save();

        if($update) {
            // $this->site_name = $this->site_email = $this->site_phone =  $this->site_meta_keywords =  $this->site_description = null;
            $this->showToastr('success', 'Social network successfully changed!!');
        }else{
            $this->showToastr('error', 'Something went wrong!!');
        }
    }

    public function showToastr($type, $message) {
        return $this->dispatch('showToastr', 
            type:$type,
            message:$message,
        );
    }

    public function render()
    {
        return view('livewire.admin-settings');
    }
}
