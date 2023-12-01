<x-app-layout>
    <div  x-data="productItem({{ json_encode([
                    'id' => $product->id,
                    'slug' => $product->slug,
                    'image' => $product->image,
                    'title' => $product->title,
                    'price' => $product->price,
                    'addToCartUrl' => route('cart.add', $product)
                ]) }})" class="container mx-auto">
        <div class="grid gap-6 grid-cols-1 lg:grid-cols-5 py-4">
            <div class="lg:col-span-2 p-4">
                <div
                    x-data="{
                      images: ['{{$product->image}}'],
                      activeImage: null,
                      prev() {
                          let index = this.images.indexOf(this.activeImage);
                          if (index === 0)
                              index = this.images.length;
                          this.activeImage = this.images[index - 1];
                      },
                      next() {
                          let index = this.images.indexOf(this.activeImage);
                          if (index === this.images.length - 1)
                              index = -1;
                          this.activeImage = this.images[index + 1];
                      },
                      init() {
                          this.activeImage = this.images.length > 0 ? this.images[0] : null
                      }
                    }"
                >
                    <div class="relative">
                        <template x-for="image in images">
                            <div
                                x-show="activeImage === image"
                                class="aspect-w-3 aspect-h-2"
                            >
                                <img :src="image" alt="" class="w-auto mx-auto"/>
                            </div>
                        </template>
                    </div>

                </div>
            </div>
            <div class="lg:col-span-2 py-8">
                <h1 class="text-lg font-semibold">
                    {{$product->title}}
                </h1>
                <div class="text-xs font-bold mb-6">Ksh {{$product->price}}</div>
                <div class="text-xs font-semibold mb-2 text-gray-600">Document Details</div>
                <div class="text-xs mb-6 text-gray-600">{{$product->description}}</div>
                <div class="flex items-center justify-between mb-5">
                    <input
                        type="number"
                        name="quantity"
                        x-ref="quantityEl"
                        value="1"
                        min="1"
                        class="w-32 focus:border-purple-500 focus:outline-none rounded"
                        hidden
                    />
                </div>
                <div class="flex gap-8">
                    <button
                    @click="addToCart($refs.quantityEl.value)"
                    class="bg-orange-700 text-white hover:bg-gray-400 rounded-xl py-1 text-md flex justify-center min-w-0 w-full mb-6"
                >
                    <svg
                        xmlns="https://www.w3.org/2000/svg"
                        class="h-6 w-6 mr-2"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                        />
                    </svg>
                    Add to Cart
                </button>

                <button class="flex bg-gray-200 text-orange-700 rounded-xl text-center py-1 text-md justify-center min-w-0 w-full mb-6">
                    <i class='bx bx-search-alt-2 mr-2 text-orange-700 mt-1'></i>
                    <span class="flex-shrink-0">Seek Legal Advice</span>
                </button>
                
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
