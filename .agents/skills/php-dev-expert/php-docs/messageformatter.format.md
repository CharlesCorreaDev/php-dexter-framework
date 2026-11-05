# Formata a mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/messageformatter.format.php

---

# MessageFormatter::format

# msgfmt\_format

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

MessageFormatter::format -- msgfmt\_format — Formata a mensagem

### Descrição

Estilo orientado a objetos

public function **MessageFormatter::format**([array](language.types.array.md) `$values`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **msgfmt\_format**([MessageFormatter](class.messageformatter.md) `$formatter`, [array](language.types.array.md) `$values`): [string](language.types.string.md)|[false](language.types.singleton.md)

Formata a mensagem substituindo os dados na string de formato
de acordo com as regras da localidade.

### Parâmetros

`formatter`
:   O formatador de mensagem

`values`
:   Argumentos a inserir na string de formato

### Valor Retornado

A string formatada, ou **`false`** se ocorrer um erro.

### Examples

**Exemplo #1 Exemplo de **msgfmt\_format()****

```
<?php
$fmt = msgfmt_create("en_US", "{0,number,integer} monkeys on {1,number,integer} trees make {2,number} monkeys per tree");
echo msgfmt_format($fmt, array(4560, 123, 4560/123));
$fmt = msgfmt_create("de", "{0,number,integer} Affen auf {1,number,integer} Bäumen sind {2,number} Affen pro Baum");
echo msgfmt_format($fmt, array(4560, 123, 4560/123));
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new MessageFormatter("en_US", "{0,number,integer} monkeys on {1,number,integer} trees make {2,number} monkeys per tree");
echo $fmt->format(array(4560, 123, 4560/123));
$fmt = new MessageFormatter("de", "{0,number,integer} Affen auf {1,number,integer} Bäumen sind {2,number} Affen pro Baum");
echo $fmt->format(array(4560, 123, 4560/123));
?>
```

O exemplo acima produzirá:

```
4,560 monkeys on 123 trees make 37.073 monkeys per tree
4.560 Affen auf 123 Bäumen sind 37,073 Affen pro Baum
```

### Veja também

- [msgfmt\_create()](messageformatter.create.md) - Constrói um novo formatador de mensagem
- [msgfmt\_parse()](messageformatter.parse.md) - Interpreta a string de entrada de acordo com o modelo
- [msgfmt\_format\_message()](messageformatter.formatmessage.md) - Formata uma mensagem rapidamente
- [msgfmt\_get\_error\_code()](messageformatter.geterrorcode.md) - Obtém o código de erro da última operação
- [msgfmt\_get\_error\_message()](messageformatter.geterrormessage.md) - Obtém o texto do erro da última operação

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
