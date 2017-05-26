<html>
    <head>
        <title>Title</title>
    </head>
    <body class="login">
        <div id="app">
        @if(count($errors) > 0)
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
             @if (session('loginstatus'))
                <div class="alert alert-danger alert-dismissable" style="width: 30%;
                        right: 0;
                        position: absolute;">
                    <ul><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <li><?php echo (session('loginstatus')); ?></li></ul>
                </div>
            @endif
            <sign-in></sign-in>
        <script>
            var token = '{{csrf_token()}}';
        </script>
        <script src="/js/app.js" type="text/javascript"></script>
    </body>

</html>