# Fecha uma sessão cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-close.php

---

# curl\_close

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

curl\_close — Fecha uma sessão cURL

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.5.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **curl\_close**([CurlHandle](class.curlhandle.md) `$handle`): [void](language.types.void.md)

> **Nota**:
>
> Esta função não tem efeito. Antes do PHP 8.0.0, esta função era usada para fechar o recurso.

Fecha uma sessão cURL e libera todos os recursos. O identificador cURL,
`handle`, também é removido.

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Esta função foi descontinuada. |
| 8.0.0 | Esta função agora é um NOP. |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Iniciando uma nova sessão cURL e acessando uma página web**

```
<?php
// Cria uma nova sessão cURL
$ch = curl_init();

// Configura uma URL e outras opções apropriadas
curl_setopt($ch, CURLOPT_URL, "http://www.exemplo.com.br/");
curl_setopt($ch, CURLOPT_HEADER, 0);

// Executa a sessão
curl_exec($ch);

// Fecha a sessão cURL e libera recursos
curl_close($ch);
?>
```

### Veja também

- [curl\_init()](function.curl-init.md) - Inicializa uma sessão cURL
- [curl\_multi\_close()](function.curl-multi-close.md) - Remove todos os identificadores cURL de um multi-identificador

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
