# Obtém atributos da entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.getattr.php

---

# RarEntry::getAttr

(PECL rar >= 0.1)

RarEntry::getAttr — Obtém atributos da entrada

### Descrição

public function **RarEntry::getAttr**(): [int](language.types.integer.md)

Retorna os atributos dependentes do sistema operacional da entrada de arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna os atributos ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **RarEntry::getAttr()****

```
<?php

$rar_file = rar_open('example.rar') or die("Não foi possível abrir arquivo Rar");

$entry = rar_entry_get($rar_file, 'dir/in/the/archive') or die("Não foi possível pesquisar tal entrada");

$host_os = $entry->getHostOs();
$attr = $entry->getAttr();

switch($host_os) {
    case RAR_HOST_MSDOS:
    case RAR_HOST_OS2:
    case RAR_HOST_WIN32:
    case RAR_HOST_MACOS:
        printf("%c%c%c%c%c%c\n",
                ($attr & 0x08) ? 'V' : '.',
                ($attr & 0x10) ? 'D' : '.',
                ($attr & 0x01) ? 'R' : '.',
                ($attr & 0x02) ? 'H' : '.',
                ($attr & 0x04) ? 'S' : '.',
                ($attr & 0x20) ? 'A' : '.');
        break;
    case RAR_HOST_UNIX:
    case RAR_HOST_BEOS:
        switch ($attr & 0xF000)
        {
            case 0x4000:
                printf("d");
                break;
            case 0xA000:
                printf("l");
                break;
            default:
                printf("-");
                break;
        }
        printf("%c%c%c%c%c%c%c%c%c\n",
                ($attr & 0x0100) ? 'r' : '-',
                ($attr & 0x0080) ? 'w' : '-',
                ($attr & 0x0040) ? (($attr & 0x0800) ? 's':'x'):(($attr & 0x0800) ? 'S':'-'),
                ($attr & 0x0020) ? 'r' : '-',
                ($attr & 0x0010) ? 'w' : '-',
                ($attr & 0x0008) ? (($attr & 0x0400) ? 's':'x'):(($attr & 0x0400) ? 'S':'-'),
                ($attr & 0x0004) ? 'r' : '-',
                ($attr & 0x0002) ? 'w' : '-',
                ($attr & 0x0001) ? 'x' : '-');
        break;
}

rar_close($rar_file);

?>
```

### Veja também

- [RarEntry::getHostOs()](rarentry.gethostos.md) - Obtém sistema operacional host de entrada
- As constantes em [RarEntry](class.rarentry.md)

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
