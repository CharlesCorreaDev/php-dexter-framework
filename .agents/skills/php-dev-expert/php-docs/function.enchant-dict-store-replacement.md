# Adiciona uma correção para uma palavra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-dict-store-replacement.php

---

# enchant\_dict\_store\_replacement

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_dict\_store\_replacement — Adiciona uma correção para uma palavra

### Descrição

function **enchant\_dict\_store\_replacement**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`, [string](language.types.string.md) `$misspelled`, [string](language.types.string.md) `$correct`): [void](language.types.void.md)

Adiciona uma correção para 'misspelled' (a palavra que precisa ser corrigida) usando 'correct' (a palavra corrigida).
Observe que ao substituir a palavra mal escrita com a corrigida, é bem possível que
futuras ocorrências da palavra mal escrita sejam substituídas pela corrigida. Portanto,
a palavra corrigida pode acabar aparecendo na lista de sugestões.

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

`misspelled`
:   A palavra a ser corrigida

`correct`
:   A palavra corrigida

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `dictionary` agora espera uma instância de [EnchantDictionary](class.enchantdictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
