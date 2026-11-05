# Interpreta rapidamente a string de entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/messageformatter.parsemessage.php

---

# MessageFormatter::parseMessage

# msgfmt\_parse\_message

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

MessageFormatter::parseMessage -- msgfmt\_parse\_message — Interpreta rapidamente a string de entrada

### Descrição

Estilo orientado a objetos

public static function **MessageFormatter::parseMessage**([string](language.types.string.md) `$locale`, [string](language.types.string.md) `$pattern`, [string](language.types.string.md) `$message`): [array](language.types.array.md)|[false](language.types.singleton.md)

Estilo procedural

function **msgfmt\_parse\_message**([string](language.types.string.md) `$locale`, [string](language.types.string.md) `$pattern`, [string](language.types.string.md) `$message`): [array](language.types.array.md)|[false](language.types.singleton.md)

Interpreta a string de entrada sem criar explicitamente o objeto formatador. Use
esta função quando a operação de formatação é feita apenas uma vez e não precisa
de parâmetros ou de manter estados.

### Parâmetros

`locale`
:   A localidade a ser usada para interpretação das partes que dependem dela.

`pattern`
:   O modelo com o qual o parâmetro `message` será interpretado.

`message`
:   A [string](language.types.string.md) a ser interpretada, conforme definido em `pattern`.

### Valor Retornado

Um [array](language.types.array.md) contendo os itens extraídos, ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **msgfmt\_parse\_message()****

```
<?php
$fmt = msgfmt_parse_message('en_US', "{0,number,integer} monkeys on {1,number,integer} trees make {2,number} monkeys per tree",
                            "4,560 monkeys on 123 trees make 37.073 monkeys per tree");
var_export($fmt);

$fmt = msgfmt_parse_message('de', "{0,number,integer} Affen auf {1,number,integer} Bäumen sind {2,number} Affen pro Baum",
                            "4.560 Affen auf 123 Bäumen sind 37,073 Affen pro Baum");
var_export($fmt);
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = MessageFormatter::parseMessage('en_US', "{0,number,integer} monkeys on {1,number,integer} trees make {2,number} monkeys per tree",
                            "4,560 monkeys on 123 trees make 37.073 monkeys per tree");
var_export($fmt);

$fmt = MessageFormatter::parseMessage('de', "{0,number,integer} Affen auf {1,number,integer} Bäumen sind {2,number} Affen pro Baum",
                            "4.560 Affen auf 123 Bäumen sind 37,073 Affen pro Baum");
var_export($fmt);
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
- [msgfmt\_format\_message()](messageformatter.formatmessage.md) - Formata uma mensagem rapidamente
- [msgfmt\_parse()](messageformatter.parse.md) - Interpreta a string de entrada de acordo com o modelo

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
