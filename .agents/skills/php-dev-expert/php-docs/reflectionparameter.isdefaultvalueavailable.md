# Verifica se um valor padrão está disponível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.isdefaultvalueavailable.php

---

# ReflectionParameter::isDefaultValueAvailable

(PHP 5 >= 5.0.3, PHP 7, PHP 8)

ReflectionParameter::isDefaultValueAvailable — Verifica se um valor padrão está disponível

### Descrição

public function **ReflectionParameter::isDefaultValueAvailable**(): [bool](language.types.boolean.md)

Verifica se um valor padrão para o parâmetro está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se um valor padrão estiver disponível, caso contrário **`false`**

### Veja também

- [ReflectionParameter::getDefaultValue()](reflectionparameter.getdefaultvalue.md) - Obtém o valor padrão do parâmetro
- [ReflectionParameter::isDefaultValueConstant()](reflectionparameter.isdefaultvalueconstant.md) - Retorna se o valor padrão deste parâmetro é uma constante
- [ReflectionParameter::getName()](reflectionparameter.getname.md) - Obtém o nome do parâmetro

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
