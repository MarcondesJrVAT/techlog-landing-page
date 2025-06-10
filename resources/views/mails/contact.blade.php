<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>{{ $data['subject'] }}</title>
  <style>
    body { font-family: Arial, sans-serif; background-color: #fefefe; margin: 0; padding: 0; }
    .container { background-color: #ffffff; max-width: 600px; margin: 20px auto; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    .header { background-color: #f97316; padding: 20px; text-align: center; color: #ffffff; }
    .header h2 { margin: 0; font-size: 24px; }
    .header p { margin: 5px 0 0; font-size: 16px; }
    .content { padding: 20px; color: #333333; }
    .info { margin-bottom: 15px; }
    .label { font-weight: bold; display: block; margin-bottom: 5px; }
    .info p { margin: 0; }
    .footer { background-color: #f97316; padding: 10px; text-align: center; color: #ffffff; font-size: 12px; }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h2>Nova Mensagem de Contato</h2>
      <p>Assunto: {{ $data['subject'] }}</p>
    </div>
    <div class="content">
      <div class="info">
        <span class="label">Nome:</span>
        <p>{{ $data['name'] }}</p>
      </div>
      <div class="info">
        <span class="label">E-mail:</span>
        <p>{{ $data['email'] }}</p>
      </div>
      <div class="info">
        <span class="label">Conteúdo:</span>
        <p>{{ $data['content'] }}</p>
      </div>
    </div>
    <div class="footer">
      <p>Enviado através do site TECHLOG</p>
    </div>
  </div>
</body>
</html>
