<x-app-layout>
    <section class="">
        <div class="w-full">
          <div class="p-10">
            <div class="text-left">
              <h2 class="font-bold">Book Consultation</h2>
              <p class="text-sm">
                Please fill the form to completion. We will get back to you as soon as
                we can.
              </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <form class="text-sm">
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
                  <label for="email" class="text-gray-700"
                    >Date of Appointment</label
                  >
                  <input
                    type="date"
                    name="email"
                    id="email"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="4:00 Available"
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
    
              <aside class="">
                <div class="bg-gray-100 p-8 rounded-lg">
                  <h2 class="font-bold text-xl">Instructions</h2>
                  <p class="text-xs">
                        Thank you for choosing our services! To ensure a smooth booking process, please follow the instructions below:
                  </p>
                  <ul class="list-disc mt-4 text-xs space-y-2">
    
                    <li>
                        Browse our website to explore the range of services we offer. Whether you need legal advice, document downloads, or consultation, we've got you covered.
    
                    </li>
                    <li>
                        If your selected service includes a consultation, you can schedule an appointment with our experts. This is an opportunity to discuss your specific needs and get personalized advice.
    
                    </li>
                    <li>
                        If you've scheduled a consultation, make sure to prepare any relevant documents or questions you may have. This will help make the most of your consultation time.
    
                    </li>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>
</x-app-layout>
