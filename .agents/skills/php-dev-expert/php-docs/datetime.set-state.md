# O manipulador __set_state

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.set-state.php

---

# DateTime::\_\_set\_state

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DateTime::\_\_set\_state — O manipulador \_\_set\_state

### Descrição

public static function **DateTime::\_\_set\_state**([array](language.types.array.md) `$array`): [DateTime](class.datetime.md)

O manipulador [\_\_set\_state()](language.oop5.magic.md#object.set-state).

Equivalente a [DateTimeImmutable::\_\_set\_state()](datetimeimmutable.set-state.md) mas funciona com
[DateTime](class.datetime.md).

### Parâmetros

`array`
:   Inicialização do array.

### Valor Retornado

Retorna uma nova instância de um objeto DateTime.

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
