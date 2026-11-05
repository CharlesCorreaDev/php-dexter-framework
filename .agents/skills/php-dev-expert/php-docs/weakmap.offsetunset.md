# Remove uma entrada do mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/weakmap.offsetunset.php

---

# WeakMap::offsetUnset

(PHP 8)

WeakMap::offsetUnset — Remove uma entrada do mapa

### Descrição

public function **WeakMap::offsetUnset**([object](language.types.object.md) `$object`): [void](language.types.void.md)

Remove uma entrada do mapa.

### Parâmetros

`object`
:   O objeto chave a ser removido do mapa.

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
