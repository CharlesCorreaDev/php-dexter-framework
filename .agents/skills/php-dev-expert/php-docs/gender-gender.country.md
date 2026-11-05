# Obtém representação textual do país

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gender-gender.country.php

---

# Gender\Gender::country

(PECL gender >= 0.8.0)

Gender\Gender::country — Obtém representação textual do país

### Descrição

public function **Gender\Gender::country**([int](language.types.integer.md) `$country`): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna a representação textual de um país de uma constante de classe
Gender.

### Parâmetros

`country`
:   Um ID de país especificado por uma constante de classe
    [Gender\Gender](class.gender.md).

### Valor Retornado

Retorna um array com os nomes curtos e completos do país em caso de sucesso
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Usando **Gender\Gender::country()****

```
$gender = new Gender\Gender;
var_dump($gender->country(Gender\Gender::BRITAIN));
```

O exemplo acima produzirá:

```
array(2) {
  'country_short' =>
  string(2) "UK"
  'country' =>
  string(13) "Great Britain"
}
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
