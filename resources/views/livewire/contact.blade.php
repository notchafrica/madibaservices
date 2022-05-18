<div>
    <!-- Header -->
    <div class="py-24 bg-gray-50 sm:py-32">
        <div class="max-w-md mx-auto pl-4 pr-8 sm:max-w-lg sm:px-6 lg:max-w-7xl lg:px-8">
            <h1
                class="text-4xl leading-10 font-extrabold tracking-tight text-gray-900 text-center sm:text-5xl sm:leading-none lg:text-6xl">
                Get in touch</h1>
            <p class="mt-6 max-w-3xl mx-auto text-xl leading-normal text-gray-500 text-center">Convallis feugiat et
                aliquet pellentesque dictum nisi, velit. Egestas fermentum adipiscing risus quam ac consectetur mattis
                turpis tristique.</p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="relative bg-white">
        <div class="lg:absolute lg:inset-0">
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover lg:absolute lg:h-full"
                    src="https://images.unsplash.com/photo-1468487422149-5edc5034604f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                    alt="">
            </div>
        </div>
        <div
            class="relative py-16 px-4 sm:py-24 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:py-32 lg:grid lg:grid-cols-2">
            <div class="lg:pr-8">
                <div class="max-w-md mx-auto sm:max-w-lg lg:mx-0">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                        Let's work together
                    </h2>
                    <p class="mt-4 text-lg text-gray-500 sm:mt-3">
                        We’d love to hear from you! Send us a message using the form opposite, or email us. We’d love to
                        hear from you! Send us a message using the form opposite, or email us.
                    </p>
                    <form action="#" method="POST" class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                        <div>
                            <x-w-input wire:model.lazy="first_name" :label="__('Name')"></x-w-input>
                        </div>
                        <div>
                            <x-w-input wire:model.lazy="surname" :label="__('Surname')"></x-w-input>
                        </div>
                        <div>
                            <x-w-input wire:model.lazy="phone" :label="__('Phone')"></x-w-input>
                        </div>
                        <div>
                            <x-w-input wire:model.lazy="email" :label="__('Email')"></x-w-input>
                        </div>
                        <div class="sm:col-span-2">
                            <x-w-textarea wire:model.lazy="content" :label="__('Message')"></x-w-textarea>

                        </div>
                        <div class="text-right sm:col-span-2">
                            <x-w-button type="submit" :label="__('Submit')" primary></x-w-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
