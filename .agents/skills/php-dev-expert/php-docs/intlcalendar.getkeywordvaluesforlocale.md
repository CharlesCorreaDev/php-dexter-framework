# Obtém um conjunto de valores de palavras-chaves de localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getkeywordvaluesforlocale.php

---

# IntlCalendar::getKeywordValuesForLocale

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getKeywordValuesForLocale — Obtém um conjunto de valores de palavras-chaves de localidade

### Descrição

Estilo orientado a objetos

public static function **IntlCalendar::getKeywordValuesForLocale**([string](language.types.string.md) `$keyword`, [string](language.types.string.md) `$locale`, [bool](language.types.boolean.md) `$onlyCommon`): [IntlIterator](class.intliterator.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_keyword\_values\_for\_locale**([string](language.types.string.md) `$keyword`, [string](language.types.string.md) `$locale`, [bool](language.types.boolean.md) `$onlyCommon`): [IntlIterator](class.intliterator.md)|[false](language.types.singleton.md)

Para uma chave de localidade informada, obtém o conjunto de valores para essa chave que resultaria
em um comportamento diferente. Por agora, apenas a palavra-chave `'calendar'`
é suportada.

Esta função requer a ICU 4.2 ou posterior.

### Parâmetros

`keyword`
:   A palavra-chave de localidade para a qual valores relevantes serão consultados. Apenas
    `'calendar'` é suportada.

`locale`
:   A localidade na qual o par palavra-chave/valor será anexado.

`onlyCommon`
:   Determina se deve-se mostrar apenas os valores comumente usados para a localidade especificada.

### Valor Retornado

Um iterador que gera strings com os valores de palavra-chave
da localidade ou **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::getKeywordValuesForLocale()****

```
<?php
print_r(
        iterator_to_array(
                IntlCalendar::getKeywordValuesForLocale(
                        'calendar', 'fa_IR', true)));
print_r(
        iterator_to_array(
                IntlCalendar::getKeywordValuesForLocale(
                        'calendar', 'fa_IR', false)));
```

O exemplo acima produzirá:

```
Array
(
    [0] => persian
    [1] => gregorian
    [2] => islamic
    [3] => islamic-civil
)
Array
(
    [0] => persian
    [1] => gregorian
    [2] => islamic
    [3] => islamic-civil
    [4] => japanese
    [5] => buddhist
    [6] => roc
    [7] => hebrew
    [8] => chinese
    [9] => indian
    [10] => coptic
    [11] => ethiopic
    [12] => ethiopic-amete-alem
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
