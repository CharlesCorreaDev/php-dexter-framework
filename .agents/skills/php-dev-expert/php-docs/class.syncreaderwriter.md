# A classe SyncReaderWriter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.syncreaderwriter.php

---

# A classe SyncReaderWriter

(PECL sync >= 1.0.0)

## Introdução

Uma implementação nativa e multiplataforma de objetos de leitura e escrita nomeados e não nomeados.

Um objeto de leitura e escrita permite que muitos leitores ou um escritor acessem um recurso.
Esta é uma solução eficiente para gerenciar recursos onde o acesso será principalmente de
leitura, mas ocasionalmente é necessário acesso exclusivo de escrita.

## Resumo da classe

class **SyncReaderWriter**
{

/\* Métodos \*/

public function [\_\_construct](syncreaderwriter.construct.md)([string](language.types.string.md) `$name` = ?, [int](language.types.integer.md) `$autounlock` = 1)

public function [readlock](syncreaderwriter.readlock.md)([int](language.types.integer.md) `$wait` = -1): [bool](language.types.boolean.md)

public function [readunlock](syncreaderwriter.readunlock.md)(): [bool](language.types.boolean.md)

public function [writelock](syncreaderwriter.writelock.md)([int](language.types.integer.md) `$wait` = -1): [bool](language.types.boolean.md)

public function [writeunlock](syncreaderwriter.writeunlock.md)(): [bool](language.types.boolean.md)

}

## Índice

- [SyncReaderWriter::\_\_construct](syncreaderwriter.construct.md) — Constrói um novo objeto SyncReaderWriter
- [SyncReaderWriter::readlock](syncreaderwriter.readlock.md) — Aguarda um bloqueio de leitura
- [SyncReaderWriter::readunlock](syncreaderwriter.readunlock.md) — Libera um bloqueio de leitura
- [SyncReaderWriter::writelock](syncreaderwriter.writelock.md) — Aguarda um bloqueio de gravação exclusivo
- [SyncReaderWriter::writeunlock](syncreaderwriter.writeunlock.md) — Libera um bloqueio de gravação

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
