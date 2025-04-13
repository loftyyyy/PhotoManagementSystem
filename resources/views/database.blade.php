<x-header :title="'Sidlac - Database'"> <x-slot:heading>Database</x-slot:heading>




    <table id="search-table">
        <thead>
        <tr class="dark:bg-[#1f2836]">
            <th class="bg-[#1f2836]">
                <span class="flex items-center">
                    Customer Name
                </span>
            </th>
            <th class="dark:bg-[#1f2836]">
                <span class="flex items-center">
                    Photo Link
                </span>
            </th>
            <th class="dark:bg-[#1f2836]">
                <span class="flex items-center">
                    Actions
                </span>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple Inc.</td>
            <td>AAPL</td>
            <td>
                <button type="button" class=" cursor-pointer focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                    </svg>

                </button>
                <button type="button" class="cursor-pointer focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Microsoft Corporation</td>
            <td>MSFT</td>
            <td>$340.54</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Alphabet Inc.</td>
            <td>GOOGL</td>
            <td>$134.12</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Amazon.com Inc.</td>
            <td>AMZN</td>
            <td>$138.01</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">NVIDIA Corporation</td>
            <td>NVDA</td>
            <td>$466.19</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Tesla Inc.</td>
            <td>TSLA</td>
            <td>$255.98</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Meta Platforms Inc.</td>
            <td>META</td>
            <td>$311.71</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Berkshire Hathaway Inc.</td>
            <td>BRK.B</td>
            <td>$354.08</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">TSMC</td>
            <td>TSM</td>
            <td>$103.51</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">UnitedHealth Group Incorporated</td>
            <td>UNH</td>
            <td>$501.96</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Johnson & Johnson</td>
            <td>JNJ</td>
            <td>$172.85</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">JPMorgan Chase & Co.</td>
            <td>JPM</td>
            <td>$150.23</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Visa Inc.</td>
            <td>V</td>
            <td>$246.39</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Eli Lilly and Company</td>
            <td>LLY</td>
            <td>$582.97</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Walmart Inc.</td>
            <td>WMT</td>
            <td>$159.67</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Samsung Electronics Co., Ltd.</td>
            <td>005930.KS</td>
            <td>$70.22</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Procter & Gamble Co.</td>
            <td>PG</td>
            <td>$156.47</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Nestlé S.A.</td>
            <td>NESN.SW</td>
            <td>$120.51</td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Roche Holding AG</td>
            <td>ROG.SW</td>
            <td>$296.00</td>
        </tr>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script>

        document.addEventListener("DOMContentLoaded", () => {
            const paginationObserver = new MutationObserver(() => {
                document.querySelectorAll(".datatable-pagination-list-item-link").forEach(li => {
                    const btn = li.querySelector("button");
                    if (li.classList.contains("active")) {
                        btn?.classList.add("bg-blue-600", "text-white", "rounded-md", "px-3", "py-1", "font-semibold");
                    } else {
                        btn?.classList.add("text-gray-700", "hover:bg-blue-100", "rounded-md", "px-3", "py-1", "transition-colors");
                        btn?.classList.remove("bg-blue-600", "text-white", "font-semibold");
                    }
                });
            });

            const pagination = document.querySelector(".dataTable-pagination");
            if (pagination) {
                paginationObserver.observe(pagination, { childList: true, subtree: true });
            }
        });
        document.addEventListener("DOMContentLoaded", function () {
            const table = document.getElementById("search-table");

            if (table && typeof simpleDatatables !== 'undefined') {
                const dataTable = new simpleDatatables.DataTable(table, {
                    searchable: true,
                    sortable: false
                });

                // Wait a moment after initialization to style the search input
                setTimeout(() => {
                    const searchInput = table.closest('div').querySelector('input.datatable-input');
                    const searchBar = document.getElementsByClassName('datatable-input');
                        searchBar[0].classList.add(
                            "border",
                            "border-gray-300",
                            "rounded-lg",
                            "px-4",
                            "py-2",
                            "mb-4",
                            "bg-green",
                            "focus:ring-2",
                            "focus:ring-yellow-500",
                            "focus:outline-none"
                        );
                }, 100);
            }
        });
    </script>
</x-header>
