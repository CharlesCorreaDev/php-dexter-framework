# Lê informações sobre um arquivo usando um ponteiro de arquivo aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fstat.php

---

# fstat

(PHP 4, PHP 5, PHP 7, PHP 8)

fstat — Lê informações sobre um arquivo usando um ponteiro de arquivo aberto

### Descrição

function **fstat**([resource](language.types.resource.md) `$stream`): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém estatísticas do arquivo aberto pelo ponteiro
`stream`. Esta função é similar à função
[stat()](function.stat.md) exceto que ela opera em um
ponteiro de arquivo aberto em vez de um nome de arquivo.

### Parâmetros

`stream`
:   Um [resource](language.types.resource.md) de ponteiro do sistema de arquivos
    que normalmente é criado usando [fopen()](function.fopen.md).

### Valor Retornado

Retorna um array com as estatísticas de um arquivo. O formato do array
é descrito em detalhes na página do manual sobre [stat()](function.stat.md).
Retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **fstat()****

```
<?php

// abre um arquivo
$fp = fopen("/etc/passwd", "r");

// colhe as estatísticas
$fstat = fstat($fp);

// fecha o arquivo
fclose($fp);

// imprime somente a parte de índices associativos
print_r(array_slice($fstat, 13));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [dev] => 771
    [ino] => 488704
    [mode] => 33188
    [nlink] => 1
    [uid] => 0
    [gid] => 0
    [rdev] => 0
    [size] => 1114
    [atime] => 1061067181
    [mtime] => 1056136526
    [ctime] => 1056136526
    [blksize] => 4096
    [blocks] => 8
)
```

### Notas

> **Nota**:
>
> Esta função não funcionará em
> [arquivos remotos](features.remote-files.md), pois o arquivo a
> ser examinado deve ser acessível através do sistema de arquivos do servidor.

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
