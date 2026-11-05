# Obtém sistema operacional host de entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.gethostos.php

---

# RarEntry::getHostOs

(PECL rar >= 0.1)

RarEntry::getHostOs — Obtém sistema operacional host de entrada

### Descrição

public function **RarEntry::getHostOs**(): [int](language.types.integer.md)

Retorna o código do sistema operacional host da entrada do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código do sistema operacional host ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **RarEntry::getHostOs()** (versão >= 2.0.0)**

```
<?php

$rar_file = rar_open('exemplo.rar') or die("Falha ao abrir arquivo Rar");

$entry = rar_entry_get($rar_file, 'Dir/arquivo.txt') or die("Falha ao pesquisar tal entrada");

switch ($entry->getHostOs()) {
    case RarEntry::HOST_MSDOS:
        echo "MS-DOS\n";
        break;
    case RarEntry::HOST_OS2:
        echo "OS2\n";
        break;
    case RarEntry::HOST_WIN32:
        echo "Win32\n";
        break;
    case RarEntry::HOST_MACOS:
        echo "MacOS\n";
        break;
    case RarEntry::HOST_UNIX:
        echo "Unix/Linux\n";
        break;
    case RarEntry::HOST_BEOS:
        echo "BeOS\n";
        break;
}

?>
```

**Exemplo #2 Exemplo de **RarEntry::getHostOs()** (versão <= 1.0.0)**

```
<?php

$rar_file = rar_open('exemplo.rar') or die("Falha ao abrir arquivo Rar");

$entry = rar_entry_get($rar_file, 'Dir/arquivo.txt') or die("Falha ao pesquisar tal entrada");

switch ($entry->getHostOs()) {
    case RAR_HOST_MSDOS:
        echo "MS-DOS\n";
        break;
    case RAR_HOST_OS2:
        echo "OS2\n";
        break;
    case RAR_HOST_WIN32:
        echo "Win32\n";
        break;
    case RAR_HOST_MACOS:
        echo "MacOS\n";
        break;
    case RAR_HOST_UNIX:
        echo "Unix/Linux\n";
        break;
    case RAR_HOST_BEOS:
        echo "BeOS\n";
        break;
}

?>
```

### Veja também

- [RarEntry::extract()](rarentry.extract.md) - Extrai entrada do arquivo

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
