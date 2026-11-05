# E/S Direta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.dio.php

---

# E/S Direta

# Introdução

O PHP oferece suporte às funções de E/S Direta, conforme descrito no Padrão Posix
(Seção 6), para realizar funções de E/S em um nível mais baixo do que as funções
de E/S de fluxo da linguagem C
([fopen()](function.fopen.md), [fread()](function.fread.md),..). O uso
das funções de E/S Direta deve ser considerado apenas quando é necessário o controle direto
de um dispositivo. Em todos os outros casos, as funções padrão do
[sistema de arquivos](book.filesystem.md) são mais
do que adequadas.

- [Instalação/Configuração](dio.setup.md)
  - [Instalação](dio.installation.md)
  - [Tipos de Recurso](dio.resources.md)
- [Constantes predefinidas](dio.constants.md)
- [Funções de E/S Direta](ref.dio.md)
  - [dio\_close](function.dio-close.md) — Fecha o descritor de arquivo fornecido por fd
  - [dio\_fcntl](function.dio-fcntl.md) — Realiza uma chamada à função fcntl da biblioteca C no descritor de arquivo
  - [dio\_open](function.dio-open.md) — Abre um arquivo (criando-o, se necessário) em um nível mais baixo do que
    as funções de entrada/saída da biblioteca C permitem
  - [dio\_read](function.dio-read.md) — Lê bytes de um descritor de arquivo
  - [dio\_seek](function.dio-seek.md) — Move para a posição pos no descritor de arquivo (fd) a partir de whence
  - [dio\_stat](function.dio-stat.md) — Obtém informações estatísticas sobre o descritor de arquivo fd
  - [dio\_tcsetattr](function.dio-tcsetattr.md) — Define os atributos do terminal e a taxa de transmissão para uma porta serial
  - [dio\_truncate](function.dio-truncate.md) — Trunca o descritor de arquivo fd para o deslocamento em bytes
  - [dio\_write](function.dio-write.md) — Escreve dados em fd com opção de truncamento no comprimento

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
