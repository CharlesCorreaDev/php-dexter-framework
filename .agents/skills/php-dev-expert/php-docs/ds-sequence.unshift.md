# Adiciona valores no início da sequência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.unshift.php

---

# Ds\Sequence::unshift

(PECL ds >= 1.0.0)

Ds\Sequence::unshift — Adiciona valores no início da sequência

### Descrição

abstract public function **Ds\Sequence::unshift**([mixed](language.types.mixed.md) `$values` = ?): [void](language.types.void.md)

Adiciona valores no início da sequência, movendo todos os valores atuais
para a frente para dar espaço aos novos valores.

### Parâmetros

`values`
:   Os valores a serem adicionados no início da sequência.
    > **Nota**:
    >
    > Múltiplos valores serão adicionados na mesma ordem em que são
    > passados.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::unshift()****

```
<?php
$sequence = new \Ds\Vector([1, 2, 3]);

$sequence->unshift("a");
$sequence->unshift("b", "c");

print_r($sequence);
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
