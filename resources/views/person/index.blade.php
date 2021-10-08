<x-app-layout>
    <x-slot name="header">
            Kontakty
    </x-slot>

    <x-slot name="breadcrumbs">
    {{ Breadcrumbs::render('contacts') }}
    </x-slot>
    
    @isset($users)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="hidden">
            <x-heading.heading title="" class="mb-5">
              <x-slot name="icon">
                <x-heading.icon name="user" style="o" text="Administratorów - {{$allAdmin}}"/>
                <x-heading.icon name="users" style="o" text="Użytkowników - {{$allUsers - $allAdmin}}"/>
                <x-heading.icon name="calculator" style="o" text="Łącznie - {{$allUsers}}"/>
              </x-slot>
            </x-heading.heading>
          </div>
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col">
                          #id
                        </th>
                        <th scope="col">
                          Użytkownik
                        </th>
                        <th scope="col">
                          Status konta
                        </th>
                        <th scope="col">
                          Uprawnienia
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                          <span class="sr-only">Edit</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach($users as $user)
                      <tr class="{{ $loop->even ? 'bg-white' : 'bg-gray-50' }} hover:bg-indigo-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-500">{{$user->id}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            
                            <div class="flex-shrink-0 h-10 w-10">
                              @isset($user->profile_photo_path)
                              <img class="h-10 w-10 rounded-full" src="storage/{{$user->profile_photo_path}}" alt="">
                              @else
                              <img class="h-10 w-10 rounded-full filter grayscale opacity-60" src="/storage/profile-photos/default.png" alt="">
                              @endif
                            </div>
                            
                            <div class="ml-4">
                              <div class="text-xs font-medium text-gray-900">
                              {{$user->name}}
                              </div>
                              <div class="text-xs text-gray-500">
                                {{$user->email}}
                              </div>
                            </div>
                          </div>
                        </td>
                        
                        <td class="px-6 py-4 whitespace-nowrap">
                          @if($user->is_active)
                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            {{__('Active')}}
                          </span>
                          @else
                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            {{__('Inactive')}}
                          </span>
                          @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500">
                          @if($user->is_admin)
                          {{ __('Admin')}}
                          @else
                          {{ __('User')}}
                          @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-xs font-medium">
                          <a href="{{route('users.edit', $user->id)}}" class="text-indigo-400 hover:text-indigo-900">
                            <x-heroicon-o-pencil class="w-5 h-auto inline-block"/>  
                            Edytuj
                          </a>
                          
                        </td>
                      </tr>
                      @endforeach
                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
          <div class="mt-10">
            {{ $users->links() }}
          </div>
        </div>
        
    </div>
    @endif



    <!-- This example requires Tailwind CSS v2.0+ -->


    
</x-app-layout>
