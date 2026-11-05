# Obtém o texto do erro da última operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/messageformatter.geterrormessage.php

---

# MessageFormatter::getErrorMessage

# msgfmt\_get\_error\_message

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

MessageFormatter::getErrorMessage -- msgfmt\_get\_error\_message — Obtém o texto do erro da última operação

### Descrição

Estilo orientado a objetos

public function **MessageFormatter::getErrorMessage**(): [string](language.types.string.md)

Estilo procedural

function **msgfmt\_get\_error\_message**([MessageFormatter](class.messageformatter.md) `$formatter`): [string](language.types.string.md)

Obtém o texto do erro da última operação.

### Parâmetros

`formatter`
:   O formatador de mensagem

### Valor Retornado

A descrição do último erro.

### Examples

**Exemplo #1 Exemplo de **msgfmt\_get\_error\_message()****

```
<?php
$fmt = msgfmt_create("en_US", "{0, number} monkeys on {1, number} trees");
$str = msgfmt_format($fmt, array());
if(!$str) {
    echo "ERROR: ".msgfmt_get_error_message($fmt) . " (" . msgfmt_get_error_code($fmt) . ")\n";
}
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new MessageFormatter("en_US", "{0, number} monkeys on {1, number} trees");
$str = $fmt->format(array());
if(!$str) {
    echo "ERROR: ".$fmt->getErrorMessage() . " (" . $fmt->getErrorCode() . ")\n";
}
?>
```

O exemplo acima produzirá:

```
ERROR: msgfmt_format: not enough parameters: U_ILLEGAL_ARGUMENT_ERROR (1)
```

### Veja também

- [msgfmt\_get\_error\_code()](messageformatter.geterrorcode.md) - Obtém o código de erro da última operação
- [intl\_get\_error\_code()](function.intl-get-error-code.md) - Obtém o último código de erro
- [intl\_is\_failure()](function.intl-is-failure.md) - Verifica se o código de erro fornecido indica falha

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
