<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Член консорциума
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="text-2xl m-4">Изображения объекта</h3>
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



                <form enctype="multipart/form-data" action="{{route('upload-media')}}" method="post">
                    @csrf
                    <input type="hidden" name="modelm_id" value="{{$member->id}}">
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
                <form  action="{{$member ? route('member.update',$member) : route('member.store')}}" method="post">
                    @csrf
                    @if ($member)
                        <input name="_method" type="hidden" value="PUT">
                    @endif
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Имя</span>
                            <input
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                type="text"
                                name="name"
                                value="{{$member->name}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>email</span>
                            <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                    type="text"
                                    name="email"
                                    value="{{$member?->email ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Описание</span>
                            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                   type="text"
                                   name="description"
                                   value="{{$member?->description ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Ссылка</span>
                            <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                    type="text"
                                    name="link"
                                    value="{{$member?->link ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Года</span>
                            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                   type="text"
                                   name="years"
                                   value="{{$member?->years ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Заработок</span>
                            <textarea class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                      type="text"
                                      name="revenue"

                            >
                            {{$member?->revenue ?? ''}}
                        </textarea>
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Широта</span>
                            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                   type="text"
                                   name="latitude"
                                   value="{{$member?->latitude ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Долгота</span>
                            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                   type="text"
                                   name="longitude"
                                   value="{{$member?->longitude ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Валюта</span>
                            <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                    name="currency_id"
                                    id=""
                            >
                                @foreach($currencies as $currency)
                                    <option  @if($currency->id == $member->currency_id) selected @endif value="{{$currency->id}}">{{$currency->name}}</option>
                                @endforeach
                            </select>
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

