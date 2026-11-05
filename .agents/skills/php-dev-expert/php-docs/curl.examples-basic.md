# Exemplos básicos do cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/curl.examples-basic.php

---

## Exemplos básicos do cURL

Uma vez que o PHP tenha sido compilado com suporte ao cURL, pode-se começar a usar
as funções cURL. A ideia por trás das funções cURL
é inicializar uma sessão cURL usando
[curl\_init()](function.curl-init.md), o que permite configurar as
opções para a transferência através de [curl\_setopt()](function.curl-setopt.md),
e depois executar a sessão com
[curl\_exec()](function.curl-exec.md).

Aqui está um exemplo simples que usa as funções cURL para enviar
uma requisição POST:

**Exemplo #1 Usando o módulo cURL do PHP para enviar uma requisição POST**

```
<?php
$data = ['foo' => 'bar', 'baz' => 48];
$url = "http://www.example.com/handler.php";

$ch = curl_init($url);

// diz ao CURL para retornar a resposta em vez de enviá-la para stdout
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// define os dados POST, o método correspondente e os cabeçalhos
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

// envia a requisição e obtém a resposta
$response = curl_exec($ch);

if(curl_error($ch)) {
    // trata o erro, ou apenas
    throw new RuntimeException(curl_error($ch));
}
```

Outro exemplo que usa as funções cURL para enviar uma requisição POST
com JSON:

**Exemplo #2 Usando o módulo cURL do PHP para enviar uma requisição POST com JSON**

```
<?php
$post_data = ['foo' => 'bar', 'baz' => 48];
$url = "http://www.example.com/api/endpoint";

$ch = curl_init($url);

// diz ao CURL para retornar a resposta em vez de enviá-la para stdout
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// define os dados POST e o método correspondente
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));

// define o cabeçalho necessário
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

// envia a requisição e obtém a resposta
$response = curl_exec($ch);

if(curl_error($ch)) {
    // trata o erro, ou apenas
    throw new RuntimeException(curl_error($ch));
}
```

Aqui está um outro exemplo que usa as funções cURL para receber o conteúdo da página
inicial de exemplo.com.br em um arquivo:

**Exemplo #3 Usando o módulo cURL do PHP para receber a página exemplo.com.br**

```
<?php

$ch = curl_init("http://www.exemplo.com.br/");
$fp = fopen("pagina_exemplo.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
if(curl_error($ch)) {
    fwrite($fp, curl_error($ch));
}
fclose($fp);
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
