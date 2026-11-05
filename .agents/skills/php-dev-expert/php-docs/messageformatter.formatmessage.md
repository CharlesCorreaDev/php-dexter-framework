# Formata uma mensagem rapidamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/messageformatter.formatmessage.php

---

# MessageFormatter::formatMessage

# msgfmt\_format\_message

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

MessageFormatter::formatMessage -- msgfmt\_format\_message — Formata uma mensagem rapidamente

### Descrição

Estilo orientado a objetos

public static function **MessageFormatter::formatMessage**([string](language.types.string.md) `$locale`, [string](language.types.string.md) `$pattern`, [array](language.types.array.md) `$values`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **msgfmt\_format\_message**([string](language.types.string.md) `$locale`, [string](language.types.string.md) `$pattern`, [array](language.types.array.md) `$values`): [string](language.types.string.md)|[false](language.types.singleton.md)

Função de formatação rápida que não precisa criar
explicitamente o objeto formatador. Use esta função quando a operação
de formatação for feita apenas uma vez, não precisar de parâmetros, não precisar manter
estados ou quando for desejado customizar a saída fornecendo contexto adicional diretamente à ICU.

### Parâmetros

`locale`
:   A localidade a ser utilizada para formatar as partes que dependem dela.

`pattern`
:   A [string](language.types.string.md) com o modelo para inserir os valores.
    O modelo usa uma sintaxe adequada para tratar apóstrofos/aspas;
    consulte [» Aspas/Escape](https://unicode-org.github.io/icu/userguide/format_parse/messages/#quotingescaping) para detalhes.

`values`
:   O [array](language.types.array.md) de valores a inserir na [string](language.types.string.md) do modelo.

### Valor Retornado

A string formatada de acordo com o modelo ou **`false`** se ocorrer um erro.

### Examples

**Exemplo #1 Exemplo de **msgfmt\_format\_message()****

```
<?php
echo msgfmt_format_message("en_US", "{0,number,integer} monkeys on {1,number,integer} trees make {2,number} monkeys per tree\n", array(4560, 123, 4560/123));
echo msgfmt_format_message("de", "{0,number,integer} Affen auf {1,number,integer} Bäumen sind {2,number} Affen pro Baum\n", array(4560, 123, 4560/123));
echo msgfmt_format_message("en", 'You finished {place, selectordinal, one {#st} two {#nd} few {#rd} other {#th}}!', ['place' => 3]), "\n";
echo msgfmt_format_message("en",
        "There {apple, plural,
            =0 {are no apples}
            =1 {is one apple...}
            other {are # apples!}
        }",
    ['apple' => 0]
), "\n";
```

**Exemplo #2 Exemplo orientado a objeto**

```
<?php
echo MessageFormatter::formatMessage("en_US", "{0,number,integer} monkeys on {1,number,integer} trees make {2,number} monkeys per tree\n", array(4560, 123, 4560/123));
echo MessageFormatter::formatMessage("de", "{0,number,integer} Affen auf {1,number,integer} Bäumen sind {2,number} Affen pro Baum\n", array(4560, 123, 4560/123));
echo MessageFormatter::formatMessage("en", 'You finished {place, selectordinal, one {#st} two {#nd} few {#rd} other {#th}}!', ['place' => 3]), "\n";
echo MessageFormatter::formatMessage("en",
        "There {apple, plural,
            =0 {are no apples}
            =1 {is one apple...}
            other {are # apples!}
        }",
    ['apple' => 0]
), "\n";
```

O exemplo acima produzirá:

```
4,560 monkeys on 123 trees make 37.073 monkeys per tree
4.560 Affen auf 123 Bäumen sind 37,073 Affen pro Baum
You finished 3rd!
There are no apples
```

**Exemplo #3 Instruindo a ICU a formatar moeda com símbolo normal e símbolo abreviado**

Requer a ICU ≥ 67.

```
<?php
echo msgfmt_format_message("cs_CZ", "{0, number, :: currency/CAD}", array(123.45));
echo msgfmt_format_message("cs_CZ", "{0, number, :: currency/CAD unit-width-narrow}", array(123.45));
```

O exemplo acima produzirá:

```
123,45 CA$
123,45 $
```

### Veja também

- [msgfmt\_create()](messageformatter.create.md) - Constrói um novo formatador de mensagem
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
