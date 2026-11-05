# Retorna o último erro da sessão de correção ortográfica atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-dict-get-error.php

---

# enchant\_dict\_get\_error

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_dict\_get\_error — Retorna o último erro da sessão de correção ortográfica atual

### Descrição

function **enchant\_dict\_get\_error**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o último erro da sessão de correção ortográfica atual.

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

### Valor Retornado

Retorna a mensagem de erro como uma string ou **`false`** se não tiver ocorrido nenhum erro.

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
