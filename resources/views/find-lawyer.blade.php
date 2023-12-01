<x-app-layout>
    <section class="">
        <div class="w-full">
          <div
            class="flex flex-col md:flex-row items-center justify-center"
          >
            <div
              class="sm:w-full md:w-full xl:w-450 2xl:w-450 mt-8 p-8"
            >
              <div class="text-left">
                <h2 class="font-bold">Find Lawyer</h2>
                <p class="text-sm">
                  Write your needs and we will find a suitable lawyer for you. We will get back to you as soon
                  as we can.
                </p>
              </div>
    
              <form class=" text-sm">
                <div class="flex flex-col my-4">
                  <label for="name" class="text-gray-700">Name</label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="Enter your name"
                  />
                </div>
    
                <div class="flex flex-col my-4 mt-4">
                  <label for="email" class="text-gray-700">Email Address</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="Enter your email"
                  />
                </div>
    
                <div class="flex flex-col my-4 mt-4">
                  <label for="message" class="text-gray-700">Message</label>
                  <textarea
                    name="message"
                    id="message"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900 h-20 resize-none"
                    placeholder="Please write your message"
                  ></textarea>
                </div>
    
                <div class="text-left">
                  <button
                    class="text-sm font-semibold leading-6 text-gray-900 bg-gray-800 hover:bg-black text-white px-4 py-1 rounded mt-10"
                    style="background-color: #c0501a"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
 </x-app-layout>
 