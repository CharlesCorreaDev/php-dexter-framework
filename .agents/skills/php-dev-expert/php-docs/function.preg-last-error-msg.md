# Retorna a mensagem de erro da última execução de expressão regular PCRE

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.preg-last-error-msg.php

---

# preg\_last\_error\_msg

(PHP 8)

preg\_last\_error\_msg — Retorna a mensagem de erro da última execução de expressão regular PCRE

### Descrição

function **preg\_last\_error\_msg**(): [string](language.types.string.md)

Retorna a mensagem de erro da última execução de expressão regular PCRE.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a mensagem de erro em caso de sucesso, ou `"No error"` se nenhum
erro tiver ocorrido.

### Examples

**Exemplo #1 Exemplo de **preg\_last\_error\_msg()****

```
<?php

preg_match('/(?:\D+|<\d+>)*[!?]/', 'foobar foobar foobar');

if (preg_last_error() !== PREG_NO_ERROR) {
    echo preg_last_error_msg();
}

?>
```

O exemplo acima produzirá:

```
Backtrack limit exhausted
```

### Veja também

- [preg\_last\_error()](function.preg-last-error.md) - Retorna o código de erro da última expressão regular PCRE executada

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
