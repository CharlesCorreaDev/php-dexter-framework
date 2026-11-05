# Retorna o último erro do broker

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-broker-get-error.php

---

# enchant\_broker\_get\_error

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_broker\_get\_error — Retorna o último erro do broker

### Descrição

function **enchant\_broker\_get\_error**([EnchantBroker](class.enchantbroker.md) `$broker`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o último erro ocorrido neste broker.

### Parâmetros

`broker`
:   Um agente Enchant retornado por [enchant\_broker\_init()](function.enchant-broker-init.md).

### Valor Retornado

Retorne a string da mensagem se um erro for encontrado ou **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `broker` agora espera uma instância de [EnchantBroker](class.enchantbroker.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
