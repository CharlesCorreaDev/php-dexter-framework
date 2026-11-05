# Tipos únicos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.singleton.php

---

## Tipos únicos

Tipos únicos são aqueles que permitem apenas um valor.
O PHP tem suporte para dois tipos únicos:
[false](language.types.singleton.md) a partir do PHP 8.0.0, e [true](language.types.singleton.md)
a partir do PHP 8.2.0.

**Aviso**

Antes do PHP 8.2.0, o tipo [false](language.types.singleton.md)
só podia ser usado como parte de um
[tipo união](language.types.type-system.md#language.types.type-system.composite.union).

> **Nota**:
>
> Não é possível definir tipos únicos customizados. Considere usar
> [enumerações](language.types.enumerations.md) como alternativa.

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
