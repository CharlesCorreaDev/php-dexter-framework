# Determina se uma propriedade é abstrata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.isabstract.php

---

# ReflectionProperty::isAbstract

(PHP 8 >= 8.4.0)

ReflectionProperty::isAbstract — Determina se uma propriedade é abstrata

### Descrição

public function **ReflectionProperty::isAbstract**(): [bool](language.types.boolean.md)

Determina se uma propriedade é
[abstrata](language.oop5.abstract.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a propriedade estiver marcada como `abstract`, **`false`** caso contrário.

### Veja também

- [Propriedades abstratas](language.oop5.abstract.md)

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
