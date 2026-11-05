# Obtém um objeto SplFileInfo para o arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getfileinfo.php

---

# SplFileInfo::getFileInfo

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getFileInfo — Obtém um objeto SplFileInfo para o arquivo

### Descrição

public function **SplFileInfo::getFileInfo**([?](language.types.null.md)[string](language.types.string.md) `$class` = **`null`**): [SplFileInfo](class.splfileinfo.md)

Este método obtém um objeto [SplFileInfo](class.splfileinfo.md) para o arquivo referenciado.

### Parâmetros

`class`
:   Nome de uma classe derivada de [SplFileInfo](class.splfileinfo.md) para usar.

### Valor Retornado

Um objeto [SplFileInfo](class.splfileinfo.md) criado para o arquivo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `class` é anulável agora. |

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
