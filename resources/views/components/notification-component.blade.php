<div id="notification-modal" tabindex="-1" x-data="{ numeroTable: 1,}" x-init="{ numeroTable:$refs.tableNumero.value }"
aria-hidden="true"
class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

<input type="hidden" x-ref="tableNumero" id="quantity-input" name="quantity"
    value="1">

<div class="relative p-4 w-full max-w-md max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div
            class="flex justify-between items-center p-4 rounded-t border-b md:p-5 dark:border-gray-600">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                {{ 'Demande Facture ou serveur' }}
            </h3>
            <button type="button"
                class="inline-flex justify-center items-center w-8 h-8 text-sm text-orange-700 rounded-lg hover:text-orange-900 ms-auto dark:hover:bg-orange-600"
                data-modal-toggle="notification-modal">
                X
            </button>
        </div>
        <!-- Modal body -->
        <form class="p-4 md:p-5">

            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select id="countries" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>Confirmer la table</option>
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
            </select>
            <div class="flex justify-end mt-5">
                <div class="items-end">
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-orange-500 rounded-lg focus:ring-4 focus:outline-none focus:ring-orange-300"
                        >
                        Appeler
                        <i class="mx-6 fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
