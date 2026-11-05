# Obtém nome simbólico para um código de erro informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.intl-error-name.php

---

# intl\_error\_name

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

intl\_error\_name — Obtém nome simbólico para um código de erro informado

### Descrição

function **intl\_error\_name**([int](language.types.integer.md) `$errorCode`): [string](language.types.string.md)

Retorna o nome do código de erro ICU.

### Parâmetros

`errorCode`
:   Código de erro ICU.

### Valor Retornado

A string retornada será igual ao nome da constante do código
de erro..

### Examples

**Exemplo #1 Exemplo de **intl\_error\_name()****

```
<?php
$coll     = collator_create( 'en_RU' );
$err_code = collator_get_error_code( $coll );

printf( "Nome simbólico para %d é %s\n.", $err_code, intl_error_name( $err_code ) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Nome simbólico para -128 é U_USING_FALLBACK_WARNING.
```

### Veja também

- [intl\_is\_failure()](function.intl-is-failure.md) - Verifica se o código de erro fornecido indica falha
- [intl\_get\_error\_code()](function.intl-get-error-code.md) - Obtém o último código de erro
- [intl\_get\_error\_message()](function.intl-get-error-message.md) - Obtém a descrição do último erro

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
