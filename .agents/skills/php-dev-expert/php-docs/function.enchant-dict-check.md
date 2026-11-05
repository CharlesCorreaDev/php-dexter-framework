# Verifica se uma palavra está escrita de forma correta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-dict-check.php

---

# enchant\_dict\_check

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_dict\_check — Verifica se uma palavra está escrita de forma correta

### Descrição

function **enchant\_dict\_check**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`, [string](language.types.string.md) `$word`): [bool](language.types.boolean.md)

Se a palavra está escrita de forma correta, retorna **`true`**, caso contrário retorna **`false`**.

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

`word`
:   A palavra a ser verificada

### Valor Retornado

Retorna **`true`** se a palavra estiver escrita corretamente, **`false`** caso contrário.

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
