# A classe parallel\Events\Event\Type

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parallel-events-event-type.php

---

# A classe parallel\Events\Event\Type

(0.9.0)

## Resumo da classe

final
class **parallel\Events\Event\Type**
{

/\* Event::$object foi lido em Event::$value \*/

const
Read;

/\* Entrada para Event::$source escrita em Event::$object \*/

const
Write;

/\* Event::$object (Channel) foi fechado \*/

const
Close;

/\* Event::$object (Future) foi fechado \*/

const
Cancel;

/\* Execução em tempo de execução Event::$object (Future) foi eliminado \*/

const
Kill;

/\* Event::$object (Future) gerou erro \*/

const
Error;

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
