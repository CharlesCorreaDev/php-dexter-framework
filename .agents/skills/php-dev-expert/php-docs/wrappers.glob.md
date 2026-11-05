# Encontra caminhos que correspondem a um padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.glob.php

---

# glob://

glob:// — Encontra caminhos que correspondem a um padrão

### Descrição

O empacotador de fluxo glob:.

### Uso

- glob://

### Opções

**Sumário do Empacotador**

| Atributo | Suportado |
| --- | --- |
| Restrito por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Não |
| Restrito por [allow\_url\_include](filesystem.configuration.md#ini.allow-url-include) | Não |
| Permite Leitura | Não |
| Permite Escrita | Não |
| Permite Adição | Não |
| Permite Leitura e Escrita Simultâneas | Não |
| Suporta [stat()](function.stat.md) | Não |
| Suporta [unlink()](function.unlink.md) | Não |
| Suporta [rename()](function.rename.md) | Não |
| Suporta [mkdir()](function.mkdir.md) | Não |
| Suporta [rmdir()](function.rmdir.md) | Não |

### Examples

**Exemplo #1 Uso básico**

```
<?php
// Percorre todos os arquivos *.php no diretório ext/spl/examples/
// e mostra o nome do arquivo e seu tamanho
$it = new DirectoryIterator("glob://ext/spl/examples/*.php");
foreach($it as $f) {
    printf("%s: %.1FK\n", $f->getFilename(), $f->getSize()/1024);
}
?>
```

```
tree.php: 1.0K
findregex.php: 0.6K
findfile.php: 0.7K
dba_dump.php: 0.9K
nocvsdir.php: 1.1K
phar_from_dir.php: 1.0K
ini_groups.php: 0.9K
directorytree.php: 0.9K
dba_array.php: 1.1K
class_tree.php: 1.8K
```

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
