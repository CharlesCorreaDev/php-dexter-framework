# Adciona uma palavra a esta sessão de verificação de ortografia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-dict-add-to-session.php

---

# enchant\_dict\_add\_to\_session

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_dict\_add\_to\_session — Adciona uma palavra a esta sessão de verificação de ortografia

### Descrição

function **enchant\_dict\_add\_to\_session**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`, [string](language.types.string.md) `$word`): [void](language.types.void.md)

Adiciona uma palavra ao dicionário informado. Ela será adicionada somente para a
sessão ativa de verificação de ortografia.

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

`word`
:   A palavra a ser adicionada

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `dictionary` agora espera uma instância de [EnchantDictionary](class.enchantdictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md) - Cria um novo dicionário usando uma etiqueta

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
