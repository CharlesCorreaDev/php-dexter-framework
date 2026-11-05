# Adiciona valores no início do vetor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.unshift.php

---

# Ds\Vector::unshift

(PECL ds >= 1.0.0)

Ds\Vector::unshift — Adiciona valores no início do vetor

### Descrição

public function **Ds\Vector::unshift**([mixed](language.types.mixed.md) `$values` = ?): [void](language.types.void.md)

Adiciona valores no início do vetor, movendo todos os valores atuais
para frente para dar espaço aos novos valores.

### Parâmetros

`values`
:   Os valores a serem adicionados no início do vetor.
    > **Nota**:
    >
    > Múltiplos valores serão adicionados na mesma ordem em que são
    > passados.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::unshift()****

```
<?php
$vector = new \Ds\Vector([1, 2, 3]);

$vector->unshift("a");
$vector->unshift("b", "c");

print_r($vector);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
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
