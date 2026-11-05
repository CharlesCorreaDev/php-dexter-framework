# Retorna se esta extensão é persistente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.ispersistent.php

---

# ReflectionExtension::isPersistent

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionExtension::isPersistent — Retorna se esta extensão é persistente

### Descrição

public function **ReflectionExtension::isPersistent**(): [bool](language.types.boolean.md)

Verifica se a extensão é persistente.

Uma extensão é persistente quando é carregada usando o php.ini.
Uma extensão é temporária, não persistente, quando é carregada com [dl()](function.dl.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** para extensões carregadas por [`extension`](ini.core.md#ini.extension), **`false`**
caso contrário.

### Veja também

- [ReflectionExtension::isTemporary()](reflectionextension.istemporary.md) - Retorna se esta extensão é temporária

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
