<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECHLOG - Suporte e Manutenção em TI</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="manifest" href="{{ asset('assets/manifest/site.webmanifest') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans text-gray-900">
<header class="bg-orange-400 text-white py-6">
  <div class="container mx-auto px-4 justify-center flex flex-col items-center">
    <h1 class="text-3xl tracking-wide"
        style="font-family:'Montserrat',sans-serif; font-weight:800;">
      TECHLOG
    </h1>
    <p class="text-lg mt-2">Seu parceiro em Tecnologia da Informação</p>
  </div>
</header>

<div class="bg-yellow-200 text-yellow-900 py-2">
    <div class="container mx-auto px-4 text-center font-semibold">
        🚧 ESTE SITE ESTÁ EM CONSTRUÇÃO. AGRADECEMOS SUA COMPREENSÃO! 🚧
    </div>
</div>

<main>
    <section id="hero" class="py-12 bg-white shadow">
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded text-center font-semibold">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('contact.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded shadow space-y-4">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Suporte Técnico, Manutenção e Soluções em TI para sua Empresa</h2>
            <p class="mb-6 text-lg">Na TECHLOG, oferecemos serviços completos para garantir que sua infraestrutura de TI funcione perfeitamente. Contamos com uma equipe especializada pronta para atender às suas necessidades.</p>
            <a href="#contact" class="inline-block bg-orange-400 hover:bg-orange-600 text-white font-semibold py-2 px-6 rounded transition">Fale Conosco</a>
        </div>
    </section>

    <section id="about" class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-xl font-bold mb-4 text-center">Sobre a TECHLOG</h3>
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/techlog.png') }}" alt="Logo TECHLOG" class="h-24 w-auto">
            </div>
            <p class="text-center max-w-2xl mx-auto break-words whitespace-normal text-justify">
              A <strong>TECHLOG SERVIÇOS DE GESTÃO E SISTEMAS INFORMATIZADOS LTDA.</strong> é uma empresa com ampla experiência em consultoria técnico-organizacional e gestão de mão de obra terceirizada. Desde 2000, tem participado de importantes projetos de informática aplicada na região Norte, atuando diretamente ou em parceria com instituições públicas e privadas. Destaca-se como integradora de talentos e soluções, promovendo inovação, pesquisa aplicada e desenvolvimento de tecnologias voltadas ao cotidiano da população.
            </p>
        </div>
    </section>

    <section id="services" class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded shadow hover:shadow-lg transition-shadow duration-300">
                    <h4 class="text-lg font-semibold mb-2 text-center">Missão</h4>
                    <p class="break-words whitespace-normal text-justify">
                      Democratizar o acesso ao conhecimento e impulsionar a educação em larga escala, desenvolvendo e fornecendo soluções tecnológicas inovadoras e serviços técnicos especializados na produção de conteúdo educacional e comunicação corporativa.
                    </p>
                </div>
                <div class="bg-white p-6 rounded shadow hover:shadow-lg transition-shadow duration-300">
                    <h4 class="text-lg font-semibold mb-2 text-center">Visão</h4>
                    <p class="break-words whitespace-normal text-justify">
                      Ser referência em tecnologia educacional, reconhecida pela excelência, inovação e capacidade de adaptação às demandas do mercado, transformando a maneira como o conhecimento é acessado e disseminado, e contribuindo para o sucesso e satisfação de nossos parceiros.
                    </p>
                </div>
                <div class="bg-white p-6 rounded shadow hover:shadow-lg transition-shadow duration-300">
                    <h4 class="text-lg font-semibold mb-2 text-center">Valores</h4>
                    <ul class="list-disc list-inside space-y-2 text-gray-700 break-words whitespace-normal text-justify">
                        <li><strong>Integridade:</strong> Atuar com ética, transparência e responsabilidade.</li>
                        <li><strong>Inovação:</strong> Desenvolver soluções tecnológicas avançadas e adaptáveis.</li>
                        <li><strong>Excelência:</strong> Garantir a qualidade e eficácia dos serviços e produtos.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-12">
        <div class="container mx-auto px-4">
            <h3 class="text-xl font-bold mb-4 text-center">Pronto para otimizar sua TI? Fale conosco!</h3>
            <form action="{{ route('contact.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded shadow space-y-4">
                @csrf
                <div>
                    <label for="name" class="block font-semibold mb-1">Nome:</label>
                    <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                    @if ($errors->has('name'))
                        <span class="text-red-600 text-sm">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div>
                    <label for="email" class="block font-semibold mb-1">E-mail:</label>
                    <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                    @if ($errors->has('email'))
                        <span class="text-red-600 text-sm">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div>
                    <label for="subject" class="block font-semibold mb-1">Assunto:</label>
                    <select id="subject" name="subject" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                        <option value="" disabled>Selecione um assunto</option>
                        <option value="Suporte Técnico">Suporte Técnico</option>
                        <option value="Manutenção de Equipamentos">Manutenção de Equipamentos</option>
                        <option value="Consultoria em TI">Consultoria em TI</option>
                        <option value="Orçamento">Orçamento</option>
                        <option value="Outros">Outros</option>
                    </select>
                    @if ($errors->has('subject'))
                        <span class="text-red-600 text-sm">{{ $errors->first('subject') }}</span>
                    @endif
                </div>
                <div>
                    <label for="content" class="block font-semibold mb-1">Conteúdo:</label>
                    <textarea id="content" name="content" rows="5" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                    @if ($errors->has('content'))
                        <span class="text-red-600 text-sm">{{ $errors->first('content') }}</span>
                    @endif
                </div>
                <button type="submit" class="w-full bg-orange-400 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded transition">Enviar Mensagem</button>
            </form>
            <p class="contact-info text-center mt-6 text-gray-700">
                Telefone: (92) 3306-4410 / (92) 3306-4405<br>
                E-mail: <a href="mailto:comercial@techlog.com.br" class="text-orange-600 underline">comercial@techlog.com.br</a>
            </p>
        </div>
    </section>
</main>

<footer class="bg-orange-400 text-white py-6 mt-12">
    <div class="container mx-auto px-4 text-center text-sm space-y-1">
        <p><strong>TECHLOG SERVIÇOS DE GESTÃO E SISTEMAS INFORMATIZADOS LTDA</strong> – CNPJ: 03.613.289/0001-02</p>
        <p>R PEDRARIAS DE AVILAR, 26 - CONJ 31 DE MARÇO TÉRREO SALA 01</p>
        <p>Manaus - AM - CEP 69.077-450</p>
        <p>&copy; 2025 TECHLOG. Todos os direitos reservados.</p>
    </div>
</footer>
</body>
</html>
