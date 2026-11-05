# Obtém o subcaminho e o nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivedirectoryiterator.getsubpathname.php

---

# RecursiveDirectoryIterator::getSubPathname

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveDirectoryIterator::getSubPathname — Obtém o subcaminho e o nome

### Descrição

public function **RecursiveDirectoryIterator::getSubPathname**(): [string](language.types.string.md)

Obtém o subcaminho e o nome do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O subcaminho (subdiretório) e o nome do arquivo.

### Examples

**Exemplo #1 Exemplo de **getSubPathname()****

```
$directory = '/tmp';

      $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

      foreach ($it as $file) {
          echo 'SubPathName: ' . $it->getSubPathname() . "\n";
          echo 'SubPath:     ' . $it->getSubPath() . "\n\n";
      }
```

O exemplo acima produzirá
algo semelhante a:

```
SubPathName: fruit/apple.xml
     SubPath:     fruit

     SubPathName: stuff.xml
     SubPath:

     SubPathName: veggies/carrot.xml
     SubPath:     veggies
```

### Veja também

- [RecursiveDirectoryIterator::getSubPath()](recursivedirectoryiterator.getsubpath.md) - Obtém o subcaminho
- [RecursiveDirectoryIterator::key()](recursivedirectoryiterator.key.md) - Retorna o caminho e o nome do arquivo do elemento atual do diretório

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
