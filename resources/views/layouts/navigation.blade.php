<header
    x-data="{
        mobileMenuOpen: false,
        cartItemsCount: {{ \App\Helpers\Cart::getCartItemsCount() }},
    }"
    @cart-change.window="cartItemsCount = $event.detail.count"
    class="bg-slate-800 shadow-md text-white"
>
<div class="p-4 bg-black">
    <nav class="flex items-center justify-between mb-4" aria-label="Global">
      <div class="flex lg:flex-1 items-left v-cloak">
        <a href="/" class="lg:block"
          ><p class="text-white font-semibold">LOGO</p></a
        >
      </div>
      <button
        class="lg:hidden text-gray-900 hover:text-gray-600 link"
        style="color: #c0501a"
      >
        <i class="bx bx-menu"></i>
      </button>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-6 items-center">
        <a href="/contact" class=""
          ><button
            class="text-sm font-semibold leading-6 text-gray-900 border border-orange-600 hover:bg-black text-white px-4 py-1 rounded link"
            style="background-color: #000"
          >
            <div class="flex justify-center">
              <div class="flex items-center mr-2">
                <i class="bx bxs-phone bg-orange-600 rounded-full p-1 bx-xs text-white"></i>
              </div>
              <div class="flex flex-col items-left text-xs">
                <div class="text-left text-white">+272 003 000</div>
                <div class="text-left text-white">Call Us</div>
              </div>
            </div>
          </button></a
        ><a href="/book-consultation" class=""
          ><button
            class="text-sm font-semibold leading-6 text-gray-900 bg-orange-800 hover:bg-gray-600 hover:text-white px-4 py-1 rounded link"
          >
            Schedule a Consultation
          </button></a
        >
      </div>
    </nav>
    <nav class="flex mb-4" aria-label="Global">
      <button
        class="lg:hidden text-gray-900 hover:text-gray-600 link"
        style="color: #c0501a"
      >
        <i class="bx bx-menu"></i>
      </button>
      <div
        class="hidden lg:flex lg:flex-1 lg:justify-between gap-6 items-center"
      >
        <div class="flex gap-6">
          <a href="/book-consultation"

            class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-600 link"
            style="color: #fff"
          >
            Book Consultation </a 
          ><a href="/legal-documents"

            class="text-sm font-semibold leading-6 text-gray-900 link"
            style="color: #fff"
          >
            Legal Documents </a 
          ><a href="/find-lawyer"

            class="text-sm font-semibold leading-6 text-gray-900 link"
            style="color: #fff"
          >
            Find lawyer </a 
          ><a href="/contact"
            class="text-sm font-semibold leading-6 text-gray-900 link"
            style="color: #fff"
          >
            Contact
        </a >
        </div>
        <div class="flex items-center justify-end">
          <div class="relative items-center mr-4">
            <input
              class="rounded-lg bg-gray-100 text-gray-400 pl-8 pr-2 text-sm transition duration-200 focus:outline-none focus:ring-1 focus:ring-gray-200 w-full"
              placeholder="Search legal documents"
            /><i
              class="absolute left-2 top-1 bx bx-search-alt text-gray-400"
            ></i>
          </div>
          @if (!Auth::guest())
          <div x-data="{open: false}" class="relative">
              <a
                  @click="open = !open"
                  class="cursor-pointer flex justify-between items-center text-sm font-semibold px-2 hover:text-orange-800"
              >
              <span class="flex items-center">
                <i
                class="text-xl bx bxs-user text-white mr-1 cursor-pointer"
              ></i>
                My Account
              </span>
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                  >
                      <path
                          fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"
                      />
                  </svg>
              </a>
              <ul
                  x-show="open"
                  x-transition
                  class="absolute z-10 right-0 bg-gray-600 rounded-lg py-2"
              >
                  <li>
                      <a href="{{ route('profile') }}" class="flex px-3 py-2 hover:bg-gray-800">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-5 w-5 mr-2"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="2"
                          >
                              <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                              />
                          </svg>
                          My Profile
                      </a>
                  </li>
                  <li class="hover:bg-gray-800">
                      <a
                          href="{{ route('order.index') }}"
                          class="flex items-center px-3 py-2 hover:bg-gray-800"
                      >
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-5 w-5 mr-2"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="2"
                          >
                              <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                              />
                          </svg>
                          My Orders
                      </a>
                  </li>
                  <li class="hover:bg-gray-800">
                      <!-- Authentication -->
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf

                          <a href="{{ route('logout') }}"
                             class="flex items-center px-3 py-2 hover:bg-gray-800"
                             onclick="event.preventDefault();
                                  this.closest('form').submit();">
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  class="h-5 w-5 mr-2"
                                  fill="none"
                                  viewBox="0 0 24 24"
                                  stroke="currentColor"
                                  stroke-width="2"
                              >
                                  <path
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                                  />
                              </svg>
                              {{ __('Log Out') }}
                          </a>
                      </form>
                  </li>
              </ul>
            </div>
      @else
          <div>
              <a
                  href="{{ route('login') }}"
                  class="flex items-center py-2 px-3 text-sm font-semibold transition-colors hover:text-orange-800"
              >
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6 mr-2"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                  >
                      <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                      />
                  </svg>
                  Login
              </a>
            </div>
          <div class="px-3 py-3">
              <a
                  href="{{ route('register') }}"
                  class="block text-center text-white text-sm font-semibold shadow-md hover:text-orange-800 active:text-orange-800 transition-colors w-full"
              >
                  Register
              </a>
            </div>
      @endif

          <div v-show="cartLink" class="flex items-center">
            <a href="/cart" class="text-white">
              <div class="relative flex">
                <i class="text-xl bx bxs-cart mr-2 text-white"></i>

                <small
                x-show="cartItemsCount"
                x-transition
                x-cloak
                x-text="cartItemsCount"
                class="absolute z-[100] -top-2 -right-3 py-[2px] px-[8px] rounded-full bg-white text-black font-bold"
            ></small>

              </div>
            </a >
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
