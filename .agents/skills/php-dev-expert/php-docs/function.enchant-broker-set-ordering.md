# Declara uma preferência de dicionários a serem usados ​​para o idioma

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-broker-set-ordering.php

---

# enchant\_broker\_set\_ordering

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_broker\_set\_ordering — Declara uma preferência de dicionários a serem usados ​​para o idioma

### Descrição

function **enchant\_broker\_set\_ordering**([EnchantBroker](class.enchantbroker.md) `$broker`, [string](language.types.string.md) `$tag`, [string](language.types.string.md) `$ordering`): [bool](language.types.boolean.md)

Declara uma preferência de dicionários a serem usados ​​para o idioma
descrito/referido por 'tag'. A ordem é uma lista delimitada por vírgulas
de nomes de provedores. Como uma exceção especial, a etiqueta "\*" pode ser
usada como uma etiqueta de idioma para declarar uma ordem padrão para qualquer
idioma que não declare explicitamente uma ordem.

### Parâmetros

`broker`
:   Um agente Enchant retornado por [enchant\_broker\_init()](function.enchant-broker-init.md).

`tag`
:   Etiqueta de idioma. A etiqueta especial "\*" pode ser usada como
    uma etiqueta de idioma para declarar uma ordem padrão para qualquer
    idioma que não declare explicitamente uma ordem.

`ordering`
:   Lista delimitada por vírgulas de nomes de provedores

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
