<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Student Management | Dashboard</title>
    @include('metaLinks')
</head>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <div class="app-wrapper">
      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
            </a>
        </li>

    </ul>
    @include('header')
</div>

</nav>

<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

</aside>

<main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0">Dashboard</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
      </div>
  </div>
</div>
</div>
<div class="app-content">
  <div class="container-fluid">


    @include('fourCards')
    @include('salesValue')
    @include('chat')



</div>

@include('salesValue2')
</div>
</div>
</div>
</main>

</div>
@include('scripts')
</body>
</html>
