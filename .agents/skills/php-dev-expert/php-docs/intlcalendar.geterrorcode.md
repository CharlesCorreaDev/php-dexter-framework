# Obtém o último código de erro no objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.geterrorcode.php

---

# IntlCalendar::getErrorCode

# intlcal\_get\_error\_code

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getErrorCode -- intlcal\_get\_error\_code — Obtém o último código de erro no objeto

### Descrição

Estilo orientado a objetos (method):

public function **IntlCalendar::getErrorCode**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural:

function **intlcal\_get\_error\_code**([IntlCalendar](class.intlcalendar.md) `$calendar`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o código de erro numérico da ICU para a última chamada neste objeto
(incluindo clonagem) ou no objeto [IntlCalendar](class.intlcalendar.md) informado no
parâmetro `calendar` (na versão em estilo
procedural). Pode indicar apenas um alerta (código de erro negativo) ou nenhum
erro (**`U_ZERO_ERROR`**). A presença real de
erro pode ser testada com [intl\_is\_failure()](function.intl-is-failure.md).

Argumentos inválidos detectados no lado do PHP (antes de chamar funções da
biblioteca ICU) não são registradas para o propósito desta função.

O último erro que ocorreu em qualquer chamada a uma função da extensão
Intl, incluindo erros de argumentos, podem ser obtidos com
[intl\_get\_error\_code()](function.intl-get-error-code.md). Esta função redefine o código de erro
global, mas não o código de erro do objeto.

### Parâmetros

`calendar`
:   O objeto calendário, na interface em estilo procedural.

### Valor Retornado

Um código de erro ICU indicando sucesso, falha ou um alerta.
Retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::getErrorCode()** e
[IntlCalendar::getErrorMessage()](intlcalendar.geterrormessage.md)**

```
<?php
ini_set("intl.error_level", E_WARNING);
ini_set("intl.default_locale", "nl");

$intlcal = new IntlGregorianCalendar(2012, 1, 29);
var_dump(
    $intlcal->getErrorCode(),
    $intlcal->getErrorMessage()
);
$intlcal->fieldDifference(-1e100, IntlCalendar::FIELD_SECOND);

var_dump(
    $intlcal->getErrorCode(),
    $intlcal->getErrorMessage()
);
```

O exemplo acima produzirá:

```
int(0)
string(12) "U_ZERO_ERROR"

Warning: IntlCalendar::fieldDifference(): intlcal_field_difference: Call to ICU method has failed in /home/glopes/php/ws/example.php on line 10
int(1)
string(81) "intlcal_field_difference: Call to ICU method has failed: U_ILLEGAL_ARGUMENT_ERROR"
```

### Veja também

- [IntlCalendar::getErrorMessage()](intlcalendar.geterrormessage.md) - Obtém a última mensagem de erro no objeto
- [intl\_is\_failure()](function.intl-is-failure.md) - Verifica se o código de erro fornecido indica falha
- [intl\_error\_name()](function.intl-error-name.md) - Obtém nome simbólico para um código de erro informado
- [intl\_get\_error\_code()](function.intl-get-error-code.md) - Obtém o último código de erro
- [intl\_get\_error\_message()](function.intl-get-error-message.md) - Obtém a descrição do último erro

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
