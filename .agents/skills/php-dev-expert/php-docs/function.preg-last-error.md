# Retorna o código de erro da última expressão regular PCRE executada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.preg-last-error.php

---

# preg\_last\_error

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

preg\_last\_error — Retorna o código de erro da última expressão regular PCRE executada

### Descrição

function **preg\_last\_error**(): [int](language.types.integer.md)

Retorna o código de erro da última expressão regular PCRE executada.

**Exemplo #1 Exemplo de **preg\_last\_error()****

```
<?php

preg_match('/(?:\D+|<\d+>)*[!?]/', 'foobar foobar foobar');

if (preg_last_error() == PREG_BACKTRACK_LIMIT_ERROR) {
    echo 'Limite de rastreamento retroativo ultrapassado!';
}

?>
```

O exemplo acima produzirá:

```
Limite de rastreamento retroativo ultrapassado!
```

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma das seguintes constantes ([explicadas em sua própria página](pcre.constants.md)):

- **`PREG_NO_ERROR`**
- **`PREG_INTERNAL_ERROR`**
- **`PREG_BACKTRACK_LIMIT_ERROR`** (veja também [pcre.backtrack\_limit](pcre.configuration.md#ini.pcre.backtrack-limit))
- **`PREG_RECURSION_LIMIT_ERROR`** (veja também [pcre.recursion\_limit](pcre.configuration.md#ini.pcre.recursion-limit))
- **`PREG_BAD_UTF8_ERROR`**
- **`PREG_BAD_UTF8_OFFSET_ERROR`**
- **`PREG_JIT_STACKLIMIT_ERROR`**

### Veja também

- [preg\_last\_error\_msg()](function.preg-last-error-msg.md) - Retorna a mensagem de erro da última execução de expressão regular PCRE

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
