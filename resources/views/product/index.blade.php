<?php
/** @var \Illuminate\Database\Eloquent\Collection $products */
?>

<x-app-layout>

        <section class="dark:bg-gray-800 dark:text-gray-100 section-with-bg-image">
          <div
            class="container mx-auto flex flex-col items-center relative px-4 py-10 text-center md:py-32 md:px-10 lg:px-32 xl:max-w-3xl"
          >
            <p class="px-8 mt-4 mb-6 text-xl">Legal documents and expert advice</p>
            <h1 class="text-xl mb-6 font-bold sm:text-5xl">
              Empowering you with legal clarity and documents at your fingertips
            </h1>
      
            <div class="flex justify-center">
              <button
                class="p-2 m-2 text-xs font-semibold rounded dark:bg-orange-600 dark:text-white"
              >
                Download Legal Documents
              </button>
              <button
                class="p-2 m-2 text-xs border rounded dark:bg-white dark:text-orange-600 dark:border-orange-400"
              >
                Schedule a Consultation
              </button>
            </div>
          </div>
        </section>
        <style scoped>
          .section-with-bg-image {
            background-image: url("images/back-gray.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-position: 50%;
          }
          </style>
      
      <section class="bg-gray-100">
        <div class="container mx-auto p-8">
          <div class="flex flex-col md:flex-row justify-between">
            <div class="w-full md:w-1/2 lg:w-full px-4 mb-8">
              <div class="bg-white rounded-lg shadow-md p-8 px-6 py-5 text-center">
                <h3 class="text-xl md:text-2xl lg:text-2xl font-bold mb-2">Download legal documents</h3>
                <hr class="my-2" />
                <p class="text-left text-gray-700 mb-4 mt-4">
                  Downloading legal documents is done and processed quickly. Check out popular documents, forms, and contacts, including the download process.
                </p>
                <hr class="my-2" />
                <div class="flex justify-end">
                  <i class="p-2 text-2xl text-orange-600 cursor-pointer rounded-lg bg-gray-200 bx bx-right-arrow-alt"></i>
                </div>
              </div>
            </div>
      
            <div class="w-full md:w-1/2 lg:w-full px-4 mb-8">
              <div class="bg-white rounded-lg shadow-md p-8 px-6 py-2 text-center">
                <h3 class="text-xl md:text-2xl lg:text-2xl font-bold mb-2">Engage a lawyer</h3>
                <hr class="my-2" />
                <p class="text-left text-gray-700 mb-4 mt-4">
                  When facing prosecution, you want to hire lawyers with experience, up-to-date legal knowledge, and a reputation for fierce advocacy among judges, prosecutors, and the police. Contact us to engage with our experienced lawyers.
                </p>
                <hr class="my-2" />
                <div class="flex justify-end">
                  <i class="p-2 text-2xl text-orange-600 cursor-pointer rounded-lg bg-gray-200 bx bx-right-arrow-alt"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      <section class="bg-gray-100">
        <div class="p-4">
          <h2 class="text-2xl md:text-2xl lg:text-2xl text-center font-semibold mb-6">
            Download legal documents in 4 easy steps
          </h2>
          <div class="flex flex-wrap mt-6">
            <div class="w-full md:w-1/2 lg:w-1/4 mb-8">
              <div class="bg-white border border-gray-200 rounded-lg shadow-md p-8 px-6 py-2 text-center">
                <h3 class="text-md md:text-lg lg:text-xl font-bold mb-2">Fill out a questionnaire</h3>
                <hr class="my-2" />
                <p class="text-gray-700 text-sm md:text-xs mb-4 mt-4">
                  Input the essential information into your document.
                </p>
              </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 mb-8">
              <div class="bg-white border border-gray-200 rounded-lg shadow-md p-8 px-6 py-2 text-center">
                <h3 class="text-md md:text-lg lg:text-xl font-bold mb-2">Review and make payment</h3>
                <hr class="my-2" />
                <p class="text-gray-700 text-sm md:text-xs mb-4 mt-4">
                  Verify that the provided information is accurate and proceed with the payment.
                </p>
              </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 mb-8">
              <div class="bg-white border border-gray-200 rounded-lg shadow-md p-8 px-6 py-2 text-center">
                <h3 class="text-md md:text-lg lg:text-xl font-bold mb-2">Download and print</h3>
                <hr class="my-2" />
                <p class="text-gray-700 text-sm md:text-xs mb-4 mt-4">
                  Input the essential information into your document.
                </p>
              </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 mb-8">
              <div class="bg-white border border-gray-200 rounded-lg shadow-md p-8 px-6 py-2 text-center">
                <h3 class="text-md md:text-lg lg:text-xl font-bold mb-2">Sign the document</h3>
                <hr class="my-2" />
                <p class="text-gray-700 text-sm md:text-xs mb-4 mt-4">
                  Sign the document and ensure it is witnessed if required by law.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
        <section class="bg-gray-100">
          <div class="py-8">
            <div class="px-6 flex justify-between">
              <h2 class="text-2xl text-center font-semibold mb-6">
                Explore legal documents
              </h2>
              <div class="relative items-center mr-4">
                <input
                  class="rounded-lg bg-gray-200 text-gray-400 pl-8 pr-2 text-sm transition duration-200 focus:outline-none focus:ring-1 focus:ring-gray-200 w-full"
                  placeholder="Search legal documents, forms or contracts"
                />
                <i class="absolute left-2 top-1 bx bx-search-alt text-gray-400"></i>
              </div>
            </div>
      
            <div class="flex flex-wrap mt-6">
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Operating Agreement</h3>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Power of Attorney</h3>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Operating Agreement</h3>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Power of Attorney</h3>
                </div>
              </div>
            </div>
            <div class="flex flex-wrap mt-6">
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Residential Rental</h3>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Eviction Notice</h3>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Residential Rental</h3>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Eviction Notice</h3>
                </div>
              </div>
            </div>
      
            <div class="flex flex-wrap mt-6">
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Lease Agreement</h3>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Last Will</h3>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Lease Agreement</h3>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-8 mb-4 md:mb-0">
                <div class="rounded-md shadow-md px-4 py-2 text-center">
                  <h3 class="text-md text-gray-400 font-bold">Last Will</h3>
                </div>
              </div>
            </div>
          </div>
        </section>
      
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
          <div class="flex flex-col">
            <div class="flex flex-col">
              <div class="container max-w-7xl px-4">
                <div class="flex flex-wrap justify-center text-center mb-8">
                  <div class="w-full lg:w-6/12 px-4">
                    <h1 class="text-gray-900 text-2xl font-bold">Meet the Team</h1>
                  </div>
                </div>
      
                <!-- Team Members -->
                <div class="flex flex-wrap">
                  <!-- Member #1 -->
                  <div class="w-full md:w-6/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
                    <div class="flex flex-col">
                      <!-- Avatar -->
                      <a href="#" class="mx-auto">
                        <img
                          class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                          src="https://images.unsplash.com/photo-1634926878768-2a5b3c42f139?fit=clamp&w=400&h=400&q=80"
                        />
                      </a>
      
                      <!-- Details -->
                      <div class="text-left mt-6">
                        <!-- Name -->
                        <h1 class="text-gray-900 text-xl font-bold mb-1">
                          Austin M. Hagee
                        </h1>
      
                        <!-- Title -->
                        <div class="text-gray-700 font-light mb-2">
                          Managing Partner
                        </div>
      
                        <p class="text-gray-700 text-xs mb-4">
                          Austin M. Hagee is a trusted and proven San Antonio trial
                          lawyer who tirelessly defends his clients’ constitutional
                          rights. As a former prosecutor turned nationally recognized
                          criminal defense attorney, Austin has the knowledge and
                          expertise to get the best possible outcome for his clients.
                        </p>
                      </div>
                    </div>
                  </div>
      
                  <!-- Member #2 -->
                  <div class="w-full md:w-6/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
                    <div class="flex flex-col">
                      <!-- Avatar -->
                      <a href="#" class="mx-auto">
                        <img
                          class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                          src="https://images.unsplash.com/photo-1634896941598-b6b500a502a7?fit=clamp&w=400&h=400&q=80"
                        />
                      </a>
      
                      <!-- Details -->
                      <div class="text-left mt-6">
                        <!-- Name -->
                        <h1 class="text-gray-900 text-xl font-bold mb-1">
                          Jeremy Best
                        </h1>
      
                        <!-- Title -->
                        <div class="text-gray-700 font-light mb-2">Counsel</div>
      
                        <p class="text-gray-700 text-xs mb-4">
                          Jeremy Best is a seasoned trial attorney and former Bexar
                          County prosecutor who has handled thousands of criminal
                          matters. With a passion for helping good people through
                          difficult times, Jeremy fiercely advocates for his clients’
                          rights in the courtroom.
                        </p>
                      </div>
                    </div>
                  </div>
      
                  <!-- Member #3 -->
                  <div class="w-full md:w-6/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
                    <div class="flex flex-col">
                      <!-- Avatar -->
                      <a href="#" class="mx-auto">
                        <img
                          class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                          src="https://images.unsplash.com/photo-1634193295627-1cdddf751ebf?fit=clamp&w=400&h=400&q=80"
                        />
                      </a>
      
                      <!-- Details -->
                      <div class="text-left mt-6">
                        <!-- Name -->
                        <h1 class="text-gray-900 text-xl font-bold mb-1">
                          Drake Brown
                        </h1>
      
                        <!-- Title -->
                        <div class="text-gray-700 font-light mb-2">Counsel</div>
      
                        <p class="text-gray-700 text-xs mb-4">
                          Drake J. Brown is an accomplished criminal defense attorney
                          with a background in civil litigation and experience at the
                          Bexar County District Attorney's Office. He is dedicated to
                          providing exceptional legal representation while also
                          maintaining a strong commitment to his clients' interests.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <section class="bg-gray-100">
          <div class="container mx-auto p-8">
            <h2 class="text-md text-center text-gray-600 font-semibold mb-2">
              What our clients say
            </h2>
            <h2 class="text-2xl text-center font-semibold mb-6">
              Reviews & Testimonials
            </h2>
            <div class="flex flex-wrap">
              <!-- Testimonial 1 -->
              <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                <div class="bg-black rounded-lg shadow-md p-8 px-6 flex flex-col justify-between h-full">
                  <div>
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-8 h-8 dark:text-orange-400">
                        <path d="M232,246.857V16H16V416H54.4ZM48,48H200V233.143L48,377.905Z"></path>
                        <path d="M280,416h38.4L496,246.857V16H280ZM312,48H464V233.143L312,377.905Z"></path>
                      </svg>
                    </div>
                    <p class="text-center text-white mb-4 mt-4">
                      Austin is a caring, dedicated, and skilled lawyer, and I would highly recommend him. I had a case for 3 ½ years, and I finally decided to change lawyers. I hired Austin, and he went above and beyond to help my case. We went to trial, and he helped me to get acquitted of all charges. Throughout the process, Austin was reliable and responsive. If I had any questions or concerns, I could call him at any time, and he would pick up and answer my questions. He made it a priority to give me the time, and he made me feel heard. My family and I owe him everything; because of him, I have my life back. If you are looking for an outstanding lawyer, Austin is the guy to work with. Thank you, Austin!
                    </p>
                  </div>
                  <div class="text-white font-bold">
                    <p>Luis G.</p>
                    <p class="text-xs">San Antonio. Tx</p>
                  </div>
                </div>
              </div>
        
              <!-- Testimonial 2 -->
              <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                <div class="bg-black rounded-lg shadow-md p-8 px-6 flex flex-col justify-between h-full">
                  <div>
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-8 h-8 dark:text-orange-400">
                        <path d="M232,246.857V16H16V416H54.4ZM48,48H200V233.143L48,377.905Z"></path>
                        <path d="M280,416h38.4L496,246.857V16H280ZM312,48H464V233.143L312,377.905Z"></path>
                      </svg>
                    </div>
                    <p class="text-center text-white mb-4 mt-4">
                      Austin Hagee is my husband's attorney and made the most stressful time of our lives so much easier to handle. He went out of his way to call me on multiple occasions and explain everything happening in my husband's case in great detail and in a way I could fully understand. He is always there when you need him and as someone who has never dealt with this I was definitely taking up a lot of his time but he never made me feel bad for being confused or upset. He made me feel safe and I could always trust my husband was in good hands.
                    </p>
                  </div>
                  <div class="text-white font-bold">
                    <p>Elliot G.</p>
                    <p class="text-xs">San Antonio. Tx</p>
                  </div>
                </div>
              </div>
        
              <!-- Testimonial 3 -->
              <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                <div class="bg-black rounded-lg shadow-md p-8 px-6 flex flex-col justify-between h-full">
                  <div>
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-8 h-8 dark:text-orange-400">
                        <path d="M232,246.857V16H16V416H54.4ZM48,48H200V233.143L48,377.905Z"></path>
                        <path d="M280,416h38.4L496,246.857V16H280ZM312,48H464V233.143L312,377.905Z"></path>
                      </svg>
                    </div>
                    <p class="text-center text-white mb-4 mt-4">
                      Austin Hagee is a great criminal defense lawyer and he helped me with a very difficult case. He was able to help me avoid convictions and got one of my cases dropped! He and his staff were so kind and compassionate with me throughout the process. Highly recommend his firm!
                    </p>
                  </div>
                  <div class="text-white font-bold">
                    <p>Robert C.</p>
                    <p class="text-xs">San Antonio. Tx</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="bg-white">
          <div class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6 sm:py-24 lg:px-8">
            <h2 class="text-2xl text-center font-semibold mb-6">Trusted by</h2>
      
            <div class="container mx-auto px-4">
              <div
                class="flex flex-wrap justify-center items-center rounded px-8 py-2 mb-4 gap-10"
              >
                <img src="{{ asset('images/as-seen.png') }}" class="w-40 h-20 mb-4" />
                <img src="{{ asset('images/news-4.png') }}" class="w-10 h-15 mb-4" />
                <img src="{{ asset('images/abc-ksa.png') }}" class="w-20 h-15 mb-4" />
                <img src="{{ asset('images/caller-times.png') }}" class="w-40 h-15 mb-4" />
                <img src="{{ asset('images/san-antonio.png') }}" class="w-40 h-15 mb-4" />
              </div>
            </div>
          </div>
        </section>
        <section class="">
          <div class="">
            <div class="p-2 mb-4 border text-center border-gray-400 rounded">
              <h2 class="px-40 text-gray-600 tracking-tight lg:text-2xl mb-4">
                Contact us online to schedule a free consultation, or call to learn
                more about how we can help.
              </h2>
              <button
                class="p-2 m-4 text-md font-semibold rounded dark:bg-orange-600 dark:text-white"
              >
                Book Consultation
              </button>
              <h2 class="px-40 text-gray-600 tracking-tight lg:text-md mb-4">
                Contact us online or call us at
                <span class="text-orange-600">071-965-2277.</span>
              </h2>
            </div>
          </div>
        </section>
      
        <section class="">
          <h2 class="text-2xl text-center font-semibold mb-6">
            Schedule a consultation
          </h2>
      
          <div class="px-8 py-4">
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
              <input
                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none border-gray-200 focus:shadow-outline"
                type="text"
                placeholder="First Name*"
              />
              <input
                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none border-gray-200 focus:shadow-outline"
                type="text"
                placeholder="Last Name*"
              />
              <input
                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none border-gray-200 focus:shadow-outline"
                type="email"
                placeholder="Email*"
              />
              <input
                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none border-gray-200 focus:shadow-outline"
                type="number"
                placeholder="Phone*"
              />
            </div>
            <div class="my-4">
              <textarea
                placeholder="How can we help..*"
                class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none border-gray-200 focus:shadow-outline"
              ></textarea>
            </div>
            <div class="my-2 w-1/2 lg:w-1/4">
              <button
                class="uppercase text-sm font-bold tracking-wide bg-orange-600 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline"
              >
                Send Message
              </button>
            </div>
          </div>
        </section>
</x-app-layout>

