# Retorna o conteúdo de um identificador cURL se CURLOPT_RETURNTRANSFER estiver definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-multi-getcontent.php

---

# curl\_multi\_getcontent

(PHP 5, PHP 7, PHP 8)

curl\_multi\_getcontent — Retorna o conteúdo de um identificador cURL se **`CURLOPT_RETURNTRANSFER`** estiver definido

### Descrição

function **curl\_multi\_getcontent**([CurlHandle](class.curlhandle.md) `$handle`): [?](language.types.null.md)[string](language.types.string.md)

Se **`CURLOPT_RETURNTRANSFER`** for uma opção configurada para um identificador específico,
esta função retornará o conteúdo do identificador cURL na forma
de uma string.

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

### Valor Retornado

Retorna o conteúdo de um identificador cURL se **`CURLOPT_RETURNTRANSFER`** estiver definida ou **`null`** se não estiver.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [curl\_multi\_init()](function.curl-multi-init.md) - Retorna um multi-identificador cURL

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
