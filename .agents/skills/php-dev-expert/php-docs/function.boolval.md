# Obtém o valor booleano de uma variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.boolval.php

---

# boolval

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

boolval — Obtém o valor booleano de uma variável

### Descrição

function **boolval**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Retorna o valor [bool](language.types.boolean.md) do parâmetro `value`.

### Parâmetros

`value`
:   O valor escalar a ser convertido para um [bool](language.types.boolean.md).

### Valor Retornado

O valor [bool](language.types.boolean.md) do parâmetro`value`.

### Examples

**Exemplo #1 Exemplos da função **boolval()****

```
<?php
echo '0:        '.(boolval(0) ? 'true' : 'false')."\n";
echo '42:       '.(boolval(42) ? 'true' : 'false')."\n";
echo '0.0:      '.(boolval(0.0) ? 'true' : 'false')."\n";
echo '4.2:      '.(boolval(4.2) ? 'true' : 'false')."\n";
echo '"":       '.(boolval("") ? 'true' : 'false')."\n";
echo '"string": '.(boolval("string") ? 'true' : 'false')."\n";
echo '"0":      '.(boolval("0") ? 'true' : 'false')."\n";
echo '"1":      '.(boolval("1") ? 'true' : 'false')."\n";
echo '[1, 2]:   '.(boolval([1, 2]) ? 'true' : 'false')."\n";
echo '[]:       '.(boolval([]) ? 'true' : 'false')."\n";
echo 'stdClass: '.(boolval(new stdClass) ? 'true' : 'false')."\n";
?>
```

O exemplo acima produzirá:

```
0:        false
42:       true
0.0:      false
4.2:      true
"":       false
"string": true
"0":      false
"1":      true
[1, 2]:   true
[]:       false
stdClass: true
```

### Veja também

- [floatval()](function.floatval.md) - Obtém o valor em ponto flutuante da variável
- [intval()](function.intval.md) - Obtém o valor em número inteiro de uma variável
- [strval()](function.strval.md) - Retorna o valor string de uma variável
- [settype()](function.settype.md) - Define o tipo de uma variável
- [is\_bool()](function.is-bool.md) - Verifica se a variável é um booleano
- [Manipulação de tipos](language.types.type-juggling.md)

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
