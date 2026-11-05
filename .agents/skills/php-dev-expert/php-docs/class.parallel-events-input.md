# A classe parallel\Events\Input

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parallel-events-input.php

---

# A classe parallel\Events\Input

(0.9.0)

## Eventos Input

Um objeto Input é um contêiner para dados que o objeto [parallel\Events](class.parallel-events.md) gravará nos objetos
[parallel\Channel](class.parallel-channel.md) à medida que se tornarem disponíveis. Vários loops de eventos podem compartilhar um contêiner de Input - parallel não
verifica o conteúdo do contêiner quando ele é definido como entrada para um objeto [parallel\Events](class.parallel-events.md).

> **Nota**:
>
> Quando um objeto [parallel\Events](class.parallel-events.md) executa uma gravação, o destino é removido do objeto de entrada como se
> [parallel\Events\Input::remove()](parallel-events-input.remove.md) fosse chamado.

## Resumo da classe

final
class **parallel\Events\Input**
{

public function [add](parallel-events-input.add.md)([string](language.types.string.md) `$target`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [remove](parallel-events-input.remove.md)([string](language.types.string.md) `$target`): [void](language.types.void.md)

public function [clear](parallel-events-input.clear.md)(): [void](language.types.void.md)

}

## Índice

- [parallel\Events\Input::add](parallel-events-input.add.md) — Entradas
- [parallel\Events\Input::clear](parallel-events-input.clear.md) — Entradas
- [parallel\Events\Input::remove](parallel-events-input.remove.md) — Entradas

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
