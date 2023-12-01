<x-app-layout>
    <div class="section-with-bg-image">
        <div class="max-w-2xl relative py-32 sm:py-48 lg:py-10">
          <div class="px-10 mt-4 py-10">
            <div class="flex">
              <div class="">
                <h1 class="font-semibold text-gray-800 sm:text-3xl">
                  Legal documents overview
                </h1>
              </div>
            </div>
    
            <p class="mt-6 text-sm text-gray-600 bg-gray-200 rounded-lg p-2">
              Downloading of legal documents is done and processed in a short time.
              You can check out popular documents, forms and contacts including the
              process of downloading.
            </p>
          </div>
        </div>
      </div>
      <style scoped>
        .section-with-bg-image {
          background-image: url("images/stock-1.jpg");
          background-size: cover;
          background-repeat: no-repeat;
          background-size: 100% 100%;
          background-position: 50%;
        }
        </style>
      <section class="bg-gray-100">
        <div class="p-4">
          <h2 class="text-2xl text-left font-semibold mb-6">
            Popular legal documents
          </h2>
          <div class="flex mt-6 p-2 gap-4">
            <div class="flex flex-col w-full md:w-1/2 lg:w-1/4 mb-8 text-center">
              <div
                class="bg-white border border-gray-200 rounded-lg shadow-md p-2 py-2 flex-grow"
              >
                <img class="w-20 mx-auto" src="{{ asset('images/paper-folder.png') }}" />
                <p class="font-bold text-gray-700 text-xs mb-4 mt-4 bottom-4">
                  Operating Agreement
                </p>
              </div>
            </div>
    
            <div class="flex flex-col w-full md:w-1/2 lg:w-1/4 mb-8 text-center">
              <div
                class="bg-white border border-gray-200 rounded-lg shadow-md p-2 py-2 flex-grow"
              >
                <img class="w-20 mx-auto" src="images/red-folder.png" />
                <p class="font-bold text-gray-700 text-xs mb-4 mt-4">
                  Power of Attorney
                </p>
              </div>
            </div>
    
            <div class="flex flex-col w-full md:w-1/2 lg:w-1/4 mb-8 text-center">
              <div
                class="bg-white border border-gray-200 rounded-lg shadow-md p-2 py-2 flex-grow"
              >
                <img class="w-20 mx-auto" src="{{ asset('images/recruitment.png') }}" />
                <p class="font-bold text-gray-700 text-xs mb-4 mt-4">
                  Eviction Notice
                </p>
              </div>
            </div>
    
            <div class="flex flex-col w-full md:w-1/2 lg:w-1/4 mb-8 text-center">
              <div
                class="bg-white border border-gray-200 rounded-lg shadow-md p-2 py-2 flex-grow"
              >
                <img class="w-20 mx-auto" src="{{ asset('images/create-document.png') }}" />
                <p class="font-bold text-gray-700 text-xs mb-4 mt-4">
                  Last Will
                </p>
              </div>
            </div>
    
            <div class="flex flex-col w-full md:w-1/2 lg:w-1/4 mb-8 text-center">
              <div
                class="bg-white border border-gray-200 rounded-lg shadow-md p-2 py-2 flex-grow"
              >
                <img class="w-20 mx-auto" src="{{ asset('images/hiring-employee.png') }}" />
                <p class="font-bold text-gray-700 text-xs mb-4 mt-4">
                  Lease Agreement
                </p>
              </div>
            </div>
    
            <div class="flex flex-col w-full md:w-1/2 lg:w-1/4 mb-8 text-center">
              <div
                class="bg-white border border-gray-200 rounded-lg shadow-md p-2 py-2 flex-grow"
              >
                <img class="w-20 mx-auto" src="{{ asset('images/frame-shelf.png') }}" />
                <p class="font-bold text-gray-700 text-xs mb-4 mt-4">
                 Residential Rental
                </p>
              </div>
            </div>
    
          </div>
        </div>
      </section>
      <section>
        <h2 class="text-xl text-left font-semibold mb-6 px-4 pt-4">
          Browse Legal documents
        </h2>
        <?php if ($products->count() === 0): ?>
        <div class="text-center text-gray-600 py-16 text-xl">
            There are no documents published
        </div>
    <?php else: ?>
    <div class="flex flex-row gap-8 w-full mb-8 text-center p-8">
      
      @foreach($products as $product)
          <!-- Product Item -->
          <div
              x-data="productItem({{ json_encode([
                  'id' => $product->id,
                  'slug' => $product->slug,
                  'image' => $product->image,
                  'title' => $product->title,
                  'price' => $product->price,
                  'addToCartUrl' => route('cart.add', $product)
              ]) }})"
              class="flex-none border border-1 border-gray-200 rounded-md hover:border-orange-600 transition-colors bg-white p-8"
              style="width: 250px;"
          >
              <a href="{{ route('product.view', $product->slug) }}">
                  <div class="">
                      <img
                          src="{{ $product->image }}"
                          alt=""
                          class="w-20 mx-auto"
                      />
                  </div>
              </a>
              <div class="p-4">
                  <h3 class="text-xs font-bold text-gray-700 truncate">
                      <a href="{{ route('product.view', $product->slug) }}">
                          {{$product->title}}
                      </a>
                  </h3>
                  <h5 class="font-bold text-xs">Ksh {{$product->price}}</h5>
              </div>
          </div>
          <!--/ Product Item -->
      @endforeach
  </div>
  
        {{$products->links()}}
    <?php endif; ?>
      </section>
</x-app-layout>
