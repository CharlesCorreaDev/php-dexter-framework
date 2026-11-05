# Manipulação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/threaded.chunk.php

---

# Threaded::chunk

(PECL pthreads >= 2.0.0)

Threaded::chunk — Manipulação

### Descrição

public function **Threaded::chunk**([int](language.types.integer.md) `$size`, [bool](language.types.boolean.md) `$preserve`): [array](language.types.array.md)

Busca um pedaço da tabela de propriedades de objetos do tamanho fornecido, preservando opcionalmente as chaves.

### Parâmetros

`size`
:   O número de itens a serem buscados

`preserve`
:   Preservar as chaves dos membros, por padrão falso

### Valor Retornado

Um array de itens da tabela de propriedades de objetos.

### Examples

**Exemplo #1 Buscando um pedaço da tabela de propriedades**

```
<?php
$safe = new Threaded();

while (count($safe) < 10) {
    $safe[] = count($safe);
}

var_dump($safe->chunk(5));
?>
```

O exemplo acima produzirá:

```
array(5) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  int(2)
  [3]=>
  int(3)
  [4]=>
  int(4)
}
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
