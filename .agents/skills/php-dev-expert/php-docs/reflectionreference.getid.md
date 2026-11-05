# Obtém ID exclusivo de uma referência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionreference.getid.php

---

# ReflectionReference::getId

(PHP 7 >= 7.4.0, PHP 8)

ReflectionReference::getId — Obtém ID exclusivo de uma referência

### Descrição

public function **ReflectionReference::getId**(): [string](language.types.string.md)

Retorna um ID que é exclusivo para a referência durante o tempo de vida dessa referência.
Este ID pode ser usado para comparar referências de igualdade ou para manter um mapa de
referências conhecidas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [string](language.types.string.md) de formato não especificado.

### Examples

**Exemplo #1 Uso básico de **ReflectionReference::getId()****

```
<?php
$val1 = 'foo';
$val2 = 'bar';
$arr = [&$val1, &$val2, &$val1];

$rr1 = ReflectionReference::fromArrayElement($arr, 0);
$rr2 = ReflectionReference::fromArrayElement($arr, 1);
$rr3 = ReflectionReference::fromArrayElement($arr, 2);

var_dump($rr1->getId() === $rr2->getId());
var_dump($rr1->getId() === $rr3->getId());
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
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
