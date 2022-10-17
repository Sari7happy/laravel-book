<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            つぶやき一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    index<br>
                    <a href="{{route('contacts.create')}}" class="text-red-500">新規作成</a>
                    @foreach($contacts as $contact)
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                                <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                                <h2 class="text-gray-900 text-lg title-font font-medium mb-2"> {{$contact->id}}</h2>
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2"> {{$contact->name}}</h2>
                                    <p class="leading-relaxed text-base"> {{$contact->contact}}</p>
                                    <p class="leading-relaxed text-base"> {{$contact->created_at}}</p>
                                    <p class="leading-relaxed text-base"> <a class="text-blue-500" href ="{{ route('contacts.show',['id'=>$contact->id])}}">詳細</a></p>
                                </div>
                            </div>
                        
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>