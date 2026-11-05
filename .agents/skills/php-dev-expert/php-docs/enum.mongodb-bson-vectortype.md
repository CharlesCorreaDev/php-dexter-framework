# A enumeração MongoDB\BSON\VectorType

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enum.mongodb-bson-vectortype.php

---

# A enumeração MongoDB\BSON\VectorType

(mongodb >=2.2.0)

## Introdução

A enumeração **MongoDB\BSON\VectorType** é usada para especificar o tipo de
dados de vetor armazenados em um [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) com o
subtipo **`MongoDB\BSON\Binary::TYPE_VECTOR`**.

## Resumo da enumeração

enum ****MongoDB\BSON\VectorType****  
{

case Float32
; //
Cada elemento no vetor é um valor em ponto flutuante de 32 bits.

case Int8
; //
Cada elemento no vetor é um valor inteiro de 8 bits.

case PackedBit
; //
Cada elemento no vetor é um valor de 1 bit. Ao criar vetores deste
tipo, pode-se passar valores do tipo [bool](language.types.boolean.md) ou do tipo [int](language.types.integer.md) com 1 bit, ou seja, `0` ou `1`.

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
