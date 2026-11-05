# Verifica se o código de erro fornecido indica falha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.intl-is-failure.php

---

# intl\_is\_failure

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

intl\_is\_failure — Verifica se o código de erro fornecido indica falha

### Descrição

function **intl\_is\_failure**([int](language.types.integer.md) `$errorCode`): [bool](language.types.boolean.md)

Verifica se o código de erro fornecido indica falha

### Parâmetros

`errorCode`
:   É um valor retornado pelas funções
    [intl\_get\_error\_code()](function.intl-get-error-code.md) ou
    [collator\_get\_error\_code()](collator.geterrorcode.md) .

### Valor Retornado

**`true`** se o código indica alguma falha e **`false`**
em caso de sucesso ou de um alerta.

### Examples

**Exemplo #1 Exemplo de **intl\_is\_failure()****

```
<?php
function check( $err_code )
{
    var_export( intl_is_failure( $err_code ) );
    echo "\n";
}

check( U_ZERO_ERROR );
check( U_USING_FALLBACK_WARNING );
check( U_ILLEGAL_ARGUMENT_ERROR );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
false
false
true
```

### Veja também

- [intl\_get\_error\_code()](function.intl-get-error-code.md) - Obtém o último código de erro
- [collator\_get\_error\_code()](collator.geterrorcode.md) - Obtém o último código de erro do agrupador
- **Collator-getErrorCode()**

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
