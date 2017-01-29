<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="author" content="">
        <meta name="csrf-token" content="{!! csrf_token() !!}">
        <link rel="shortcut icon" href="dist/favicon.ico">

        <title>{!! $title !!} || {!! Config::get('customConfig.names.siteName')!!}</title>

        <!-- Admin LTE template css file  -->
        <!-- Bootstrap 3.3.5 -->
        {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
        {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
        <!-- Font Awesome -->
        {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
        <!-- Ionicons -->
        {!! Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
        <!-- jvectormap -->
        {!! Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
        <!-- Theme style -->
        {!! Html::style('dist/css/AdminLTE.min.css') !!}
        <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
        {!! Html::style('dist/css/skins/_all-skins.min.css') !!}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Admin LTE template css file  end  -->


        <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-62751496-1', 'auto');
                ga('send', 'pageview');

        </script>

</head>