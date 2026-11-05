# Obtém um objeto SplFileInfo para o caminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getpathinfo.php

---

# SplFileInfo::getPathInfo

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getPathInfo — Obtém um objeto SplFileInfo para o caminho

### Descrição

public function **SplFileInfo::getPathInfo**([?](language.types.null.md)[string](language.types.string.md) `$class` = **`null`**): [?](language.types.null.md)[SplFileInfo](class.splfileinfo.md)

Obtém um objeto [SplFileInfo](class.splfileinfo.md) para o diretório pai do arquivo atual.

### Parâmetros

`class`
:   Nome de uma classe derivada de [SplFileInfo](class.splfileinfo.md) a ser usada, ou ele mesmo se for **`null`**.

### Valor Retornado

Retorna um objeto [SplFileInfo](class.splfileinfo.md) para o diretório pai do arquivo em caso de sucesso, ou **`null`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `class` é anulável agora. |

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getPathInfo()****

```
<?php
$info = new SplFileInfo('/usr/bin/php');
$parent_info = $info->getPathInfo();
var_dump($parent_info->getRealPath());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(8) "/usr/bin"
```

### Veja também

- [SplFileInfo::setInfoClass()](splfileinfo.setinfoclass.md) - Define a classe usada com SplFileInfo::getFileInfo e SplFileInfo::getPathInfo

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
