# Informa se uma palavra existe ou não nesta sessão de correção ortográfica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-dict-is-added.php

---

# enchant\_dict\_is\_added

(PHP 8)

enchant\_dict\_is\_added — Informa se uma palavra existe ou não nesta sessão de correção ortográfica

### Descrição

function **enchant\_dict\_is\_added**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`, [string](language.types.string.md) `$word`): [bool](language.types.boolean.md)

Informa se uma palavra existe ou não na sessão atual.

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

`word`
:   A palavra a ser procurada

### Valor Retornado

Retorna **`true`** se a palavra existe ou **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `dictionary` agora espera uma instância de [EnchantDictionary](class.enchantdictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [enchant\_dict\_add\_to\_session()](function.enchant-dict-add-to-session.md) - Adciona uma palavra a esta sessão de verificação de ortografia

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
