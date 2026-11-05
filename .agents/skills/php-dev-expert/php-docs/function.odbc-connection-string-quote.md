# Envolve entre chaves um valor string de conexão ODBC

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-connection-string-quote.php

---

# odbc\_connection\_string\_quote

(PHP 8 >= 8.2.0)

odbc\_connection\_string\_quote — Envolve entre chaves um valor string de conexão ODBC

### Descrição

function **odbc\_connection\_string\_quote**([string](language.types.string.md) `$str`): [string](language.types.string.md)

Envolve adequadamente um valor para uma string de conexão, de acordo com as regras de ODBC.
Ou seja, ele será envolvido por chaves, e quaisquer chaves finais
serão escapadas. Isso deve ser feito para quaisquer valores
de string de conexão provenientes da entrada do usuário. Não fazer isso pode causar
problemas na análise da string de conexão ou pode levar à injeção de
valores na string de conexão.

Observe que esta função não verifica se a string já está
entre chaves, nem se a string precisa estar. Para esses verificações, use as funções
[odbc\_connection\_string\_is\_quoted()](function.odbc-connection-string-is-quoted.md) e
[odbc\_connection\_string\_should\_quote()](function.odbc-connection-string-should-quote.md), respectivamente.

### Parâmetros

`str`
:   A string a ser envolvida por chaves.

### Valor Retornado

Uma string envolvida por chaves, e adequadamente escapada.

### Examples

**Exemplo #1 Exemplo de **odbc\_connection\_string\_quote()****

Este exemplo envolve uma string com chaves e depois insere-a em uma string de conexão.
Observe que a string será envolvida com chaves, e a o caractere de chave final no
meio da string será escapado.

```
<?php
$value = odbc_connection_string_quote("foo}bar");
$connection_string = "DSN=PHP;UserValue=$value";
echo $connection_string;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
DSN=PHP;UserValue={foo}}bar}
```

### Veja também

- [odbc\_connection\_string\_is\_quoted()](function.odbc-connection-string-is-quoted.md) - Determina se uma string de conexão ODBC está entre chaves
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
