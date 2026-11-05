# Adiciona valores ao final da sequência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.push.php

---

# Ds\Sequence::push

(PECL ds >= 1.0.0)

Ds\Sequence::push — Adiciona valores ao final da sequência

### Descrição

abstract public function **Ds\Sequence::push**([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

Adiciona valores ao final da sequência.

### Parâmetros

`values`
:   Os valores a serem adicionados.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::push()****

```
<?php
$sequence = new \Ds\Vector();

$sequence->push("a");
$sequence->push("b");
$sequence->push("c", "d");
$sequence->push(...["e", "f"]);

print_r($sequence);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
    [4] => e
    [5] => f
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
