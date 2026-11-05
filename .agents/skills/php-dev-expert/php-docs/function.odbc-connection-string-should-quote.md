# Determina se um valor na string de conexão ODBC deveria ser envolvido por chaves

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-connection-string-should-quote.php

---

# odbc\_connection\_string\_should\_quote

(PHP 8 >= 8.2.0)

odbc\_connection\_string\_should\_quote — Determina se um valor na string de conexão ODBC deveria ser envolvido por chaves

### Descrição

function **odbc\_connection\_string\_should\_quote**([string](language.types.string.md) `$str`): [bool](language.types.boolean.md)

Determina se um valor na string de conexão ODBC deveria ser envolvido
por chaves; isto é, se ele contém caracteres especiais.

Observe que esta função não verifica se a string já está envolvida entre chaves; uma
string já envolvida por chaves conterá caracteres que farão com que esta
função retorne true. Deve-se chamar a função
[odbc\_connection\_string\_is\_quoted()](function.odbc-connection-string-is-quoted.md) para esta verificação.

### Parâmetros

`str`
:   A string a ser verificada.

### Valor Retornado

**`true`** se a string deveria ser envolvida por chaves; **`false`** caso contrário.

### Veja também

- [odbc\_connection\_string\_quote()](function.odbc-connection-string-quote.md) - Envolve entre chaves um valor string de conexão ODBC
- [odbc\_connection\_string\_is\_quoted()](function.odbc-connection-string-is-quoted.md) - Determina se uma string de conexão ODBC está entre chaves

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
