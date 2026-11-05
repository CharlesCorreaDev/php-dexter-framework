# Move o cursor de um objeto LOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob2-seek.php

---

# cubrid\_lob2\_seek

(PECL CUBRID >= 8.4.1)

cubrid\_lob2\_seek — Move o cursor de um objeto LOB

### Descrição

function **cubrid\_lob2\_seek**([resource](language.types.resource.md) `$lob_identifier`, [int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$origin` = CUBRID\_CURSOR\_CURRENT): [bool](language.types.boolean.md)

A função **cubrid\_lob2\_seek()** é usada para mover a posição do
cursor de um objeto LOB pelo valor definido no argumento `offset`,
para a direção definida no argumento `origin`.

Para definir o argumento `origin`, pode-se usar **`CUBRID_CURSOR_FIRST`**
para definir a posição do cursor avançando o número de unidades definidas por `offset`
desde o primeiro início. Neste caso, `offset` precisa ser um valor positivo.

Se for usado **`CUBRID_CURSOR_CURRENT`** para `origin`, pode-se
avançar ou retroceder e `offset` pode ser positivo ou negativo.

Se for usado **`CUBRID_CURSOR_LAST`** para `origin`, pode-se
mover o número de unidades definido por `offset` para trás a partir do final do objeto LOB e
`offset` pode ser somente positivo.

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

**Exemplo #1 Exemplo de **cubrid\_lob2\_seek()****

```
<?php
// test_lob (id INT, contents CLOB)
$conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");

cubrid_execute($conn,"DROP TABLE if exists test_lob");
cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");
$req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES(2, ?)");

$lob = cubrid_lob2_new($conn, 'CLOB');
$len = cubrid_lob2_write($lob, "Hello world");

cubrid_lob2_seek($lob, 0, CUBRID_CURSOR_LAST);
cubrid_lob2_write($lob, "beautiful");

cubrid_lob2_seek($lob, 15, CUBRID_CURSOR_FIRST);
$data = cubrid_lob2_read($lob, 5);

echo $data."\n";

cubrid_lob2_bind($req, 1, $lob);
cubrid_execute($req);

cubrid_disconnect($conn);
?>
```

### Veja também

- [cubrid\_lob2\_read()](function.cubrid-lob2-read.md) - Lê bytes de dados BLOB/CLOB
- [cubrid\_lob2\_write()](function.cubrid-lob2-write.md) - Escreve em um objeto LOB
- [cubrid\_lob2\_seek64()](function.cubrid-lob2-seek64.md) - Move o cursor de um objeto LOB
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
