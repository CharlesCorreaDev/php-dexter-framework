# A classe parallel\Events\Event

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parallel-events-event.php

---

# A classe parallel\Events\Event

(0.9.0)

## Objetos Event

Quando um Event é retornado, Event::$object deve ser removido do loop que o retornou, caso o evento seja um evento de gravação,
o **Input** para Event::$source também será removido.

## Resumo da classe

final
class **parallel\Events\Event**
{

/\* Deve ser uma das constantes **Event\Type** \*/

public
[int](language.types.integer.md)
$type;

/\* Deve ser a origem do evento (nome do destino) \*/

public
[string](language.types.string.md)
$source;

/\* Deve ser Future ou Channel \*/

public
[object](language.types.object.md)
$object;

/\* Deve ser definido para eventos Read/Error \*/

public
$value;

}

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
