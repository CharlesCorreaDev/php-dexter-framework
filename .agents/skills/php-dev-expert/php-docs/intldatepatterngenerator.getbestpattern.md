# Determina o formato de data/horário mais adequado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldatepatterngenerator.getbestpattern.php

---

# IntlDatePatternGenerator::getBestPattern

(PHP 8 >= 8.1.0)

IntlDatePatternGenerator::getBestPattern — Determina o formato de data/horário mais adequado

### Descrição

public function **IntlDatePatternGenerator::getBestPattern**([string](language.types.string.md) `$skeleton`): [string](language.types.string.md)|[false](language.types.singleton.md)

Determina que formato de data/horário é mais adequado para uma localidade em particular.

### Parâmetros

`skeleton`
:   O esqueleto.

### Valor Retornado

Retorna um padrão ICU de data/horário, aceito por [IntlDateFormatter](class.intldateformatter.md) em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **IntlDatePatternGenerator::getBestPattern()****

```
<?php

$skeleton = 'YYYYMMdd';
$today = \DateTimeImmutable::createFromFormat('Y-m-d', '2021-04-24');

$patternGenerator = new \IntlDatePatternGenerator('de_DE');
$pattern = $patternGenerator->getBestPattern($skeleton);
echo 'de: ', \IntlDateFormatter::formatObject($today, $pattern, 'de_DE'), "\n";

$patternGenerator = new \IntlDatePatternGenerator('en_US');
$pattern = $patternGenerator->getBestPattern($skeleton);
echo 'en: ', \IntlDateFormatter::formatObject($today, $pattern, 'en_US');
?>
```

O exemplo acima produzirá:

```
de: 24.04.2021
en: 04/24/2021
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
