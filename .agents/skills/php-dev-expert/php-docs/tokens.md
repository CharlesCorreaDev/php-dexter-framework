# Lista de Tokens do Analisador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tokens.php

---

# Lista de Tokens do Analisador

Várias partes da linguagem PHP são representadas internamente por tokens.
Um trecho de código que contém uma sequência inválida de tokens pode ocasionar erros como
`Parse error: syntax error, unexpected token "==", expecting "(" in script.php on line 10."`
onde o token `==` é internamente representado pelo identificador **`T_IS_EQUAL`**.

A tabela a seguir lista todos os tokens disponíveis como constantes no PHP.

> **Nota**:
> **Uso das constantes T\_\***  
>
> Os valores das constantes T\_\* são gerados automaticamente pela infraestrutura do interpretador do PHP, sem estabilidade.
> Isto significa que o valor real de um token pode mudar entre duas
> versões do PHP.
> Isso significa que seu código nunca deve depender diretamente
> dos valores originais de T\_\* levando em consideração uma versão específica do PHP,
> para que seu código funcione em várias versões do PHP.
>
> Para utilizar as constantes T\_\* entre várias versões do PHP, constantes não definidas
> podem ser criadas pelo usuário (utilizando-se grandes números, a partir de `10000`) como
> uma estratégia apropriada que funcionará entre versões do PHP e os valores automaticamente definidos.
>
> ```
> <?php
> // Anteriormente ao PHP 7.4.0, T_FN não era definido.
> defined('T_FN') || define('T_FN', 10001);
> ?>
> ```

**Tokens**

| Token | Sintaxe | Referência |
| --- | --- | --- |
| **`T_ABSTRACT`** ([int](language.types.integer.md)) | abstract | [Abstração de Classes](language.oop5.abstract.md) |
| **`T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG`** ([int](language.types.integer.md)) | & | [Declarações de tipo](language.types.declarations.md) (disponível a partir do PHP 8.1.0) |
| **`T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG`** ([int](language.types.integer.md)) | & | [Declarações de tipo](language.types.declarations.md) (disponível a partir do PHP 8.1.0) |
| **`T_AND_EQUAL`** ([int](language.types.integer.md)) | &= | [operadores de atribuição](language.operators.assignment.md) |
| **`T_ARRAY`** ([int](language.types.integer.md)) | array() | [array()](function.array.md), [sintaxe de array](language.types.array.md#language.types.array.syntax) |
| **`T_ARRAY_CAST`** ([int](language.types.integer.md)) | (array) | [conversão de tipo](language.types.type-juggling.md#language.types.typecasting) |
| **`T_AS`** ([int](language.types.integer.md)) | as | [`foreach`](control-structures.foreach.md) |
| **`T_ATTRIBUTE`** ([int](language.types.integer.md)) | #[ | [attributes](language.attributes.md) (a partir do PHP 8.0.0) |
| **`T_BAD_CHARACTER`** ([int](language.types.integer.md)) |  | qualquer coisa abaixo de ASCII 32 exceto \t (0x09), \n (0x0a) e \r (0x0d) (disponível a partir do PHP 7.4.0) |
| **`T_BOOLEAN_AND`** ([int](language.types.integer.md)) | && | [operadores lógicos](language.operators.logical.md) |
| **`T_BOOLEAN_OR`** ([int](language.types.integer.md)) | || | [operadores lógicos](language.operators.logical.md) |
| **`T_BOOL_CAST`** ([int](language.types.integer.md)) | (bool) ou (boolean) | [conversão de tipos](language.types.type-juggling.md#language.types.typecasting) |
| **`T_BREAK`** ([int](language.types.integer.md)) | break | [break](control-structures.break.md) |
| **`T_CALLABLE`** ([int](language.types.integer.md)) | callable | [chamáveis](language.types.callable.md) |
| **`T_CASE`** ([int](language.types.integer.md)) | case | [switch](control-structures.switch.md) |
| **`T_CATCH`** ([int](language.types.integer.md)) | catch |  |
| **`T_CLASS`** ([int](language.types.integer.md)) | class | [classes e objetos](language.oop5.md) |
| **`T_CLASS_C`** ([int](language.types.integer.md)) | \_\_CLASS\_\_ | [constantes mágicas](language.constants.magic.md) |
| **`T_CLONE`** ([int](language.types.integer.md)) | clone | [classes e objetos](language.oop5.md) |
| **`T_CLOSE_TAG`** ([int](language.types.integer.md)) | ?> ou %> | [escapando o HTML](language.basic-syntax.phpmode.md) |
| **`T_COALESCE`** ([int](language.types.integer.md)) | ?? | [operadores de comparação](language.operators.comparison.md#language.operators.comparison.coalesce) |
| **`T_COALESCE_EQUAL`** ([int](language.types.integer.md)) | ??= | [operadores de assimilação](language.operators.assignment.md) (disponível a partir do PHP 7.4.0) |
| **`T_COMMENT`** ([int](language.types.integer.md)) | // ou #, e /\* \*/ | [comentários](language.basic-syntax.comments.md) |
| **`T_CONCAT_EQUAL`** ([int](language.types.integer.md)) | .= | [operadores de atribuição](language.operators.assignment.md) |
| **`T_CONST`** ([int](language.types.integer.md)) | const | [constantes](language.constants.md) |
| **`T_CONSTANT_ENCAPSED_STRING`** ([int](language.types.integer.md)) | "foo" ou 'bar' | [sintaxe de string](language.types.string.md#language.types.string.syntax) |
| **`T_CONTINUE`** ([int](language.types.integer.md)) | continue | [continue](control-structures.continue.md) |
| **`T_CURLY_OPEN`** ([int](language.types.integer.md)) | {$ | interpolação [avançada](language.types.string.md#language.types.string.parsing.advanced) de variável em string |
| **`T_DEC`** ([int](language.types.integer.md)) | -- | [operadores de incremento/ decremento](language.operators.increment.md) |
| **`T_DECLARE`** ([int](language.types.integer.md)) | declare | [declaração](control-structures.declare.md) |
| **`T_DEFAULT`** ([int](language.types.integer.md)) | default | [switch](control-structures.switch.md) |
| **`T_DIR`** ([int](language.types.integer.md)) | \_\_DIR\_\_ | [constantes mágicas](language.constants.magic.md) |
| **`T_DIV_EQUAL`** ([int](language.types.integer.md)) | /= | [operadores de atribuição](language.operators.assignment.md) |
| **`T_DNUMBER`** ([int](language.types.integer.md)) | 0.12, etc. | [números de ponto flutuante](language.types.float.md) |
| **`T_DO`** ([int](language.types.integer.md)) | do | [do..while](control-structures.do.while.md) |
| **`T_DOC_COMMENT`** ([int](language.types.integer.md)) | /\*\* \*/ | [comentários PHPDoc](language.basic-syntax.comments.md) |
| **`T_DOLLAR_OPEN_CURLY_BRACES`** ([int](language.types.integer.md)) | ${ | interpolação [básica](language.types.string.md#language.types.string.parsing.basic) de variáveis em string |
| **`T_DOUBLE_ARROW`** ([int](language.types.integer.md)) | => | [sintaxe de array](language.types.array.md#language.types.array.syntax) |
| **`T_DOUBLE_CAST`** ([int](language.types.integer.md)) | (real), (double) ou (float) | [conversão de tipos](language.types.type-juggling.md#language.types.typecasting) |
| **`T_DOUBLE_COLON`** ([int](language.types.integer.md)) | :: | veja **`T_PAAMAYIM_NEKUDOTAYIM`** abaixo |
| **`T_ECHO`** ([int](language.types.integer.md)) | echo | [echo](function.echo.md) |
| **`T_ELLIPSIS`** ([int](language.types.integer.md)) | ... | [argumentos de função](functions.arguments.md#functions.variable-arg-list) |
| **`T_ELSE`** ([int](language.types.integer.md)) | else | [else](control-structures.else.md) |
| **`T_ELSEIF`** ([int](language.types.integer.md)) | elseif | [elseif](control-structures.elseif.md) |
| **`T_EMPTY`** ([int](language.types.integer.md)) | empty | [empty()](function.empty.md) |
| **`T_ENCAPSED_AND_WHITESPACE`** ([int](language.types.integer.md)) | " $a" | [interpretação de variáveis em strings](language.types.string.md#language.types.string.parsing) |
| **`T_ENDDECLARE`** ([int](language.types.integer.md)) | enddeclare | [declare](control-structures.declare.md), [sintaxe alternativa](control-structures.alternative-syntax.md) |
| **`T_ENDFOR`** ([int](language.types.integer.md)) | endfor | [for](control-structures.for.md), [sintaxe alternativa](control-structures.alternative-syntax.md) |
| **`T_ENDFOREACH`** ([int](language.types.integer.md)) | endforeach | [`foreach`](control-structures.foreach.md), [sintaxe alternativa](control-structures.alternative-syntax.md) |
| **`T_ENDIF`** ([int](language.types.integer.md)) | endif | [if](control-structures.if.md), [sintaxe alternativa](control-structures.alternative-syntax.md) |
| **`T_ENDSWITCH`** ([int](language.types.integer.md)) | endswitch | [switch](control-structures.switch.md), [sintaxe alternativa](control-structures.alternative-syntax.md) |
| **`T_ENDWHILE`** ([int](language.types.integer.md)) | endwhile | [while](control-structures.while.md), [sintaxe alternativa](control-structures.alternative-syntax.md) |
| **`T_ENUM`** ([int](language.types.integer.md)) | enum | [enumerações](language.types.enumerations.md) (disponível a partir do PHP 8.1.0) |
| **`T_END_HEREDOC`** ([int](language.types.integer.md)) |  | [sintaxe heredoc](language.types.string.md#language.types.string.syntax.heredoc) |
| **`T_EVAL`** ([int](language.types.integer.md)) | eval() | [eval()](function.eval.md) |
| **`T_EXIT`** ([int](language.types.integer.md)) | exit ou die | [exit()](function.exit.md), [die()](function.die.md) |
| **`T_EXTENDS`** ([int](language.types.integer.md)) | extends | [extensão](language.oop5.basic.md#language.oop5.basic.extends), [classes e objetos](language.oop5.md) |
| **`T_FILE`** ([int](language.types.integer.md)) | \_\_FILE\_\_ | [constantes mágicas](language.constants.magic.md) |
| **`T_FINAL`** ([int](language.types.integer.md)) | final | [final](language.oop5.final.md) |
| **`T_FINALLY`** ([int](language.types.integer.md)) | finally |  |
| **`T_FN`** ([int](language.types.integer.md)) | fn | [funções seta](functions.arrow.md) (disponível a partir do PHP 7.4.0) |
| **`T_FOR`** ([int](language.types.integer.md)) | for | [for](control-structures.for.md) |
| **`T_FOREACH`** ([int](language.types.integer.md)) | foreach | [`foreach`](control-structures.foreach.md) |
| **`T_FUNCTION`** ([int](language.types.integer.md)) | função | [funções](language.functions.md) |
| **`T_FUNC_C`** ([int](language.types.integer.md)) | \_\_FUNCTION\_\_ | [constantes mágicas](language.constants.magic.md) |
| **`T_GLOBAL`** ([int](language.types.integer.md)) | global | [escopo de variáveis](language.variables.scope.md) |
| **`T_GOTO`** ([int](language.types.integer.md)) | goto | [goto](control-structures.goto.md) |
| **`T_HALT_COMPILER`** ([int](language.types.integer.md)) | \_\_halt\_compiler() | [\_\_halt\_compiler](function.halt-compiler.md) |
| **`T_IF`** ([int](language.types.integer.md)) | if | [if](control-structures.if.md) |
| **`T_IMPLEMENTS`** ([int](language.types.integer.md)) | implements | [Interfaces de Objetos](language.oop5.interfaces.md) |
| **`T_INC`** ([int](language.types.integer.md)) | ++ | [operadores de incremento/decremento](language.operators.increment.md) |
| **`T_INCLUDE`** ([int](language.types.integer.md)) | include | [include](function.include.md) |
| **`T_INCLUDE_ONCE`** ([int](language.types.integer.md)) | include\_once | [include\_once](function.include-once.md) |
| **`T_INLINE_HTML`** ([int](language.types.integer.md)) |  | [escapando o HTML](language.basic-syntax.phpmode.md) |
| **`T_INSTANCEOF`** ([int](language.types.integer.md)) | instanceof | [operadores de tipo](language.operators.type.md) |
| **`T_INSTEADOF`** ([int](language.types.integer.md)) | insteadof | [Traits](language.oop5.traits.md) |
| **`T_INTERFACE`** ([int](language.types.integer.md)) | interface | [Interfaces de Objetos](language.oop5.interfaces.md) |
| **`T_INT_CAST`** ([int](language.types.integer.md)) | (int) ou (integer) | [conversão de tipos](language.types.type-juggling.md#language.types.typecasting) |
| **`T_ISSET`** ([int](language.types.integer.md)) | isset() | [isset()](function.isset.md) |
| **`T_IS_EQUAL`** ([int](language.types.integer.md)) | == | [operadores de comparação](language.operators.comparison.md) |
| **`T_IS_GREATER_OR_EQUAL`** ([int](language.types.integer.md)) | >= | [operadores de comparação](language.operators.comparison.md) |
| **`T_IS_IDENTICAL`** ([int](language.types.integer.md)) | === | [operadores de comparação](language.operators.comparison.md) |
| **`T_IS_NOT_EQUAL`** ([int](language.types.integer.md)) | != ou <> | [operadores de comparação](language.operators.comparison.md) |
| **`T_IS_NOT_IDENTICAL`** ([int](language.types.integer.md)) | !== | [operadores de comparação](language.operators.comparison.md) |
| **`T_IS_SMALLER_OR_EQUAL`** ([int](language.types.integer.md)) | <= | [operadores de comparação](language.operators.comparison.md) |
| **`T_LINE`** ([int](language.types.integer.md)) | \_\_LINE\_\_ | [constantes mágicas](language.constants.magic.md) |
| **`T_LIST`** ([int](language.types.integer.md)) | list() | [list()](function.list.md) |
| **`T_LNUMBER`** ([int](language.types.integer.md)) | 123, 012, 0x1ac, etc. | [inteiros](language.types.integer.md) |
| **`T_LOGICAL_AND`** ([int](language.types.integer.md)) | and | [operadores lógicos](language.operators.logical.md) |
| **`T_LOGICAL_OR`** ([int](language.types.integer.md)) | or | [operadores lógicos](language.operators.logical.md) |
| **`T_LOGICAL_XOR`** ([int](language.types.integer.md)) | xor | [operadores lógicos](language.operators.logical.md) |
| **`T_MATCH`** ([int](language.types.integer.md)) | match | [match](control-structures.match.md) (a partir do PHP 8.0.0) |
| **`T_METHOD_C`** ([int](language.types.integer.md)) | \_\_METHOD\_\_ | [constantes mágicas](language.constants.magic.md) |
| **`T_MINUS_EQUAL`** ([int](language.types.integer.md)) | -= | [operadores de atribuição](language.operators.assignment.md) |
| **`T_MOD_EQUAL`** ([int](language.types.integer.md)) | %= | [operadores de atribuição](language.operators.assignment.md) |
| **`T_MUL_EQUAL`** ([int](language.types.integer.md)) | \*= | [operadores de atribuição](language.operators.assignment.md) |
| **`T_NAMESPACE`** ([int](language.types.integer.md)) | namespace | [namespaces](language.namespaces.md) |
| **`T_NAME_FULLY_QUALIFIED`** ([int](language.types.integer.md)) | \App\Namespace | [namespaces](language.namespaces.md) (a partir do PHP 8.0.0) |
| **`T_NAME_QUALIFIED`** ([int](language.types.integer.md)) | App\Namespace | [namespaces](language.namespaces.md) (a partir do PHP 8.0.0) |
| **`T_NAME_RELATIVE`** ([int](language.types.integer.md)) | namespace\Namespace | [namespaces](language.namespaces.md) (a partir do PHP 8.0.0) |
| **`T_NEW`** ([int](language.types.integer.md)) | new | [classes e objetos](language.oop5.md) |
| **`T_NS_C`** ([int](language.types.integer.md)) | \_\_NAMESPACE\_\_ | [namespaces](language.namespaces.md) |
| **`T_NS_SEPARATOR`** ([int](language.types.integer.md)) | \ | [namespaces](language.namespaces.md) |
| **`T_NUM_STRING`** ([int](language.types.integer.md)) | "$a[0]" | [interpretação de variáveis em strings](language.types.string.md#language.types.string.parsing) |
| **`T_OBJECT_CAST`** ([int](language.types.integer.md)) | (object) | [conversão de tipos](language.types.type-juggling.md#language.types.typecasting) |
| **`T_OBJECT_OPERATOR`** ([int](language.types.integer.md)) | -> | [classes e objetos](language.oop5.md) |
| **`T_NULLSAFE_OBJECT_OPERATOR`** ([int](language.types.integer.md)) | ?-> | [classes e objetos](language.oop5.md) |
| **`T_OPEN_TAG`** ([int](language.types.integer.md)) | <?php, <? ou <% | [escapando o HTML](language.basic-syntax.phpmode.md) |
| **`T_OPEN_TAG_WITH_ECHO`** ([int](language.types.integer.md)) | <?= ou <%= | [escapando o HTML](language.basic-syntax.phpmode.md) |
| **`T_OR_EQUAL`** ([int](language.types.integer.md)) | |= | [operadores de atribuição](language.operators.assignment.md) |
| **`T_PAAMAYIM_NEKUDOTAYIM`** ([int](language.types.integer.md)) | :: | [resolução de escopo](language.oop5.paamayim-nekudotayim.md). Também definido como **`T_DOUBLE_COLON`**. |
| **`T_PIPE`** | |> | [operadores funcionais](language.operators.functional.md) (disponível a partir do PHP 8.5.0) |
| **`T_PLUS_EQUAL`** ([int](language.types.integer.md)) | += | [operadores de atribuição](language.operators.assignment.md) |
| **`T_POW`** ([int](language.types.integer.md)) | \*\* | [operadores aritméticos](language.operators.arithmetic.md) |
| **`T_POW_EQUAL`** ([int](language.types.integer.md)) | \*\*= | [operadores de atribuição](language.operators.assignment.md) |
| **`T_PRINT`** ([int](language.types.integer.md)) | print | [print](function.print.md) |
| **`T_PRIVATE`** ([int](language.types.integer.md)) | private | [classes e objetos](language.oop5.md) |
| **`T_PRIVATE_SET`** ([int](language.types.integer.md)) | private(set) | ganchos de propriedades (disponível a partir do PHP 8.4.0) |
| **`T_PROPERTY_C`** ([int](language.types.integer.md)) | \_\_PROPERTY\_\_ | [constantes mágicas](language.constants.magic.md) |
| **`T_PROTECTED`** ([int](language.types.integer.md)) | protected | [classes e objetos](language.oop5.md) |
| **`T_PROTECTED_SET`** ([int](language.types.integer.md)) | protected(set) | ganchos de propriedades (disponível a partir do PHP 8.4.0) |
| **`T_PUBLIC`** ([int](language.types.integer.md)) | public | [classes e objetos](language.oop5.md) |
| **`T_PUBLIC_SET`** ([int](language.types.integer.md)) | public(set) | ganchos de propriedades (disponível a partir do PHP 8.4.0) |
| **`T_READONLY`** ([int](language.types.integer.md)) | readonly | [classes e objetos](language.oop5.md) (a partir do PHP 8.1.0) |
| **`T_REQUIRE`** ([int](language.types.integer.md)) | require | [require](function.require.md) |
| **`T_REQUIRE_ONCE`** ([int](language.types.integer.md)) | require\_once | [require\_once](function.require-once.md) |
| **`T_RETURN`** ([int](language.types.integer.md)) | return | [valores de retorno](functions.returning-values.md) |
| **`T_SL`** ([int](language.types.integer.md)) | << | [operador binário](language.operators.bitwise.md) |
| **`T_SL_EQUAL`** ([int](language.types.integer.md)) | <<= | [operadores de atribuição](language.operators.assignment.md) |
| **`T_SPACESHIP`** ([int](language.types.integer.md)) | <=> | [operadores de comparação](language.operators.comparison.md) |
| **`T_SR`** ([int](language.types.integer.md)) | >> | [operador binário](language.operators.bitwise.md) |
| **`T_SR_EQUAL`** ([int](language.types.integer.md)) | >>= | [operadores de atribuição](language.operators.assignment.md) |
| **`T_START_HEREDOC`** ([int](language.types.integer.md)) | <<< | [sintaxe heredoc](language.types.string.md#language.types.string.syntax.heredoc) |
| **`T_STATIC`** ([int](language.types.integer.md)) | static | [escopo de variáveis](language.variables.scope.md) |
| **`T_STRING`** ([int](language.types.integer.md)) | parent, self, etc. | identificadores, ex.: palavras-chaves tais como `parent` e `self`, nomes de função, nomes de classe e outros correspondem a esta categoria. Veja também **`T_CONSTANT_ENCAPSED_STRING`**. |
| **`T_STRING_CAST`** ([int](language.types.integer.md)) | (string) | [conversão de tipos](language.types.type-juggling.md#language.types.typecasting) |
| **`T_STRING_VARNAME`** ([int](language.types.integer.md)) | "${a | [variáveis variantes](language.variables.variable.md) para interpolar em uma string |
| **`T_SWITCH`** ([int](language.types.integer.md)) | switch | [switch](control-structures.switch.md) |
| **`T_THROW`** ([int](language.types.integer.md)) | throw |  |
| **`T_TRAIT`** ([int](language.types.integer.md)) | trait | [Traits](language.oop5.traits.md) |
| **`T_TRAIT_C`** ([int](language.types.integer.md)) | \_\_TRAIT\_\_ | **`__TRAIT__`** |
| **`T_TRY`** ([int](language.types.integer.md)) | try |  |
| **`T_UNSET`** ([int](language.types.integer.md)) | unset() | [unset()](function.unset.md) |
| **`T_UNSET_CAST`** ([int](language.types.integer.md)) | (unset) | [conversão de tipos](language.types.type-juggling.md#language.types.typecasting) |
| **`T_USE`** ([int](language.types.integer.md)) | use | [namespaces](language.namespaces.md) |
| **`T_VAR`** ([int](language.types.integer.md)) | var | [classes e objetos](language.oop5.md) |
| **`T_VARIABLE`** ([int](language.types.integer.md)) | $foo | [variáveis](language.variables.md) |
| **`T_VOID_CAST`** | (void) | [conversão para void](language.types.void.md) (disponível a partir do PHP 8.5.0) |
| **`T_WHILE`** ([int](language.types.integer.md)) | while | [while](control-structures.while.md), [do..while](control-structures.do.while.md) |
| **`T_WHITESPACE`** ([int](language.types.integer.md)) | \t \r\n |  |
| **`T_XOR_EQUAL`** ([int](language.types.integer.md)) | ^= | [operadores de atribuição](language.operators.assignment.md) |
| **`T_YIELD`** ([int](language.types.integer.md)) | yield | [geradores](language.generators.syntax.md#control-structures.yield) |
| **`T_YIELD_FROM`** ([int](language.types.integer.md)) | yield from | [geradores](language.generators.syntax.md#control-structures.yield.from) |

Veja também [token\_name()](function.token-name.md).

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
