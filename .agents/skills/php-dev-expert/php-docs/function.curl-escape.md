# Codifica uma string para o formato URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-escape.php

---

# curl\_escape

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

curl\_escape — Codifica uma string para o formato URL

### Descrição

function **curl\_escape**([CurlHandle](class.curlhandle.md) `$handle`, [string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Essa função codifica uma string para o formato URL de acordo com [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986).

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

`string`
:   A string a ser codificada.

### Valor Retornado

Retorna a string codificada ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **curl\_escape()****

```
<?php

// Cria um identificador curl
$ch = curl_init();

// Codifica uma string usada como parâmetro GET
$location = curl_escape($ch, 'Hofbräuhaus / München');
// Resultado: Hofbr%C3%A4uhaus%20%2F%20M%C3%BCnchen

// Cria uma URL com a string codificada
$url = "http://example.com/add_location.php?location={$location}";
// Resultado: http://example.com/add_location.php?location=Hofbr%C3%A4uhaus%20%2F%20M%C3%BCnchen

// Define as opções e envia a requisição HTTP
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);

?>
```

### Veja também

- [curl\_unescape()](function.curl-unescape.md) - Decodifica a parte codificada da URL fornecida
- [urlencode()](function.urlencode.md) - Codifica uma string no formato URL
- [rawurlencode()](function.rawurlencode.md) - Codifica uma URL de acordo com RFC 3986
- [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986)

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
