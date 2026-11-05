# Verifica se a palavra está escrita corretamente e fornece sugestões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-dict-quick-check.php

---

# enchant\_dict\_quick\_check

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant:0.2.0-1.0.1)

enchant\_dict\_quick\_check — Verifica se a palavra está escrita corretamente e fornece sugestões

### Descrição

function **enchant\_dict\_quick\_check**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`, [string](language.types.string.md) `$word`, [array](language.types.array.md) `&$suggestions` = **`null`**): [bool](language.types.boolean.md)

Se a palavra estiver escrita corretamente, retorna **`true`**, caso contrário retorna **`false`**. Se uma variável de sugestões
for informada, esta função preenche-a com alternativas de escrita.

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

`word`
:   A palavra a ser verificada.

`suggestions`
:   Se a palavra não estiver escrita corretamente, esta variável
    conterá um array de sugestões.

### Valor Retornado

Retorna **`true`** se a palavra estiver escrita corretamente ou **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `dictionary` agora espera uma instância de [EnchantDictionary](class.enchantdictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Um exemplo de **enchant\_dict\_quick\_check()****

```
<?php
$tag = 'en_US';
$r = enchant_broker_init();

if (enchant_broker_dict_exists($r,$tag)) {
    $d = enchant_broker_request_dict($r, $tag);
    enchant_dict_quick_check($d, 'soong', $suggs);
    print_r($suggs);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => song
    [1] => snog
    [2] => soon
    [3] => Sang
    [4] => Sung
    [5] => sang
    [6] => sung
    [7] => sponge
    [8] => spongy
    [9] => snag
    [10] => snug
    [11] => sonic
    [12] => sing
    [13] => songs
    [14] => Son
    [15] => Sonja
    [16] => Synge
    [17] => son
    [18] => Sejong
    [19] => sarong
    [20] => sooner
    [21] => Sony
    [22] => sown
    [23] => scone
    [24] => song's
)
```

### Veja também

- [enchant\_dict\_check()](function.enchant-dict-check.md) - Verifica se uma palavra está escrita de forma correta
- [enchant\_dict\_suggest()](function.enchant-dict-suggest.md) - Sugere grafias para uma palavra

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
