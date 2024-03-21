<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhaskar rai</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href=""> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Sans+Caption:wght@400;700&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Telex&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/39b0be3dab.js" crossorigin="anonymous"></script>
</head>
<body>
@include('layouts.header')
{{isset($slot) ? $slot: ''}}
@stack('scripts')

<!-- <h1>Hi this is me bhaskar rai</h1> -->
</body>