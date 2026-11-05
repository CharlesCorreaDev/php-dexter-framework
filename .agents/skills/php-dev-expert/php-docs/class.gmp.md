# A classe GMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.gmp.php

---

# A classe GMP

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

## Introdução

Representa um número GMP. Este objeto suporta sobrecarga dos operadores
[aritméticos](language.operators.arithmetic.md),
[binários](language.operators.bitwise.md) e
[comparativos](language.operators.comparison.md).

> **Nota**:
>
> Nenhuma interface orientada a objeto é provida para manipular objetos
> **GMP**. Para isto, favor usar a
> [API GMP procedural](book.gmp.md).

## Resumo da classe

final
class ****GMP****
{

/\* Métodos \*/

public function [\_\_construct](gmp.construct.md)([int](language.types.integer.md)|[string](language.types.string.md) `$num` = 0, [int](language.types.integer.md) `$base` = 0)

public function [\_\_serialize](gmp.serialize.md)(): [array](language.types.array.md)

public function [\_\_unserialize](gmp.unserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **GMP** agora é marcada como final. |
| 8.4.0 | Um objeto **GMP** agora pode ser convertido para [bool](language.types.boolean.md); um objeto representando `0` é convertido para **`false`**, e qualquer outro valor para **`true`**. Anteriormente, a conversão para [bool](language.types.boolean.md) emitia um **`E_RECOVERABLE_ERROR`**. |

## Índice

- [GMP::\_\_construct](gmp.construct.md) — Cria um número GMP
- [GMP::\_\_serialize](gmp.serialize.md) — Serializa o objeto GMP
- [GMP::\_\_unserialize](gmp.unserialize.md) — Desserializa o parâmetro data em um objeto GMP

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
