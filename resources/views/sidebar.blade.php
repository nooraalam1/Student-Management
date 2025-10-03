 <div class="drawer">
  <input id="my-drawer" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content">
    <!-- Page content here -->
   
  </div>
  <div class="drawer-side">
    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
      <!-- Sidebar content here -->
      <h3><li>{{Auth::user()->name}}</li></h3>
      <h6><li>Member Since: {{Auth::user()->created_at}}</li></h6>
      <a href="{{route('profile.edit')}}"><button>Edit Profile</button></a>
      <a href="{{route('dashboard')}}"><button>Dashboard</button></a>
      <a href=""><button>School</button></a>
      
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button>Logout</button>
      </form>
    </ul>
  </div>
</div>