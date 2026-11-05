# Cria um dicionário usando um arquivo PWL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-broker-request-pwl-dict.php

---

# enchant\_broker\_request\_pwl\_dict

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_broker\_request\_pwl\_dict — Cria um dicionário usando um arquivo PWL

### Descrição

function **enchant\_broker\_request\_pwl\_dict**([EnchantBroker](class.enchantbroker.md) `$broker`, [string](language.types.string.md) `$filename`): [EnchantDictionary](class.enchantdictionary.md)|[false](language.types.singleton.md)

Cria um dicionário usando um arquivo PWL. Um arquivo PWL é um arquivo de palavras personalizadas com uma palavra por linha.

### Parâmetros

`broker`
:   Um agente Enchant retornado por [enchant\_broker\_init()](function.enchant-broker-init.md).

`filename`
:   Caminho para o arquivo PWL.
    Se não existir tal arquivo, um novo será criado, se possível.

### Valor Retornado

Retorna um recurso de dicionário em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `broker` agora espera uma instância de [EnchantBroker](class.enchantbroker.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [EnchantDictionary](class.enchantdictionary.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Veja também

- [enchant\_dict\_describe()](function.enchant-dict-describe.md) - Descreve um dicionário individual
- [enchant\_broker\_dict\_exists()](function.enchant-broker-dict-exists.md) - Informa se um dicionário existe ou não
- [enchant\_broker\_free\_dict()](function.enchant-broker-free-dict.md) - Libera um recurso de dicionário

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
