# Obtém o nome da função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getname.php

---

# ReflectionFunctionAbstract::getName

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getName — Obtém o nome da função

### Descrição

public function **ReflectionFunctionAbstract::getName**(): [string](language.types.string.md)

Obtém o nome de uma função.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome da função.

### Veja também

- [ReflectionFunctionAbstract::getExtensionName()](reflectionfunctionabstract.getextensionname.md) - Obtém o nome da extensão
- [ReflectionFunctionAbstract::isUserDefined()](reflectionfunctionabstract.isuserdefined.md) - Verifica se foi definido pelo usuário

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
