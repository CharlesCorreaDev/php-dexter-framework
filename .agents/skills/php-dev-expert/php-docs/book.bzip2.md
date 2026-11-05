# Bzip2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.bzip2.php

---

# Bzip2

# Introdução

As funções para bzip2 são usadas para ler e escrever, de forma
transparente, arquivos compactados do tipo bzip2 (.bz2).

- [Instalação/Configuração](bzip2.setup.md)
  - [Dependências](bzip2.requirements.md)
  - [Instalação](bzip2.installation.md)
  - [Tipos de Recurso](bzip2.resources.md)
- [Examples](bzip2.examples.md)
- [Bzip2 Funções](ref.bzip2.md)
  - [bzclose](function.bzclose.md) — Fecha um ponteiro de arquivo bzip2
  - [bzcompress](function.bzcompress.md) — Comprime uma string em dados codificados com bzip2
  - [bzdecompress](function.bzdecompress.md) — Descomprime dados codificados com bzip2
  - [bzerrno](function.bzerrno.md) — Retorna um número de erro da bzip2
  - [bzerror](function.bzerror.md) — Retorna o número e string de erro do bzip2 em um array
  - [bzerrstr](function.bzerrstr.md) — Retorna a string de erro do bzip2
  - [bzflush](function.bzflush.md) — Sem efeitos
  - [bzopen](function.bzopen.md) — Abre um arquivo comprimido com bzip2
  - [bzread](function.bzread.md) — Leitura binária segura de arquivo bzip2
  - [bzwrite](function.bzwrite.md) — Gravação binária segura em arquivo bzip2

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
