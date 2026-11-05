# Obtém o código de erro da última operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.geterrorcode.php

---

# IntlDateFormatter::getErrorCode

# datefmt\_get\_error\_code

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::getErrorCode -- datefmt\_get\_error\_code — Obtém o código de erro da última operação

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::getErrorCode**(): [int](language.types.integer.md)

Estilo procedural

function **datefmt\_get\_error\_code**([IntlDateFormatter](class.intldateformatter.md) `$formatter`): [int](language.types.integer.md)

Retorn o código de erro da última operação de formatação.

### Parâmetros

`formatter`
:   O recurso do formatador.

### Valor Retornado

O código de erro, um dos valores de UErrorCode. Se não houver erro, o valor é U\_ZERO\_ERROR.

### Examples

**Exemplo #1 Exemplo de **datefmt\_get\_error\_code()****

```
<?php
$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
$str = datefmt_format($fmt,0);

printf(
    "ERRO: %s (%d)\n",
    datefmt_get_error_message($fmt),
    datefmt_get_error_code($fmt)
);
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new IntlDateFormatter(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
$str = $fmt->format(0);

printf(
    "ERRO: %s (%d)\n",
    $fmt->getErrorMessage(),
    $fmt->getErrorCode()
);
?>
```

O exemplo acima produzirá:

```
ERRO: U_ZERO_ERROR (0)
```

### Veja também

- [datefmt\_get\_error\_message()](intldateformatter.geterrormessage.md) - Obtém a mensagem de erro da última operação
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
