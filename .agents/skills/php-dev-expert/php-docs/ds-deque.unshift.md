# Adiciona valores no início da deque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.unshift.php

---

# Ds\Deque::unshift

(PECL ds >= 1.0.0)

Ds\Deque::unshift — Adiciona valores no início da deque

### Descrição

public function **Ds\Deque::unshift**([mixed](language.types.mixed.md) `$values` = ?): [void](language.types.void.md)

Adiciona valores no início da deque, movendo todos os valores
atuais para a frente para dar espaço aos novos valores.

### Parâmetros

`values`
:   Os valores a serem adicionados no início da deque.
    > **Nota**:
    >
    > Múltiplos valores serão adicionados na mesma ordem em que são
    > passados.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::unshift()****

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);

$deque->unshift("a");
$deque->unshift("b", "c");

print_r($deque);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Deque Object
(
    [0] => b
    [1] => c
    [2] => a
    [3] => 1
    [4] => 2
    [5] => 3
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
