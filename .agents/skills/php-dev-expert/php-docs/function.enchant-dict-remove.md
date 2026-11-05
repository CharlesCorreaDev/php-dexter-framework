# Add a word to the exclusion list and remove it from the personal dictionary

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-dict-remove.php

---

# enchant\_dict\_remove

(PHP 8 >= 8.5.0)

enchant\_dict\_remove — Add a word to the exclusion list and remove it from the personal dictionary

### Descrição

function **enchant\_dict\_remove**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`, [string](language.types.string.md) `$word`): [void](language.types.void.md)

Adds a word to the exclusion list of the given dictionary, preventing it
from being accepted as correctly spelled. If the word was previously added
to the personal dictionary, it is also removed from there.

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

`word`
:   The word to exclude.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Throws a [ValueError](class.valueerror.md) if
`dictionary` is not usable, for example if it is
uninitialized or was already released with
[enchant\_broker\_free\_dict()](function.enchant-broker-free-dict.md).

### Veja também

- [enchant\_dict\_add()](function.enchant-dict-add.md) - Adiciona uma palavra à lista de palavras personalizadas
- [enchant\_dict\_remove\_from\_session()](function.enchant-dict-remove-from-session.md) - Remove a word from the session dictionary
- [enchant\_dict\_is\_added()](function.enchant-dict-is-added.md) - Informa se uma palavra existe ou não nesta sessão de correção ortográfica

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
