<x-app-layout>
    <div class="container mx-auto p-8">
        <div x-data="{
            cartItems: {{
                json_encode(
                    $products->map(fn($product) => [
                        'id' => $product->id,
                        'slug' => $product->slug,
                        'image' => $product->image,
                        'description' => $product->description,
                        'title' => $product->title,
                        'price' => $product->price,
                        'quantity' => $cartItems[$product->id]['quantity'],
                        'href' => route('product.view', $product->slug),
                        'removeUrl' => route('cart.remove', $product),
                        'updateQuantityUrl' => route('cart.update-quantity', $product)
                    ])
                )
            }},
            get cartTotal() {
                return this.cartItems.reduce((accum, next) => accum + next.price * next.quantity, 0).toFixed(2)
            },
        }" class="">
            <!-- Product Items -->
            <h2 class="text-2xl font-semibold mb-4">Your Cart</h2>
            <template x-if="cartItems.length">

                <div class="flex">
                  <div class="md:w-1/2">
                    <template x-for="product of cartItems" :key="product.id">
                      <div x-data="productItem(product)">
                          <div class="flex flex-col md:flex-row justify-between items-start mb-2">
                              <!-- Cart Products -->
                                <div
                                  x-for="product of cartItems" :key="product.id"
                                  class="flex items-center mb-4 p-4 border border-gray-200 rounded-lg"
                                >
                                  <div class="md:w-1/4 p-4">
                                    <img
                                    :src="product.image"
                                    class="w-20 object-cover mr-4 rounded-lg"
                                  />
                                  </div>

                      
                                  <div class="md:w-3/4">
                                    <h3 class="text-lg font-semibold" x-text="product.title"></h3>
                                    <p class="text-gray-600 text-xs" x-text="product.description">
                                    </p>
                                    <div class="flex items-center text-xs font-semibold">
                                      Qty:
                                      <input
                                          type="number"
                                          min="1"
                                          x-model="product.quantity"
                                          @change="changeQuantity()"
                                          class="ml-3 py-1 w-14 text-xs border-gray-200 rounded-lg focus:border-purple-600 focus:ring-purple-600"
                                      />
                                  </div>
                      
                                    <div class="flex items-center">
                                      <p x-text="`Ksh ${product.price}`" class="text-gray-600 text-xs font-bold"></p>

                      
                                      <!-- Delete Button with Bin Icon -->
                                      <button
                                      @click.prevent="removeItemFromCart()"
                                        class="ml-2 text-gray-500 hover:text-orange-800 items-center focus:outline-none"
                                      >
                                        <i class="bx bx-trash text-xs"></i
                                        ><span class="text-xs font-bold">Remove</span>
                                      </button>
                                    </div>
                                  </div>
                                
                                </div>
                              
                             
                            </div>
                      </div>
                      </template></div>
                      <div class="md:w-1/2 md:ml-8 border border-gray-200 rounded-lg p-4">
                        <h2 class="text-lg font-semibold mb-4">Order Summary</h2>
                    
                        <div class="flex justify-between items-center gap-4">
                          <div class="mb-4">
                            <label for="discountCode" class="text-gray-600 text-xs"
                              >Discount Code</label
                            >
                            <input
                              type="text"
                              id="discountCode"
                              class="w-full border h-4 rounded-lg focus:outline-none focus:ring focus:border-orange-800"
                            />
                          </div>
                    
                          <!-- Apply Discount Button -->
                          <button
                            class="bg-orange-800 text-white justify-end text-xs p-2 rounded-full hover:bg-orange-600"
                          >
                            Apply Discount
                          </button>
                        </div>
                        <!-- Discount Code Input -->
                    
                    
                        <div class="flex justify-between items-center text-xs">
                          <p class="text-gray-600">Discount</p>
                          <p class="font-bold">Ksh 0</p>
                        </div>
                    
                        <div class="flex justify-between items-center text-xs">
                          <p class="text-gray-600">VAT</p>
                          <p class="font-bold">Ksh 0</p>
                        </div>
                    
                        <div class="flex justify-between items-center text-xs">
                          <p class="text-gray-600 font-bold">Total</p>
                          <span id="cartTotal" x-text="`Ksh ${cartTotal}`"></span>
                        </div>
                    
                        <form action="{{route('cart.checkout')}}" method="post">
                          @csrf
                          <button type="submit" class="bg-orange-800 text-white text-xs rounded-xl w-full p-2 mt-2">
                              Proceed to Checkout
                          </button>
                      </form>
                        <div class="flex flex-col">
                          <small class="font-bold text-center my-2">OR</small>
                          <a
                            href="/cart"
                            class="w-full font-bold under text-black text-center underline underline-offset-8"

                          >
                            Browse documents
                          </a>
                        </div>
                      </div>

                </div>
                
                <!--/ Product Items -->
            </template>
            <template x-if="!cartItems.length">
              <div class="text-center p-8">
                <i class="bx bx-cart text-5xl text-gray-500 mb-4"></i>
                <h2 class="text-xl font-semibold mb-2">Your Cart is Empty</h2>
                <p class="text-gray-600">Looks like you haven't added any items to your cart yet.</p>
                <a href="/legal-documents">
                  <button class="mt-4 bg-orange-800 text-white px-4 py-2 rounded-full hover:bg-gray-600">
                    Browse Documents
                  </button></a>

              </div>
            </template>

        </div>
    </div>
</x-app-layout>
