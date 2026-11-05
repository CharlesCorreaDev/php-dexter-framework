# Obtém o tamanho do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getsize.php

---

# SplFileInfo::getSize

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getSize — Obtém o tamanho do arquivo

### Descrição

public function **SplFileInfo::getSize**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o tamanho do arquivo em bytes para o arquivo referenciado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O tamanho do arquivo em bytes em caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

Um [RuntimeException](class.runtimeexception.md) será lançado se o arquivo não existir ou ocorrer um erro.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getSize()****

```
<?php
$info = new SplFileInfo('example.jpg');
echo $info->getFilename() . " " . $info->getSize();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
example.jpg 15385
```

### Veja também

- [filesize()](function.filesize.md) - Obtém o tamanho do arquivo

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
