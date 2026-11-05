# Retorna um sub-vetor de um determinado intervalo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.slice.php

---

# Ds\Vector::slice

(PECL ds >= 1.0.0)

Ds\Vector::slice — 
Retorna um sub-vetor de um determinado intervalo

### Descrição

public function **Ds\Vector::slice**([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$length` = ?): [Ds\Vector](class.ds-vector.md)

Cria um sub-vetor de um intervalo específico.

### Parâmetros

`index`
:   O índice no qual o sub-vetor começa.

    Se positivo, o vetor começará nesse índice no vetor.
    Se negativo, o vetor começará a essa distância do final.

`length`
:   Se um comprimento for fornecido e for positivo, o vetor resultante
    terá até esse número de valores.
    Se o comprimento resultar em um estouro, apenas
    valores até o final do vetor serão incluídos.
    Se um comprimento for fornecido e for negativo, o vetor
    terá esse número de valores removidos do final.
    Se um comprimento não for fornecido, o vetor resultante
    conterá todos os valores entre o índice e o
    final do vetor.

### Valor Retornado

Um sub-vetor do intervalo fornecido.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::slice()****

```
<?php
$vector = new \Ds\Vector(["a", "b", "c", "d", "e"]);

// Corta a partir do índice 2
print_r($vector->slice(2));

// Corta a partir do índice 1, por um comprimento de 3
print_r($vector->slice(1, 3));

// Corta a partir do índice 1
print_r($vector->slice(1));

// Corta a partir do índice 2 do final
print_r($vector->slice(-2));

// Corta do índice 1 até 1 do final
print_r($vector->slice(1, -1));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
(
    [0] => c
    [1] => d
    [2] => e
)
Ds\Vector Object
(
    [0] => b
    [1] => c
    [2] => d
)
Ds\Vector Object
(
    [0] => b
    [1] => c
    [2] => d
    [3] => e
)
Ds\Vector Object
(
    [0] => d
    [1] => e
)
Ds\Vector Object
(
    [0] => b
    [1] => c
    [2] => d
)
```

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
