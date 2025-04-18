<x-header :title="'Sidlac - Photo Booth'">
    <div>
        <h1 class="text-center text-5xl font-bold dark:text-gray-300">Choose Your Layout</h1>
        <p class="text-center mt-3 dark:text-gray-500">Choose the perfect layout to elevate your photo session — explore a variety of stunning styles and curated poses to match your unique vibe.</p>

        <div class="mt-10">
            <div id="selectContainer" class="grid grid-cols-3 grid-rows-2 gap-4 place-items-center">
{{--                Quadro Stack--}}
                <div id="QuadroStack" class=" selectable flex flex-col items-center bg-gray-200 w-fit  transition-transform duration-300 hover:scale-90 cursor-pointer hover:border-pink-300 hover:border-4 rounded-3xl">
                    <div class="py-3 px-3">
                        <div class="mb-3">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="mb-3">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="mb-3">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div >
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>

                    </div>
                    <div class="bg-gray-100 w-full text-center py-3 rounded-b-3xl">
                        <p class="text-xs text-gray-500 text-center">Sidlac 04/14/2025</p>
                        <h3 class="text-xl font-bold text-center">Quadro Stack</h3>
                        <p class="text-center text-gray-600">4 Pose</p>
                    </div>
                </div>

{{--                Trio Stack--}}
                <div id="TrioStack" class=" selectable flex flex-col items-center bg-gray-200 w-fit  transition-transform duration-300 hover:scale-90 cursor-pointer hover:border-pink-300 hover:border-4 rounded-3xl">
                    <div class="py-3 px-3">
                        <div class="mb-3">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="mb-3">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>

                    </div>
                    <div class="bg-gray-100 w-full text-center py-3 rounded-b-3xl">
                        <p class="text-xs text-gray-500 text-center">Sidlac 04/14/2025</p>
                        <h3 class="text-xl font-bold text-center">Trio Stack</h3>
                        <p class="text-center text-gray-600">3 Pose</p>
                    </div>
                </div>
{{--                Duo Pop--}}
                <div id="DuoPop" class=" selectable flex flex-col items-center bg-gray-200 w-fit  transition-transform duration-300 hover:scale-90 cursor-pointer hover:border-pink-300 hover:border-4 rounded-3xl">
                    <div class="py-3 px-3">
                        <div class="mb-3">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="mb-3">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>

                    </div>
                    <div class="bg-gray-100 w-full text-center py-3 rounded-b-3xl">
                        <p class="text-xs text-gray-500 text-center">Sidlac 04/14/2025</p>
                        <h3 class="text-xl font-bold text-center">Duo Pop</h3>
                        <p class="text-center text-gray-600">2 Pose</p>
                    </div>
                </div>

{{--                Lumi Grid--}}
                <div id="LumiGrid" class=" selectable flex flex-col items-center bg-gray-200 w-fit  transition-transform duration-300 hover:scale-90 cursor-pointer hover:border-pink-300 hover:border-4 rounded-3xl">
                    <div class="grid grid-cols-2 grid-rows-2 gap-4 py-3 px-3">
                        <div class="">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>

                    </div>
                    <div class="bg-gray-100 w-full text-center py-3 rounded-b-3xl">
                        <p class="text-xs text-gray-500 text-center">Sidlac 04/14/2025</p>
                        <h3 class="text-xl font-bold text-center">Lumi Grid</h3>
                        <p class="text-center text-gray-600">6 Pose</p>
                    </div>
                </div>

{{--                Solo Star--}}
                <div id="SoloStar" class=" selectable flex flex-col items-center bg-gray-200 w-fit  transition-transform duration-300 hover:scale-90 cursor-pointer hover:border-pink-300 hover:border-4 rounded-3xl">
                    <div class=" gap-4 py-3 px-3">
                        <div class="">
                            <img class="rounded-lg" src="https://placehold.co/360x320" alt="">
                        </div>

                    </div>
                    <div class="bg-gray-100 w-full text-center py-3 rounded-b-3xl">
                        <p class="text-xs text-gray-500 text-center">Sidlac 04/14/2025</p>
                        <h3 class="text-xl font-bold text-center">Solo Star</h3>
                        <p class="text-center text-gray-600">1 Pose</p>
                    </div>
                </div>

{{--                Flash Trio--}}
                <div id="FlashTrio" class=" selectable flex flex-col items-center bg-gray-200 w-fit  transition-transform duration-300 hover:scale-90 cursor-pointer hover:border-pink-300 hover:border-4 rounded-3xl">

                    <div class="grid grid-cols-2 grid-rows-2 gap-4 py-3 px-3">
                        <div>
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="col-start-1 row-start-2">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="col-start-2 row-start-1">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="bg-gray-200 w-full text-center py-3 rounded-b-3xl lg:mt-10 sm:mt-0 ">
                            <p class="text-xs text-gray-500 text-center">Sidlac 04/14/2025</p>
                            <h3 class="text-xl font-bold text-center">Flash Trio</h3>
                            <p class="text-center text-gray-600">3 Pose</p>
                        </div>
                    </div>
                </div>

{{--                Story Snap--}}
                <div id="StorySnap" class=" selectable flex flex-col items-center bg-gray-200 w-fit  transition-transform duration-300 hover:scale-90 cursor-pointer hover:border-pink-300 hover:border-4 rounded-3xl">
                    <div class="grid grid-cols-3 auto-rows-auto gap-4 px-3 py-3 h-fit">
                        <div class="col-span-2 h-fit">
                            <img class="rounded-lg" src="https://placehold.co/280x260" alt="">
                        </div>
                        <div class="col-start-3 row-start-1 flex items-center justify-center">
                            <div class="bg-gray-200 w-full text-center py-3 rounded-b-3xl">
                                <p class="text-xs text-gray-500">Sidlac 04/14/2025</p>
                                <h3 class="text-xl font-bold">Story Snap</h3>
                                <p class="text-gray-600">4 Pose</p>
                            </div>
                        </div>
                        <div class="row-start-2 h-fit">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="row-start-2 h-fit">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                        <div class="row-start-2 h-fit">
                            <img class="rounded-lg" src="https://placehold.co/180x160" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="button" class="text-center mt-10 hidden">
            <a href="{{route('/')}}">
                <button  class="relative cursor-pointer inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                    Continue
                </span>
                </button>
            </a>
        </div>


    </div>

    <script>
        const container = document.getElementById('selectContainer');
        const hiddenInput = document.getElementById('selectedLayout'); // optional hidden input
        let selectedDiv = null;
        const btn = document.getElementById('button');

        container.addEventListener('click', (e) => {
            const clicked = e.target.closest('.selectable');
            if (!clicked) return;

            // If re-clicking the selected div, unselect it
            if (selectedDiv === clicked) {
                clicked.classList.remove('border-4', 'border-pink-300');
                selectedDiv = null;
                if (hiddenInput) hiddenInput.value = '';
                btn.classList.add('hidden'); // 👈 hide the button
                return;
            }

            // Unselect the previous one
            if (selectedDiv) {
                selectedDiv.classList.remove('border-4', 'border-pink-300');
            }

            // Select the new one
            clicked.classList.add('border-4', 'border-pink-300');
            selectedDiv = clicked;

            // Store selected ID
            const selectedId = clicked.id;
            console.log("Selected Layout ID:", selectedId);

            if (hiddenInput) hiddenInput.value = selectedId;
            btn.classList.remove('hidden'); // 👈 show the button
        });
    </script>
</x-header>
