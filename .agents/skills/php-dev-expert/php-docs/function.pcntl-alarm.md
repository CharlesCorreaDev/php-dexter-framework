# Define um alarme para entrega de um sinal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-alarm.php

---

# pcntl\_alarm

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pcntl\_alarm — Define um alarme para entrega de um sinal

### Descrição

function **pcntl\_alarm**([int](language.types.integer.md) `$seconds`): [int](language.types.integer.md)

Cria um temporizador que enviará um sinal **`SIGALRM`** para
o processo após o número de segundos especificado.
Qualquer chamada para **pcntl\_alarm()** cancelará qualquer
alarme definido anteriormente.

### Parâmetros

`seconds`
:   O número de segundos a aguardar. Se `seconds` for
    zero, nenhum novo alarme será criado.

### Valor Retornado

Retorna o tempo em segundos que qualquer alarme previamente agendado tinha
restante antes de ser emitido, ou `0` se não houver
nenhum alarme previamente agendado.

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
