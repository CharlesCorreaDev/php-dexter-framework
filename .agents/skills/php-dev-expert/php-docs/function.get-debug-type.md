# Obtém o nome do tipo de uma variável de forma adequada a depuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-debug-type.php

---

# get\_debug\_type

(PHP 8)

get\_debug\_type — Obtém o nome do tipo de uma variável de forma adequada a depuração

### Descrição

function **get\_debug\_type**([mixed](language.types.mixed.md) `$value`): [string](language.types.string.md)

Retorna o nome resolvido da variável PHP `value`.
Esta função resolverá objetos ao nome da classe deles, recursos ao nome do
tipo de recurso deles, e valores escalares ao nome comum deles como seria usado em
declarações de tipo.

Este função difere de [gettype()](function.gettype.md) pelo fato de retornar nomes de tipo
que são mais consistentes com o uso real, ao invés daqueles existentes por razões históricas.

### Parâmetros

`value`
:   A variável a ter o tipo verificado.

### Valor Retornado

Valores possíveis para a [string](language.types.string.md) de retorno são:

| Tipo + Estado | Valor de Retorno | Notas |
| --- | --- | --- |
| nulo | `"null"` | - |
| Booleanos (**`true`** ou **`false`**) | `"bool"` | - |
| Inteiros | `"int"` | - |
| Números de ponto flutuante | `"float"` | - |
| Strings | `"string"` | - |
| Arrays | `"array"` | - |
| Recursos | `"resource (resourcename)"` | - |
| Recursos (Fechados) | `"resource (closed)"` | Exemplo: um fluxo de arquivo depois de ter sido fechado com [fclose()](function.fclose.md). |
| Objetos de Classes com Nome | O nome completo da classe incluindo seu espaço de nomes, ex.: `Foo\Bar` | - |
| Objetos de Classes Anônimas | `"class@anonymous"` ou nome da classe pai/interface se a classe estende outra classe ou implementa uma interface, p.ex.: `"Foo\Bar@anonymous"` | Classes anônimas são aquelas criadas através da sintaxe `$x = new class { ... }` |

### Examples

**Exemplo #1 Exemplo de **get\_debug\_type()****

```
<?php

namespace Foo;

echo get_debug_type(null), PHP_EOL;
echo get_debug_type(true), PHP_EOL;
echo get_debug_type(1), PHP_EOL;
echo get_debug_type(0.1), PHP_EOL;
echo get_debug_type("foo"), PHP_EOL;
echo get_debug_type([]), PHP_EOL;

$fp = fopen('/examples/book.xml', 'rb');
echo get_debug_type($fp), PHP_EOL;

fclose($fp);
echo get_debug_type($fp), PHP_EOL;

echo get_debug_type(new \stdClass), PHP_EOL;
echo get_debug_type(new class {}), PHP_EOL;

interface A {}
interface B {}
class C {}

echo get_debug_type(new class implements A {}), PHP_EOL;
echo get_debug_type(new class implements A,B {}), PHP_EOL;
echo get_debug_type(new class extends C {}), PHP_EOL;
echo get_debug_type(new class extends C implements A {}), PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
null
bool
int
float
string
array
resource (stream)
resource (closed)
stdClass
class@anonymous
Foo\A@anonymous
Foo\A@anonymous
Foo\C@anonymous
Foo\C@anonymous
```

### Veja também

- [gettype()](function.gettype.md) - Obtém o tipo de uma variável
- [get\_class()](function.get-class.md) - Retorna o nome da classe de um objeto

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
