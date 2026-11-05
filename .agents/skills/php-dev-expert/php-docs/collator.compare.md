# Compara duas strings Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.compare.php

---

# Collator::compare

# collator\_compare

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::compare -- collator\_compare — Compara duas strings Unicode

### Descrição

Estilo orientado a objetos

public function **Collator::compare**([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **collator\_compare**([Collator](class.collator.md) `$object`, [string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Compara duas strings Unicode de acordo com as regras de agrupamento.

### Parâmetros

`object`
:   Objeto [Collator](class.collator.md).

`string1`
:   A primeira string a comparar.

`string2`
:   A segunda string a comparar.

### Valor Retornado

Retorna o resultado da comparação:

- 1 se `string1` for *maior* que
  `string2`;
- 0 se `string1` for *igual* a
  `string2`;
- -1 se `string1` for *menor* que
  `string2`.

Retorna **`false`** em caso de falha.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Examples

**Exemplo #1 Exemplo de **collator\_compare()****

```
<?php
$s1 = 'Hello';
$s2 = 'hello';

$coll = collator_create( 'en_US' );
$res  = collator_compare( $coll, $s1, $s2 );

if ($res === false) {
    echo collator_get_error_message( $coll );
} else if( $res > 0 ) {
    echo "s1 é maior que s2\n";
} else if( $res < 0 ) {
    echo "s1 é menor que s2\n";
} else {
    echo "s1 é igual a s2\n";
}
?>
```

O exemplo acima produzirá:

s1 é maior que s2

**Exemplo #2 Comparando strings sem diacríticos ou diferenciação entre maiúsculas/minúsculas**

```
<?php
$c = new Collator( 'en' );
$c->setStrength( Collator::PRIMARY );

if ( $c->compare( 'Séan', 'Sean' ) == 0 )
{
    echo "Iguais\n";
}
```

O exemplo acima produzirá:

Iguais

Este exemplo instrui o agrupador a comparar levando em conta apenas os
caracteres base. A documentação da função
**Collator->setStrength()** explica as diferentes
forças ("strengths").

### Veja também

- [collator\_sort()](collator.sort.md) - Ordena um array usando o agrupador especificado

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
