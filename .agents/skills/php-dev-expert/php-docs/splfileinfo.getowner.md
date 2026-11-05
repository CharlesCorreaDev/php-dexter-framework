# Obtém o proprietário do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getowner.php

---

# SplFileInfo::getOwner

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getOwner — Obtém o proprietário do arquivo

### Descrição

public function **SplFileInfo::getOwner**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o proprietário do arquivo. O ID do proprietário é retornado em formato numérico.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O ID do proprietário em formato numérico em caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

Lança [RuntimeException](class.runtimeexception.md) em caso de erro.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getOwner()****

```
<?php
$info = new SplFileInfo('example.jpg');
echo $info->getFilename() . ' belongs to owner id ' . $info->getOwner() . "\n";
print_r(posix_getpwuid($info->getOwner()));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
example.jpg belongs to user id 501
Array
(
    [name] => tom
    [passwd] => x
    [uid] => 501
    [gid] => 42
    [gecos] => Tom Cat
    [dir] => /home/tom
    [shell] => /bin/bash
)
```

### Veja também

- [posix\_getpwuid()](function.posix-getpwuid.md) - Retorna informações sobre um usuário por ID de usuário
- [SplFileInfo::getGroup()](splfileinfo.getgroup.md) - Obtém o grupo do arquivo

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
