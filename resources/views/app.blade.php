<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		@yield('title')
        <meta content="{{ csrf_token() }}" name="csrf-token"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link href="/css/app.css" rel="stylesheet" type="text/css"/>
		@yield('head')
	</head>
    <body>
        <header id="header">
            <!-- Example server route -->
            <ul class="dropdown-menu">
                <li><a href="{{ URL::route('SignIn') }}" title="" class="color_link">Sign In ญฟเำ</a></li>
            </ul>
        </header>
        <section id="app">
            @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissable" style="width: 30%;
                    right: 0;
                    position: absolute;">
                <ul><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success alert-dismissable" style="width: 30%;
                        right: 0;
                        position: absolute;">
                    <ul><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                   <li><?php echo (session('status')); ?></li></ul>
                </div>
            @endif
            @if (session('loginstatus'))
                <div class="alert alert-success alert-dismissable" style="width: 30%;
                        right: 0;
                        position: absolute;">
                    <ul><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                   <li><?php echo (session('loginstatus')); ?></li></ul>
                </div>
            @endif
            @yield('content')
        </section>
        <footer id="footer">
        </footer>
        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }}' };
            var token = '{{csrf_token()}}';
        </script>
        <script src="/js/app.js" type="text/javascript"></script>
		@yield('scripts')
	</body>
</html>