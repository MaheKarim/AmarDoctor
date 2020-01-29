<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="http://demo.themekita.com/atlantis/livepreview/examples/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">{{ Auth::user()->email }}</span>
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
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Area Creation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="faqs.html">
                        <i class="far fa-question-circle"></i>
                        <p>Faqs</p>
                        <span class="badge badge-count">6</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#custompages">
                        <i class="fas fa-paint-roller"></i>
                        <p>Custom Pages</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="custompages">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="login.html">
                                    <span class="sub-item">Login & Register 1</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="userprofile.html">
                                    <span class="sub-item">User Profile</span>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </li> 
                
            </ul>
        </div>
    </div>
</div>