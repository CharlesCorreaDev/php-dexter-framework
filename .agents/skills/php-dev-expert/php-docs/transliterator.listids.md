# Obtém IDs de transliteradores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/transliterator.listids.php

---

# Transliterator::listIDs

# transliterator\_list\_ids

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

Transliterator::listIDs -- transliterator\_list\_ids — Obtém IDs de transliteradores

### Descrição

Estilo orientado a objetos

public static function **Transliterator::listIDs**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Estilo procedural

function **transliterator\_list\_ids**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna um array com os IDs de transliteradores registrados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) de IDs de transliteradores registrados em caso de sucesso,
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Obtendo os IDs de transliteradores registrados**

```
<?php
print_r(Transliterator::listIDs());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => ASCII-Latin
    [1] => Accents-Any
    [2] => Amharic-Latin/BGN
    [3] => Any-Accents
    [4] => Any-Publishing
...
    [650] => Any-ps_Latn/BGN
    [651] => Any-tk/BGN
    [652] => Any-ch_FONIPA
    [653] => Any-cs_FONIPA
    [654] => Any-cy_FONIPA
)
```

### Veja também

- [Transliterator::getErrorMessage()](transliterator.geterrormessage.md) - Obtém a última mensagem de erro
- [Transliterator::transliterate()](transliterator.transliterate.md) - Translitera uma string

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
