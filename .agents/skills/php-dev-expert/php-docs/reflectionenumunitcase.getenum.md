# Obtém o reflexo do enum deste caso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionenumunitcase.getenum.php

---

# ReflectionEnumUnitCase::getEnum

(PHP 8 >= 8.1.0)

ReflectionEnumUnitCase::getEnum — Obtém o reflexo do enum deste caso

### Descrição

public function **ReflectionEnumUnitCase::getEnum**(): [ReflectionEnum](class.reflectionenum.md)

Obtém o reflexo do enum deste caso.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma instância [ReflectionEnum](class.reflectionenum.md) que descreve o Enum
a qual este caso pertence.

### Veja também

- [Enumerações](language.enumerations.md)

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
