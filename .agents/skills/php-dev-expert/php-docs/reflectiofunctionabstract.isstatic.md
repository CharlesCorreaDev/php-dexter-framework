# Verifica se a função é estática

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectiofunctionabstract.isstatic.php

---

# ReflectionFunctionAbstract::isStatic

(PHP 5, PHP 7, PHP 8)

ReflectionFunctionAbstract::isStatic — Verifica se a função é estática

### Descrição

public function **ReflectionFunctionAbstract::isStatic**(): [bool](language.types.boolean.md)

Verifica se a função é estática.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a função for estática, caso contrário **`false`**

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Este método foi atualizado. Anteriormente, era definido apenas em [ReflectionMethod](class.reflectionmethod.md). |

### Veja também

- [ReflectionMethod::isFinal()](reflectionmethod.isfinal.md) - Verifica se o método é final

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
