<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'BUREAU CONCOURS'}}</title>

    <Livewire:styles />
</head>

<body>

    {{ $slot }}

    <Livewire:scripts />
</body>

</html>