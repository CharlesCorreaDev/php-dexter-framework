# Insere valores em um índice específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.insert.php

---

# Ds\Deque::insert

(PECL ds >= 1.0.0)

Ds\Deque::insert — Insere valores em um índice específico

### Descrição

public function **Ds\Deque::insert**([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

Insere valores no deque em um índice específico.

### Parâmetros

`index`
:   O índice no qual o valor será inserido. `0 <= index <= count`

    > **Nota**:
    >
    > Pode-se inserir no índice igual ao número de valores.

`values`
:   O valor ou valores a serem inseridos.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

[OutOfRangeException](class.outofrangeexception.md) se o índice não for válido.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::insert()****

```
<?php
$deque = new \Ds\Deque();

$deque->insert(0, "e");             // [e]
$deque->insert(1, "f");             // [e, f]
$deque->insert(2, "g");             // [e, f, g]
$deque->insert(0, "a", "b");        // [a, b, e, f, g]
$deque->insert(2, ...["c", "d"]);   // [a, b, c, d, e, f, g]

var_dump($deque);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Deque)#1 (7) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "b"
  [2]=>
  string(1) "c"
  [3]=>
  string(1) "d"
  [4]=>
  string(1) "e"
  [5]=>
  string(1) "f"
  [6]=>
  string(1) "g"
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
