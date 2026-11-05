# Envia um sinal para um processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-kill.php

---

# posix\_kill

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_kill — Envia um sinal para um processo

### Descrição

function **posix\_kill**([int](language.types.integer.md) `$process_id`, [int](language.types.integer.md) `$signal`): [bool](language.types.boolean.md)

Envia o sinal `signal` para o processo com
o identificador de processo `process_id`.

### Parâmetros

`process_id`
:   O identificador do processo.

`signal`
:   Uma das [constantes de sinal PCNTL](pcntl.constants.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora lança um [ValueError](class.valueerror.md) quando `process_id` é maior ou menor do que a plataforma suporta (inteiro com sinal ou longo). |

### Veja também

- A página de manual kill(2) do sistema POSIX, que contém informações adicionais
  sobre identificadores negativos de processo, o ID de processo 0, o
  ID de processo especial -1 e o sinal número 0.

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
