# Retorna uma sub-deque de um determinado intervalo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.slice.php

---

# Ds\Deque::slice

(PECL ds >= 1.0.0)

Ds\Deque::slice — 
Retorna uma sub-deque de um determinado intervalo

### Descrição

public function **Ds\Deque::slice**([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$length` = ?): [Ds\Deque](class.ds-deque.md)

Cria uma sub-deque de um determinado intervalo.

### Parâmetros

`index`
:   O índice no qual a sub-deque começa.

    Se positivo, a deque começará nesse índice na deque.
    Se negativo, a deque começará nessa distância do final.

`length`
:   Se um comprimento for fornecido e for positivo, a deque resultante
    terá até esse número de valores nela.
    Se o comprimento resultar em um estouro, apenas
    valores até o final da deque serão incluídos.
    Se um comprimento for fornecido e for negativo, a deque
    parará naquele número de valores do final.
    Se um comprimento não for fornecido, a deque resultante
    conterá todos os valores entre o índice e o
    final da deque.

### Valor Retornado

Uma sub-deque do intervalo fornecido.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::slice()****

```
<?php
$deque = new \Ds\Deque(["a", "b", "c", "d", "e"]);

// Cortar a partir do índice 2
print_r($deque->slice(2));

// Cortar a partir do índice 1, por um comprimento de 3
print_r($deque->slice(1, 3));

// Cortar a partir do índice 1
print_r($deque->slice(1));

// Cortar a partir do índice 2 do final
print_r($deque->slice(-2));

// Cortar do índice 1 até 1 do final
print_r($deque->slice(1, -1));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Deque Object
(
    [0] => c
    [1] => d
    [2] => e
)
Ds\Deque Object
(
    [0] => b
    [1] => c
    [2] => d
)
Ds\Deque Object
(
    [0] => b
    [1] => c
    [2] => d
    [3] => e
)
Ds\Deque Object
(
    [0] => d
    [1] => e
)
Ds\Deque Object
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
