# Obtém informações sobre o arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fstat.php

---

# SplFileObject::fstat

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::fstat — Obtém informações sobre o arquivo

### Descrição

public function **SplFileObject::fstat**(): [array](language.types.array.md)

Coleta as estatísticas do arquivo. Comporta-se de forma idêntica a [fstat()](function.fstat.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com as estatísticas do arquivo; o formato do array
é descrito detalhadamente na página do manual do [stat()](function.stat.md).

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fstat()****

```
<?php
$file = new SplFileObject("/etc/passwd");
$stat = $file->fstat();

// Imprime somente a parte associada
print_r(array_slice($stat, 13));

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

### Veja também

- [fstat()](function.fstat.md) - Lê informações sobre um arquivo usando um ponteiro de arquivo aberto
- [stat()](function.stat.md) - Obtém informações sobre um arquivo

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
