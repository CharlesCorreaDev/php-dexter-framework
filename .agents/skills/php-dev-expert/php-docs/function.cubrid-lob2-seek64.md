# Move o cursor de um objeto LOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob2-seek64.php

---

# cubrid\_lob2\_seek64

(PECL CUBRID >= 8.4.1)

cubrid\_lob2\_seek64 — Move o cursor de um objeto LOB

### Descrição

function **cubrid\_lob2\_seek64**([resource](language.types.resource.md) `$lob_identifier`, [string](language.types.string.md) `$offset`, [int](language.types.integer.md) `$origin` = CUBRID\_CURSOR\_CURRENT): [bool](language.types.boolean.md)

A função **cubrid\_lob2\_seek64()** é usada para mover a posição
do cursor de um objeto LOB pelo valor definido no argumento `offset`,
na direção definida no argumento `origin`.
Se `offset` for maior que o máximo número inteiro,
pode-se usar esta função.

Para definir o argumento `origin`, pode-se usar **`CUBRID_CURSOR_FIRST`**
para definir a posição do cursor avançando o número de unidades definidas por `offset`
desde o primeiro início. Neste caso, `offset` precisa ser um valor positivo.

Se for usado **`CUBRID_CURSOR_CURRENT`** para `origin`, pode-se
avançar ou retroceder e `offset` pode ser positivo ou negativo.

Se for usado **`CUBRID_CURSOR_LAST`** para `origin`, pode-se mover o número de
unidades definido por `offset` para trás a partir do final do objeto LOB e `offset` pode ser somente positivo.

> **Nota**:
>
> Se esta função for usada para mover a posição do cursor do objeto LOB, deve-se passar `offset` como uma string.

### Parâmetros

`lob_identifier`
:   Identificador LOB como um resultado de [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) ou obtido do conjunto de resultados.

`offset`
:   Número de unidades para mover o cursor.

`origin`
:   Este parâmetro pode ter as seguintes constantes como valores:

    CUBRID\_CURSOR\_FIRST: move para frente desde o primeiro início.

    CUBRID\_CURSOR\_CURRENT: move para frente ou para trás desde a posição atual.

    CUBRID\_CURSOR\_LAST: move para trás desde o final do objeto LOB.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_lob2\_seek64()****

```
<?php
// test_lob (id INT, contents CLOB)
// Comprimento de dados de doc_1.txt deve ser maior que 20101029056306120215.

$conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");

cubrid_execute($conn,"DROP TABLE if exists test_lob");
cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");

$req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES (?, ?)");
cubrid_bind($req, 1, 1);

$lob = cubrid_lob2_new($conn, "clob");
cubrid_lob2_import($lob, "doc_1.txt");
cubrid_lob2_bind($req, 2, $lob, 'CLOB'); // ou cubrid_lob2_bind($req, 2, $lob);

cubrid_execute($req);

cubrid_lob2_close($lob);

$req = cubrid_execute($conn, "select * from test_lob");
$row = cubrid_fetch_row($req, CUBRID_LOB);
$lob = $row[1];

cubrid_lob2_seek64($lob, "20101029056306120215", CUBRID_CURSOR_FIRST);
$data = cubrid_lob2_read($lob, 20);
echo $data."\n";
cubrid_disconnect($conn);
?>
```

### Veja também

- [cubrid\_lob2\_read()](function.cubrid-lob2-read.md) - Lê bytes de dados BLOB/CLOB
- [cubrid\_lob2\_write()](function.cubrid-lob2-write.md) - Escreve em um objeto LOB
- [cubrid\_lob2\_seek()](function.cubrid-lob2-seek.md) - Move o cursor de um objeto LOB
- [cubrid\_lob2\_tell()](function.cubrid-lob2-tell.md) - Informa a posição do cursor do objeto LOB
- [cubrid\_lob2\_tell64()](function.cubrid-lob2-tell64.md) - Informa a posição do cursor do objeto LOB
- [cubrid\_lob2\_size()](function.cubrid-lob2-size.md) - Obtém o tamanho do objeto LOB
- [cubrid\_lob2\_size64()](function.cubrid-lob2-size64.md) - Obtém o tamanho do objeto LOB

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
