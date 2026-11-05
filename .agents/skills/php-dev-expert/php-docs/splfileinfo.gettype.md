# Obtém o tipo de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.gettype.php

---

# SplFileInfo::getType

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getType — Obtém o tipo de arquivo

### Descrição

public function **SplFileInfo::getType**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o tipo do arquivo referenciado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma [string](language.types.string.md) representando o tipo da entrada.
Pode ser um dos seguintes: `file`, `link`,
`dir`, `block`, `fifo`,
`char`, `socket` ou `unknown`, ou **`false`** em caso de falha.

### Erros/Exceções

Lança um [RuntimeException](class.runtimeexception.md) em caso de erro.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getType()****

```
<?php

$info = new SplFileInfo(__FILE__);
echo $info->getType().PHP_EOL;

$info = new SplFileInfo(dirname(__FILE__));
echo $info->getType();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
file
dir
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
