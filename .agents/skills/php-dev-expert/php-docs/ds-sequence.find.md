# Tenta encontrar o índice de um valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.find.php

---

# Ds\Sequence::find

(PECL ds >= 1.0.0)

Ds\Sequence::find — 
Tenta encontrar o índice de um valor

### Descrição

abstract public function **Ds\Sequence::find**([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

Retorna o índice do `value`, ou **`false`** se não encontrado.

### Parâmetros

`value`
:   O valor a ser encontrado.

### Valor Retornado

O índice do valor, ou **`false`** se não encontrado.

> **Nota**:
>
> Os valores serão comparados por valor e por tipo.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::find()****

```
<?php
$sequence = new \Ds\Vector(["a", 1, true]);

var_dump($sequence->find("a")); // 0
var_dump($sequence->find("b")); // false
var_dump($sequence->find("1")); // false
var_dump($sequence->find(1));   // 1
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(0)
bool(false)
bool(false)
int(1)
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
