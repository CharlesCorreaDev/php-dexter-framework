# Retorna o conjunto de caracteres de conexão CUBRID atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-client-encoding.php

---

# cubrid\_client\_encoding

(PECL CUBRID >= 8.3.1)

cubrid\_client\_encoding — Retorna o conjunto de caracteres de conexão CUBRID atual

### Descrição

function **cubrid\_client\_encoding**([resource](language.types.resource.md) `$conn_identifier` = ?): [string](language.types.string.md)

Esta função retorna o conjunto de caracteres de conexão CUBRID atual e é semelhante
à função CUBRID [cubrid\_get\_charset()](function.cubrid-get-charset.md).

### Parâmetros

`conn_identifier`
:   A conexão CUBRID. Se o identificador da conexão não for especificado, será assumido a última conexão aberta por [cubrid\_connect()](function.cubrid-connect.md).

### Valor Retornado

Uma string que representa o conjunto de caracteres da conexão CUBRID em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_client\_encoding()****

```
<?php

$con = cubrid_connect("localhost", 33000, "demodb");
if (!$con)
{
    die('Não foi possível conectar.');
}

printf("Conjunto de caracteres atual do CUBRID: %s\n", cubrid_client_encoding($con));

?>
```

O exemplo acima produzirá:

```
Conjunto de caracteres atual do CUBRID: iso8859-1
```

### Veja também

- [cubrid\_get\_charset()](function.cubrid-get-charset.md) - Retorna o conjunto de caracteres da conexão CUBRID atual

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
