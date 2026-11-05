# Vincula um objeto LOB ou uma string como objeto LOB a uma instrução preparada como parâmetros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob2-bind.php

---

# cubrid\_lob2\_bind

(PECL CUBRID >= 8.4.1)

cubrid\_lob2\_bind — Vincula um objeto LOB ou uma string como objeto LOB a uma instrução preparada como parâmetros

### Descrição

function **cubrid\_lob2\_bind**(  
    [resource](language.types.resource.md) `$req_identifier`,  
    [int](language.types.integer.md) `$bind_index`,  
    [mixed](language.types.mixed.md) `$bind_value`,  
    [string](language.types.string.md) `$bind_value_type` = ?  
): [bool](language.types.boolean.md)

A função **cubrid\_lob2\_bind()** é usada para vincular dados BLOB/CLOB
a um marcador correspondente de ponto de interrogação na instrução SQL passada à função
[cubrid\_prepare()](function.cubrid-prepare.md). Se o parâmetro `bind_value_type`
não for informado, a string será "BLOB" por padrão. Porém se a função
[cubrid\_lob2\_new()](function.cubrid-lob2-new.md) for usada antes, o parâmetro `bind_value_type`
será consistente com o parâmetro `type` na função [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) como o padrão.

### Parâmetros

`req_identifier`
:   Identificador de requisição como resultado de [cubrid\_prepare()](function.cubrid-prepare.md).

`bind_index`
:   Localização dos parâmetros de vinculação. Inicia em 1.

`bind_value`
:   Valor real para vinculação.

`bind_value_type`
:   Precisa ser "BLOB" ou "CLOB" e não diferencia maiúsculas de minúsculas. Se não informado, o padrão é "BLOB".

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_lob2\_bind()****

```
<?php
// Tabela: test_lob (id INT, contents CLOB)

$conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");

cubrid_execute($conn,"DROP TABLE if exists test_lob");
cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");

$req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES (?, ?)");

cubrid_bind($req,1, 3);

$lob = cubrid_lob2_new($conn, 'CLOB');
cubrid_lob2_bind($req, 2, $lob);

cubrid_execute($req);

cubrid_bind($req, 1, 4);

cubrid_lob2_bind($req, 2, 'CUBRID LOB2 TEST', 'CLOB');

cubrid_execute($req);

cubrid_disconnect($conn);
?>
```

### Veja também

- [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) - Cria um objeto LOB
- [cubrid\_lob2\_close()](function.cubrid-lob2-close.md) - Fecha objeto LOB

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
