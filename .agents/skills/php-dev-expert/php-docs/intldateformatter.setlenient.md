# Define a leniência do interpretador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.setlenient.php

---

# IntlDateFormatter::setLenient

# datefmt\_set\_lenient

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::setLenient -- datefmt\_set\_lenient — Define a leniência do interpretador

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::setLenient**([bool](language.types.boolean.md) `$lenient`): [void](language.types.void.md)

Estilo procedural

function **datefmt\_set\_lenient**([IntlDateFormatter](class.intldateformatter.md) `$formatter`, [bool](language.types.boolean.md) `$lenient`): [void](language.types.void.md)

Define se o interpretador é estrito ou leniente ao interpretar entradas que não correspondem exatamente ao modelo.
Habilitar interpretação leniente permite ao interpretador aceitar modelos de data e horário que poderiam
falhar, analisando o máximo possível para obter um valor.
Espaços extras, marcadores não reconhecidos ou valores inválidos ("30 de fevereiro") não são aceitos.

### Parâmetros

`formatter`
:   O recurso do formatador

`lenient`
:   Define de o interpretador é leniente ou não, o padrão é **`true`** (leniente).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **datefmt\_set\_lenient()****

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

- [datefmt\_is\_lenient()](intldateformatter.islenient.md) - Obtém a leniência usada para o IntlDateFormatter
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
