# Retorna se esta extensão é temporária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.istemporary.php

---

# ReflectionExtension::isTemporary

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionExtension::isTemporary — Retorna se esta extensão é temporária

### Descrição

public function **ReflectionExtension::isTemporary**(): [bool](language.types.boolean.md)

Verifique se a extensão é temporária.

Uma extensão é temporária quando é carregada com [dl()](function.dl.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** para extensões carregadas por [dl()](function.dl.md),
**`false`** caso contrário.

### Veja também

- [ReflectionExtension::isPersistent()](reflectionextension.ispersistent.md) - Retorna se esta extensão é persistente

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
