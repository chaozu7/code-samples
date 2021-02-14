<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Test landing page</title>
    <meta charset="UTF-8">
    <meta name="description" content="Landing page">
    <meta name="keywords" content="landing, test, page">
    <meta name="author" content="Kamila Nawrocka">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sass/main.css">
    
</head>

<body>
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-check">

        <label for="navi-check" class="navigation__button">
            <span class="navigation__button-label">MENU</span>
        </label>

        <div class="navigation__background">&nbsp;</div>
        <nav class="navigation__nav-list">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="#section__about-us" class="navigation__link" onclick="closeNav();">O firmie</a></li>
                <li class=" navigation__item "><a href="#section__offer " class="navigation__link " onclick="closeNav();">Oferta</a>
                </li>
                <li class="navigation__item"><a href="#section__out-team" class="navigation__link" onclick="closeNav();">Zespół</a></li>
                <li class=" navigation__item "><a href="#section__contact_us " class="navigation__link " onclick="closeNav();">Skontaktuj się</a>
                </li>
                <li class="navigation__item"><a href="https://www.internet-plus.pl/" class="navigation__link">Internet Plus</a></li>

            </ul>
        </nav>
    </div>
    <header class="header">
        <div class="header__logo-box">
            <img class="header__logo" src="img/iplus_logo_white.png" alt="logo Internet Plus" title="logo Internet Plus">
        </div>
        <div class="header__info">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Webdevelopers</span>
                <span class="heading-primary--sub">we'll make you TOP10 site</span>
            </h1>
            <a class="btn btn--main" href="#"> Zobacz portfolio</a>
        </div>

    </header>