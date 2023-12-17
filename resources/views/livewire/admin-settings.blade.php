<div>
    <div class="tab">
        <ul class="nav nav-tabs customtab" role="tablist">
            <li class="nav-item">
                <a wire:click.prevent='selectTab("general_settings")' class="nav-link {{$tab=='general_settings'?'active':''}}" data-toggle="tab" href="#general_settings" role="tab" aria-selected="true">General settings</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("logo_icon")' class="nav-link {{$tab=='logo_icon'?'active':''}}" data-toggle="tab" href="#logo_icon" role="tab" aria-selected="false">Logo & Icon</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("social_networks")' class="nav-link {{$tab=='social_networks'?'active':''}}" data-toggle="tab" href="#social_networks" role="tab" aria-selected="false">Social networks</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("payment_methods")' class="nav-link {{$tab=='payment_methods'?'active':''}}" data-toggle="tab" href="#payment_methods" role="tab" aria-selected="false">Payment methods</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade {{$tab=='general_settings'?'show active':''}}" id="general_settings" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit.prevent='updateGeneralSettings()'>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Site name</label>
                                    <input type="text" class="form-control" placeholder="Enter site name" wire:model.defer='site_name'>
                                    @error('site_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Site email</label>
                                    <input type="text" class="form-control" placeholder="Enter site enail" wire:model.defer='site_email'>
                                    @error('site_email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Site phone</label>
                                    <input type="text" class="form-control" placeholder="Enter site phone" wire:model.defer='site_phone'>
                                    @error('site_phone')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Site meta keywords</label>
                                    <input type="text" class="form-control" placeholder="Enter site metea keywords" wire:model.defer='site_meta_keywords'>
                                    @error('site_meta_keywords')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Site description</label>
                            <textarea cols="4" rows="4" placeholder="Enter site description" class="form-control" wire:model.defer='site_description'></textarea>
                            @error('site_description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save changed</button>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade {{$tab=='logo_icon'?'show active':''}}" id="logo_icon" role="tabpanel">
                <div class="pd-20">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Site LOGO</h6>
                            <div class="mb-2" style="max-height: 60px; max-width: 200px;">
                                <img src="/images/site/{{get_settings()->site_logo}}" class="img-thumbnail" id="site_logo_img_preview" style="object-fit: contain;">
                            </div>
                            <form action="{{route('admin.change-logo')}}" method="POST" enctype="multipart/form-data" id="change_logo_form">
                                @csrf
                                <div class="mb-2">
                                    <input type="file" name="site_logo" id="site_logo" class="form-control"
                                    onchange="document.getElementById('site_logo_img_preview').src = window.URL.createObjectURL(this.files[0])"
                                    >
                                    <span class="text-danger error-text site_logo_error"></span>
                                </div>
                                <button type="submit" class="btn btn-primary">Save changed</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h6>Site favicon</h6>
                            <div class="mb-2" style="max-height: 60px; max-width: 60px;">
                                <img src="/images/site/{{get_settings()->site_favicon}}" class="img-thumbnail" id="site_fav_img_preview" style="object-fit: contain;">
                            </div>
                            <form action="{{route('admin.change-favicon')}}" method="POST" enctype="multipart/form-data" id="change_favicon_form">
                                @csrf
                                <div class="mb-2">
                                    <input type="file" name="site_favicon" id="site_favicon" class="form-control"
                                    onchange="document.getElementById('site_fav_img_preview').src = window.URL.createObjectURL(this.files[0])"
                                    >
                                    <span class="text-danger error-text site_favicon_error"></span>
                                </div>
                                <button type="submit" class="btn btn-primary">Save changed</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{$tab=='social_networks'?'show active':''}}" id="social_networks" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit.prevent='updateSocialNetwork()'>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Github</label>
                                    <input type="text" class="form-control" wire:model.defer='github_url' placeholder="Github URL">
                                    @error('github_url')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Youtube</label>
                                    <input type="text" class="form-control" wire:model.defer='youtube_url' placeholder="Youtube URL">
                                    @error('youtube_url')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tiktok</label>
                                    <input type="text" class="form-control" wire:model.defer='tiktok_url' placeholder="Tiktok URL">
                                    @error('tiktok_url')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Facebook</label>
                                    <input type="text" class="form-control" wire:model.defer='facebook_url' placeholder="Facebook URL">
                                    @error('facebook_url')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Instagram</label>
                                    <input type="text" class="form-control" wire:model.defer='instagram_url' placeholder="Instagram URL">
                                    @error('instagram_url')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Twitter</label>
                                    <input type="text" class="form-control" wire:model.defer='twitter_url' placeholder="Twitter URL">
                                    @error('twitter_url')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save changed</button>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade {{$tab=='payment_methods'?'show active':''}}" id="payment_methods" role="tabpanel">
                <div class="pd-20">
                    Payment methods
                </div>
            </div>
        </div>
    </div>
</div>
