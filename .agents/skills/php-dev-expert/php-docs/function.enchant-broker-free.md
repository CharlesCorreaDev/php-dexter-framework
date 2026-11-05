# Libera o recurso do broker e seus dicionários

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-broker-free.php

---

# enchant\_broker\_free

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_broker\_free — Libera o recurso do broker e seus dicionários

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **enchant\_broker\_free**([EnchantBroker](class.enchantbroker.md) `$broker`): [bool](language.types.boolean.md)

Libera o recurso do broker e seus dicionários
A partir do PHP 8.0.0, é recomendado remover a definição deste objeto em vez de chamar esta função.

### Parâmetros

`broker`
:   Um agente Enchant retornado por [enchant\_broker\_init()](function.enchant-broker-init.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi descontinuada em favor de remover a definição do objeto. |
| 8.0.0 | O parâmetro `broker` agora espera uma instância de [EnchantBroker](class.enchantbroker.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [enchant\_broker\_init()](function.enchant-broker-init.md) - Cria um novo objeto broker

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
