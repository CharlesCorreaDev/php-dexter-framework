# Descreve um dicionário individual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-dict-describe.php

---

# enchant\_dict\_describe

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_dict\_describe — Descreve um dicionário individual

### Descrição

function **enchant\_dict\_describe**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`): [array](language.types.array.md)

Retorna os detalhes do dicionário.

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `dictionary` agora espera uma instância de [EnchantDictionary](class.enchantdictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | Antes desta versão, a função retornava **`false`** em caso de falha. |

### Examples

**Exemplo #1 Um exemplo de **enchant\_dict\_describe()****

Verifica se um dicionário existe usando
[enchant\_broker\_dict\_exists()](function.enchant-broker-dict-exists.md) e mostra seus detalhes.

```
<?php
$tag = 'en_US';
$broker = enchant_broker_init();
if (enchant_broker_dict_exists($broker, $tag)) {
    $dict = enchant_broker_request_dict($broker, $tag);
    $dict_details = enchant_dict_describe($dict);
    print_r($dict_details);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [lang] => en_US
    [name] => aspell
    [desc] => Aspell Provider
    [file] => /usr/lib/enchant/libenchant_aspell.so
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
