# Bloqueio de arquivo portável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.flock.php

---

# SplFileObject::flock

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::flock — Bloqueio de arquivo portável

### Descrição

public function **SplFileObject::flock**([int](language.types.integer.md) `$operation`, [int](language.types.integer.md) `&$wouldBlock` = **`null`**): [bool](language.types.boolean.md)

Bloqueia ou desbloqueia o arquivo da mesma forma portável que [flock()](function.flock.md).

### Parâmetros

`operation`
:   `operation` é uma das seguintes:

    - **`LOCK_SH`** para adquirir um bloqueio compartilhado (leitor).
    - **`LOCK_EX`** para adquirir um bloqueio exclusivo (escritor).
    - **`LOCK_UN`** para liberar um bloqueio (compartilhado ou exclusivo).

    Também é possível adicionar **`LOCK_NB`** como uma máscara de bits para uma
    das operações acima, se [flock()](function.flock.md) não deve
    bloquear durante a tentativa de bloqueio.

`wouldBlock`
:   Definido como **`true`** se o bloqueio bloqueasse (condição de errno EWOULDBLOCK).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::flock()****

```
<?php
$file = new SplFileObject("/tmp/lock.txt", "w");
if ($file->flock(LOCK_EX)) { // faz um bloqueio exclusivo
    $file->ftruncate(0);     // trunca o arquivo
    $file->fwrite("Escrevendo algo aqui\n");
    $file->flock(LOCK_UN);   // libera o bloqueio
} else {
    echo "Não foi possível obter o bloqueio!";
}
?>
```

### Veja também

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
