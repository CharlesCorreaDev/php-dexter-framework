# Travamento de aviso para arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-lock.php

---

# streamWrapper::stream\_lock

(PHP 5, PHP 7, PHP 8)

streamWrapper::stream\_lock — Travamento de aviso para arquivos

### Descrição

public function **streamWrapper::stream\_lock**([int](language.types.integer.md) `$operation`): [bool](language.types.boolean.md)

Este método é chamado em resposta a [flock()](function.flock.md), em
[file\_put\_contents()](function.file-put-contents.md) (quando `flags`
contiver **`LOCK_EX`**), em
[stream\_set\_blocking()](function.stream-set-blocking.md) e no fechamento do fluxo
(**`LOCK_UN`**).

### Parâmetros

`operation`
:   `operation` pode ser um dos seguintes:

    - **`LOCK_SH`** para obter uma trava compartilhada (leitura).
    - **`LOCK_EX`** para obter uma trava exclusiva (escrita).
    - **`LOCK_UN`** para liberar uma trava (compartilhada ou exclusiva).

    Também é possível ter **`LOCK_NB`** adicionada como uma
    máscara de bits a uma das operações acima se a trava não bloquear
    durante a tentativa de travamento (não suportado no Windows).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Emite um aviso **`E_WARNING`** se a chamada a este método falhar (ex.: não implementado).

### Veja também

- [stream\_set\_blocking()](function.stream-set-blocking.md) - Definir modo de bloqueio/não-bloqueio em um fluxo
- [flock()](function.flock.md) - Travamento consultivo portável de arquivo

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
