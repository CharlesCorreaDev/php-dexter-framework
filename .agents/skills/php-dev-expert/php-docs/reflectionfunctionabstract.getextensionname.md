# Obtém o nome da extensão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getextensionname.php

---

# ReflectionFunctionAbstract::getExtensionName

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getExtensionName — Obtém o nome da extensão

### Descrição

public function **ReflectionFunctionAbstract::getExtensionName**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome das extensões.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome da extensão que definiu a função,
ou **`false`** para funções definidas pelo usuário.

### Veja também

- [ReflectionFunctionAbstract::getExtension()](reflectionfunctionabstract.getextension.md) - Obtém informações da extensão

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
