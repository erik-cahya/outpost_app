<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Outpost | Payments</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap");

    :root {
        --bg: hsl(0 0% 8%);
        --white: hsl(0 0% 98%);
        --accent: hsl(0 0% 15%);
        --secondary: hsl(0 0% 25%);
    }

    body {
        margin: 0;
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: url('https://www.transparenttextures.com/patterns/escheresque.png') repeat #e4ded0;
        font-family: "Nunito Sans", sans-serif;
    }

    * {
        margin: 0;
    }

    li {
        list-style: none;
    }

    #title {
        width: 100%;
        text-align: center;
        padding: 1em 0;
        background-color: var(--bg);
        color: var(--white);
        font-size: 2em;
    }

    @media only screen and (max-width: 991px) {

        .page__title {
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
            white-space: nowrap;
            bottom: 0.5em;
            color: var(--white);
            font-size: clamp(1em, 6vw - 0.5em, 3em);
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: black !important;
        }

        .accordion {
            display: flex;
            height: 70%;
            margin: 0;
            padding: 0;
            flex-direction: column-reverse;
        }
        .accordion__item {
            position: relative;
            flex-grow: 1;
            width: 900px;
            height: 100%;
            background: var(--bg);
            transition: flex-grow 300ms ease;
            overflow: hidden;
        }
    }

    @media only screen and (min-width: 992px) {
        .page__title {
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
            white-space: nowrap;
            bottom: 0.5em;
            color: var(--white);
            font-size: clamp(1em, 3vw - 0.5em, 3em);
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: black !important;
        }

        .accordion__item {
            position: relative;
            flex-grow: 1;
            width: 100px;
            height: 100%;
            background: var(--bg);
            transition: flex-grow 300ms ease;
            overflow: hidden;
        }

        .accordion {
            display: flex;
            width: 80%;
            height: 80%;
            margin: 0;
            padding: 0;
        }
    }

    .accordion__image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    transition: transform 0.3s ease;
}

    .accordion__title {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        white-space: nowrap;
        position: absolute;
        bottom: 0.5em;
        right: 0.5em;

        color: var(--white);
        font-size: clamp(1em, 3vw - 0.5em, 3em);
        letter-spacing: 0.2em;
        text-transform: uppercase;
    }



    /* .accordion__title::after {
        content: "+";
        margin-top: 0.3em;
    } */

    .accordion__description {
        position: absolute;
        width: 60%;
        left: 1em;
        bottom: 1em;
        color: var(--white);
        transform: translateY(200px);
        opacity: 0;
        transition: all 0.3s ease-out;
        transition-property: opacity, transform;
    }

    .accordion__overlay {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(15, 15, 15, 0) 0%, #111111 100%);
        opacity: 1;
        transition: opacity 0.4s ease-out;
    }

    .accordion__item:hover {
        flex-grow: 2;
    }

    .accordion__item:hover .accordion__overlay {
        opacity: 0.5;
    }

    .accordion__item:hover .accordion__title::after {
        content: none;
    }

    .accordion__item:hover .accordion__description {
        transform: translateY(0);
        opacity: 1;
    }

    .accordion__item:hover .accordion__image {
        transform: scale(1.1);
    }
  </style>
</head>
<body>
  <div class="text-light text-center p-4">
      <h2 class="page__title">Outpost Payment</h2>
  </div>

  <ul class="accordion">

    <li class="accordion__item">
      <img class="accordion__image" src="{{ asset('img/co_working_2_edit.jpeg') }}"/>
      <div class="accordion__overlay"></div>
      <h2 class="accordion__title">Co-Working</h2>
      <p class="accordion__description">
          <a href="/payment/co-working" class="btn btn-lg btn-success">Get Payment</a>
      </p>
    </li>

    <li class="accordion__item">
      <img class="accordion__image" src="{{ asset('img/co_living_2.jpeg') }}"/>
      <div class="accordion__overlay"></div>
      <h2 class="accordion__title">Co-Living</h2>
      <p class="accordion__description">
          <a href="/payment/co-living" class="btn btn-lg btn-success">Get Payment</a>
      </p>
    </li>

  </ul>
</body>
</html>
