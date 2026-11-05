# Sugere grafias para uma palavra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-dict-suggest.php

---

# enchant\_dict\_suggest

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_dict\_suggest — Sugere grafias para uma palavra

### Descrição

function **enchant\_dict\_suggest**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`, [string](language.types.string.md) `$word`): [array](language.types.array.md)

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

`word`
:   Palavra a ser usada para as sugestões.

### Valor Retornado

Retorna um array de sugestões se a palavra for escrita incorretamente.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `dictionary` agora espera uma instância de [EnchantDictionary](class.enchantdictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Um exemplo de **enchant\_dict\_suggest()****

```
<?php
$tag = 'en_US';
$r = enchant_broker_init();
if (enchant_broker_dict_exists($r,$tag)) {
    $d = enchant_broker_request_dict($r, $tag);

    $wordcorrect = enchant_dict_check($d, "soong");
    if (!$wordcorrect) {
        $suggs = enchant_dict_suggest($d, "soong");
        echo "Suggestions for 'soong':";
        print_r($suggs);
    }
}
?>
```

### Veja também

- [enchant\_dict\_check()](function.enchant-dict-check.md) - Verifica se uma palavra está escrita de forma correta
- [enchant\_dict\_quick\_check()](function.enchant-dict-quick-check.md) - Verifica se a palavra está escrita corretamente e fornece sugestões

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
