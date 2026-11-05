# Cria uma instância de IntlListFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intllistformatter.construct.php

---

# IntlListFormatter::\_\_construct

(No version information available, might only be in Git)

IntlListFormatter::\_\_construct — Cria uma instância de IntlListFormatter

### Descrição

public function **IntlListFormatter::\_\_construct**([string](language.types.string.md) `$locale`, [int](language.types.integer.md) `$type` = **`IntlListFormatter::TYPE_AND`**, [int](language.types.integer.md) `$width` = **`IntlListFormatter::WIDTH_WIDE`**)

Cria uma nova instância de [IntlListFormatter](class.intllistformatter.md) para a localidade informada.

### Parâmetros

`locale`
:   A localidade a ser usada para a formatação.

`type`
:   O tipo de lista. Uma das constantes **`IntlListFormatter::TYPE_*`**:
    **`IntlListFormatter::TYPE_AND`**,
    **`IntlListFormatter::TYPE_OR`** ou
    **`IntlListFormatter::TYPE_UNITS`**.

`width`
:   A amplitude da lista. Uma das constantes **`IntlListFormatter::WIDTH_*`**:
    **`IntlListFormatter::WIDTH_WIDE`**,
    **`IntlListFormatter::WIDTH_SHORT`** ou
    **`IntlListFormatter::WIDTH_NARROW`**.

### Erros/Exceções

Lança uma [IntlException](class.intlexception.md) se o formatador não puder ser criado
(ex.: localidade inválida ou versão de ICU anterior à 67).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | A classe foi adicionada. |

### Veja também

- [IntlListFormatter::format()](intllistformatter.format.md) - Formata uma lista de itens

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
