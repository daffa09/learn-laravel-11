<template>
    <div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <!-- Modal content -->
        <div
            class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0"
        >
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            >
                <div class="px-4 py-5 sm:px-6">
                    <h3
                        class="text-lg font-medium leading-6 text-gray-900"
                        id="modal-title"
                    >
                        User Detail
                    </h3>
                    <div class="mt-2">
                        <dl
                            class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2"
                        >
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Name
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ user.name }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Email
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ user.email }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Phone
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ user.no_telp }}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button
                        @click="$emit('close')"
                        type="button"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm"
                    >
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["user"],
};
</script>
