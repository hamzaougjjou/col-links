<!-- resources/views/emails/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
</head>

<body>
    <h1>New Contact Message</h1>
    <p><strong>Name:</strong> {{ $messageData->name }}
    </p>
    <p><strong>Email:</strong> {{ $messageData->email }}
    </p>
    <p><strong>Phone:</strong> {{ $messageData->phone }}
    </p>
    <p><strong>Message:</strong></p>
    <p>
        {{ $messageData->message }}
    </p>
</body>

</html>