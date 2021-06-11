<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des Contacts</h1>
    <ul>
    @foreach($contacts as $contact)
        <li>
            <h3>{{ $contact->name }}</h3>
            <p>{{ $contact->message }}</p>
            <hr>
        </li>
    @endforeach
    </ul>
</body>
</html>