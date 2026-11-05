# Retorna uma sub-sequência de um intervalo dado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.slice.php

---

# Ds\Sequence::slice

(PECL ds >= 1.0.0)

Ds\Sequence::slice — 
Retorna uma sub-sequência de um intervalo dado

### Descrição

abstract public function **Ds\Sequence::slice**([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$length` = ?): [Ds\Sequence](class.ds-sequence.md)

Cria uma sub-sequência de um intervalo dado.

### Parâmetros

`index`
:   O índice no qual a sub-sequência começa.

    Se positivo, a sequência começará nesse índice na sequência.
    Se negativo, a sequência começará a essa distância do final.

`length`
:   Se um comprimento for fornecido e for positivo, a sequência resultante
    terá até esse número de valores.
    Se o comprimento resultar em um estouro, apenas
    valores até o final da sequência serão incluídos.
    Se um comprimento for fornecido e for negativo, a sequência
    terminará a essa distância do final.
    Se um comprimento não for fornecido, a sequência resultante
    conterá todos os valores entre o índice e o
    final da sequência.

### Valor Retornado

Uma sub-sequência do intervalo dado.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::slice()****

```
<?php
$sequence = new \Ds\Vector(["a", "b", "c", "d", "e"]);

// Fatia a partir do índice 2
print_r($sequence->slice(2));

// Fatia a partir do índice 1, por um comprimento de 3
print_r($sequence->slice(1, 3));

// Fatia a partir do índice 1
print_r($sequence->slice(1));

// Fatia a partir do índice 2 do final
print_r($sequence->slice(-2));

// Fatia do índice 1 até 1 do final
print_r($sequence->slice(1, -1));
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
