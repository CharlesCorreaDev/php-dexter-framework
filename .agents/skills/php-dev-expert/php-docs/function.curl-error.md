# Retorna uma string contendo o último erro da sessão atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-error.php

---

# curl\_error

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

curl\_error — Retorna uma string contendo o último erro da sessão atual

### Descrição

function **curl\_error**([CurlHandle](class.curlhandle.md) `$handle`): [string](language.types.string.md)

Retorna uma mensagem de erro em texto simples para a última operação cURL.

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

### Valor Retornado

Retorna a mensagem de erro ou `''` (string vazia) se nenhum
erro tiver ocorrido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **curl\_error()****

```
<?php
// Inicializa o cURL usando um destino não existente
$ch = curl_init('http://404.php.net/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if(curl_exec($ch) === false)
{
    echo 'Erro Curl: ' . curl_error($ch);
}
else
{
    echo 'Operação concluída sem erros';
}
?>
```

### Veja também

- [curl\_errno()](function.curl-errno.md) - Retorna o número do último erro
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
