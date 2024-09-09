@extends('layouts.app')

@section('title', 'Página de Contacto')

@section('content')
    <div class="container">
        <div class="box-info">
            <h1>CONTÁCTATE CON NOSOTROS</h1>
            <div class="data">
                <p><i class="fa-solid fa-phone"></i> +1 408 224 4587</p>
                <p><i class="fa-solid fa-envelope"></i> livingcodedev@gmail.com</p>
                <p><i class="fa-solid fa-location-dot"></i> 30 Grant Ave San Francisco CA 94108-5834. USA</p>
            </div>
            <div class="links">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        <form>
            <div class="input-box">
                <input type="text" placeholder="Nombre y apellido" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="email" required placeholder="Correo electrónico">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Asunto">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <div class="input-box">
                <textarea placeholder="Escribe tu mensaje..."></textarea>
            </div>
            <button type="submit">Enviar mensaje</button>
        </form>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(rgba(0 0 0 / .8), rgba(0 0 0 / .8)), url(img/bg.jpg);
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(2, 50%);
            padding: 20px;
            gap: 10px;
            width: 1000px;
        }

        .box-info {
            color: #fff;
            display: flex;
            flex-direction: column;
            gap: 50px;
        }

        .box-info > h1 {
            text-align: left;
            letter-spacing: 5px;
        }

        .data {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .data > p {
            font-size: 1rem;
        }

        .data > p > i {
            color: crimson;
            margin-right: 10px;
            font-size: 25px;
        }

        .links {
            display: flex;
            gap: 15px;
        }

        .links > a {
            text-decoration: none;
            width: 40px;
            height: 40px;
            background: crimson;
            text-align: center;
            transition: .1s;
        }

        .links > a > i {
            color: #fff;
            line-height: 40px;
            font-size: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }

        .input-box {
            position: relative;
        }

        .input-box > input,
        .input-box > textarea {
            width: 100%;
            padding: 0 10px;
            background: rgba(255 255 255 / .1);
            border: 3px solid transparent;
            outline: none;
            letter-spacing: 1px;
            transition: .3s;
            color: #fff;
        }

        .input-box > input::placeholder,
        .input-box > textarea::placeholder {
            color: #a3a3a3;
        }

        .input-box > input:focus::placeholder,
        .input-box > textarea:focus::placeholder {
            color: transparent;
        }

        .input-box > input:focus,
        .input-box > textarea:focus {
            border-bottom: 3px solid crimson;
            animation: shake .2s;
        }

        .input-box > textarea {
            height: 130px;
            padding: 10px;
            letter-spacing: 1.5px;
        }

        .input-box > i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
            color: rgba(255 255 255 / .3);
            transition: .3s;
        }

        .input-box > input:focus ~ i {
            color: crimson;
        }

        form > button {
            width: 100%;
            padding: 10px;
            background: crimson;
            color: #fff;
            border: none;
            transition: .1s;
            cursor: pointer;
            font-size: 1rem;
        }

        form > button:hover,
        .links > a:hover {
            background: rgb(172, 16, 47);
        }

        @keyframes shake {
            0%, 100% {
                transform: translateX(0);
            }

            10%, 30%, 50%, 70%, 90% {
                transform: translateX(-10px);
            }

            20%, 40%, 60%, 80% {
                transform: translateX(10px);
            }
        }

        @media screen and (max-width: 600px) {
            .container {
                width: 95%;
                flex-direction: column;
                gap: 20px;
            }

            .box-info {
                gap: 15px;
            }

            .box-info > h1 {
                font-size: 1.5rem;
            }
        }
    </style>
@endsection
