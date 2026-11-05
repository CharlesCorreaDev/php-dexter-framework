# Remove a word from the session dictionary

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-dict-remove-from-session.php

---

# enchant\_dict\_remove\_from\_session

(PHP 8 >= 8.5.0)

enchant\_dict\_remove\_from\_session — Remove a word from the session dictionary

### Descrição

function **enchant\_dict\_remove\_from\_session**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`, [string](language.types.string.md) `$word`): [void](language.types.void.md)

Removes a word that was previously added to the current spell-checking
session via [enchant\_dict\_add\_to\_session()](function.enchant-dict-add-to-session.md).

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

`word`
:   The word to remove from the session.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Throws a [ValueError](class.valueerror.md) if
`dictionary` is not usable, for example if it is
uninitialized or was already released with
[enchant\_broker\_free\_dict()](function.enchant-broker-free-dict.md).

### Veja também

- [enchant\_dict\_add\_to\_session()](function.enchant-dict-add-to-session.md) - Adciona uma palavra a esta sessão de verificação de ortografia
- [enchant\_dict\_remove()](function.enchant-dict-remove.md) - Add a word to the exclusion list and remove it from the personal dictionary
- **enchant\_dict\_is\_added\_to\_session()**

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
