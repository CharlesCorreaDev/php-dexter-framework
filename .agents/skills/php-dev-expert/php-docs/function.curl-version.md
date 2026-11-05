# Obtém informação de versão do cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-version.php

---

# curl\_version

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

curl\_version — Obtém informação de versão do cURL

### Descrição

function **curl\_version**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna informação sobre a versão do cURL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array associativo com os seguintes elementos:

| Chave | Descrição do Valor |
| --- | --- |
| version\_number | Número de 24 bits da versão do cURL |
| version | String com a versão do cURL |
| ssl\_version\_number | Número de 24 bits da versão do OpenSSL |
| ssl\_version | String com a versão do OpenSSL |
| libz\_version | String com a versão do zlib |
| host | Informação sobre o servidor onde o cURL foi compilado |
| age |  |
| features | Uma máscara de bits das constantes **`CURL_VERSION_*`** |
| protocols | Um array de nomes de protocolos suportados pelo cURL |
| feature\_list | Um array associativo de todos os recursos conhecidos do cURL, e se eles são suportados (**`true`**) ou não (**`false`**) |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Chave `features_list` adicionada. |
| 8.0.0 | O parâmetro opcional `age` foi removido. |
| 7.4.0 | O parâmetro opcional `age` foi descontinuado; se um valor for passado, será ignorado. |

### Examples

**Exemplo #1 Exemplo de **curl\_version()****

Este exemplo verifica quais características estão disponíveis
na compilação do cURL usando a máscara de bits `'features'` retornada
por **curl\_version()**.

```
<?php
// Obtém o array de versão do curl
$version = curl_version();

// Estes são os campos de bit que podem ser usados
// para verificar características na compilação do curl
$bitfields = Array(
            'CURL_VERSION_IPV6',
            'CURL_VERSION_KERBEROS4',
            'CURL_VERSION_SSL',
            'CURL_VERSION_LIBZ'
            );

foreach($bitfields as $feature)
{
    echo $feature . ($version['features'] & constant($feature) ? ' presente' : ' ausente');
    echo PHP_EOL;
}
?>
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
