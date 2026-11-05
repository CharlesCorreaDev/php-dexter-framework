# Lê bytes de dados BLOB/CLOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob2-read.php

---

# cubrid\_lob2\_read

(PECL CUBRID >= 8.4.1)

cubrid\_lob2\_read — Lê bytes de dados BLOB/CLOB

### Descrição

function **cubrid\_lob2\_read**([resource](language.types.resource.md) `$lob_identifier`, [int](language.types.integer.md) `$len`): [string](language.types.string.md)

A função **cubrid\_lob2\_read()** lê o número de bytes especificados em `len` dos
dados LOB e retorna os bytes lidos.

### Parâmetros

`lob_identifier`
:   Identificador LOB como um resultado de [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) ou obtido do conjunto de resultados.

`len`
:   Comprimento de buffer a ser lido dos dados do LOB.

### Valor Retornado

Retorna o conteúdo como uma string, **`false`** quando não houver mais dados ou **`null`** em caso de falha.

### Examples

**Exemplo #1 Exemplo 1 de **cubrid\_lob2\_read()****

```
<?php
// test_lob (id INT, contents CLOB)

$conn = cubrid_connect("localhost", 33000, "demodb", "public", "");

$req = cubrid_execute($conn, "select * from test_lob");

$row = cubrid_fetch_row($req, CUBRID_LOB);

print "A posição agora é " . cubrid_lob2_tell($row[1]) . "\n";

cubrid_lob2_seek($row[1], 10, CUBRID_CURSOR_FIRST);

print "\nPosição após mover para frente é " . cubrid_lob2_tell($row[1]) . "\n";

$data = cubrid_lob2_read($row[1], 12);

print "\nPosição após a leitura é " . cubrid_lob2_tell($row[1]) . "\n";

print $data . "\n";

cubrid_lob2_seek($row[1], 5, CUBRID_CURSOR_CURRENT);

print "\nPosição após mover novamente é " . cubrid_lob2_tell($row[1]) . "\n";

$data = cubrid_lob2_read($row[1], 20);
print $data . "\n";

cubrid_disconnect($conn);
?>
```

**Exemplo #2 Exemplo 2 de **cubrid\_lob2\_read()****

```
<?php
// test_lob (id INT, contents CLOB)

$conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");

$req = cubrid_execute($conn, "select * from test_lob");

$row = cubrid_fetch_row($req, CUBRID_LOB);

while (true) {
    if ($data = cubrid_lob2_read($row[1], 1024)) {
        print $data . "\n";
    }
    elseif ($data === false) {
        print "Não há mais dados\n";
        break;
    }
    else {
        print "Houve algum erro\n";
        break;
    }
}

cubrid_disconnect($conn);
?>
```

### Veja também

- [cubrid\_lob2\_write()](function.cubrid-lob2-write.md) - Escreve em um objeto LOB
- [cubrid\_lob2\_seek()](function.cubrid-lob2-seek.md) - Move o cursor de um objeto LOB
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
