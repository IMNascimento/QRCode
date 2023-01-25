# Gerador QRCode
<p align="center">

<!--<div class="p-5"><div class="markdown-body"><p><a href="https://travis-ci.org/SimpleSoftwareIO/simple-qrcode" class="keychainify-checked"><img src="https://travis-ci.org/SimpleSoftwareIO/simple-qrcode.svg?branch=master" alt="Build Status"></a> <a href="https://packagist.org/packages/simplesoftwareio/simple-qrcode" class="keychainify-checked"><img src="https://poser.pugx.org/simplesoftwareio/simple-qrcode/v/stable.svg" alt="Latest Stable Version"></a> <a href="https://packagist.org/packages/simplesoftwareio/simple-qrcode" class="keychainify-checked"><img src="https://poser.pugx.org/simplesoftwareio/simple-qrcode/v/unstable.svg" alt="Latest Unstable Version"></a> <a href="https://packagist.org/packages/simplesoftwareio/simple-qrcode" class="keychainify-checked"><img src="https://poser.pugx.org/simplesoftwareio/simple-qrcode/license.svg" alt="License"></a> <a href="https://packagist.org/packages/simplesoftwareio/simple-qrcode" class="keychainify-checked"><img src="https://poser.pugx.org/simplesoftwareio/simple-qrcode/downloads.svg" alt="Total Downloads"></a></p>-->
<a href="#" ><img src="https://narmament.com/src/imagem/logo.png" alt="Nascimento" width="200" ></a></p>
<h2 id="uso">Uso</h2>
<h4 id="uso-básico">Uso Básico</h4>
<p>É muito fácil utilizar o gerador de Qrcode. A sintaxe mais básica é:</p>
<pre><code>use SimpleSoftwareIO\QrCode\Generator;

$qrcode = new Generator;
$qrcode-&gt;size(200)-&gt;generate('Crie um QrCode sem Laravel!');</code></pre>
<p>Isso criará um Qr que diz "Me transforme em um QrCode!"</p>
<h4 id="generate">Generate</h4>
<p><code>Generate</code> é usado para criar o QrCode.</p>
<pre><code>$d = new Generator;
$d->generate('Me transforme em um QrCode!');</code></pre>
<blockquote>
  <p>Atenção! Esse método deve ser chamado por último dentro da cadeia.</p>
</blockquote>
<!--
<p><code>Generate</code> por padrão irá retornar uma string de imagem SVG. Você pode exibir diretamente em seu browser, utilizando o Laravel's Blade com o código abaixo:</p>
<pre><code>{!! QrCode::generate('Me transforme em um QrCode!'); !!}</code></pre>
<p>O método <code>generate</code> tem um segundo parametro que aceita um arquivo e um path para salvar o Qrcode.</p>
<pre><code>QrCode::generate('Me transforme em um QrCode!', '../public/qrcodes/qrcode.svg');</code></pre>
-->
<h4 id="alteração-de-formato">Alteração de Formato</h4>
<blockquote>
  <p>Por padrão o gerador de QrCode está configurado para retornar uma imagem SVG.</p>
</blockquote>

<blockquote>
  <p>Cuidao! O método <code>format</code> deve ser chamado antes de qualquer outra opção de formatação como <code>size</code>, <code>color</code>, <code>backgroundColor</code> e <code>margin</code>.</p>
</blockquote>
<p>Atualmente são suportados três tipos de formatos; PNG, EPS, and SVG. Para alterar o formato, use o seguinte código:</p>
<pre><code>$qr =new Generator
$qr->format('png');  // Retornará uma imagem no formato PNG
$qr->format('eps');  // Retornará uma imagem no formato EPS
$qr->format('svg');  // Retornará uma imagem no formato SVG</code></pre>
<h4 id="alteração-de-tamanho">Alteração de Tamanho</h4>
<blockquote>
  <p>Por padrão, o gerador QrCode retornará o menos tamanho possível em pixels para criar o QrCode.</p>
</blockquote>
<p>Você pode alterar o tamanho do QrCode usando o método <code>size</code>. Simplesmente especifique o tamanho desejado em pixels usando a seguinte sintaze:</p>
<pre><code>$qr= new Generator;
$qr->size(100);</code></pre>
<h4 id="alteração-de-cor">Alteração de cor</h4>
<blockquote>
  <p>Cuidado quando estiver alterando a cor de um QRCode. Alguns leitores tem uma grande dificuldade em ler QrCodes coloridos.</p>
</blockquote>
<p>Todas as cores devem ser definidas em RGB(Red Green Blue). Você pode alterar a cor de um qrCode usando o código abaixo:</p>
<pre><code>$qr=new Generator;
$qr->color(255,0,255);</code></pre>
<p>Alterações do plano de fundo também são suportadas e definidas da mesma maneira.</p>
<pre><code>$qr= new Generator;
$qr->backgroundColor(255,255,0);</code></pre>
<h4 id="alteração-de-margem">Alteração de Margem</h4>
<p>A capacidade de alterar a margem ao redor do QrCode também é suportada. Simplesmente especifique o tamanho desejado da margem, utilizando a sintaxe abaixo:</p>
<pre><code>$qr = new Generator;
$qr->margin(100);</code></pre>
<h4 id="correção-de-erros">Correção de erros</h4>
<p>Alterar o nível de correção de erros é simples. Utilize a seguinte sintaxe:</p>
<pre><code>$qr = new Generator;
$qr->errorCorrection('H');</code></pre>
<p>As seguintes opções são suportadas para o método <code>errorCorrection</code>.</p>
<table>
<thead>
<tr>
<th id="correção_de_erros">Correção de erros</th>
<th id="garantia_fornecida">Garantia fornecida</th>
</tr>
</thead>
<tbody>
<tr>
<td>L</td>
<td>7% das palavras-código podem ser restauradas.</td>
</tr>
<tr>
<td>M</td>
<td>15% das palavras-código podem ser restauradas.</td>
</tr>
<tr>
<td>Q</td>
<td>25% das palavras-código podem ser restauradas.</td>
</tr>
<tr>
<td>H</td>
<td>30% das palavras-código podem ser restauradas.</td>
</tr>
</tbody>
</table>
<blockquote>
  <p>Quanto maior a correção de erros utilizada, maior o QrCode fica e menos informação ele pode armazenar. Leia mais sobre <a href="http://en.wikipedia.org/wiki/QR_code#Error_correction" class="keychainify-checked">correção de erros</a>.</p>
</blockquote>
<h4 id="codificação">Codificação</h4>
<p>Alterar a codificação que é usada para criar um QrCode. Por padrão, a encodificação padrão é a <code>ISO-8859-1</code>. Leia mais sobre <a href="https://pt.wikipedia.org/wiki/Codifica%C3%A7%C3%A3o_de_caracteres" class="keychainify-checked">codificação de caracteres</a>. Você pode alterar a codificação usando o seguinte código:</p>
<pre><code>$qr = new Generator;
$qr->encoding('UTF-8')-&gt;generate('Faça-me um QrCode com símbolos especiais ♠♥!!');</code></pre>
<table>
<thead>
<tr>
<th id="codificador_de_caracteres">Codificador de caracteres</th>
</tr>
</thead>
<tbody>
<tr>
<td>ISO-8859-1</td>
</tr>
<tr>
<td>ISO-8859-2</td>
</tr>
<tr>
<td>ISO-8859-3</td>
</tr>
<tr>
<td>ISO-8859-4</td>
</tr>
<tr>
<td>ISO-8859-5</td>
</tr>
<tr>
<td>ISO-8859-6</td>
</tr>
<tr>
<td>ISO-8859-7</td>
</tr>
<tr>
<td>ISO-8859-8</td>
</tr>
<tr>
<td>ISO-8859-9</td>
</tr>
<tr>
<td>ISO-8859-10</td>
</tr>
<tr>
<td>ISO-8859-11</td>
</tr>
<tr>
<td>ISO-8859-12</td>
</tr>
<tr>
<td>ISO-8859-13</td>
</tr>
<tr>
<td>ISO-8859-14</td>
</tr>
<tr>
<td>ISO-8859-15</td>
</tr>
<tr>
<td>ISO-8859-16</td>
</tr>
<tr>
<td>SHIFT-JIS</td>
</tr>
<tr>
<td>WINDOWS-1250</td>
</tr>
<tr>
<td>WINDOWS-1251</td>
</tr>
<tr>
<td>WINDOWS-1252</td>
</tr>
<tr>
<td>WINDOWS-1256</td>
</tr>
<tr>
<td>UTF-16BE</td>
</tr>
<tr>
<td>UTF-8</td>
</tr>
<tr>
<td>ASCII</td>
</tr>
<tr>
<td>GBK</td>
</tr>
<tr>
<td>EUC-KR</td>
</tr>
</tbody>
</table>
<blockquote>
  <p>Um erro de <code>Could not encode content to ISO-8859-1</code> significa que foi inserido algum caractere inválido. Recomendamos o <code>UTF-8</code> se você não tiver certeza.</p>
</blockquote>
<h4 id="mesclar">Mesclar</h4>
<p>O método <code>merge</code> mescla uma imagem sobre um Qrcode. É comumente usado para se colocar logos dentro de um QrCode.</p>
<pre><code>$qr = new Generator;
$qr->merge($filename, $percentage, $absolute);

// Gera um QrCode com uma imagem centralizada.
$qr->format('png')-&gt;merge('diretório/da/imagem.png')-&gt;generate();

// Gera um QrCode com uma imagem centralizada. A imagem inserida ocupará 30% do QrCode.
$qr->format('png')-&gt;merge('diretório/da/imagem.png', .3)-&gt;generate();

// Gera um QrCode com uma imagem centralizada. A imagem inserida ocupará 30% do QrCode.
$qr->format('png')-&gt;merge('http://www.google.com/algumaImagem.png', .3, true)-&gt;generate();</code></pre>
<blockquote>
  <p>O método <code>merge</code> suporta somente arquivos do tipo PNG.<br>
  O diretório da imagem é relativo ao caminho base da aplicação, se o <code>$absolute</code> estiver setada para <code>false</code>. Altere essa variável para <code>true</code> para usar caminhos absolutos.</p>
</blockquote>
<blockquote>
  <p>Você deve usar um alto nível de correção de erros quando usado o método <code>merge</code>, para garantir que o QrCode será legível. Recomendamos usar <code>errorCorrection('H')</code>.</p>
</blockquote>
<p><img src="https://raw.githubusercontent.com/SimpleSoftwareIO/simple-qrcode/master/docs/imgs/merged-qrcode.png?raw=true" alt="Merged Logo"></p>
<h4 id="funda-string-binária">Funda string binária</h4>
<p>O método <code>mergeString</code> pode ser usado para alcançar a mesma chamada do método <code>merge</code>, exceto que ele permite que você represente uma string de um arquivo ao invés do diretório. Isso é útil quando é utilizado o padrão <code>Storage</code>. A chamada a essa interface é bastante similar ao método <code>merge</code>. </p>
<pre><code>$qr = new Generator;
$qr->mergeString(Storage::get('diretório/da/imagem.png'), $percentage);

// Gera um QrCode com uma imagem centralizada.
$qr->format('png')-&gt;mergeString(Storage::get('diretório/da/imagem.png'))-&gt;generate();

// Gera um QrCode com uma imagem centralizada. A imagem inserida ocupará 30% do QrCode.
$qr->format('png')-&gt;mergeString(Storage::get('diretório/da/imagem.png'), .3)-&gt;generate();</code></pre>
<blockquote>
  <p>Assim como o método <code>merge</code>, somente arquivos do tipo PNG são suportados. O mesmo aplica-se para correção de erros, altos níveis são recomendados.</p>
</blockquote>
<h4 id="uso-avançado">Uso Avançado</h4>
<p>Todos os métodos suportam encadeamento. O método <code>generate</code> deve ser chamado por último e o método <code>format</code> deve ser chamado primeiro. Por exemplo, vocẽ pode executar o código seguinte:</p>
<pre><code>$qr->:size(250)-&gt;color(150,90,10)-&gt;backgroundColor(10,14,244)-&gt;generate('Faça-me um QrCode!');
$qr->format('png')-&gt;size(399)-&gt;color(40,40,40)-&gt;generate('Faça-me um QrCode!');</code></pre>
<p>Você pode exibir uma imagem PNG, sem salvar o arquivo e prover uma string encodificada pelo método <code>base64_encode</code>.</p>
<pre><code>&lt;img src="data:image/png;base64, {!! base64_encode($qr->format('png')-&gt;size(100)-&gt;generate('Crie-me dentro de um QrCode!')) !!} "&gt;</code></pre>
<p><a id="docs-ajudantes"></a></p>
<h2 id="ajudantes">Ajudantes</h2>
<h4 id="o-que-são-ajudantes">O que são ajudantes?</h4>
<p>Ajudantes são uma maneira fácil de criar QrCodes que executam uma ação quando escaneados.  </p>
<h4 id="e-mail">E-Mail</h4>
<p>Esse ajudante, gera um qrcode de e-mail que é capaz de ser preenchido no endereço de e-mail, assunto e corpo.</p>
<pre><code>$qr->email($to, $subject, $body);

// Preenche o endereço de email
$qr->email('foo@bar.com');

// Preenche o endereço, título e corpo de um email
$qr->email('foo@bar.com', 'This is the subject.', 'This is the message body.');

// Preenche apenas o título e corpo de um email
$qr->email(null, 'This is the subject.', 'This is the message body.');</code></pre>
<h4 id="geo">Geo</h4>
<p>Esse ajudante gera uma latitude e longitude que pode ser lido por um aparelho celular e abrir a localização no Google maps ou outro aplicativo similar.</p>
<pre><code>$qr->geo($latitude, $longitude);

$qr->geo(37.822214, -122.481769);</code></pre>
<h4 id="phone-number">Phone Number</h4>
<p>Esse ajudante, gera uma QrCode que pode ser escaneado e exibir um número de telefone.</p>
<pre><code>$qr->phoneNumber($phoneNumber);

$qr->phoneNumber('555-555-5555');
$qr->phoneNumber('1-800-Laravel');</code></pre>
<h4 id="sms-mensagens-de-texto">SMS (Mensagens de Texto)</h4>
<p>Esse ajudante, cria uma mensagem SMS que pode ser preenchida com o número de telefone e o corpo da mensagem.</p>
<pre><code>$qr->SMS($phoneNumber, $message);

// Cria uma mensagem de texto com o telefone preenchido.
$qr->SMS('555-555-5555');

// Cria uma mensagem de texto com o número telefônico e a mensagem preenchida.
$qr->SMS('555-555-5555', 'Body of the message');</code></pre>
<h4 id="wifi">WiFi</h4>
<p>Esse ajudante, faz com que QrCodes escaneáveis permitam o aparelho celular se conectar a uma rede WI-FI.</p>
<pre><code>$qr->wiFi([
    'encryption' =&gt; 'WPA/WEP',
    'ssid' =&gt; 'SSID da rede',
    'password' =&gt; 'Senha da rede',
    'hidden' =&gt; 'Se a rede é um SSID oculto ou não.'
]);

// Conectar a uma rede wifi
$qr->wiFi([
    'ssid' =&gt; 'Nome da rede',
]);

// Conectar a uma refe wifi oculta
$qr->wiFi([
    'ssid' =&gt; 'Nome da rede',
    'hidden' =&gt; 'true'
]);

// Conectar a uma rede wifi segura
$qr->wiFi([
    'ssid' =&gt; 'Nome da rede',
    'encryption' =&gt; 'WPA',
    'password' =&gt; 'minhaSenha'
]);</code></pre>
<blockquote>
  <p>Escaneamento WIFI atualmente não são suportados nos produtos Apple.</p>
</blockquote>
<p><a id="docs-common-usage"></a><br>
##Uso Comum do QRCode</p>
<p>Você pode usar um prefixo listado na tabela abaixo dentro da seção <code>generate</code> para criar um QrCode para armazenar informações mais avançadas:</p>
<pre><code>$qr->generate('http://www.github.com/IMNascimento');</code></pre>
<table>
<thead>
<tr>
<th id="uso">Uso</th>
<th id="prefixo">Prefixo</th>
<th id="exemplo">Exemplo</th>
</tr>
</thead>
<tbody>
<tr>
<td>URL do site</td>
<td>http://</td>
<td><a href="http://github.com/IMNascimento" class="keychainify-checked">http://www.github.com/IMNascimento</a></td>
</tr>
<tr>
<td>URL segura</td>
<td>https://</td>
<td><a href="https://github.com/IMNascimento" class="keychainify-checked">https://github.com/IMNascimento</a></td>
</tr>
<tr>
<td>Endereço de e-mail</td>
<td>mailto:</td>
<td><a href="mailto:support@github.io" class="keychainify-checked">support@github.io</a></td>
</tr>
<tr>
<td>Número de telefone</td>
<td>tel:</td>
<td>tel:555-555-5555</td>
</tr>
<tr>
<td>Texto (SMS)</td>
<td>sms:</td>
<td>sms:555-555-5555</td>
</tr>
<tr>
<td>Texto (SMS) With Pretyped Message</td>
<td>sms:</td>
<td>sms::I am a pretyped message</td>
</tr>
<tr>
<td>Texto (SMS) With Pretyped Message and Number</td>
<td>sms:</td>
<td>sms:555-555-5555:I am a pretyped message</td>
</tr>
<tr>
<td>Coordenadas</td>
<td>geo:</td>
<td>geo:-78.400364,-85.916993</td>
</tr>
<tr>
<td>MeCard</td>
<td>mecard:</td>
<td>MECARD:GitHub, Software;Some Address, Somewhere, 20430;TEL:555-555-5555;EMAIL:support@github.io;</td>
</tr>
<tr>
<td>VCard</td>
<td>BEGIN:VCARD</td>
<td><a href="https://en.wikipedia.org/wiki/VCard" class="keychainify-checked">Veja Exemplos</a></td>
</tr>
<tr>
<td>Wifi</td>
<td>wifi:</td>
<td>wifi:WEP/WPA;SSID;PSK;Hidden(True/False)</td>
</tr>
</tbody>
</table>
<p><a id="docs-outside-laravel"></a><br>
  <strong>Não se esqueça de tirar o ; do ;extension=gd no caminho <code>xampp/php/php.ini</code></strong>
  <p> Caso não tenha instalado o image magick instale seguindo esse passo a passo:
    <a href="https://ourcodeworld.com/articles/read/349/how-to-install-and-enable-the-imagick-extension-in-xampp-for-windows">Magick</a>
</div></div>

