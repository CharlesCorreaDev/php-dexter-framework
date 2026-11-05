# Escapa uma string para uso em um filtro LDAP ou DN

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-escape.php

---

# ldap\_escape

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

ldap\_escape — Escapa uma string para uso em um filtro LDAP ou DN

### Descrição

function **ldap\_escape**([string](language.types.string.md) `$value`, [string](language.types.string.md) `$ignore` = "", [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)

Escapa a string informada em `value` para uso no contexto especificado por
`flags`.

### Parâmetros

`value`
:   O valor a ser escapado.

`ignore`
:   Caracteres ignorados no escape.

`flags`
:   O contexto no qual a string escapada será usada:
    **`LDAP_ESCAPE_FILTER`** para filtro usados com
    [ldap\_search()](function.ldap-search.md) ou
    **`LDAP_ESCAPE_DN`** para DNs.
    Se nanhuma opção for passada, todos os caracteres são escapados.

### Valor Retornado

Retorna a string escapada.

### Examples

Ao construir um filtro LDAP, deve-se usar ldap\_escape com a opção LDAP\_ESCAPE\_FILTER.

**Exemplo #1 Pesquisando um endereço de e-mail**

```
<?php
// $ds é uma instância válida de LDAP\Connection para um servidor de diretório

// $mail é um endereço de e-mail fornecido pelo usuário em um formulário

$base   = "o=My Company, c=US";
$filter = "(mail=".ldap_escape($mail, "", LDAP_ESCAPE_FILTER).")";

$sr = ldap_search($ds, $base, $filter, array("sn", "givenname", "mail"));

$info = ldap_get_entries($ds, $sr);

echo $info["count"]." entradas retornadas\n";
?>
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
