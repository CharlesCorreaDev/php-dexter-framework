# Clone

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.clone.php

---

# ReflectionExtension::\_\_clone

(PHP 5, PHP 7, PHP 8)

ReflectionExtension::\_\_clone — Clone

### Descrição

private function **ReflectionExtension::\_\_clone**(): [void](language.types.void.md)

O método clone evita que um objeto seja clonado. Objetos de reflexão
não podem ser clonados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado, se chamado ocorrerá um erro fatal.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Este método não é mais final. |

### Veja também

- [ReflectionExtension::\_\_construct()](reflectionextension.construct.md) - Constrói um ReflectionExtension
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
