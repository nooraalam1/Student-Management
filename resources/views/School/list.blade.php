<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title> Dashboard</title>
  @include('metaLinks')
</head>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
  <div class="app-wrapper">
    <nav class="app-header navbar navbar-expand bg-body">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            @include('sidebar')
          </li>

        </ul>
        @include('header')
      </div>

    </nav>

    <main class="app-main">
      <h2 class="text-center my-4">School List</h2>
      <a class="btn btn-warning my-2 w-40 " href="{{route('CreateSchool')}}"><button>Create School</button></a>

      <div class="overflow-x-auto">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              
              <th>School Name</th>
              <th>Email</th>
              <th>Address</th>
            </tr>
          </thead>
          <tbody>
          
            @foreach($data as $d)
            <tr>
              <td>{{$d->school_name}}</td>
              <td>{{$d->email}}</td>
              <td>{{$d->address}}</td>
              
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>

</div>
@include('scripts')
</body>
</html>
