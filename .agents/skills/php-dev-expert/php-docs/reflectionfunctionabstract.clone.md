# Função de clone

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.clone.php

---

# ReflectionFunctionAbstract::\_\_clone

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::\_\_clone — Função de clone

### Descrição

private function **ReflectionFunctionAbstract::\_\_clone**(): [void](language.types.void.md)

Clona uma função.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Este método não é mais final. |

### Veja também

- [Clonagem de objetos](language.oop5.cloning.md)

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
