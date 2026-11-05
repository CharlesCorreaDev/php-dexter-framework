# A classe Generator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.generator.php

---

# A classe Generator

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

## Introdução

Os objetos **Generator** são retornados por [geradores](language.generators.md).

**Cuidado**

Os objetos **Generator** não podem ser instanciados
através do construtor [new](language.oop5.basic.md#language.oop5.basic.new).

## Resumo da classe

final
class ****Generator****
implements
[Iterator](class.iterator.md) {

/\* Métodos \*/

public function [current](generator.current.md)(): [mixed](language.types.mixed.md)

public function [getReturn](generator.getreturn.md)(): [mixed](language.types.mixed.md)

public function [key](generator.key.md)(): [mixed](language.types.mixed.md)

public function [next](generator.next.md)(): [void](language.types.void.md)

public function [rewind](generator.rewind.md)(): [void](language.types.void.md)

public function [send](generator.send.md)([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

public function [throw](generator.throw.md)([Throwable](class.throwable.md) `$exception`): [mixed](language.types.mixed.md)

public function [valid](generator.valid.md)(): [bool](language.types.boolean.md)

public function [\_\_wakeup](generator.wakeup.md)(): [void](language.types.void.md)

}

## Veja também

See also [object iteration](language.oop5.iterations.md).

## Índice

- [Generator::current](generator.current.md) — Obtém o valor gerado
- [Generator::getReturn](generator.getreturn.md) — Obtém o valor de retorno de um gerador
- [Generator::key](generator.key.md) — Obtém o chave gerada
- [Generator::next](generator.next.md) — Continua a execução do gerador
- [Generator::rewind](generator.rewind.md) — Executa o gerador até o primeiro "yield" inclusive
- [Generator::send](generator.send.md) — Envia um valor ao gerador
- [Generator::throw](generator.throw.md) — Lança uma exceção no gerador
- [Generator::valid](generator.valid.md) — Verifica se o gerador está ativo
- [Generator::\_\_wakeup](generator.wakeup.md) — Serializa o gerador (sempre falha)

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
