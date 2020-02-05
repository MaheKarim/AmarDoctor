<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}"   alt="image profile" class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level"> {{ Auth::user()->role->name }} </span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Internal Function</h4>
                </li>
                 <li class="nav-item">
                <a href="{{ route('showArea') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Area Create / Show</p>
                        {{-- <span class="badge badge-success">4</span> --}}
                    </a>
                </li>

                <li class="nav-item">
                <a href="{{ route('showCategory') }}">
                    <i class="fas fa-medkit"></i>
                        <p>Doctor Type / Category</p>
                        {{-- <span class="badge badge-success">4</span> --}}
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Product Sell</h4>
                </li>
                <li class="nav-item">
                    <a href="{{ route('showProduct') }}">
                            <i class="fa fa-window-restore"></i>
                            <p>Product Sell</p>
                            {{-- <span class="badge badge-success">4</span> --}}
                        </a>
                    </li>

                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Internal Function</h4>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Seetings</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.changePass')  }}">
                                        <span class="sub-item">Change Password</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

            </ul>
        </div>
    </div>
</div>
