# Constrói um novo objeto SyncReaderWriter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncreaderwriter.construct.php

---

# SyncReaderWriter::\_\_construct

(PECL sync >= 1.0.0)

SyncReaderWriter::\_\_construct — Constrói um novo objeto SyncReaderWriter

### Descrição

public function **SyncReaderWriter::\_\_construct**([string](language.types.string.md) `$name` = ?, [int](language.types.integer.md) `$autounlock` = 1)

Constrói um objeto leitor-escritor nomeado ou não nomeado.

### Parâmetros

`name`
:   O nome do leitor-escritor, se este for um objeto leitor-escritor nomeado.

    > **Nota**:
    >
    > Se o nome já existir, ele deve poder ser aberto pelo usuário atual
    > com o qual o processo está sendo executado, ou uma exceção será lançada com uma
    > mensagem de erro sem sentido.

    > **Nota**:
    >
    > No Windows, `name` não deve conter barras invertidas.

`autounlock`
:   Especifica se o leitor-gravador deve ou não ser desbloqueado automaticamente na
    conclusão do script PHP.

    **Aviso**

    Se um objeto for um leitor-escritor nomeado com um desbloqueio automático igual a FALSE, o
    objeto estiver bloqueado para leitura ou escrita, e o script PHP concluir
    antes do objeto ser desbloqueado, então os objetos subjacentes acabarão em um
    estado inconsistente.

### Valor Retornado

O novo objeto [SyncReaderWriter](class.syncreaderwriter.md).

### Erros/Exceções

Uma exceção será lançada se o leitor-gravador não puder ser criado ou aberto.

### Examples

**Exemplo #1 Exemplo de **SyncReaderWriter::\_\_construct()****

```
<?php
$readwrite = new SyncReaderWriter("FileCacheLock");
$readwrite->readlock();
/* ... */
$readwrite->readunlock();

$readwrite->writelock();
/* ... */
$readwrite->writeunlock();
?>
```

### Veja também

- [SyncReaderWriter::readlock()](syncreaderwriter.readlock.md) - Aguarda um bloqueio de leitura
- [SyncReaderWriter::readunlock()](syncreaderwriter.readunlock.md) - Libera um bloqueio de leitura
- [SyncReaderWriter::writelock()](syncreaderwriter.writelock.md) - Aguarda um bloqueio de gravação exclusivo
- [SyncReaderWriter::writeunlock()](syncreaderwriter.writeunlock.md) - Libera um bloqueio de gravação

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
