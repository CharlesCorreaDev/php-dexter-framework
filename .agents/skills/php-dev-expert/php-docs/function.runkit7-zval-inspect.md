# Retorna informações sobre o valor passado com tipos de dados, contagens de referência, etc.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-zval-inspect.php

---

# runkit7\_zval\_inspect

(PECL runkit7 >= Unknown)

runkit7\_zval\_inspect — Retorna informações sobre o valor passado com tipos de dados, contagens de referência, etc.

### Descrição

function **runkit7\_zval\_inspect**([string](language.types.string.md) `$value`): [array](language.types.array.md)

### Parâmetros

`value`
:   O valor do qual a representação será retornada.

### Valor Retornado

O array retornado por esta função contém os seguintes elementos:

- `address`(endereço)
- `refcount` (contagem de referência - opcional)
- `is_ref` (informa se é referência - opcional)
- `type` (tipo)

### Examples

**Exemplo #1 Exemplo de **runkit7\_zval\_inspect()****

```
<?php

$var = new DateTime();
var_dump(runkit7_zval_inspect($var));

$var = 1;
var_dump(runkit7_zval_inspect($var));
?>
```

O exemplo acima produzirá:

```
array(4) {
  ["address"]=>
  string(14) "0x7f45ab21b1e0"
  ["refcount"]=>
  int(2)
  ["is_ref"]=>
  bool(false)
  ["type"]=>
  int(8)
}

array(2) {
  ["address"]=>
  string(14) "0x7f45ab21b1e0"
  ["type"]=>
  int(4)
}
```

### Veja também

- [Referências explicadas](language.references.md)
- [» Referências explicadas (por Derick Rethans)](https://derickrethans.nl/php_references_article.php)

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
