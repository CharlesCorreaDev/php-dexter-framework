# Pausa ou continua uma conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-pause.php

---

# curl\_pause

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

curl\_pause — Pausa ou continua uma conexão

### Descrição

function **curl\_pause**([CurlHandle](class.curlhandle.md) `$handle`, [int](language.types.integer.md) `$flags`): [int](language.types.integer.md)

Pausa ou continua uma sessão cURL. Uma sessão pode ser pausada enquanto uma transferência estiver em progresso,
em leitura, escrita, ou ambos, através de chamada a esta função a partir de uma chamade de retorno
registrada com [curl\_setopt()](function.curl-setopt.md).

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

`flags`
:   Uma das constantes **`CURLPAUSE_*`**.

### Valor Retornado

Retorna um código de erro (**`CURLE_OK`** se não houver erro).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
