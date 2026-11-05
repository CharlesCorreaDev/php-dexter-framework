# Obtém o subcaminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivedirectoryiterator.getsubpath.php

---

# RecursiveDirectoryIterator::getSubPath

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveDirectoryIterator::getSubPath — Obtém o subcaminho

### Descrição

public function **RecursiveDirectoryIterator::getSubPath**(): [string](language.types.string.md)

Retorna o subcaminho relativo ao diretório fornecido no construtor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O subcaminho.

### Examples

**Exemplo #1 Exemplo de **getSubPath()****

```
$directory = '/tmp';

      $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

      foreach ($it as $file) {
          echo 'SubPathName: ' . $it->getSubPathName() . "\n";
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

- [RecursiveDirectoryIterator::getSubPathName()](recursivedirectoryiterator.getsubpathname.md) - Obtém o subcaminho e o nome
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
