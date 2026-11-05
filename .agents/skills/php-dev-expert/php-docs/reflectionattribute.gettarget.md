# Retorna o alvo do atributo como uma máscara de bits

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionattribute.gettarget.php

---

# ReflectionAttribute::getTarget

(PHP 8)

ReflectionAttribute::getTarget — Retorna o alvo do atributo como uma máscara de bits

### Descrição

public function **ReflectionAttribute::getTarget**(): [int](language.types.integer.md)

Obtém o alvo do atributo como uma máscara de bits.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Obtém o alvo do atributo como uma máscara de bits das
[constantes **`Attribute::TARGET_*`**](class.attribute.md#attribute.constants).

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
