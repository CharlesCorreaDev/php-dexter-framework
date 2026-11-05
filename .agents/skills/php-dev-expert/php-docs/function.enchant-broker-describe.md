# Enumera os provedores de Enchant

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-broker-describe.php

---

# enchant\_broker\_describe

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0)

enchant\_broker\_describe — Enumera os provedores de Enchant

### Descrição

function **enchant\_broker\_describe**([EnchantBroker](class.enchantbroker.md) `$broker`): [array](language.types.array.md)

Enumera os provedores de Enchant e fornece algumas informações rudimentares
sobre eles. A mesma informação é fornecida por phpinfo().

### Parâmetros

`broker`
:   Um agente Enchant retornado por [enchant\_broker\_init()](function.enchant-broker-init.md).

### Valor Retornado

Retorna um [array](language.types.array.md) de provedores Enchant com seus detalhes.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `broker` agora espera uma instância de [EnchantBroker](class.enchantbroker.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | Antes deseta versão, a função retornava **`false`** em caso de falha. |

### Examples

**Exemplo #1 Lista os backends providos pelo broker informado**

```
<?php
$r = enchant_broker_init();
$bprovides = enchant_broker_describe($r);
echo "O broker atual fornece os seguintes backend(s):\n";
print_r($bprovides);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
O broker atual fornece os seguintes backend(s):
Array
(
    [0] => Array
        (
            [name] => aspell
            [desc] => Aspell Provider
            [file] => /usr/lib/enchant/libenchant_aspell.so
        )

    [1] => Array
        (
            [name] => hspell
            [desc] => Hspell Provider
            [file] => /usr/lib/enchant/libenchant_hspell.so
        )

    [2] => Array
        (
            [name] => ispell
            [desc] => Ispell Provider
            [file] => /usr/lib/enchant/libenchant_ispell.so
        )

    [3] => Array
        (
            [name] => myspell
            [desc] => Myspell Provider
            [file] => /usr/lib/enchant/libenchant_myspell.so
        )

)
```

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
