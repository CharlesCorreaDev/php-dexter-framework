# Obtém a prioridade de um processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-getpriority.php

---

# pcntl\_getpriority

(PHP 5, PHP 7, PHP 8)

pcntl\_getpriority — Obtém a prioridade de um processo

### Descrição

function **pcntl\_getpriority**([?](language.types.null.md)[int](language.types.integer.md) `$process_id` = **`null`**, [int](language.types.integer.md) `$mode` = **`PRIO_PROCESS`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

**pcntl\_getpriority()** obtém a prioridade de
`process_id`. Como os níveis de prioridade podem mudar
dependendo do tipo do sistema e das versões de kernel, consulte o manual de getpriority(2)
do sistema em uso para detalhes específicos.

### Parâmetros

`process_id`
:   Se **`null`**, o ID do processo atual é usado.

`mode`
:   Uma das constantes **`PRIO_PGRP`**, **`PRIO_USER`**,
    **`PRIO_PROCESS`**,
    **`PRIO_DARWIN_BG`** ou **`PRIO_DARWIN_THREAD`**.

### Valor Retornado

**pcntl\_getpriority()** retorna a prioridade do processo
ou **`false`** em caso de erro. Um valor numérico menor dá maior prioridade
no processo.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `process_id` agora pode ser nulo. |

### Veja também

- [pcntl\_setpriority()](function.pcntl-setpriority.md) - Altera a prioridade de qualquer processo

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
