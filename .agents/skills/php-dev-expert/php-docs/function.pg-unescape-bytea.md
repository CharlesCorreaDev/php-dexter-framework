# Desfaz escape binário para tipo bytea

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-unescape-bytea.php

---

# pg\_unescape\_bytea

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_unescape\_bytea — 
Desfaz escape binário para tipo bytea

### Descrição

function **pg\_unescape\_bytea**([string](language.types.string.md) `$string`): [string](language.types.string.md)

**pg\_unescape\_bytea()** remove o escape dos valores de dados
bytea do PostgreSQL. Ele retorna a string sem escape, possivelmente contendo dados binários.

> **Nota**:
>
> Quando seleciona-se um tipo bytea com `SELECT`, o PostgreSQL retorna valores de bytes octais
> prefixados com '\' (por exemplo, \032). Os usuários devem converter de volta para o
> formato binário manualmente.

### Parâmetros

`string`
:   Uma [string](language.types.string.md) contendo dados bytea do PostgreSQL a serem convertidos em
    uma string binária PHP.

### Valor Retornado

Uma [string](language.types.string.md) contendo os dados sem escape.

### Examples

**Exemplo #1 Exemplo de **pg\_unescape\_bytea()****

```
<?php
  // Conecta-se ao banco de dados
  $dbconn = pg_connect('dbname=foo');

  // Obtém os dados do bytea
  $res = pg_query("SELECT data FROM gallery WHERE name='Pine trees'");
  $raw = pg_fetch_result($res, 'data');

  // Converte para binário e envia para o navegador
  header('Content-type: image/jpeg');
  echo pg_unescape_bytea($raw);
?>
```

### Veja também

- [pg\_escape\_bytea()](function.pg-escape-bytea.md) - Escapa uma string para inserção em um campo bytea
- [pg\_escape\_string()](function.pg-escape-string.md) - Escapa uma string para consulta

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
