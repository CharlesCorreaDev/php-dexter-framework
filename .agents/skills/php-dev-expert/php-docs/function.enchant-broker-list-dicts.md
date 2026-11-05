# Retorna uma lista de dicionários disponíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-broker-list-dicts.php

---

# enchant\_broker\_list\_dicts

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 1.0.1)

enchant\_broker\_list\_dicts — Retorna uma lista de dicionários disponíveis

### Descrição

function **enchant\_broker\_list\_dicts**([EnchantBroker](class.enchantbroker.md) `$broker`): [array](language.types.array.md)

Retorna uma lista de dicionários disponíveis com seus detalhes.

### Parâmetros

`broker`
:   Um agente Enchant retornado por [enchant\_broker\_init()](function.enchant-broker-init.md).

### Valor Retornado

Retorna um [array](language.types.array.md) de dicionários disponíveis com seus detalhes.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `broker` agora espera uma instância de [EnchantBroker](class.enchantbroker.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | Antes desta versão, a função retornava **`false`** em caso de falha. |

### Examples

**Exemplo #1 Lista todos os dicionários disponíveis para um broker**

```
<?php
$r = enchant_broker_init();
$dicts = enchant_broker_list_dicts($r);
print_r($dicts);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
        (
            [lang_tag] => de
            [provider_name] => aspell
            [provider_desc] => Aspell Provider
            [provider_file] => /usr/lib/enchant/libenchant_aspell.so
        )

    [1] => Array
        (
            [lang_tag] => de_DE
            [provider_name] => aspell
            [provider_desc] => Aspell Provider
            [provider_file] => /usr/lib/enchant/libenchant_aspell.so
        )

    [3] => Array
        (
            [lang_tag] => en
            [provider_name] => aspell
            [provider_desc] => Aspell Provider
            [provider_file] => /usr/lib/enchant/libenchant_aspell.so
        )

    [4] => Array
        (
            [lang_tag] => en_GB
            [provider_name] => aspell
            [provider_desc] => Aspell Provider
            [provider_file] => /usr/lib/enchant/libenchant_aspell.so
        )

    [5] => Array
        (
            [lang_tag] => en_US
            [provider_name] => aspell
            [provider_desc] => Aspell Provider
            [provider_file] => /usr/lib/enchant/libenchant_aspell.so
        )

    [6] => Array
        (
            [lang_tag] => hi_IN
            [provider_name] => myspell
            [provider_desc] => Myspell Provider
            [provider_file] => /usr/lib/enchant/libenchant_myspell.so
        )

)
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
