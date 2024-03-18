<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Show User') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
            <img class="m-4" src="{{asset('')}}images/{{$user->profile_photo_path}}" width="220px" alt="image">
            <div class="p-4">
              Name: <b class="me-5">{{$user->name}}</b>
              Email: <b>{{$user->email}}</b>
            </div>
          </div>
      </div>
  </div>
</x-app-layout>
