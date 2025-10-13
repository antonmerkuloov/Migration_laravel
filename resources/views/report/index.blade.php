<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница заявлений</title>
</head>
<body>
    <a href="{{ route('reports.create') }}">Создать заявление</a>
    @foreach ($reports as $report)
    <p>{{ $report->created_at}}</p>
    <h1>{{ $report->number }}</h1>
    <p>{{ $report->description }}</p>
    <form method="POST" action="{{ route('reports.destroy', $report->id) }}">
        @method('delete')
        @csrf
        <input type="submit" value="Удалить">
    </form>
    @endforeach
</body>
</html>