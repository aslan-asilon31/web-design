<!-- ====== Forms Section Start -->
<div class="rounded-sm border border-stroke bg-white shadow-default">
  <div class="h-screen flex flex-wrap items-center">
    <div class="hidden w-full xl:block xl:w-1/2">
      <div class="p-20 text-center">
        <a class="mb-0 inline-block" href="index.html">
          <img src="/assets/images/umeda-logo.png" alt="Logo" class="object-contain h-10 sm:h-12" />
          {{-- <img class="hidden" src="/themes/default/images/logo/logo.svg" alt="Logo" /> --}}
          {{-- <img class="dark:hidden" src="/themes/default/images/logo/logo-dark.svg" alt="Logo" /> --}}
        </a>

        <p class="font-medium 2xl:px-20 text-xl mb-8">
          Japan Design Home Appliances. Love Life. Live Well.
        </p>

        <span class="mt-0 inline-block">
          {{-- <img src="/themes/default/images/illustration/illustration-03.svg" alt="illustration" /> --}}
          <img src="/assets/images/login-image.webp" alt="illustration" />
        </span>
      </div>
    </div>
    <div class="w-full h-full flex items-center border-stroke xl:w-1/2 xl:border-l-2">
      <div class="w-full p-4 sm:p-12.5 xl:p-17.5">
        <h1 class="text-center text-4xl font-bold text-black sm:text-title-xl2 hidden">
          Login
        </h1>
        <div>
          <div class="w-full flex flex-wrap justify-center">
            {{-- <img src="/themes/default/images/logo/logo.svg" alt="Logo" class="object-contain h-10" />
            <img class="dark:hidden object-contain h-10" src="/themes/default/images/logo/logo-dark.svg"
              alt="Logo" /> --}}

            <img src="/assets/images/umeda-logo.png" alt="Logo" class="object-contain h-10" />
          </div>
          <div class="text-center my-1.5 block font-medium text-xl sm:text-title-xl2">Content Management System</div>
        </div>

        <form wire:submit="login">


          <div class="mb-4">
            <x-input wire:model="loginForm.username" label="Username" placeholder="Username" />
          </div>

          <div class="mb-6">
            <x-password wire:model="loginForm.password" label="Password" placeholder="Password" />
          </div>

          <div class="mb-5">
            <x-button type="submit" label="Login" class="w-full font-bold" />
          </div>

          @if ($errors->has('invalid_account'))
            <x-alert title="Error, perhatikan data Anda!" negative padding="pl-14">
              <x-slot name="slot">
                <ul class="list-disc text-base">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </x-slot>
            </x-alert>
          @endif

          <div class="mt-6 text-center">
            <p class="font-medium">
              Forgot Password?
              <a href="#" class="text-primary">Reset Password</a>
            </p>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>
<!-- ====== Forms Section End -->
