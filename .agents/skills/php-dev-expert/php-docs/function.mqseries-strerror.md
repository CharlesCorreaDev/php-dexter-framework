# Retorna a mensagem de erro correspondente a um código de resultado (MQRC)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-strerror.php

---

# mqseries\_strerror

(PECL mqseries >= 0.10.0)

mqseries\_strerror — Retorna a mensagem de erro correspondente a um código de resultado (MQRC)

### Descrição

function **mqseries\_strerror**([int](language.types.integer.md) `$reason`): [string](language.types.string.md)

**mqseries\_strerror()**
retorna a mensagem que corresponde ao código de resultado de razão.

### Parâmetros

`reason`
:   Código de razão que qualifica o código de conclusão.

### Valor Retornado

Representação em string da mensagem do código de razão.

### Examples

**Exemplo #1
Exemplo de
**mqseries\_strerror()****

```
<?php
    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("open CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
        exit;
    }
?>
```

O exemplo acima produzirá:

```
Connx CompCode:2 Reason:2059 Text:Queue manager not available for connection.
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
