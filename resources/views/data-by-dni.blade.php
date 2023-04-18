<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <header class="bg-[url('https://www.reniec.gob.pe/portal/images/fondo_huella_1.gif')]
            bg-no-repeat bg-center bg-cover">
            <div class="flex justify-between items-end px-8 py-4">
                <div class="basis-1/4 flex justify-start">
                    <img src="https://www.viasatelital.com/images/actualidad0020a.png"
                        alt="reniec-logo"
                        class="w-3/4">
                </div>
                <div class="basis-1/2 flex justify-center">
                    <p class="text-4xl">
                        Tecnología
                        <span class="block pl-28">
                            que nos
                            <span class="uppercase font-semibold">
                                identifica
                            </span>
                        </span>
                    </p>
                </div>
                <div class="basis-1/4 flex justify-end">
                    <p>{{ $currentDate }}</p>
                </div>
            </div>

            <div class="flex justify-between text-white">
                <div class="px-8 py-4 basis-1/5 bg-zinc-400">
                    <p><span>Servicios</span> en Línea</p>
                </div>

                <div class="px-8 py-4 basis-4/5 bg-sky-800">
                    <p class="font-bold">
                        El acceso a varios trámites está disponible a través
                        de estos servicios dirigos al ciudadano y diversas
                        entidades
                    </p>
                </div>
            </div>
        </header>

        <main class="px-8 py-16
            bg-[url('https://midomicilio.reniec.gob.pe/e-domicilioc/assets/images/fondo2.jpg')]
            mt-1 min-h-screen">
            <div class="flex gap-x-8">
                <div class="flex flex-col items-center gap-y-8 basis-3/5 px-28">
                    <div>
                        <h1 class="text-4xl text-cyan-400">Consulta de datos personales por DNI</h1>
                    </div>
                    <div class="flex flex-col items-center gap-y-4">
                            <p class="text-4xl text-cyan-400">Documento Nacional de Identidad</p>
                            <p class="text-3xl text-white">{{ $person->numeroDocumento }}</p>

                            <p class="text-4xl text-cyan-400">Primer Apellido</p>
                            <p class="text-3xl text-white">{{ $person->apellidoPaterno }}</p>

                            <p class="text-4xl text-cyan-400">Segundo Apellido</p>
                            <p class="text-3xl text-white">{{ $person->apellidoMaterno }}</p>

                            <p class="text-4xl text-cyan-400">Pre Nombres</p>
                            <p class="text-3xl text-white">{{ $person->nombres }}</p>

                            <a href="{{ route('home') }}"
                                class="bg-cyan-700 px-8 py-2 uppercase
                                text-white hover:bg-cyan-600
                                rounded-lg">
                                Nueva consulta
                            </a>
                    </div>
                    <div>
                        <p class="text-white text-center">
                            Le informamos que los datos personales que proporcione serán
                            tratados conforme a la ley 29733 y su reglamento.
                        </p>
                    </div>
                </div>
                <div class="basis-2/5">
                    <img src="https://apps.reniec.gob.pe/renovacionDni/assets/img/imagen_principa.png" alt="">
                </div>
            </div>
        </main>
    </body>
</html>
