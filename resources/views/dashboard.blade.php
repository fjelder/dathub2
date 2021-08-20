<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="breadcrumbs">

        <nav class="flex items-center text-gray-500 text-sm font-medium sm:space-x-2 whitespace-nowrap">
            <a href="/components#product-application-ui" class="hidden sm:block hover:text-gray-900">
              Application UI
            </a>
            <svg width="24" height="24" fill="none" class="hidden sm:block flex-none text-gray-300">
              <path d="M10.75 8.75l3.5 3.25-3.5 3.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="/components#product-application-ui-navigation" class="hidden sm:block hover:text-gray-900">
              Navigation
            </a>
            <svg width="24" height="24" fill="none" class="hidden sm:block flex-none text-gray-300">
              <path d="M10.75 8.75l3.5 3.25-3.5 3.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="/components/application-ui/navigation/navbars" class="truncate hover:text-gray-900">
              Navbars
            </a>
          </nav>
    </x-slot>

    <div class="py-12 hidden">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>

    @isset($users)
      @foreach($users as $user)
        <p>{{$user->name}}</p>
      @endforeach
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Name
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Title
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Role
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                          </div>
                          <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                            {{Auth()->user()->name}}
                            </div>
                            <div class="text-sm text-gray-500">
                              {{Auth()->user()->email}}
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                        <div class="text-sm text-gray-500">Optimization</div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          Active
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Admin
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                      </td>
                    </tr>

                    <!-- More people... -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
</div>
        </div>
    </div>



    <!-- This example requires Tailwind CSS v2.0+ -->


    
</x-app-layout>
