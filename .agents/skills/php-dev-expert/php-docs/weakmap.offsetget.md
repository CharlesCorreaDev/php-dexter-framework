# Retorna o valor apontado por um certo objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/weakmap.offsetget.php

---

# WeakMap::offsetGet

(PHP 8)

WeakMap::offsetGet — Retorna o valor apontado por um certo objeto

### Descrição

public function **WeakMap::offsetGet**([object](language.types.object.md) `$object`): [mixed](language.types.mixed.md)

Retorna o valor apontado por um certo objeto.

### Parâmetros

`object`
:   Algum objeto contido como chave em um mapa.

### Valor Retornado

Retorna o valor associado ao objeto passado como argumento.

### Erros/Exceções

Lança uma exceção da classe [Error](class.error.md) em caso de falha.

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
