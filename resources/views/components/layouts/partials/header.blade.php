<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{route('contact-us-form')}}" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>

        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">About Us</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
            <a href="{{route('contact-us-form')}}" class="text-sm font-semibold leading-6 text-gray-900 {{ Route::is('contact-us-form') ? 'active' : '' }}"
            >Contact Us</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>
</header>

<style>
    .active {
        color: red;
        font-weight: bold;
    }
</style>
