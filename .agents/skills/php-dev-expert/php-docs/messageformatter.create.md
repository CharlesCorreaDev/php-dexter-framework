# Constrói um novo formatador de mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/messageformatter.create.php

---

# MessageFormatter::create

# MessageFormatter::\_\_construct

# msgfmt\_create

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

MessageFormatter::create -- MessageFormatter::\_\_construct -- msgfmt\_create — Constrói um novo formatador de mensagem

### Descrição

Estilo orientado a objetos (method)

public static function **MessageFormatter::create**([string](language.types.string.md) `$locale`, [string](language.types.string.md) `$pattern`): [?](language.types.null.md)[MessageFormatter](class.messageformatter.md)

Estilo orientado a objetos (construtor):

public function **MessageFormatter::\_\_construct**([string](language.types.string.md) `$locale`, [string](language.types.string.md) `$pattern`)

Estilo procedural

function **msgfmt\_create**([string](language.types.string.md) `$locale`, [string](language.types.string.md) `$pattern`): [?](language.types.null.md)[MessageFormatter](class.messageformatter.md)

Constrói um novo formatador de mensagem.

### Parâmetros

`locale`
:   A localidade a ser utilizada ao formatar argumentos

`pattern`
:   A string com o modelo para formatar os argumentos.
    O modelo usa uma sintaxe adequada para tratar apóstrofos/aspas;
    consulte [» Aspas/Escape](https://unicode-org.github.io/icu/userguide/format_parse/messages/#quotingescaping) para detalhes.

### Valor Retornado

O formatador do tipo [object](language.types.object.md), ou **`null`** em caso de falha.

### Erros/Exceções

Quando invocado como construtor, em caso de falha uma exceção [IntlException](class.intlexception.md)
é lançada.

### Examples

**Exemplo #1 Exemplo de **msgfmt\_create()****

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

- [msgfmt\_format()](messageformatter.format.md) - Formata a mensagem
- [msgfmt\_parse()](messageformatter.parse.md) - Interpreta a string de entrada de acordo com o modelo
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
