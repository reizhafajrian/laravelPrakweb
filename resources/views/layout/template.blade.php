



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
    @yield('css')

</head>
<body>
<header-tiket></header-tiket>
@yield('content')
<footer-tiket></footer-tiket>
</body>
</html>

<script type="module" src="js/component/component.js"></script>

