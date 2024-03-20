<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a href="{{route('recycle')}}" class="btn btn-warning text-end">Trush</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                @if (session('msg'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('msg')}}
              </div>
              @endif
              </div>
              
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="d-flex justify-content-between align-items-center p-4">
                    <h1><b>All User</b></h1>
                    <a href="{{route('add_user')}}" class="btn btn-primary">Add new user</a>
                </div>
                <table data-toggle="table" class="table text-center">
                    <thead>
                      <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key=>$user)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{route('show_user', $user->id)}}">Show</a> | 
                                <a href="{{route('edit_user', $user->id)}}">Edit</a> |
                                <a href="{{route('user_softDelete', $user->id)}}">Recycle</a>
                            </td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
