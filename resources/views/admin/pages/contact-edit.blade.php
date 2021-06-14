<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Контакт
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="text-2xl m-4">Изображения контакта</h3>
                @dump($images->count())
                @foreach($images as $image)
                    <div class="m-4">
                        <img style="width:200px" src="{{$image->getUrl()}}" alt="">
                        <form action="{{route('update-media')}}" method="post">
                            @csrf
                            <input type="hidden" name="media_id" value="{{$image->id}}">
                            Название
                            <input type="text" name="name" value="{{$image->getCustomProperty('name')}}">
                            <input type="submit" value="Обновить">
                        </form>
                        <form action="{{route('delete-media')}}" method="post">
                            @csrf
                            <input type="hidden" name="media_id" value="{{$image->id}}">
                            <input type="submit" value="Удалить">
                        </form>
                    </div>
                @endforeach



                <form enctype="multipart/form-data" action="{{route('replace-media')}}" method="post">
                    @csrf
                    <input type="hidden" name="modelm_id" value="{{$contact->id}}">
                    <input type="hidden" name="collection" value="image">
                    <input type="hidden" name="task" value="App\Tasks\Users\FindByIdUserTask">

                    <input type="file" name="file" >
                    <input type="name">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form  action="{{$contact ? route('contact.update',$contact->id) : route('contact.store')}}" method="post">
                    @csrf
                    @if ($contact)
                        <input name="_method" type="hidden" value="PUT">
                    @endif
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Имя</span>
                            <input
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                type="text"
                                name="name"
                                value="{{$contact?->name ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Телефон</span>
                            <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                    type="text"
                                    name="phone"
                                    value="{{$contact?->phone ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>instagram</span>
                            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                   type="text"
                                   name="instagram"
                                   value="{{$contact?->instagram ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>facebook</span>
                            <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                    type="text"
                                    name="facebook"
                                    value="{{$contact?->facebook ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>linkedin</span>
                            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                   type="text"
                                   name="linkedin"
                                   value="{{$contact?->linkedin ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>twitter</span>
                            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                   type="text"
                                   name="twitter"
                                   value="{{$contact?->twitter ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>telegram </span>
                            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                   type="text"
                                   name="telegram"
                                   value="{{$contact?->telegram ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>email</span>
                            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                   type="text"
                                   name="email"
                                   value="{{$contact?->email ?? ''}}"
                            >
                        </label>
                    </div>

                    <button type="submit" class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                        Сохранить
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
