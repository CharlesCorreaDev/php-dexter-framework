# Decodifica a parte codificada da URL fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-unescape.php

---

# curl\_unescape

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

curl\_unescape — Decodifica a parte codificada da URL fornecida

### Descrição

function **curl\_unescape**([CurlHandle](class.curlhandle.md) `$handle`, [string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Essa função decodifica a parte codificada da URL fornecida.

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

`string`
:   A URL codificada a ser decodificada.

### Valor Retornado

Retorna a string decodificada ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de [curl\_escape()](function.curl-escape.md)**

```
<?php
// Cria um identificador curl
$ch = curl_init('http://example.com/redirect.php');

// Envia a requisição HTTP e segue os redirecionamentos
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_exec($ch);

// Captura a última URL
$effective_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
// ie. "http://example.com/show_location.php?loc=M%C3%BCnchen"

// Decodifica a URL
$effective_url_decoded = curl_unescape($ch, $effective_url);
// "http://example.com/show_location.php?loc=München"
?>
```

### Notas

> **Nota**:
>
> **curl\_unescape()** não decodifica os símbolos de mais (+) em espaços. Mas [urldecode()](function.urldecode.md) faz isso.

### Veja também

- [curl\_escape()](function.curl-escape.md) - Codifica uma string para o formato URL
- [urlencode()](function.urlencode.md) - Codifica uma string no formato URL
- [urldecode()](function.urldecode.md) - Decodifica uma URL codificada
- [rawurlencode()](function.rawurlencode.md) - Codifica uma URL de acordo com RFC 3986
- [rawurldecode()](function.rawurldecode.md) - Decodifica uma URL

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
