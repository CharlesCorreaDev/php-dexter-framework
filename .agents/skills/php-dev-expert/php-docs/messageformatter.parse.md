# Interpreta a string de entrada de acordo com o modelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/messageformatter.parse.php

---

# MessageFormatter::parse

# msgfmt\_parse

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

MessageFormatter::parse -- msgfmt\_parse — Interpreta a string de entrada de acordo com o modelo

### Descrição

Estilo orientado a objetos

public function **MessageFormatter::parse**([string](language.types.string.md) `$string`): [array](language.types.array.md)|[false](language.types.singleton.md)

Estilo procedural

function **msgfmt\_parse**([MessageFormatter](class.messageformatter.md) `$formatter`, [string](language.types.string.md) `$string`): [array](language.types.array.md)|[false](language.types.singleton.md)

Interpreta a [string](language.types.string.md) de entrada e retorna os itens extraídos como um [array](language.types.array.md).

### Parâmetros

`formatter`
:   O formatador de mensagem

`string`
:   A [string](language.types.string.md) a ser interpretada

### Valor Retornado

Um [array](language.types.array.md) contendo os itens extraídos, ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **msgfmt\_parse()****

```
<?php
$fmt = msgfmt_create('en_US', "{0,number,integer} monkeys on {1,number,integer} trees make {2,number} monkeys per tree");
$res = msgfmt_parse($fmt, "4,560 monkeys on 123 trees make 37.073 monkeys per tree");
var_export($res);

$fmt = msgfmt_create('de', "{0,number,integer} Affen auf {1,number,integer} Bäumen sind {2,number} Affen pro Baum");
$res = msgfmt_parse($fmt, "4.560 Affen auf 123 Bäumen sind 37,073 Affen pro Baum");
var_export($res);
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new MessageFormatter('en_US', "{0,number,integer} monkeys on {1,number,integer} trees make {2,number} monkeys per tree");
$res = $fmt->parse("4,560 monkeys on 123 trees make 37.073 monkeys per tree");
var_export($res);

$fmt = new MessageFormatter('de', "{0,number,integer} Affen auf {1,number,integer} Bäumen sind {2,number} Affen pro Baum");
$res = $fmt->parse("4.560 Affen auf 123 Bäumen sind 37,073 Affen pro Baum");
var_export($res);
?>
```

O exemplo acima produzirá:

```
array (
  0 => 4560,
  1 => 123,
  2 => 37.073,
)
array (
  0 => 4560,
  1 => 123,
  2 => 37.073,
)
```

### Veja também

- [msgfmt\_create()](messageformatter.create.md) - Constrói um novo formatador de mensagem
- [msgfmt\_format()](messageformatter.format.md) - Formata a mensagem
- [msgfmt\_parse\_message()](messageformatter.parsemessage.md) - Interpreta rapidamente a string de entrada

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
