# Hifeniza uma palavra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-hyphenate.php

---

# ps\_hyphenate

(PECL ps >= 1.1.1)

ps\_hyphenate — Hifeniza uma palavra

### Descrição

function **ps\_hyphenate**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$text`): [array](language.types.array.md)|[false](language.types.singleton.md)

Hifeniza a palavra passada. **ps\_hyphenate()** avalia o
valor hyphenminchars (definido por [ps\_set\_value()](function.ps-set-value.md)) e
o parâmetro hyphendict (definido por [ps\_set\_parameter()](function.ps-set-parameter.md)).
hyphendict deve ser definido antes de chamar esta função.

Esta função requer que a categoria de localidade **`LC_CTYPE`** seja definida corretamente.
Isso é feito quando a extensão é inicializada usando as variáveis
de ambiente. Em sistemas Unix, leia a página de manual de "locale" para mais informações.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`text`
:   `text` não deve conter caracteres não alfabéticos.
    Posições possíveis para quebras são retornadas em um array de
    números inteiros. Cada número é a posição do caractere em
    `text` após o qual uma hifenização pode ocorrer.

### Valor Retornado

Um array de inteiros indicando a posição de possíveis quebras
no texto ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Hifenizando um texto**

```
<?php
$word = "Koordinatensystem";
$psdoc = ps_new();
ps_set_parameter($psdoc, "hyphendict", "hyph_de.dic");
$hyphens = ps_hyphenate($psdoc, $word);
for($i=0; $i<strlen($word); $i++) {
  echo $word[$i];
  if(in_array($i, $hyphens))
    echo "-";
}
ps_delete($psdoc);
?>
```

O exemplo acima produzirá:

```
Ko-ordi-na-ten-sys-tem
```

### Veja também

- [ps\_show\_boxed()](function.ps-show-boxed.md) - Gera texto em uma caixa
- locale(1)

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
