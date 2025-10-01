          <ul class="navbar-nav ms-auto">
 

            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src="{{asset('img/user2-160x160.jpg')}}"
                  class="user-image rounded-circle shadow"
                  alt="User Image"
                />
                <span class="d-none d-md-inline">{{Auth::user()->name}}</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img
                    src="{{asset('img/user2-160x160.jpg')}}"
                    class="rounded-circle shadow"
                    alt="User Image"
                  />
                  <p>
                    {{Auth::user()->name}}
                    <small>Member since: {{Auth::user()->created_at}}</small>
                  </p>
                </li>

                <li class="user-footer">
                  <a href="{{route('profile.edit')}}" class="btn btn-default btn-flat">Profile</a>
                  <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="btn btn-default btn-flat">Logout</button>
                  </form>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>