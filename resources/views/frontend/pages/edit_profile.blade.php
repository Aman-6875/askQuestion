@extends('front_layout')

@section('content')
    <section class=" user-details-area bg-disable pt-100 pb-120">
        <div class="container">
            <div class="row  gy-lg-0">
                <div class="col-lg-12 col-xl-10">

                    <div class="add-question-widget">
                        <h4 class="widget-title">
                            Edit Profile
                        </h4>
                        <form action="/update-profile" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-30">
                                <label class="label" for="inp_title">Name <span>*</span></label>
                                <div class="icon-input-group">
                                    <input class="form-control" type="text" id="inp_title" name="name"
                                        value="{{ $user->name }}" required />
                                    <i class="icon_chat_alt"></i>
                                </div>
                            </div>
                            {{-- {{$user->email}} --}}
                            <div class="mt-30">
                                <label class="label" for="inp_title">Email <span>*</span></label>
                                <div class="icon-input-group">
                                    <input class="form-control" type="text" id="inp_title" name="email"
                                        value="{{ $user->email }}" />
                                    <i class="icon_chat_alt"></i>
                                </div>
                            </div>
                            <div class="mt-30">
                                <label class="label" for="inp_title">Update Password <span>*</span></label>
                                <div class="icon-input-group">
                                    <input class="form-control" type="password" id="inp_title2" name="password"
                                        value="" />
                                    <i class="icon_chat_alt"></i>
                                </div>
                            </div>
                            {{-- @dd($user->userMeta) --}}
                            @if ($user->userMeta != null)
                                <div class="mt-30">
                                    <label class="label" for="inp_title">Profession/Department <span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2" name="proffession"
                                            value="{{ $user->userMeta->proffession }}" />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>



                                <div class="mt-25">
                                    <label class="label" for="inp_desc">Bio <span>*</span></label>
                                    <textarea id="inp_desc" cols="30" rows="7" class="form-control" name="bio">{{ $user->userMeta->bio }}</textarea>
                                </div>

                                <div class="mt-30">
                                    <label class="label" for="inp_title">Phone <span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2" name="phone"
                                            value="{{ $user->userMeta->phone }}" />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>

                                <div class="mt-30">
                                    <label class="label" for="inp_title">Location <span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2" name="location"
                                            value="{{ $user->userMeta->location }}" />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>
                                <div class="mt-30">
                                    <label class="label" for="inp_title">Age <span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2" name="age"
                                            value="{{ $user->userMeta->age }}" />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>
                                <div class="mt-30">
                                    <label class="label" for="inp_title">Experience <span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2" name="experience"
                                            value="{{ $user->userMeta->experience }}" />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>
                                <div class="mt-30">
                                    <label class="label" for="inp_title">Portfolio Site<span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2" name="portfolio_site"
                                            value="{{ $user->userMeta->portfolio_site }}" />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>
                                <div class="mt-25">
                                    <label class="label">Profile Image <span>*</span></label>
                                    <input class="form-control" type="file" id="inp_tag" name="file" />

                                    {{-- <ul class="dropzone-file-preview pt-3" id="dropzone-preview-container">
                                        <li>
                                            <div class="upload-progress" data-dz-uploadprogress></div>
                                            <div class="preview-info">
                                                <ion-icon name="attach"></ion-icon>
                                                <span data-dz-name></span>
                                            </div>
                                            <button data-dz-remove>
                                                Remove
                                            </button>
                                        </li>
                                    </ul> --}}


                                    <div class="d-flex justify-content-between mt-60">
                                        <button class="action_btn" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            @else
                                <div class="mt-30">
                                    <label class="label" for="inp_title">Profession/Department <span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2" name="proffession"
                                            value="" required />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>



                                <div class="mt-25">
                                    <label class="label" for="inp_desc">Bio <span>*</span></label>
                                    <textarea id="inp_desc" cols="30" rows="7" class="form-control" name="bio"></textarea>
                                </div>

                                <div class="mt-30">
                                    <label class="label" for="inp_title">Phone <span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2" name="phone" />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>

                                <div class="mt-30">
                                    <label class="label" for="inp_title">Location <span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2" name="location" />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>
                                <div class="mt-30">
                                    <label class="label" for="inp_title">Age <span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2" name="age" />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>
                                <div class="mt-30">
                                    <label class="label" for="inp_title">Experience <span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2" name="experience" />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>
                                <div class="mt-30">
                                    <label class="label" for="inp_title">Portfolio Site<span>*</span></label>
                                    <div class="icon-input-group">
                                        <input class="form-control" type="text" id="inp_title2"
                                            name="portfolio_site" />
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                </div>
                                <div class="mt-25">
                                    <label class="label">Profile Image <span>*</span></label>
                                    <input class="form-control" type="file" id="inp_tag" name="file" />

                                    {{-- <ul class="dropzone-file-preview pt-3" id="dropzone-preview-container">
                                            <li>
                                                <div class="upload-progress" data-dz-uploadprogress></div>
                                                <div class="preview-info">
                                                    <ion-icon name="attach"></ion-icon>
                                                    <span data-dz-name></span>
                                                </div>
                                                <button data-dz-remove>
                                                    Remove
                                                </button>
                                            </li>
                                        </ul> --}}


                                    <div class="d-flex justify-content-between mt-60">
                                        <button class="action_btn" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
