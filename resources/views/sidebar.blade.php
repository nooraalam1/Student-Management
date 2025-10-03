 <div class="drawer">
  <input id="my-drawer" type="checkbox" class="drawer-toggle" checked/>
  <div class="drawer-side" >
    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay" ></label>
    <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4" >
      <!-- Sidebar content here -->
      <h3><li>{{Auth::user()->name}}</li></h3>
      <h6><li>Member Since: {{Auth::user()->created_at}}</li></h6>
      <a class="btn btn-secondary my-2" href="{{route('profile.edit')}}"><button >Edit Profile</button></a>
      <a class="btn btn-secondary my-2" href="{{route('dashboard')}}"><button>Dashboard</button></a>
      <button class="btn btn-secondary my-2" popovertarget="popover-1" style="anchor-name:--anchor-1">
        School
      </button>
      <ul class="dropdown menu rounded-box  "
      popover id="popover-1" style="position-anchor:--anchor-1">
      <li><a href="{{route('CreateSchool')}}" class="btn btn-secondary my-2">Create</a></li>
      <li><a href="{{route('Schoollist')}}" class="btn btn-secondary">List</a></li>
    </ul>

    <form method="POST" action="{{ route('logout') }}"class="btn btn-secondary my-2">
      @csrf
      <button >Logout</button>
    </form>
  </ul>
</div>

</div>