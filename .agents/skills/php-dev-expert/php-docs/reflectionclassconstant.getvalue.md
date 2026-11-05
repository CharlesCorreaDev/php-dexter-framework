# Obtém valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.getvalue.php

---

# ReflectionClassConstant::getValue

(PHP 7 >= 7.1.0, PHP 8)

ReflectionClassConstant::getValue — Obtém valor

### Descrição

public function **ReflectionClassConstant::getValue**(): [mixed](language.types.mixed.md)

Obtém o valor da constante de classe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor da constante de classe.

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
