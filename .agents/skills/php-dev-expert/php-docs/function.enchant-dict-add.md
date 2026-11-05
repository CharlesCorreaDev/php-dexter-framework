# Adiciona uma palavra à lista de palavras personalizadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-dict-add.php

---

# enchant\_dict\_add

(PHP 8)

enchant\_dict\_add — Adiciona uma palavra à lista de palavras personalizadas

### Descrição

function **enchant\_dict\_add**([EnchantDictionary](class.enchantdictionary.md) `$dictionary`, [string](language.types.string.md) `$word`): [void](language.types.void.md)

Adiciona uma palavra à lista de palavras personalizadas do dicionário informado.

### Parâmetros

`dictionary`
:   Um dicionário Enchant retornado por [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md)
    ou [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md).

`word`
:   A palavra a ser adicionada

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `dictionary` agora espera uma instância de [EnchantDictionary](class.enchantdictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Adicionando uma palavra a uma lista de palavras personalizadas**

```
<?php

$filename = './minha_lista_de_palavras.pwl';
$word = 'Inconstitucionalissimamente';

$broker = enchant_broker_init();
$dict = enchant_broker_request_pwl_dict($broker, $filename);

enchant_dict_add($dict, $word);

?>
```

### Veja também

- [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md) - Cria um dicionário usando um arquivo PWL
- [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md) - Cria um novo dicionário usando uma etiqueta

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
