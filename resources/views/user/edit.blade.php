<x-app-layout>
  <x-slot name="header">
    {{ __('Users') }}
  </x-slot>

  <x-slot name="breadcrumbs">

    {{ Breadcrumbs::render('usersName', $user) }}

  </x-slot>

  @isset($user)
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="">
        <x-heading.heading title="" class="mb-5">
          <x-slot name="icon">
            <x-heading.icon name="clock" style="o" text="{{$user->created_at->format('d.m.Y')}}r." />
            @if($user->created_at != $user->updated_at)
            <x-heading.icon name="refresh" style="o" text="{{$user->updated_at->format('d.m.Y')}}r." />
            @endif
          </x-slot>
          <!-- Wyświetl przycisk zapisu jeśli wybrany użytkownik nie jest administratorem lub jeśli jest administratorem ale konto jest nieaktywne -->
          @if(!$user->is_admin || ($user->is_admin && !$user->is_active))
            <x-slot name="button">
              <x-heading.button title="Zapisz" href="" icon="save" iconStyle="o" buttonStyle="1" onclick="event.preventDefault(); document.getElementById('userStatus').submit();" />
            </x-slot>
          @endif
        </x-heading.heading>
        
      </div>
      <!-- This example requires Tailwind CSS v2.0+ -->
      <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
          <h3 class="text-lg leading-6 font-medium text-gray-900">
            Informacje szczegółowe
          </h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Szczegółowe dane dotyczące wybranego konta użytkownika.
          </p>
        </div>
        <div class="border-t border-gray-200">
          <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Imię i nazwisko
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$user->name}}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Adres e-mail
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$user->email}}
              </dd>
            </div>

            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Data weryfikacji adresu email
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                @if($user->email_verified_at != '')
                {{$user->email_verified_at}}
                @else
                Niezweryfikowany
                @endif
              </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Uprawnienia konta
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                @if($user->is_admin)
                Administrator
                @else
                Użytkownik
                @endif
              </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Status konta
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <!-- Możliwość zmiany statusu konta tylko użytkowników oraz aktywowanie konta administratorów -->
                @if($user->is_admin && $user->is_active)
                  @if($user->is_active)
                  Aktywne
                  @else
                  Nieaktywne
                  @endif
                @else
                <form action="{{route('users.update', $user->id)}}" id="userStatus" method="post">
                  @csrf
                  @method('put')
                  <select id="is_active" name="is_active" autocomplete="is_active"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                    @if($user->is_active)
                    <option selected="selected" value="1">Aktywne</option>
                    <option value="0">Nieaktywne</option>
                    @else
                    <option value="1">Aktywne</option>
                    <option selected="selected" value="0">Nieaktywne</option>
                    @endif
                    @endif
                  </select>
                </form>
              </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Data utworzenia konta
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$user->created_at}}
              </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Data ostatniej aktualizacji danych
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$user->updated_at}}
              </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Zdjęcie profilowe
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                @isset($user->profile_photo_path)
                <img src="/storage/{{$user->profile_photo_path}}" alt="{{$user->name}}" class="max-h-48 rounded-full">
                @else
                <i class="text-gray-500">Brak zdjecia profilowego</i>
                @endif
              </dd>
            </div>
          </dl>
        </div>
      </div>



    </div>

  </div>
  @else
    <p class="max-w-md bg-gray-50 text-red-400 mx-auto mt-10 p-10 rounded-md">Nieoczekiwany błąd aplikacji...</p>
  @endif




</x-app-layout>