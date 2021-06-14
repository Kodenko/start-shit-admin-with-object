<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Объект
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="text-2xl m-4">Данные объекта</h1>
                <form class="m-4" action="{{$building ? route('building.update',$building) : route('building.store')}}" method="post">
                    @csrf
                    @if ($building)
                        <input name="_method" type="hidden" value="PUT">
                    @endif

                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Имя</span>
                            <input
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                type="text"
                                name="name"
                                value="{{$building->name ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Страна</span>
                            <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                    type="text"
                                    name="country"
                                    value="{{$building?->country ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Город</span>
                        <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                               type="text"
                               name="city"
                               value="{{$building?->city ?? ''}}"
                        >
                    </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Адрес</span>
                        <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                type="text"
                                name="address"
                                value="{{$building?->address ?? ''}}"
                        >
                    </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Описание</span>
                        <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                               type="text"
                               name="description"
                               value="{{$building?->description ?? ''}}"
                        >
                    </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Контент</span>
                        <textarea class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                               type="text"
                               name="content"
                        >{{$building?->content ?? ''}}</textarea>
                    </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>roi</span>
                        <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                               type="text"
                               name="roi"
                               value="{{$building?->roi ?? ''}}"
                        >
                    </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Широта</span>
                        <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                               type="text"
                               name="latitude"
                               value="{{$building?->latitude ?? ''}}"
                        >
                    </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Цена</span>
                            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                   type="text"
                                   name="price"
                                   value="{{$building?->price ?? ''}}"
                            >
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Долгота</span>
                        <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                               type="text"
                               name="longitude"
                               value="{{$building?->longitude ?? ''}}"
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
                                <option @if($currency->id == $building->currency_id) selected @endif value="{{$currency->id}}">{{$currency->name}}</option>
                            @endforeach
                        </select>
                    </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Тип</span>
                            <select  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                     name="type_id"
                                     id=""
                            >
                                @foreach($types as $type)
                                    <option @if($type->id == $building->type_id) selected @endif  value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Тип</span>
                            <select  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                     name="deal_id"
                                     id=""
                            >
                                @foreach($deals as $deal)
                                    <option @if($deal->id == $building->deal_id) selected @endif  value="{{$deal->id}}">{{$deal->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Локаль</span>
                            <select  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                     name="locale_id" id="">
                                @foreach($locales as $locale)
                                    <option @if($locale->id == $building->locale_id) selected @endif value="{{$locale->id}}">{{$locale->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>

                    <div>
                        <label  class="block font-medium text-sm text-gray-700">
                            <span>Контакты</span>
                            <select multiple="multiple"  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                     name="contact_id[]" id="">
                                @foreach($contacts as $contact)
                                    <option @if(in_array($contact->id,$building->contacts->pluck('id')->toArray())) @endif value="{{$contact->id}}">{{$contact->name}}</option>
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
                    <input type="hidden" name="modelm_id" value="{{$building->id}}">
                    <input type="hidden" name="collection" value="image">
                    <input type="hidden" name="task" value="App\Tasks\Buildings\FindBuildingByIdTask">

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
                <h3 class="text-2xl m-4">Видео объекта</h3>
                @dump($videos->count())
                @foreach($videos as $video)
                    <div class="m-4">
                        <a style="width:200px" href="{{$video->getUrl()}}" alt="">{{$video->getUrl()}}</a>
                        <form action="{{route('update-media')}}" method="post">
                            @csrf
                            <input type="hidden" name="media_id" value="{{$video->id}}">
                            Название
                            <input type="text" name="name" value="{{$video->getCustomProperty('name')}}">
                            <input type="submit" value="Обновить">
                        </form>
                        <form action="{{route('delete-media')}}" method="post">
                            @csrf
                            <input type="hidden" name="media_id" value="{{$video->id}}">
                            <input type="submit" value="Удалить">
                        </form>
                    </div>
                @endforeach



                <form enctype="multipart/form-data" action="{{route('upload-media')}}" method="post">
                    @csrf
                    <input type="hidden" name="modelm_id" value="{{$building->id}}">
                    <input type="hidden" name="collection" value="video">
                    <input type="hidden" name="task" value="App\Tasks\Buildings\FindBuildingByIdTask">

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
                <h3 class="text-2xl m-4">Файлы объекта</h3>
                @dump($files->count())
                @foreach($files as $file)
                    <div>
                        <img style="width:50px" src="https://vladivostok.zlp-630.com/userfiles/images/pdf-2.jpg" alt="">
                        <form action="{{route('update-media')}}" method="post">
                            @csrf
                            <input type="hidden" name="media_id" value="{{$file->id}}">
                            Название
                            <input type="text" name="name" value="{{$file->getCustomProperty('name')}}">
                            <input type="submit" value="Обновить">
                        </form>
                        <form action="{{route('delete-media')}}" method="post">
                            @csrf
                            <input type="hidden" name="media_id" value="{{$file->id}}">
                            <input type="submit" value="Удалить">
                        </form>
                    </div>
                @endforeach



                <form enctype="multipart/form-data" action="{{route('upload-media')}}" method="post">
                    @csrf
                    <input type="hidden" name="modelm_id" value="{{$building->id}}">
                    <input type="hidden" name="collection" value="file">
                    <input type="hidden" name="task" value="App\Tasks\Buildings\FindBuildingByIdTask">
                    <input type="file" name="file" >
                    <input type="name">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
