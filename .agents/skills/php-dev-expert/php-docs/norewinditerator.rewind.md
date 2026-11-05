# Impede a operação de rebobinar no iterador interno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/norewinditerator.rewind.php

---

# NoRewindIterator::rewind

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

NoRewindIterator::rewind — Impede a operação de rebobinar no iterador interno

### Descrição

public function **NoRewindIterator::rewind**(): [void](language.types.void.md)

Impede a operação de rebobinar no iterador interno.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **NoRewindIterator::rewind()****

Este exemplo demonstra que chamando rewind em um objeto NoRewindIterator não tem efeito.

```
<?php
$fruits = array("limão", "laranja", "maçã", "pera");

$noRewindIterator = new NoRewindIterator(new ArrayIterator($fruits));

echo $noRewindIterator->current() . "\n";
$noRewindIterator->next();
// agora rebobina o iterador (nada deve acontecer)
$noRewindIterator->rewind();
echo $noRewindIterator->current() . "\n";
?>
```

O exemplo acima produzirá:

```
limão
laranja
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
