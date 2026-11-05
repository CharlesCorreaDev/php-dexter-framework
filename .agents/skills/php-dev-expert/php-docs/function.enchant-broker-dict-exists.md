# Informa se um dicionário existe ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-broker-dict-exists.php

---

# enchant\_broker\_dict\_exists

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_broker\_dict\_exists — Informa se um dicionário existe ou não

### Descrição

function **enchant\_broker\_dict\_exists**([EnchantBroker](class.enchantbroker.md) `$broker`, [string](language.types.string.md) `$tag`): [bool](language.types.boolean.md)

Informa se um dicionário existe ou não, usando etiqueta não vazia.

### Parâmetros

`broker`
:   Um agente Enchant retornado por [enchant\_broker\_init()](function.enchant-broker-init.md).

`tag`
:   Etiqueta não vazia no formato da localidade, por exemplo, us\_US, pt\_BR, etc.

### Valor Retornado

Retorna **`true`** quando a etiqueta existe ou **`false`** quando não existe.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `broker` agora espera uma instância de [EnchantBroker](class.enchantbroker.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Um exemplo de **enchant\_broker\_dict\_exists()****

```
<?php
$tag = 'en_US';
$r = enchant_broker_init();
if (enchant_broker_dict_exists($r,$tag)) {
    echo "Dicionário $tag encontrado.\n";
}
?>
```

### Veja também

- [enchant\_broker\_describe()](function.enchant-broker-describe.md) - Enumera os provedores de Enchant

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
