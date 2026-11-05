# Remove uma posição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayaccess.offsetunset.php

---

# ArrayAccess::offsetUnset

(PHP 5, PHP 7, PHP 8)

ArrayAccess::offsetUnset — Remove uma posição

### Descrição

public function **ArrayAccess::offsetUnset**([mixed](language.types.mixed.md) `$offset`): [void](language.types.void.md)

Destrói uma posição.

> **Nota**:
>
> Este método *não* será chamado ao se fazer conversão de tipo com
> [(unset)](language.types.type-juggling.md#language.types.typecasting)

### Parâmetros

`offset`
:   A posição a ser removida.

### Valor Retornado

Nenhum valor é retornado.

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
