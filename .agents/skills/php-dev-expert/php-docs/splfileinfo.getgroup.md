# Obtém o grupo do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getgroup.php

---

# SplFileInfo::getGroup

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getGroup — Obtém o grupo do arquivo

### Descrição

public function **SplFileInfo::getGroup**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o grupo do arquivo. O ID do grupo é retornado em formato numérico.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O ID do grupo em formato numérico em caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

Lança [RuntimeException](class.runtimeexception.md) em caso de erro.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getGroup()****

```
<?php
$info = new SplFileInfo('example.jpg');
echo $info->getFilename() . ' belongs to group id ' . $info->getGroup() . "\n";
print_r(posix_getgrgid($info->getGroup()));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
example.jpg belongs to group id 42
Array
(
    [name] => toons
    [passwd] => x
    [members] => Array
        (
            [0] => tom
            [1] => jerry
        )
    [gid] => 42
)
```

### Veja também

- [filegroup()](function.filegroup.md) - Lê o grupo do arquivo
- [posix\_getgrgid()](function.posix-getgrgid.md) - Retorna informação sobre um grupo a partir de um ID de grupo

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
