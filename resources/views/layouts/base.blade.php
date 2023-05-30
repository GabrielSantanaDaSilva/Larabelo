<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div class="container">
        <h1>T94 - Olá Mundo!</h1>
        <hr>
        @yield('content')
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum explicabo sequi, ipsam perspiciatis dolorum voluptatum dignissimos assumenda sit molestiae nobis natus laborum obcaecati, soluta cupiditate repellat sed? Et, labore laborum.</p>
        <p>Natus velit reiciendis minima. Ex exercitationem necessitatibus explicabo provident? Officia eos unde optio dolor, autem modi, dolore commodi itaque quo totam ex molestias et molestiae ratione! Error quasi vel tempora.</p>
        <p>Adipisci odio aut non iusto assumenda corporis odit rerum voluptate doloribus! Consectetur, cumque? Quos deleniti omnis voluptatibus, sunt officia unde aliquam necessitatibus odio voluptatem sint, inventore at accusamus, distinctio explicabo.</p>
        <p>Rerum sit doloribus, illum, et repellat impedit quia blanditiis fugiat, dolorem reprehenderit maxime consequuntur ipsam quam? Dolorum nihil alias suscipit eaque quo asperiores velit explicabo quasi facilis, quibusdam soluta earum?</p>
        <p>Error sapiente suscipit eius et voluptatibus aliquid distinctio incidunt molestiae tenetur quaerat adipisci maiores delectus ad ut, a non possimus, accusamus quidem laborum iure esse repellendus. Voluptatum earum quaerat placeat!</p>
    </div>
</body>
</html>
