<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
  class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
  @click.outside="sidebarToggle = false">
  <!-- SIDEBAR HEADER -->
  <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
    <a href="index.html" class="font-bold text-lg text-white w-full text-center">
      UMEDA {{-- <img src="/themes/default/images/logo/logo.svg" alt="Logo" /> --}}
    </a>

    <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
      <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
          fill="" />
      </svg>
    </button>
  </div>
  <!-- SIDEBAR HEADER -->

  <div class="no-scrollbar flex flex-col overflow-y-scroll duration-300 ease-linear">
    <!-- Sidebar Menu -->
    <nav class="mt-0 px-4 py-4 overflow-y-scroll" x-data="{ selected: $persist('Dashboard') }">

      <div>
        <ul class="mb-6 flex flex-col gap-1.5">
          <li>
            <x-sidebar.menu href="/dashboard">
              Dashboard
            </x-sidebar.menu>
          </li>
        </ul>

      </div>

      <div class="mb-6 flex flex-col gap-1.5">
        <ul>
          <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">Management</h3>
          <li>
            <x-sidebar.menu>
              Position
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu href="/employees">
              Employee
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu>
              Employee Account
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu>
              Permission
            </x-sidebar.menu>
          </li>
        </ul>
      </div>

      <div class="mb-6 flex flex-col gap-1.5">
        <ul>
          <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">CONTENT</h3>
          <li>
            <x-sidebar.menu href="/marketplaces">
              Market Place
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu href="/meta-property-groups">
              Meta Property Group
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu href="/meta-properties">
              Meta Property
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu href="/product-category-seconds">
              Product Category 2
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu href="/product-category-firsts">
              Product Category 1
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu href="/products">
              Product
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu href="/product-contents">
              Product Content
            </x-sidebar.menu>
          </li>
        </ul>
      </div>

      <div class="mb-6 flex flex-col gap-1.5">
        <ul>
          <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">Sales</h3>
          <li>
            <x-sidebar.menu href="/customers">
              Customer
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu href="/sales-carts">
              Sales Cart
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu href="/sales-orders">
              Sales Order
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu href="/sales-invoices">
              Sales Invoice
            </x-sidebar.menu>
          </li>
          <li>
            <x-sidebar.menu href="/sales-payments">
              Sales Payment
            </x-sidebar.menu>
          </li>
        </ul>
      </div>

    </nav>
    <!-- Sidebar Menu -->

    <!-- Promo Box -->
    {{-- <div
      class="mx-auto mb-10 w-full max-w-60 rounded-sm border border-strokedark bg-boxdark px-4 py-6 text-center shadow-default">
      <h3 class="mb-1 font-semibold text-white">TailAdmin Pro</h3>
      <p class="mb-4 text-xs">Get All Dashboards and 300+ UI Elements</p>
      <a href="https://tailadmin.com/pricing" target="_blank" rel="nofollow"
        class="flex items-center justify-center rounded-md bg-primary p-2 text-white hover:bg-opacity-95">
        Purchase Now
      </a>
    </div> --}}
    <!-- Promo Box -->
  </div>
</aside>
