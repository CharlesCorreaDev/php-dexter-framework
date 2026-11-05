# Memória Compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.shmop.php

---

# Memória Compartilhada

# Introdução

Shmop é um conjunto de funções de fácil utilização que permitem ao PHP ler,
gravar, criar e excluir segmentos de memória compartilhada Unix.

- [Instalação/Configuração](shmop.setup.md)
  - [Instalação](shmop.installation.md)
  - [Tipos de Recurso](shmop.resources.md)
- [Examples](shmop.examples.md)
  - [Uso básico](shmop.examples-basic.md)
- [Funções para Memória Compartilhada](ref.shmop.md)
  - [shmop\_close](function.shmop-close.md) — Fecha um bloco de memória compartilhada
  - [shmop\_delete](function.shmop-delete.md) — Deleta um bloco de memória compartilhada
  - [shmop\_open](function.shmop-open.md) — Cria ou abre um bloco de memória compartilhada
  - [shmop\_read](function.shmop-read.md) — Lê dados do bloco de memória compartilhada
  - [shmop\_size](function.shmop-size.md) — Obtém o tamanho do bloco de memória compartilhada
  - [shmop\_write](function.shmop-write.md) — Escreve dados em um bloco de memória compartilhada
- [Shmop](class.shmop.md) — A classe Shmop

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
