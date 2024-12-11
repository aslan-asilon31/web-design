<div>
  <div class="font-sans p-8 tracking-wide  max-lg:max-w-2xl mx-auto">
    <div>
      <h2
        class="text-xl sm:text-xl sm:font-normal  md:text-xl md:font-medium lg:text-2xl lg:font-medium font-semibold text-gray-800">
        Espresso Elegante </h2>

      <div class="flex flex-wrap gap-4 mt-8">
        <p
          class="text-gray-800 text-xl sm:text-xl sm:font-normal  md:text-xl md:font-medium lg:text-2xl lg:font-medium font-semibold">
          Rp 12</p>
      </div>
    </div>

    <div class="grid items-start grid-cols-1 lg:grid-cols-2 gap-10 mt-6">
      <div>



        <div class="flex gap-4 text-center">
          <div class="bg-gray-100 p-4 flex items-center sm:h-[380px] rounded">
            <img src="https://readymadeui.com/images/product14.webp" alt="Product"
              class="w-full max-h-full object-contain object-top" />
          </div>

          <div class="space-y-4">
            <div class="bg-gray-100 p-4 flex items-center rounded sm:h-[182px]">
              <img src="https://readymadeui.com/images/product12.webp" alt="Product"
                class="w-full max-h-full object-contain object-top" />
            </div>

            <div class="bg-gray-100 p-4 flex items-center rounded sm:h-[182px]">
              <img src="https://readymadeui.com/images/product9.webp" alt="Product"
                class="w-full max-h-full object-contain object-top" />
            </div>

            <div class="bg-gray-100 p-4 flex items-center rounded sm:h-[182px]">
              <img src="https://readymadeui.com/images/product9.webp" alt="Product"
                class="w-full max-h-full object-contain object-top" />
            </div>

          </div>
        </div>




      </div>

      <div class="max-w-xl">

        <div class="mt-16 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6">
          <h3 class="text-xl font-bold text-gray-800">Product information</h3>
          <ul class="mt-4 space-y-6 text-gray-800">
            <li class="text-sm">TYPE <span class="ml-4 float-right">LAPTOP</span></li>
            <li class="text-sm">RAM <span class="ml-4 float-right">16 BG</span></li>
            <li class="text-sm">SSD <span class="ml-4 float-right">1000 BG</span></li>
            <li class="text-sm">PROCESSOR TYPE <span class="ml-4 float-right">INTEL CORE I7-12700H</span></li>
            <li class="text-sm">PROCESSOR SPEED <span class="ml-4 float-right">2.3 - 4.7 GHz</span></li>
            <li class="text-sm">DISPLAY SIZE INCH <span class="ml-4 float-right">16.0</span></li>
            <li class="text-sm">DISPLAY SIZE SM <span class="ml-4 float-right">40.64 cm</span></li>
            <li class="text-sm">DISPLAY TYPE <span class="ml-4 float-right">OLED, TOUCHSCREEN, 120 Hz</span></li>
            <li class="text-sm">DISPLAY RESOLUTION <span class="ml-4 float-right">2880x1620</span></li>
          </ul>
        </div>


        <div x-data="wizardForm()" class="mt-8">
          <!-- Step Tabs -->
          <ul class="flex border-b">
            <template x-for="(step, index) in steps" :key="index">
              <li
                :class="currentStep === index ? 'text-gray-800 font-bold bg-gray-100 border-b-2 border-gray-800' :
                    'text-gray-600 font-bold hover:bg-gray-100'"
                class="text-sm py-3 px-8 cursor-pointer transition-all" @click="currentStep = index">
                <span x-text="step.label"></span>
              </li>
            </template>
          </ul>

          <!-- Step Content -->
          <div class="mt-8">
            <template x-if="currentStep === 0">
              <div>
                <h3 class="text-xl font-semibold text-gray-800">About the coffee</h3>
                <ul class="space-y-3 list-disc mt-4 pl-4 text-sm text-gray-800">
                  <li>A cup of coffee is a beverage essential because of its timeless appeal</li>
                  <li>Easy to prepare. It can be brewed using various methods, from drip machines to manual pour-overs.
                  </li>
                  <li>Available in various sizes, from a standard espresso shot to a large Americano, catering to
                    different
                    preferences.</li>
                  <li>You can customize your coffee by adding cream, sugar, or flavorings to suit your taste
                    preferences.</li>
                </ul>
              </div>
            </template>

            <template x-if="currentStep === 1">
              <div>
                <h3 class="text-lg font-bold text-gray-800">Product Reviews</h3>
                <p class="text-sm text-gray-600 mt-4">Our customers love these shoes for their comfort and style. Here’s
                  what
                  some of them have to say:</p>
                <ul class="space-y-3 mt-6 pl-4">
                  <li class="text-sm text-gray-600">"Super comfortable and stylish! A perfect fit for my daily wear." -
                    Jane D.
                  </li>
                  <li class="text-sm text-gray-600">"The quality is amazing! I highly recommend these shoes to
                    everyone." - Mark
                    L.</li>
                </ul>
              </div>
            </template>
          </div>

          <!-- Navigation Buttons -->
          <div class="mt-8 flex justify-between">
            <button class="px-4 py-2 text-sm font-semibold text-gray-600 bg-gray-200 rounded hover:bg-gray-300"
              @click="prevStep" :disabled="currentStep === 0">
              Previous
            </button>
            <button class="px-4 py-2 text-sm font-semibold text-gray-600 bg-gray-200 rounded hover:bg-gray-300"
              @click="nextStep" :disabled="currentStep === steps.length - 1">
              Next
            </button>
          </div>
        </div>

        <script>
          function wizardForm() {
            return {
              currentStep: 0,
              steps: [{
                  label: 'Description'
                },
                {
                  label: 'Reviews'
                }
              ],
              nextStep() {
                if (this.currentStep < this.steps.length - 1) this.currentStep++;
              },
              prevStep() {
                if (this.currentStep > 0) this.currentStep--;
              }
            };
          }
        </script>



      </div>
    </div>
  </div>


  <h3 class="text-xl font-semibold text-gray-800 mt-16 py-8">Product Recomendation</h3>
  <section class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:ml-8 lg:ml-8">



    <!-- Card 1 -->
    <div class="relative w-full max-w-xs mx-auto overflow-hidden rounded-lg bg-white shadow-lg">
      <a href="#">
        <img class="rounded-t-lg object-cover w-full h-48"
          src="https://www.proquip.id/files/images/products/97956b62cf5d43e780d417707b7116ba/97956b62cf5d43e780d417707b7116ba-image.webp"
          alt="Product Image" />
      </a>
      <span
        class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-green-600 text-white text-center text-xs">
        Available
      </span>
      <div class="px-5 py-4">
        <a href="#">
          <h5 class="text-md font-semibold tracking-tight text-slate-900">Product Name</h5>
        </a>
        <div class="flex items-center justify-between mt-4">
          <span class="text-md font-bold text-slate-900">Rp 100</span>
          <a href="#" class="rounded-md bg-slate-900 px-3 py-2 text-white text-xs font-medium hover:bg-gray-700">
            Add to Cart
          </a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="relative w-full max-w-xs mx-auto overflow-hidden rounded-lg bg-white shadow-lg">
      <a href="#">
        <img class="rounded-t-lg object-cover w-full h-48"
          src="https://www.proquip.id/files/images/products/97956b62cf5d43e780d417707b7116ba/97956b62cf5d43e780d417707b7116ba-image.webp"
          alt="Product Image" />
      </a>
      <span
        class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-green-600 text-white text-center text-xs">
        Available
      </span>
      <div class="px-5 py-4">
        <a href="#">
          <h5 class="text-md font-semibold tracking-tight text-slate-900">Product Name</h5>
        </a>
        <div class="flex items-center justify-between mt-4">
          <span class="text-md font-bold text-slate-900">Rp 100</span>
          <a href="#" class="rounded-md bg-slate-900 px-3 py-2 text-white text-xs font-medium hover:bg-gray-700">
            Add to Cart
          </a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="relative w-full max-w-xs mx-auto overflow-hidden rounded-lg bg-white shadow-lg">
      <a href="#">
        <img class="rounded-t-lg object-cover w-full h-48"
          src="https://www.proquip.id/files/images/products/97956b62cf5d43e780d417707b7116ba/97956b62cf5d43e780d417707b7116ba-image.webp"
          alt="Product Image" />
      </a>
      <span
        class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-green-600 text-white text-center text-xs">
        Available
      </span>
      <div class="px-5 py-4">
        <a href="#">
          <h5 class="text-md font-semibold tracking-tight text-slate-900">Product Name</h5>
        </a>
        <div class="flex items-center justify-between mt-4">
          <span class="text-md font-bold text-slate-900">Rp 100</span>
          <a href="#"
            class="rounded-md bg-slate-900 px-3 py-2 text-white text-xs font-medium hover:bg-gray-700">
            Add to Cart
          </a>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="relative w-full max-w-xs mx-auto overflow-hidden rounded-lg bg-white shadow-lg">
      <a href="#">
        <img class="rounded-t-lg object-cover w-full h-48"
          src="https://www.proquip.id/files/images/products/97956b62cf5d43e780d417707b7116ba/97956b62cf5d43e780d417707b7116ba-image.webp"
          alt="Product Image" />
      </a>
      <span
        class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-green-600 text-white text-center text-xs">
        Available
      </span>
      <div class="px-5 py-4">
        <a href="#">
          <h5 class="text-md font-semibold tracking-tight text-slate-900">Product Name</h5>
        </a>
        <div class="flex items-center justify-between mt-4">
          <span class="text-md font-bold text-slate-900">Rp 100</span>
          <a href="#"
            class="rounded-md bg-slate-900 px-3 py-2 text-white text-xs font-medium hover:bg-gray-700">
            Add to Cart
          </a>
        </div>
      </div>
    </div>
  </section>


</div>
