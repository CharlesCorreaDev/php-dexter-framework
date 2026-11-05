# Define o ID do grupo de processos para o controle de tarefas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-setpgid.php

---

# posix\_setpgid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_setpgid — Define o ID do grupo de processos para o controle de tarefas

### Descrição

function **posix\_setpgid**([int](language.types.integer.md) `$process_id`, [int](language.types.integer.md) `$process_group_id`): [bool](language.types.boolean.md)

LPermite que o processo `process_id` se junte ao grupo
de processos `process_group_id`.

### Parâmetros

`process_id`
:   O ID do processo.

`process_group_id`
:   O ID do grupo de processos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora lança um [ValueError](class.valueerror.md) quando `process_id` ou `process_group_id` são menores que zero ou maiores do que a plataforma suporta. |

### Veja também

- Consulte POSIX.1 e a página de manual setsid(2) no sistema POSIX para obter mais
  informações sobre grupos de processos e controle de tarefas.

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
