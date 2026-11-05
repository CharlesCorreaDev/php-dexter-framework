# Retorna o número do último erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-errno.php

---

# curl\_errno

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

curl\_errno — Retorna o número do último erro

### Descrição

function **curl\_errno**([CurlHandle](class.curlhandle.md) `$handle`): [int](language.types.integer.md)

Retorna o número do erro para a última operação cURL.

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

### Valor Retornado

Retorna o número do erro ou `0` (zero) caso nenhum
erro tenha ocorrido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **curl\_errno()****

```
<?php
// Cria um novo identificador cURL para uma página existente
$ch = curl_init('http://404.php.net/');

// Executa
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);

// Verifica se ocorreu algum erro
if(curl_errno($ch))
{
    echo 'Erro cURL: ' . curl_error($ch);
}
?>
```

### Veja também

- [curl\_error()](function.curl-error.md) - Retorna uma string contendo o último erro da sessão atual
- [» Códigos de erros cURL](https://curl.haxx.se/libcurl/c/libcurl-errors.html)

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
