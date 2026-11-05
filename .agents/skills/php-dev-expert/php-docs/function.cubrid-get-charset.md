# Retorna o conjunto de caracteres da conexão CUBRID atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-get-charset.php

---

# cubrid\_get\_charset

(PECL CUBRID >= 8.3.0)

cubrid\_get\_charset — Retorna o conjunto de caracteres da conexão CUBRID atual

### Descrição

function **cubrid\_get\_charset**([resource](language.types.resource.md) `$conn_identifier`): [string](language.types.string.md)

Esta função retorna o conjunto de caracteres da conexão CUBRID atual e é similar
à função compatível do MySQL CUBRID
[cubrid\_client\_encoding()](function.cubrid-client-encoding.md).

### Parâmetros

`conn_identifier`
:   A conexão CUBRID.

### Valor Retornado

Uma string que representa o conjunto de caracteres da conexão CUBRID em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_get\_charset()****

```
<?php

$con = cubrid_connect("localhost", 33000, "demodb");
if (!$con)
{
    die('Não foi possível conectar.');
}

printf("Conjunto de caracteres atual do CUBRID: %s\n", cubrid_get_charset($con));

?>
```

O exemplo acima produzirá:

```
Conjunto de caracteres atual do CUBRID: iso8859-1
```

### Veja também

- [cubrid\_client\_encoding()](function.cubrid-client-encoding.md) - Retorna o conjunto de caracteres de conexão CUBRID atual

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
