# Cria uma nova referência fraca

> **Fonte / Source:** https://www.php.net/manual/pt_BR/weakreference.create.php

---

# WeakReference::create

(PHP 7 >= 7.4.0, PHP 8)

WeakReference::create — Cria uma nova referência fraca

### Descrição

public static function **WeakReference::create**([object](language.types.object.md) `$object`): [WeakReference](class.weakreference.md)

Cria uma nova [WeakReference](class.weakreference.md).

### Parâmetros

`object`
:   O objeto a ser referenciado fracamente.

### Valor Retornado

Retorna um novo objeto [WeakReference](class.weakreference.md), ou a instância existente se já houver uma [WeakReference](class.weakreference.md) para o mesmo objeto.

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
