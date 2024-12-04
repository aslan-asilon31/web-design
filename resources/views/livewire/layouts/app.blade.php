<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>
    {{ $title ?? 'No Title' }} | {{ env('APP_NAME') }}
  </title>
  <link rel="icon" href="favicon.ico">
  <link href="/themes/default/css/style.css" rel="stylesheet">
  @wireUiScripts
  @filepondScripts
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    .form-loading,
    .form-loading div {
      box-sizing: border-box;
    }

    .form-loading {
      display: inline-block;
      position: relative;
      width: 80px;
      height: 80px;
    }

    .form-loading div {
      position: absolute;
      width: 6.4px;
      height: 6.4px;
      background: currentColor;
      border-radius: 50%;
      animation: form-loading 1.2s linear infinite;
    }

    .form-loading div:nth-child(1) {
      animation-delay: 0s;
      top: 36.8px;
      left: 66.24px;
    }

    .form-loading div:nth-child(2) {
      animation-delay: -0.1s;
      top: 22.08px;
      left: 62.29579px;
    }

    .form-loading div:nth-child(3) {
      animation-delay: -0.2s;
      top: 11.30421px;
      left: 51.52px;
    }

    .form-loading div:nth-child(4) {
      animation-delay: -0.3s;
      top: 7.36px;
      left: 36.8px;
    }

    .form-loading div:nth-child(5) {
      animation-delay: -0.4s;
      top: 11.30421px;
      left: 22.08px;
    }

    .form-loading div:nth-child(6) {
      animation-delay: -0.5s;
      top: 22.08px;
      left: 11.30421px;
    }

    .form-loading div:nth-child(7) {
      animation-delay: -0.6s;
      top: 36.8px;
      left: 7.36px;
    }

    .form-loading div:nth-child(8) {
      animation-delay: -0.7s;
      top: 51.52px;
      left: 11.30421px;
    }

    .form-loading div:nth-child(9) {
      animation-delay: -0.8s;
      top: 62.29579px;
      left: 22.08px;
    }

    .form-loading div:nth-child(10) {
      animation-delay: -0.9s;
      top: 66.24px;
      left: 36.8px;
    }

    .form-loading div:nth-child(11) {
      animation-delay: -1s;
      top: 62.29579px;
      left: 51.52px;
    }

    .form-loading div:nth-child(12) {
      animation-delay: -1.1s;
      top: 51.52px;
      left: 62.29579px;
    }

    @keyframes form-loading {

      0%,
      20%,
      80%,
      100% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.5);
      }
    }
  </style>
</head>

<body x-data="{ page: 'formLayout', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">
  <!-- ===== Preloader Start ===== -->
  {{-- <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => { setTimeout(() => loaded = false, 500) })"
    class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
    <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent"></div>
  </div> --}}
  <!-- ===== Preloader End ===== -->

  <!-- ===== Page Wrapper Start ===== -->
  <div class="flex h-screen overflow-hidden">
    @livewire('partials.sidebar')
    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
      @livewire('partials.header')


      <!-- ===== Main Content Start ===== -->
      <main>
        <div class="mx-auto p-0 md:p-6 2xl:p-10">
          {{-- <x-breadcrumb /> --}}
          {{ $slot }}
        </div>
      </main>
      <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
  </div>
  <!-- ===== Page Wrapper End ===== -->
  {{-- <script defer src="/themes/default/js/bundle.js"></script> --}}
</body>

</html>
