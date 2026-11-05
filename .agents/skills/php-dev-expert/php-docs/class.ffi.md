# Interface principal ao código e aos dados em C

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ffi.php

---

# Interface principal ao código e aos dados em C

(PHP 7 >= 7.4.0, PHP 8)

## Introdução

Os objetos desta classe são criados pelos métodos de construção [FFI::cdef()](ffi.cdef.md),
[FFI::load()](ffi.load.md) ou [FFI::scope()](ffi.scope.md). Variáveis ​​C definidas
são disponibilizadas como propriedades da instância FFI e funções C definidas são disponibilizadas
como métodos da instância FFI. Os tipos C declarados podem ser usados ​​para criar novas estruturas de dados C
usando [FFI::new()](ffi.new.md) e [FFI::type()](ffi.type.md).

A análise da definição FFI e o carregamento da biblioteca compartilhada podem levar um tempo significativo. Não é útil
fazer isso em cada solicitação HTTP em um ambiente Web. Entretanto, é possível pré-carregar definições e
bibliotecas FFI na inicialização do PHP e instanciar objetos FFI quando necessário. Os arquivos de cabeçalho
podem ser estendidos com definições especiais de `FFI_SCOPE` (por exemplo, `#define FFI_SCOPE "foo"`;
o escopo padrão é "C") e então carregados por [FFI::load()](ffi.load.md) durante o pré-carregamento.
Isto leva à criação de uma ligação persistente, que estará disponível para todas as solicitações
seguintes através de [FFI::scope()](ffi.scope.md).
Consulte o [exemplo completo de PHP/FFI/pré-carregamento](ffi.examples-complete.md)
para obter detalhes.

É possível pré-carregar mais de um arquivo de cabeçalho C no mesmo escopo.

## Resumo da classe

final
class ****FFI****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[\_\_BIGGEST\_ALIGNMENT\_\_](class.ffi.md#ffi.constants.biggest-alignment);

/\* Métodos \*/

public static function [addr](ffi.addr.md)([FFI\CData](class.ffi-cdata.md) `&$ptr`): [FFI\CData](class.ffi-cdata.md)

public static function [alignof](ffi.alignof.md)([FFI\CData](class.ffi-cdata.md)|[FFI\CType](class.ffi-ctype.md) `&$ptr`): [int](language.types.integer.md)

public static function [arrayType](ffi.arraytype.md)([FFI\CType](class.ffi-ctype.md) `$type`, [array](language.types.array.md) `$dimensions`): [FFI\CType](class.ffi-ctype.md)

public function [cast](ffi.cast.md)([FFI\CType](class.ffi-ctype.md)|[string](language.types.string.md) `$type`, [FFI\CData](class.ffi-cdata.md)|[int](language.types.integer.md)|[float](language.types.float.md)|[bool](language.types.boolean.md)|[null](language.types.null.md) `&$ptr`): [?](language.types.null.md)[FFI\CData](class.ffi-cdata.md)

public static function [cdef](ffi.cdef.md)([string](language.types.string.md) `$code` = "", [?](language.types.null.md)[string](language.types.string.md) `$lib` = **`null`**): [FFI](class.ffi.md)

public static function [free](ffi.free.md)([FFI\CData](class.ffi-cdata.md) `&$ptr`): [void](language.types.void.md)

public static function [isNull](ffi.isnull.md)([FFI\CData](class.ffi-cdata.md) `&$ptr`): [bool](language.types.boolean.md)

public static function [load](ffi.load.md)([string](language.types.string.md) `$filename`): [?](language.types.null.md)[FFI](class.ffi.md)

public static function [memcmp](ffi.memcmp.md)([string](language.types.string.md)|[FFI\CData](class.ffi-cdata.md) `&$ptr1`, [string](language.types.string.md)|[FFI\CData](class.ffi-cdata.md) `&$ptr2`, [int](language.types.integer.md) `$size`): [int](language.types.integer.md)

public static function [memcpy](ffi.memcpy.md)([FFI\CData](class.ffi-cdata.md) `&$to`, [FFI\CData](class.ffi-cdata.md)|[string](language.types.string.md) `&$from`, [int](language.types.integer.md) `$size`): [void](language.types.void.md)

public static function [memset](ffi.memset.md)([FFI\CData](class.ffi-cdata.md) `&$ptr`, [int](language.types.integer.md) `$value`, [int](language.types.integer.md) `$size`): [void](language.types.void.md)

public function [new](ffi.new.md)([FFI\CType](class.ffi-ctype.md)|[string](language.types.string.md) `$type`, [bool](language.types.boolean.md) `$owned` = **`true`**, [bool](language.types.boolean.md) `$persistent` = **`false`**): [?](language.types.null.md)[FFI\CData](class.ffi-cdata.md)

public static function [scope](ffi.scope.md)([string](language.types.string.md) `$name`): [FFI](class.ffi.md)

public static function [sizeof](ffi.sizeof.md)([FFI\CData](class.ffi-cdata.md)|[FFI\CType](class.ffi-ctype.md) `&$ptr`): [int](language.types.integer.md)

public static function [string](ffi.string.md)([FFI\CData](class.ffi-cdata.md) `&$ptr`, [?](language.types.null.md)[int](language.types.integer.md) `$size` = **`null`**): [string](language.types.string.md)

public function [type](ffi.type.md)([string](language.types.string.md) `$type`): [?](language.types.null.md)[FFI\CType](class.ffi-ctype.md)

public static function [typeof](ffi.typeof.md)([FFI\CData](class.ffi-cdata.md) `&$ptr`): [FFI\CType](class.ffi-ctype.md)

}

## Constantes predefinidas

**`FFI::__BIGGEST_ALIGNMENT__`**

## Índice

- [FFI::addr](ffi.addr.md) — Cria um ponteiro não gerenciado para dado C
- [FFI::alignof](ffi.alignof.md) — Obtém o alinhamento
- [FFI::arrayType](ffi.arraytype.md) — Constrói dinamicamente um novo array tipo C
- [FFI::cast](ffi.cast.md) — Realiza um conversão de tipo C
- [FFI::cdef](ffi.cdef.md) — Cria um novo objeto FFI
- [FFI::free](ffi.free.md) — Libera uma estrutura de dados não gerenciada
- [FFI::isNull](ffi.isnull.md) — Verifica se um FFI\CData é um ponteiro nulo
- [FFI::load](ffi.load.md) — Carrega declarações C a partir de um arquivo de cabeçalho
- [FFI::memcmp](ffi.memcmp.md) — Compara áreas da memória
- [FFI::memcpy](ffi.memcpy.md) — Copia uma área da memória para outra
- [FFI::memset](ffi.memset.md) — Preenche uma área de memória
- [FFI::new](ffi.new.md) — Cria uma estrutura de dados C
- [FFI::scope](ffi.scope.md) — Instancia um objeto FFI com declarações C analisadas durante o pré-carregamento
- [FFI::sizeof](ffi.sizeof.md) — Obtém o tamanho do dado ou tipo C
- [FFI::string](ffi.string.md) — Cria uma string PHP a partir de uma área de memória
- [FFI::type](ffi.type.md) — Cria um objeto FFI\CType a partir de uma declaração C
- [FFI::typeof](ffi.typeof.md) — Obtém o FFI\CType de FFI\CData

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
