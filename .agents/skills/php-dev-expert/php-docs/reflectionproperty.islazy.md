# Verifica se uma propriedade é lenta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.islazy.php

---

# ReflectionProperty::isLazy

(PHP 8 >= 8.4.0)

ReflectionProperty::isLazy — Verifica se uma propriedade é lenta

### Descrição

public function **ReflectionProperty::isLazy**([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

Verifica se uma propriedade é lenta.

### Parâmetros

`object`
:   O objeto no qual a propriedade será verificada.

### Valor Retornado

Retorna **`true`** se a propriedade for lenta, **`false`** caso contrário.

### Veja também

- [Objetos lentos](language.oop5.lazy-objects.md)

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
