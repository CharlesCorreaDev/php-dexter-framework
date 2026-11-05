# Determina se uma string de conexão ODBC está entre chaves

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-connection-string-is-quoted.php

---

# odbc\_connection\_string\_is\_quoted

(PHP 8 >= 8.2.0)

odbc\_connection\_string\_is\_quoted — Determina se uma string de conexão ODBC está entre chaves

### Descrição

function **odbc\_connection\_string\_is\_quoted**([string](language.types.string.md) `$str`): [bool](language.types.boolean.md)

Determina se uma string está entre chaves adequadamente para um valor de string
de conexão ODBC. A cotação da string de conexão ODBC é executada usando chaves,
e as chaves finais dentro de uma string devem ser escapadas
repetindo-as duas vezes, semelhante ao SQL.

### Parâmetros

`str`
:   A string a ser verificada.

### Valor Retornado

**`true`** se estiver adequadamente entre chaves, **`false`** se caso contrário.

### Veja também

- [odbc\_connection\_string\_quote()](function.odbc-connection-string-quote.md) - Envolve entre chaves um valor string de conexão ODBC
- [odbc\_connection\_string\_should\_quote()](function.odbc-connection-string-should-quote.md) - Determina se um valor na string de conexão ODBC deveria ser envolvido por chaves

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
