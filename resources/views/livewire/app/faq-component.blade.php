<div  class="m-0 md:m-2 capitalize" x-data="faq()">
    <div class="flex justify-between gap-4 mb-2 capitalize">
        <p class="text-gray-700 dark:text-gray-200 text-xl font-semibold">@lang("all faqs")</p>
        <div class="flex text-sm gap-1">
            <a href="{{route('app.dashboard')}}" wire:navigate class="text-blue-500 dark:text-blue-400">@lang("dashboard")</a>
            <span class="text-gray-500 dark:text-gray-200">/</span>
            <span class="text-gray-500 dark:text-gray-300">@lang("faqs")</span>
        </div>
    </div>
    <main class="h-full">
        @can("app.faqs.create")
            <div class="sm:flex sm:items-center sm:justify-between">
                <div>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-medium text-gray-800 dark:text-white">@lang('faqs')</h2>

                        <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">@lang('total'): {{ $faqs->total() }}</span>
                    </div>
                </div>

                <div class="flex items-center mt-4 gap-x-3">
                    <button x-cloak @click="toggleModal"
                            class="capitalize flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                        <i class='bx bx-plus font-thin text-xl'></i>
                        <span>@lang('add new')</span>
                    </button>
                </div>
            </div>
        @endcan

        <div class="mt-6 md:flex md:items-center md:justify-between capitalize">
            <div
                class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-darker rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                <button wire:click="$set('itemStatus', null)"
                        class="capitalize px-5 py-2 text-xs font-medium  transition-colors duration-200 sm:text-sm text-gray-600 {{!$itemStatus?'bg-gray-100 dark:bg-gray-800 dark:text-gray-300':'dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100'}} ">
                    @lang('all')
                </button>

                <button wire:click="$set('itemStatus', 'active')"
                        class="capitalize px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm {{$itemStatus=='active'?'bg-gray-100 dark:bg-gray-800 dark:text-gray-300':'dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100'}}">
                    @lang('active')
                </button>

                <button wire:click="$set('itemStatus', 'inactive')"
                        class="capitalize px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm {{$itemStatus=='inactive'?'bg-gray-100 dark:bg-gray-800 dark:text-gray-300':'dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100'}}">
                    @lang('inactive')
                </button>

            </div>

            <div class="flex items-center justify-between space-x-2 capitalize">
                <div class=" mt-4 md:mt-0 w-24 md:w-48">
                    <input wire:model.live.debounce.500ms="itemPerPage" type="number" class="block w-full py-1.5 text-gray-500 bg-white border border-gray-200 rounded-lg md:w-40 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-darker dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"/>
                </div>
                <div class="relative flex items-center mt-4 md:mt-0">
            <span class="absolute">
                <i class='bx bx-search text-xl mx-3 text-gray-400 dark:text-gray-600'></i>
            </span>
                    <input wire:model.live.debounce.500ms="search" type="text" placeholder="Search"
                           class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-1/2 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-darker dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    <select id="searchBy" wire:model.live="searchBy" class="block w-full py-1.5 pr-5 text-gray-500 bg-white border border-gray-200 rounded-lg md:w-1/2 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-darker dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                        <option value="question">@lang('question')</option>
                        <option value="slug">@lang('slug')</option>
                    </select>
                </div>
            </div>

        </div>

        <section class="sm:p-4 md:p-0">
            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                            <table class="border border-collapse min-w-full">
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr class="text-center object-cover items-center h-10 text-nowrap">
                                    <th class="pl-2 flex items-center justify-between mt-4">
                                        @can("app.faqs.delete")
                                            <input x-model="selectPage" type="checkbox"
                                                   class="justify-between text-blue-500 border-gray-300 rounded dark:bg-darker dark:ring-offset-gray-900 dark:border-gray-500">
                                        @endcan
                                        <div x-cloak x-show="rows.length > 0 " class="flex items-center justify-center"
                                             x-data="{bulk: false}">
                                            <div class="relative inline-block">
                                                <button @click="bulk=!bulk"
                                                        class="relative z-10 block px-2 text-gray-700 border border-transparent rounded-md dark:text-white focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="w-5 h-5 text-gray-800 dark:text-white"
                                                         viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                                    </svg>
                                                </button>

                                                <div x-show="bulk"
                                                     class="absolute left-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800"
                                                     @click.outside="bulk= false">
                                                    <a @click="$dispatch('delete', { title: 'Are you sure to delete', text: 'It is not revertable', icon: 'error',actionName: 'deleteMultiple', itemId: '' })"
                                                       class="cursor-pointer block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                                        Delete </a>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <x-field :OB="$orderBy" :OD="$orderDirection" :field="'question'">@lang('question')</x-field>
                                    <x-field :OB="$orderBy" :OD="$orderDirection" :field="'status'">@lang('status')</x-field>
                                    <x-field :OB="$orderBy" :OD="$orderDirection" :field="'answer'">@lang('answer')</x-field>
                                    <x-field :OB="$orderBy" :OD="$orderDirection"
                                             :field="'updated_at'">@lang('last update')</x-field>
                                    <x-field>@lang('action')</x-field>
                                </tr>
                                </thead>
                                <tbody class="bg-white truncate divide-y divide-gray-200 dark:divide-gray-700 dark:bg-darker">
                                @forelse($faqs as $faq)
                                    <tr wire:key="{{$faq->id}}"  id="item-id-{{$faq->id}}" class="text-gray-700 dark:text-gray-300 capitalize text-center object-cover items-center" :class="{'bg-gray-200 dark:bg-gray-600': rows.includes('{{$faq->id}}') }">
                                        <td class="max-w-48 truncate pl-2">
                                            @can("app.faqs.delete")
                                                <input x-model="rows" value="{{$faq->id}}" id="{{ $faq->id }}" type="checkbox" class="justify-between text-blue-500 border-gray-300 rounded dark:bg-darker dark:ring-offset-gray-900 dark:border-gray-500">
                                            @endcan
                                        </td>

                                        <td class="max-w-48 truncate px-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            {{--                                            <a href="{{route('faq', $faq->slug)}}" wire:navigate class="flex justify-start gap-x-3">--}}
                                            <div class="flex items-center gap-x-2">
                                                    <span class="w-10 h-10 rounded-full bg-purple-600 border dark:border-gray-600 shadow-xl overflow-hidden flex items-center justify-center flex-shrink-0">
                                                        <img src="{{ getImage($faq, 'profile', 'thumb') }}" alt="" onerror="{{getErrorImage()}}" class="w-full h-full object-cover">
                                                    </span>
                                                <h2 class="font-medium text-gray-800 dark:text-white flex-grow">{{ $faq->question }}</h2>
                                            </div>
                                            {{--                                            </a>--}}
                                        </td>


                                        <td class="max-w-48 truncate px-12 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div
                                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                                                <button type="button" wire:click="changeStatus({{ $faq->id }})" class="cursor-pointer text-sm font-normal {{ $faq->status=='active'?'text-emerald-500':'text-pink-500' }} ">{{ $faq->status }}</button>
                                            </div>
                                        </td>
                                        <td class="max-w-48 truncate px-12 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <h2 class="font-medium text-gray-800 dark:text-white flex-grow">{{ $faq->answer }}</h2>

                                        </td>
                                        <td class="max-w-48 truncate px-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">{{ str($faq->updated_at)->words(5) }}</td>

                                        <td class="max-w-48  truncate px-4 text-sm whitespace-nowrap">
                                            <div class="flex justify-between text-center gap-x-6">
                                                @can("app.faqs.edit")
                                                    <button @click="editModal('{{$faq->id}}')"
                                                    >
                                                        <i class='bx bx-pencil text-2xl font-medium text-yellow-700 transition-colors duration-200 dark:hover:text-yellow-300 hover:text-yellow-500'></i>
                                                    </button>
                                                @endcan
                                                @can("app.faqs.delete")
                                                    <button
                                                        @click.prevent="$dispatch('delete', { title: 'Are you sure to delete', text: 'It is not revertable', icon: 'error',actionName: 'deleteSingle', itemId: {{$faq->id}} })"
                                                    >
                                                        <i class='bx bx-trash text-2xl font-medium text-red-700 transition-colors duration-200 dark:hover:text-red-300 hover:text-red-500'></i>
                                                    </button>
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="mx-auto my-4 px-4 overflow-y-auto">
            {{ $faqs->links() }}
        </div>
    </main>

    <div x-cloak x-show="isOpen">
        <div class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <div class="inset-0 rounded-2xl transition duration-150 ease-in-out z-50 absolute" id="modal">
            <div @click.outside="closeModal" class="container mx-auto w-11/12 md:w-8/12 max-w-4xl ">
                <form @submit.prevent="editMode? $wire.editData(): $wire.saveData()"
                      class="relative py-3 px-5 md:px-10 bg-white dark:bg-darker shadow-md rounded border border-gray-400 dark:border-gray-600 capitalize">
                    <h1 x-cloak x-show="!editMode"
                        class="text-gray-800 dark:text-gray-200 font-lg font-semibold text-center mb-4">@lang('add new data')</h1>
                    <h1 x-cloak x-show="editMode"
                        class="text-gray-800 dark:text-gray-200 font-lg font-semibold text-center mb-4">@lang('edit this data')</h1>

                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="question">@lang('question')</label>
                            <x-text-input errorName="question" errorName="question" x-ref="inputName" id="question" wire:model.live.debounce.1000ms="question" type="text"/>
                        </div>
                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="answer">@lang('answer')</label>
                            <x-text-input errorName="answer" wire:model="answer" type="text"/>
                        </div>

                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="type">@lang('status')</label>
                            <x-select errorName="status" id="status" wire:model="status">
                                <option value="active">@lang('active')</option>
                                <option value="inactive">@lang('inactive')</option>
                            </x-select>
                        </div>

                    </div>

                    <div class="flex items-center justify-between w-full mt-4">
                        <button type="button" @click="closeModal"
                                class="bg-red-600 focus:ring-gray-400 transition duration-150 text-white ease-in-out hover:bg-red-300 rounded px-8 py-2 text-sm">
                            Cancel
                        </button>
                        <button type="submit"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">
                            Submit
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @script
    <script>
        Alpine.data('faq', () => ({
            init() {
                $wire.on('dataAdded', (e) => {
                    this.isOpen = false
                    this.editMode = false
                    $nextTick(() => {
                        element = document.getElementById(e.dataId)
                        element.scrollIntoView({ behavior: 'smooth' });
                        console.log(element)
                        element.classList.add('animate-pulse');
                    });
                    setTimeout(() => {
                        element.classList.remove('animate-pulse');
                    }, 5000)
                })
            },
            isOpen: false,
            editMode: false,
            rows: @entangle('selectedRows'),
            selectPage: @entangle('selectPageRows').live,
            toggleModal() {
                this.isOpen = !this.isOpen;
                this.$nextTick(() => {
                    this.$refs.inputName.focus()
                })
            },
            closeModal() {
                this.isOpen = false;
                this.editMode = false;
                $wire.resetData()
            },
            editModal(id) {
                this.$wire.loadData(id);
                this.isOpen = true;
                this.editMode = true;
            }
        }))
        document.addEventListener('delete', function (event) {
            itemId = event.detail.itemId
            actionName = event.detail.actionName
            Swal.fire({
                title: event.detail.title,
                text: event.detail.text,
                icon: event.detail.icon,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',

            }).then((result) => {
                if (result.isConfirmed) {
                    $wire[actionName](itemId)
                }
            })
        });
    </script>

    @endscript

</div>
