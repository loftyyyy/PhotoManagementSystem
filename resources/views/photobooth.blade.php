<x-header :title="'Sidlac - Photo Booth'">

    <div>
        <h1 class="text-center text-5xl font-bold dark:text-gray-300">Choose Your Layout</h1>
        <p class="text-center mt-3 dark:text-gray-500">Choose the perfect layout to elevate your photo session — explore a variety of stunning styles and curated poses to match your unique vibe.</p>

        <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-2 gap-8">




            <!-- Layout A -->
            <div class="relative rounded-3xl overflow-hidden border-4 w-[50%] border-pink-300 bg-purple-100 p-4 pb-16">
              <div id="layout-A" class="flex flex-col space-y-2">
                <div class="bg-gray-200 rounded-lg overflow-hidden">
                  <img src="https://placehold.co/180x160" alt="Photo 1" class="w-full" />
                </div>
                <div class="bg-gray-200 rounded-lg overflow-hidden">
                  <img src="https://placehold.co/180x160" alt="Photo 2" class="w-full" />
                </div>
                <div class="bg-gray-200 rounded-lg overflow-hidden">
                  <img src="https://placehold.co/180x160" alt="Photo 3" class="w-full" />
                </div>
                <div class="bg-gray-200 rounded-lg overflow-hidden mb-8">
                  <img src="https://placehold.co/180x160" alt="Photo 4" class="w-full" />
                </div>
              </div>
              <div class="absolute bottom-0 left-0 right-0 bg-white p-2">
                <p class="text-xs text-gray-500 text-center">Sidlac 04/14/2025</p>
                <h3 class="text-xl font-bold text-center">Layout A</h3>
                <p class="text-center text-gray-600">3 Pose</p>
              </div>
            </div>


            <!-- Layout B-->
            <div class="relative rounded-3xl overflow-hidden border-4 w-[50%] border-pink-300 bg-purple-100 p-4 pb-16">
                <div id="layout-A" class="flex flex-col space-y-2">
                    <div class="bg-gray-200 rounded-lg overflow-hidden">
                        <img src="https://placehold.co/180x160" alt="Photo 1" class="w-full" />
                    </div>
                    <div class="bg-gray-200 rounded-lg overflow-hidden">
                        <img src="https://placehold.co/180x160" alt="Photo 2" class="w-full" />
                    </div>
                    <div class="bg-gray-200 rounded-lg overflow-hidden">
                        <img src="https://placehold.co/180x160" alt="Photo 3" class="w-full" />
                    </div>
                    <div class="bg-gray-200 rounded-lg overflow-hidden mb-8">
                        <img src="https://placehold.co/180x160" alt="Photo 4" class="w-full" />
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 bg-white p-2">
                    <p class="text-xs text-gray-500 text-center">Sidlac 04/14/2025</p>
                    <h3 class="text-xl font-bold text-center">Layout A</h3>
                    <p class="text-center text-gray-600">4 Pose</p>
                </div>
            </div>

        </div>




    </div>

</x-header>
