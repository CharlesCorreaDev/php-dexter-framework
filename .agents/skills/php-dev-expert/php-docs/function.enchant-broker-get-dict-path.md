# Obtém o caminho do diretório para um determinado back-end

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-broker-get-dict-path.php

---

# enchant\_broker\_get\_dict\_path

(PHP 5 >= 5.3.1, PHP 7, PHP 8, PECL enchant >= 1.0.1)

enchant\_broker\_get\_dict\_path — Obtém o caminho do diretório para um determinado back-end

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **enchant\_broker\_get\_dict\_path**([EnchantBroker](class.enchantbroker.md) `$broker`, [int](language.types.integer.md) `$type`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o caminho do diretório para um determinado back-end.

### Parâmetros

`broker`
:   Um agente Enchant retornado por [enchant\_broker\_init()](function.enchant-broker-init.md).

`type`
:   O tipo dos dicionários, ou seja **`ENCHANT_MYSPELL`**
    ou **`ENCHANT_ISPELL`**.

### Valor Retornado

Retorna o caminho do diretório do dicionário em caso de
sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi descontinuada. |
| 8.0.0 | O parâmetro `broker` agora espera uma instância de [EnchantBroker](class.enchantbroker.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Notas

> **Nota**:
>
> Esta função está disponível somente se a extensão foi compilada com Enchant v1.

### Veja também

- [enchant\_broker\_set\_dict\_path()](function.enchant-broker-set-dict-path.md) - Define o caminho do diretório para um determinado back-end

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
