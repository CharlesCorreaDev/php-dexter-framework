# Obtém o nome do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getfilename.php

---

# ReflectionFunctionAbstract::getFileName

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getFileName — Obtém o nome do arquivo

### Descrição

public function **ReflectionFunctionAbstract::getFileName**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome do arquivo de uma função definida pelo usuário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do arquivo no qual a função foi definida.
Se a classe estiver definida no núcleo do PHP ou em uma extensão do PHP, **`false`**
é retornado.

### Veja também

- [ReflectionFunctionAbstract::getNamespaceName()](reflectionfunctionabstract.getnamespacename.md) - Obtém o nome do namespace

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
