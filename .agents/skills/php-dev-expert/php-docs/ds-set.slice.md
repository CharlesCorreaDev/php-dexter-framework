# Retorna um subconjunto de um intervalo dado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.slice.php

---

# Ds\Set::slice

(PECL ds >= 1.0.0)

Ds\Set::slice — 
Retorna um subconjunto de um intervalo dado

### Descrição

public function **Ds\Set::slice**([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$length` = ?): [Ds\Set](class.ds-set.md)

Cria um subconjunto de um intervalo dado.

### Parâmetros

`index`
:   O índice a partir do qual o subconjunto começa.

    Se positivo, o conjunto começará nesse índice no conjunto.
    Se negativo, o conjunto começará a essa distância do final.

`length`
:   Se um comprimento for fornecido e for positivo, o conjunto resultante
    terá até esse número de valores.
    Se o comprimento resultar em um estouro, apenas
    valores até o final do conjunto serão incluídos.
    Se um comprimento for fornecido e for negativo, o conjunto
    terá até esse número de valores do final.
    Se um comprimento não for fornecido, o conjunto resultante
    conterá todos os valores entre o índice e o
    final do conjunto.

### Valor Retornado

Um subconjunto do intervalo dado.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::slice()****

```
<?php
$set = new \Ds\Set(["a", "b", "c", "d", "e"]);

// Fatia a partir de 2
print_r($set->slice(2));

// Fatia a partir de 1, por um comprimento de 3
print_r($set->slice(1, 3));

// Fatia a partir de 1
print_r($set->slice(1));

// Fatia a partir de 2 do final
print_r($set->slice(-2));

// Fatia de 1 até 1 do final
print_r($set->slice(1, -1));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Set Object
(
    [0] => c
    [1] => d
    [2] => e
)
Ds\Set Object
(
    [0] => b
    [1] => c
    [2] => d
)
Ds\Set Object
(
    [0] => b
    [1] => c
    [2] => d
    [3] => e
)
Ds\Set Object
(
    [0] => d
    [1] => e
)
Ds\Set Object
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
