# Obtém propriedades estáticas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getstaticproperties.php

---

# ReflectionClass::getStaticProperties

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getStaticProperties — Obtém propriedades estáticas

### Descrição

public function **ReflectionClass::getStaticProperties**(): [array](language.types.array.md)

Obtenha as propriedades estáticas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

As propriedades estáticas, como um [array](language.types.array.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | O tipo de retorno de **ReflectionClass::getStaticProperties()** foi alterado para [array](language.types.array.md) de `?array`. |

### Veja também

- [ReflectionClass::getStaticPropertyValue()](reflectionclass.getstaticpropertyvalue.md) - Obtém o valor da propriedade estática
- [ReflectionClass::setStaticPropertyValue()](reflectionclass.setstaticpropertyvalue.md) - Define o valor da propriedade estática pública

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
