<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                    <svg height="30pt" viewBox="-11 0 462 462" width="30pt" xmlns="http://www.w3.org/2000/svg"><path d="m400.171875 0h-360.171875c-22.082031.0234375-39.9765625 17.917969-40 40v412c0 5.523438 4.476562 10 10 10h420.175781c5.519531 0 10-4.476562 10-10v-412c-.027343-22.082031-17.921875-39.9765625-40.003906-40zm-119.160156 442h-116.394531v-63.507812c.007812-5.519532 4.480468-9.992188 10-10h96.394531c5.523437.007812 9.996093 4.480468 10 10zm20 0v-63.507812c-.015625-16.558594-13.4375-29.980469-30-30h-96.394531c-16.558594.019531-29.980469 13.441406-30 30v63.507812h-124.617188v-402c.011719-11.039062 8.960938-19.988281 20-20h360.171875c11.042969.011719 19.988281 8.960938 20 20v402zm0 0"/><path d="m375.605469 200.988281h-311.039063c-5.519531 0-10 4.476563-10 10v85.484375c0 5.519532 4.480469 10 10 10h311.039063c5.523437 0 10-4.480468 10-10v-85.484375c0-5.523437-4.476563-10-10-10zm-145.519531 20h60v65.484375h-60zm-20 65.484375h-60v-65.484375h60zm-135.519532-65.484375h55.519532v65.484375h-55.519532zm291.039063 65.484375h-55.519531v-65.484375h55.519531zm0 0"/><path d="m375.605469 60.023438h-311.039063c-5.519531 0-10 4.476562-10 10v85.480468c0 5.523438 4.480469 10 10 10h311.039063c5.523437 0 10-4.476562 10-10v-85.480468c0-5.523438-4.476563-10-10-10zm-145.519531 20h60v65.480468h-60zm-20 65.480468h-60v-65.480468h60zm-135.519532-65.480468h55.519532v65.480468h-55.519532zm291.039063 65.480468h-55.519531v-65.480468h55.519531zm0 0"/></svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('visite')" :active="request()->routeIs('php visite')">
                        {{ __('Visite') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('mesvisite')" :active="request()->routeIs('mesvisite')">
                        {{ __('Mes Visite') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('addappartement')" :active="request()->routeIs('addappartement')">
                        {{ __('Ajouter un appartement') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('validation')" :active="request()->routeIs('/admin/validation-visite')">
                        {{ __('Validation Visite') }}
                    </x-nav-link>
                </div>
               
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
