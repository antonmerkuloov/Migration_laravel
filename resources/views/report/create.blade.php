<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заявления</title>
</head>
<body>
    <form method="POST" action="{{ route('reports.create', $report->id) }}">
        @method('post')
        @csrf
        <input type="text" placeholder="Номер Авто">
        <textarea placeholder="Описание"></textarea>
        <input type="submit" value="Создать">
    </form>
</body>
</html>