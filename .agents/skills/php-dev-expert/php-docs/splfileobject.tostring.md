# Retorna a linha atual como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.tostring.php

---

# SplFileObject::\_\_toString

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::\_\_toString — Retorna a linha atual como uma string

### Descrição

public function **SplFileObject::\_\_toString**(): [string](language.types.string.md)

Este método retornará a linha atual como uma string.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a linha atual como uma string.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.14, 8.2.1 | Alterado de um alias de [SplFileObject::fgets()](splfileobject.fgets.md) para uma implementação de [SplFileObject::current()](splfileobject.current.md) que retorna uma string CSV quando a opção **`SplFileObject::READ_CSV`** está definida. |
| 7.2.19, 7.3.6 | Alterado de um alias de [SplFileObject::current()](splfileobject.current.md) para um alias de [SplFileObject::fgets()](splfileobject.fgets.md). |

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
