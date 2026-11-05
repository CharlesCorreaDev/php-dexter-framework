# Retorna se o atributo deste nome foi repetido em um elemento de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionattribute.isrepeated.php

---

# ReflectionAttribute::isRepeated

(PHP 8)

ReflectionAttribute::isRepeated — Retorna se o atributo deste nome foi repetido em um elemento de código

### Descrição

public function **ReflectionAttribute::isRepeated**(): [bool](language.types.boolean.md)

Retorna se o atributo deste nome foi repetido em um elemento de código.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** quando o atributo é usado repetidamente, caso contrário, **`false`**.

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
