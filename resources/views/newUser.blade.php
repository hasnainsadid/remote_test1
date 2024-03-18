<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('New user') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="d-flex justify-content-between align-items-center p-4">
              <h1><b>Add New User</b></h1>
            </div>
            <form method="POST" action="{{route('submit_user')}}" enctype="multipart/form-data" class="col-md-10 offset-1 px-3 pb-4">
              <div class="container">
                @if (session('msg'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session('msg')}}
              </div>
              @endif
              </div>
              @csrf
              <div class="form-group my-3">
                <label for="exampleInputName">User Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter name">
              </div>

              <div class="form-group my-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>

              <div class="form-group my-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>

              <div class="form-group my-3">
                <label for="exampleInputPassword1">Profile  picture</label>
                <input type="file" name="profile_photo_path" class="form-control" id="exampleInputPassword1">
              </div>
              
              <button type="submit" class="btn btn-outline-primary">Add New</button>
            </form>
          </div>
      </div>
  </div>
</x-app-layout>
