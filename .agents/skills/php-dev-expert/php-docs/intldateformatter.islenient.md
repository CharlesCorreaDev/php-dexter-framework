# Obtém a leniência usada para o IntlDateFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.islenient.php

---

# IntlDateFormatter::isLenient

# datefmt\_is\_lenient

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::isLenient -- datefmt\_is\_lenient — Obtém a leniência usada para o IntlDateFormatter

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::isLenient**(): [bool](language.types.boolean.md)

Estilo procedural

function **datefmt\_is\_lenient**([IntlDateFormatter](class.intldateformatter.md) `$formatter`): [bool](language.types.boolean.md)

Verifica se o interpretador é estrito ou leniente ao interpretar entradas que não correspondem exatamente ao modelo.

### Parâmetros

`formatter`
:   O recurso do formatador.

### Valor Retornado

**`true`** se o interpretador for leniente, **`false`** se for estrito. Por padrão o interpretador é leniente.

### Examples

**Exemplo #1 Exemplo de **datefmt\_is\_lenient()****

```
<?php
$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN,
    'dd/MM/yyyy'
);
echo 'Leniência do formatador é : ';
if ($fmt->isLenient()) {
    echo 'TRUE';
} else {
    echo 'FALSE';
}
datefmt_parse($fmt, '35/13/1971');
echo "\nTentando interpretar '35/13/1971'.\nO resultado é: " . datefmt_parse($fmt, '35/13/1971');
if (intl_get_error_code() != 0) {
    echo "\nMensagem de erro: " . intl_get_error_message();
    echo "\nCódigo de erro: " . intl_get_error_code();
}
datefmt_set_lenient($fmt,false);
echo "\nAgora a leniência do formatador é: ";
if ($fmt->isLenient()) {
    echo 'TRUE';
} else {
    echo 'FALSE';
}
datefmt_parse($fmt, '35/13/1971');
echo "\nTentando interpretar '35/13/1971'.\nO resultado é: " . datefmt_parse($fmt, '35/13/1971');
if (intl_get_error_code() != 0) {
    echo "\nMensagem de erro: " . intl_get_error_message();
    echo "\nCódigo de erro: " . intl_get_error_code();
}

?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new IntlDateFormatter(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN,
    "dd/MM/yyyy"
);
echo "Leniência do formatador é : ";
if ($fmt->isLenient()) {
    echo 'TRUE';
} else {
    echo 'FALSE';
}
$fmt->parse('35/13/1971');
echo "\nTentando interpretar '35/13/1971'.\nO resultado é: " . $fmt->parse('35/13/1971');
if (intl_get_error_code() != 0){
    echo "\nMensagem de erro: " . intl_get_error_message();
    echo "\nCódigo de erro: " . intl_get_error_code();
}

$fmt->setLenient(FALSE);
echo "\nAgora a leniência do formatador é: ";
if ($fmt->isLenient()) {
    echo 'TRUE';
} else {
    echo 'FALSE';
}
$fmt->parse('35/13/1971');
echo "\nTentando interpretar '35/13/1971'.\nO resultado é: " . $fmt->parse('35/13/1971');
if (intl_get_error_code() != 0) {
    echo "\nMensagem de erro: " . intl_get_error_message();
    echo "\nCódigo de erro: " . intl_get_error_code();
}

?>
```

O exemplo acima produzirá:

```
Leniência do formatador é : TRUE
Tentando interpretar '35/13/1971'.
O resultado é: 66038400
Agora a leniência do formatador é: FALSE
Tentando interpretar '35/13/1971'.
O resultado é:
Mensagem de erro: Date parsing failed: U_PARSE_ERROR
Código de erro: 9
```

### Veja também

- [datefmt\_set\_lenient()](intldateformatter.setlenient.md) - Define a leniência do interpretador
- [datefmt\_create()](intldateformatter.create.md) - Cria um formatador de data

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
