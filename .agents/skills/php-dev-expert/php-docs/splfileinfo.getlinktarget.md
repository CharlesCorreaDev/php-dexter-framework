# Obtém o alvo de um link

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getlinktarget.php

---

# SplFileInfo::getLinkTarget

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

SplFileInfo::getLinkTarget — Obtém o alvo de um link

### Descrição

public function **SplFileInfo::getLinkTarget**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o alvo de um link do sistema de arquivos.

> **Nota**:
>
> O alvo pode não ser o caminho real no sistema de arquivos. Use [SplFileInfo::getRealPath()](splfileinfo.getrealpath.md)
> para determinar o verdadeiro caminho no sistema de arquivos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o alvo do link do sistema de arquivos em caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

Lança [RuntimeException](class.runtimeexception.md) em caso de erro.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getLinkTarget()****

```
<?php
$info = new SplFileInfo('/Users/bbieber/workspace');
if ($info->isLink()) {
    var_dump($info->getLinkTarget());
    var_dump($info->getRealPath());
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(19) "Documents/workspace"
string(34) "/Users/bbieber/Documents/workspace"
```

### Veja também

- [SplFileInfo::isLink()](splfileinfo.islink.md) - Indica se um arquivo é um link
- [SplFileInfo::getRealPath()](splfileinfo.getrealpath.md) - Obtém o caminho absoluto para o arquivo

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
