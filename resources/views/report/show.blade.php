<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновить заявление</title>
</head>
<body>
    <form method="POST" action="{{route('reports.store')}}">
        @method('post')
        @csrf
        <input type="text" name="number" placeholder="Номер Авто">
        <textarea placeholder="Описание" name="description"></textarea>
        <input type="submit" value="Обновить">
    </form>
</body>
</html>