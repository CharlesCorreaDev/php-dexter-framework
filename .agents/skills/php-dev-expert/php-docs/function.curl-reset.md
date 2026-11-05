# Redefine todas as opções de um identificador de sessão libcurl

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-reset.php

---

# curl\_reset

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

curl\_reset — Redefine todas as opções de um identificador de sessão libcurl

### Descrição

function **curl\_reset**([CurlHandle](class.curlhandle.md) `$handle`): [void](language.types.void.md)

Essa função reinicializa todas as opções configuradas no identificador cURL informado para os valores padrões.

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **curl\_reset()****

```
<?php
// Cria um identificador curl
$ch = curl_init();

// Configura a opção CURLOPT_USERAGENT
curl_setopt($ch, CURLOPT_USERAGENT, "My test user-agent");

// Redefine todas as opções que foram configuradas anteriormente
curl_reset($ch);

// Envia a requisição HTTP
curl_setopt($ch, CURLOPT_URL, 'http://example.com/');
curl_exec($ch); // o user-agent configurado anteriormente não será enviado porque foi redefinido por curl_reset
?>
```

### Notas

> **Nota**:
>
> **curl\_reset()** também reseta a URL informada no parâmetro [curl\_init()](function.curl-init.md).

### Veja também

- [curl\_setopt()](function.curl-setopt.md) - Define uma opção para uma transferência cURL

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
