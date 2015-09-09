<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="revisit-after" content="2 days" />
    <title>{{ title }}</title>
    <meta name="description" content="{{ description }}">
    <meta name="keywords" content="">
    <meta name="author" content="lefilm">
    <meta name="language" content="fr-FR" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#b9352a">
    <meta name="google-site-verification" content="" />

    <!-- Facebook meta tags -->
    <meta property="og:locale:alternate" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ title }}">
    <meta property="og:image" content="http://lefilm.digin.fr/images/lefilmfr.png">
    <meta property="og:url" content="http://lefilm.digin.fr/">
    <meta property="og:site_name" content="Lefilm.fr">
    <meta property="og:description" content="{{ description }}">

    <!-- Twitter meta tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ title }}">
    <meta name="twitter:url" content="http://lefilm.digin.fr/">
    <meta name="twitter:image" content="http://lefilm.digin.fr/images/lefilmfr.png">
    <meta name="twitter:description" content="{{ description }}">

    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">

    <!-- <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css"> -->
    <!-- Il manque un truc css pour le burger, à trouver ... -->

    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

    {% if app.config.mode == 'development' %}
    <link rel="stylesheet" href="/styles/app.css" type="text/css">
    <link rel="stylesheet" href="/styles/film.css" type="text/css">
    <link rel="stylesheet" href="/styles/footer.css" type="text/css">
    <link rel="stylesheet" href="/styles/mobile.css" type="text/css">
    {% else %}
    <link rel="stylesheet" href="/styles/min/app.min.css">
    {% endif %}

    <!-- LIBRARIES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
