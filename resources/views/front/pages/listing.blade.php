<form action="" method="get">
    @csrf
    Название (Точное вхождение)
    <input type="text" name="filter[strict][name]"><br>
    Страна (Точное вхождение)
    <input type="text" name="filter[strict][country]"><br>
    Город (Точное вхождение)
    <input type="text" name="filter[strict][city]"><br>
    Сумма От
    <input type="text" name="filter[from][price]"><br>
    Сумма До
    <input type="text" name="filter[to][price]"><br>
    Тип Объекта селект  (Точное вхождение Id)
    <select name="filter[strict][type_id] id="">
    <option value="1">Первый вариант</option>
    <option value="2">Второй вариант</option>
    </select>
    <br>
    Вид сделки селект (Точное вхождение Id)
    <select name="filter[strict][deal_id] id="">
    <option value="1">Первый вариант</option>
    <option value="2">Второй вариант</option>
    </select><br>
    Рои От
    <input type="text" name="filter[from][roi]"><br>
    Рои До
    <input type="text" name="filter[to][roi]"><br>
    <input type="submit">
</form>
@foreach($buildings as $building)
    @dump($building->toArray())
    @endforeach
