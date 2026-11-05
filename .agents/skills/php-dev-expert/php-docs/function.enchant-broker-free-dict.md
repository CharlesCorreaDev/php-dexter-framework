# Libera um recurso de dicionário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-broker-free-dict.php

---

# enchant\_broker\_free\_dict

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_broker\_free\_dict — Libera um recurso de dicionário

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **enchant\_broker\_free\_dict**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`): [bool](language.types.boolean.md)

Libera um recurso de dicionário
A partir do PHP 8.0.0, é recomendado remover a definição deste objeto em vez de chamar esta função.

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi descontinuada em favor de remover a definição do objeto. |
| 8.0.0 | `dictionary` agora espera um objeto [EnchantDictionary](class.enchantdictionary.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Veja também

- [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md) - Cria um novo dicionário usando uma etiqueta
- [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md) - Cria um dicionário usando um arquivo PWL

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
