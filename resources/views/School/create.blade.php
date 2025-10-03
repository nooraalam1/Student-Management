<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<title>Student Management | Dashboard</title>
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
			<h2 class="text-center my-4 underline">Create A School</h2>
			<a class="btn btn-warning my-2 w-40 " href="{{route('Schoollist')}}"><button>See School List</button></a>
			
			<form method="POST" action="{{route('StoreSchool')}}" class="flex justify-center items-center">

				@csrf
				@method("POST")

				<fieldset class="fieldset bg-yellow-100 border-base-300 rounded-box w-xs border p-4 ">

				<input type="text" class="input" placeholder="School Name" name="school_name"/>

				<input type="email" class="input" placeholder="Email" name="email"/>

				<input type="text" class="input" placeholder="Address" name="address" />

				<!-- <label class="label">Logo</label>
				<input type="file" class="input"  /> -->

				<input type="password" class="input" placeholder="Password" name="password" />

				<!-- <label class="label">Status</label>				
				<select class="form-control">
					<option value="1">Active</option>
					<option value="0">Inactive</option>
				</select> -->

				<button class="btn btn-primary my-2">Submit</button>

			</fieldset>
			</form>
		</div>
	</div>
</main>

</div>
@include('scripts')
</body>
</html>
