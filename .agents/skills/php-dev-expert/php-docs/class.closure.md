# A classe Closure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.closure.php

---

# A classe Closure

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

Classe usada para representar [funções
anônimas](functions.anonymous.md).

Funções anônimas, produzem objetos desse tipo.
Esta classe possui métodos que permitem
ainda mais controle de funções anônimas após sua criação.

Além dos métodos listados aqui, a classe também possui o método
`__invoke`. Para consistência com outras classes que
implementam o [invoque
mágico](language.oop5.magic.md#language.oop5.magic.invoke), já que esse método não é utilizado para chamar a função.

## Resumo da classe

final
class ****Closure****
{

/\* Métodos \*/

private function [\_\_construct](closure.construct.md)()

public static function [bind](closure.bind.md)([Closure](class.closure.md) `$closure`, [?](language.types.null.md)[object](language.types.object.md) `$newThis`, [object](language.types.object.md)|[string](language.types.string.md)|[null](language.types.null.md) `$newScope` = "static"): [?](language.types.null.md)[Closure](class.closure.md)

public function [bindTo](closure.bindto.md)([?](language.types.null.md)[object](language.types.object.md) `$newThis`, [object](language.types.object.md)|[string](language.types.string.md)|[null](language.types.null.md) `$newScope` = "static"): [?](language.types.null.md)[Closure](class.closure.md)

public function [call](closure.call.md)([object](language.types.object.md) `$newThis`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

public static function [fromCallable](closure.fromcallable.md)([callable](language.types.callable.md) `$callback`): [Closure](class.closure.md)

public static function [getCurrent](closure.getcurrent.md)(): [Closure](class.closure.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O resultado de **Closure::\_\_debugInfo()** agora inclui o nome, a linha e o arquivo do closure. |

## Notas

> **Nota**:
>
> Objetos **Closure** não podem ser serializados
> porque podem conter variáveis vinculadas e um contexto de execução específico.
> A tentativa de serializar lançará uma [Exception](class.exception.md).

## Índice

- [Closure::\_\_construct](closure.construct.md) — Construtor que desabilita a instanciação
- [Closure::bind](closure.bind.md) — Duplica uma closure com um objeto vinculado e um escopo de classe
- [Closure::bindTo](closure.bindto.md) — Duplica a closure com um novo objeto vinculado e escopo de classe.
- [Closure::call](closure.call.md) — Vincula e chama a closure
- [Closure::fromCallable](closure.fromcallable.md) — Converte um chamável em uma closure
- [Closure::getCurrent](closure.getcurrent.md) — Retorna o closure em execução no momento

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
