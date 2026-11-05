# Lista de Palavras-chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.keywords.php

---

## Lista de Palavras-chave

Estas palavras têm um significado especial no PHP. Algumas delas representam coisas
que parecem funções, algumas parecem constantes, e assim por diante - mas
na verdade não o são realmente: elas são constructos da linguagem.
As palavras seguintes não podem ser usadas como constantes, nomes de classes, ou nome de funções.
Estas palavras-chave são permitidas em propriedades, constantes e
nomes de métodos em classes, interfaces, traits, e enumerações com exceção de
`class`, que não pode ser utilizada como nome de constante.

**Palavras-chave do PHP**

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| [\_\_halt\_compiler()](function.halt-compiler.md) | [abstract](language.oop5.abstract.md) | [and](language.operators.logical.md) | [array()](function.array.md) | [as](control-structures.foreach.md) |
| [break](control-structures.break.md) | [callable](language.types.callable.md) | [case](control-structures.switch.md) | [catch](language.error-handling.throwable.md#language.exceptions) | [class](language.oop5.basic.md#language.oop5.basic.class) |
| [clone](language.oop5.cloning.md) | [const](language.oop5.constants.md) | [continue](control-structures.continue.md) | [declare](control-structures.declare.md) | [default](control-structures.switch.md) |
| [die()](function.die.md) | [do](control-structures.do.while.md) | [echo](function.echo.md) | [else](control-structures.else.md) | [elseif](control-structures.elseif.md) |
| [empty()](function.empty.md) | [enddeclare](control-structures.declare.md) | [endfor](control-structures.alternative-syntax.md) | [endforeach](control-structures.alternative-syntax.md) | [endif](control-structures.alternative-syntax.md) |
| [endswitch](control-structures.alternative-syntax.md) | [endwhile](control-structures.alternative-syntax.md) | [eval()](function.eval.md) | [exit()](function.exit.md) | [extends](language.oop5.basic.md#language.oop5.basic.extends) |
| [final](language.oop5.final.md) | [finally](language.error-handling.throwable.md#language.exceptions) | [fn](functions.arrow.md) (desde o PHP 7.4) | [for](control-structures.for.md) | [foreach](control-structures.foreach.md) |
| [function](functions.user-defined.md) | [global](language.variables.scope.md) | [goto](control-structures.goto.md) | [if](control-structures.if.md) | [implements](language.oop5.interfaces.md) |
| [include](function.include.md) | [include\_once](function.include-once.md) | [instanceof](language.operators.type.md) | [insteadof](language.oop5.traits.md#language.oop5.traits.conflict) | [interface](language.oop5.interfaces.md) |
| [isset()](function.isset.md) | [list()](function.list.md) | [match](control-structures.match.md) (desde o PHP 8.0) | [namespace](language.namespaces.md) | [new](language.oop5.basic.md#language.oop5.basic.new) |
| [or](language.operators.logical.md) | [print](function.print.md) | [private](language.oop5.visibility.md) | [protected](language.oop5.visibility.md) | [public](language.oop5.visibility.md) |
| [readonly](language.oop5.properties.md#language.oop5.properties.readonly-properties) (desde o PHP 8.1.0) \* | [require](function.require.md) | [require\_once](function.require-once.md) | [return](function.return.md) | [static](language.variables.scope.md) |
| [switch](control-structures.switch.md) | [throw](language.error-handling.throwable.md#language.exceptions) | [trait](language.oop5.traits.md) | [try](language.error-handling.throwable.md#language.exceptions) | [unset()](function.unset.md) |
| [use](language.namespaces.importing.md) | [var](language.oop5.properties.md) | [while](control-structures.while.md) | [xor](language.operators.logical.md) | [yield](language.generators.md) |
| [yield from](language.generators.syntax.md#control-structures.yield.from) |  |  |  |  |

\* `readonly` pode ser utilizado como nome de função

**Constantes de tempo de compilação**

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| [\_\_CLASS\_\_](language.constants.magic.md) | [\_\_DIR\_\_](language.constants.magic.md) | [\_\_FILE\_\_](language.constants.magic.md) | [\_\_FUNCTION\_\_](language.constants.magic.md) | [\_\_LINE\_\_](language.constants.magic.md) |
| [\_\_METHOD\_\_](language.constants.magic.md) | [\_\_PROPERTY\_\_](language.constants.magic.md) | [\_\_NAMESPACE\_\_](language.namespaces.nsconstants.md) | [\_\_TRAIT\_\_](language.constants.magic.md) |  |

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
