# Copia um identificador cURL com todas as suas opções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-copy-handle.php

---

# curl\_copy\_handle

(PHP 5, PHP 7, PHP 8)

curl\_copy\_handle — Copia um identificador cURL com todas as suas opções

### Descrição

function **curl\_copy\_handle**([CurlHandle](class.curlhandle.md) `$handle`): [CurlHandle](class.curlhandle.md)|[false](language.types.singleton.md)

Copia um identificador cURL mantendo as opções escolhidas.

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

### Valor Retornado

Retorna um novo identificador cURL, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância [CurlHandle](class.curlhandle.md); anteriormente, retornava um recurso do tipo [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Copiando um identificador cURL**

```
<?php
// Cria uma nova sessão cURL
$ch = curl_init();

// Configura uma URL e outras opções apropriadas
curl_setopt($ch, CURLOPT_URL, 'http://www.exemplo.com.br/');
curl_setopt($ch, CURLOPT_HEADER, 0);

// Copia o identificador
$ch2 = curl_copy_handle($ch);

// Executa a sessão (abrindo a página exemplo.com.br)
curl_exec($ch2);
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
