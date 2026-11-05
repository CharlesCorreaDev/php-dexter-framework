# Cria um novo dicionário usando uma etiqueta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-broker-request-dict.php

---

# enchant\_broker\_request\_dict

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_broker\_request\_dict — Cria um novo dicionário usando uma etiqueta

### Descrição

function **enchant\_broker\_request\_dict**([EnchantBroker](class.enchantbroker.md) `$broker`, [string](language.types.string.md) `$tag`): [EnchantDictionary](class.enchantdictionary.md)|[false](language.types.singleton.md)

Cria um novo dicionário usando a etiqueta de idioma não vazia para a qual se
deseja solicitar um dicionário ("en\_US", "pt\_BR", ...).

### Parâmetros

`broker`
:   Um agente Enchant retornado por [enchant\_broker\_init()](function.enchant-broker-init.md).

`tag`
:   Uma etiqueta descrevendo a localidade, por exemplo, pt\_BR, en\_US.

### Valor Retornado

Retorna um recurso de dicionário em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `broker` agora espera uma instância de [EnchantBroker](class.enchantbroker.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [EnchantDictionary](class.enchantdictionary.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Um exemplo de **enchant\_broker\_request\_dict()****

Verifica se um dicionário existe usando
[enchant\_broker\_dict\_exists()](function.enchant-broker-dict-exists.md) e o solicita.

```
<?php
$tag = 'en_US';
$broker = enchant_broker_init();
if (enchant_broker_dict_exists($broker,$tag)) {
    $dict = enchant_broker_request_dict($broker, $tag);
    var_dump($dict);
}
?>
```

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
