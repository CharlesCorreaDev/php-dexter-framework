# Obtém informações da extensão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getextension.php

---

# ReflectionFunctionAbstract::getExtension

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getExtension — Obtém informações da extensão

### Descrição

public function **ReflectionFunctionAbstract::getExtension**(): [?](language.types.null.md)[ReflectionExtension](class.reflectionextension.md)

Obtém as informações de extensão de uma função.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

As informações de extensão, como um objeto [ReflectionExtension](class.reflectionextension.md),
ou **`null`** para funções definidas pelo usuário.

### Veja também

- [ReflectionFunctionAbstract::getExtensionName()](reflectionfunctionabstract.getextensionname.md) - Obtém o nome da extensão

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
