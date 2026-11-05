# Define o modelo usado pelo formatador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/messageformatter.setpattern.php

---

# MessageFormatter::setPattern

# msgfmt\_set\_pattern

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

MessageFormatter::setPattern -- msgfmt\_set\_pattern — Define o modelo usado pelo formatador

### Descrição

Estilo orientado a objetos

public function **MessageFormatter::setPattern**([string](language.types.string.md) `$pattern`): [bool](language.types.boolean.md)

Estilo procedural

function **msgfmt\_set\_pattern**([MessageFormatter](class.messageformatter.md) `$formatter`, [string](language.types.string.md) `$pattern`): [bool](language.types.boolean.md)

Define o modelo a ser usado pelo formatador.

### Parâmetros

`formatter`
:   O formatador de mensagem

`pattern`
:   A [string](language.types.string.md) com o modelo a ser usado no formatador.
    O modelo usa uma sintaxe adequada para tratar apóstrofos/aspas;
    consulte [» Aspas/Escape](https://unicode-org.github.io/icu/userguide/format_parse/messages/#quotingescaping) para detalhes.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **msgfmt\_set\_pattern()****

```
<?php
$fmt = msgfmt_create( "en_US", "{0, number} monkeys on {1, number} trees" );
echo "Modelo atual: '" . msgfmt_get_pattern( $fmt ) . "'\n";
echo "Resultado da formatação: " . msgfmt_format( $fmt, array(123, 456) ) . "\n";

msgfmt_set_pattern( $fmt, "{0, number} trees hosting {1, number} monkeys" );
echo "Novo modelo: '" . msgfmt_get_pattern( $fmt ) . "'\n";
echo "Número formatado: " . msgfmt_format( $fmt, array(123, 456) ) . "\n";
?>
```

**Exemplo #2 Exemplo orientado a objeto**

```
<?php
$fmt = new MessageFormatter( "en_US", "{0, number} monkeys on {1, number} trees" );
echo "Modelo atual: '" . $fmt->getPattern() . "'\n";
echo "Resultado da formatação: " . $fmt->format(array(123, 456)) . "\n";

$fmt->setPattern("{0, number} trees hosting {1, number} monkeys" );
echo "Novo modelo: '" . $fmt->getPattern() . "'\n";
echo "Número formatado: " . $fmt->format(array(123, 456)) . "\n";
?>
```

O exemplo acima produzirá:

```
Modelo atual: '{0,number} monkeys on {1,number} trees'
Resultado da formatação: 123 monkeys on 456 trees
Novo modelo: '{0,number} trees hosting {1,number} monkeys'
Número formatado: 123 trees hosting 456 monkeys
```

### Veja também

- [msgfmt\_create()](messageformatter.create.md) - Constrói um novo formatador de mensagem
- [msgfmt\_get\_pattern()](messageformatter.getpattern.md) - Obtém o modelo usado pelo formatador

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
