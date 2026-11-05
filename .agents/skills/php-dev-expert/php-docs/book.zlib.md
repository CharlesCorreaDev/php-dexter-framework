# Compressão Zlib

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.zlib.php

---

# Compressão Zlib

# Introdução

Este módulo permite que você leia e escreva arquivos
comprimidos gzip (.gz) de forma transparente, através de versões da maioria das
funções do [sistema de arquivos](book.filesystem.md)
que funcionam com arquivos comprimidos gzip (e também com arquivos não comprimidos,
mas não com sockets).

> **Nota**:
>
> O PHP vem com um empacotador fopen para arquivos .gz.
> Mais informações estão disponíveis na seção sobre
> [zlib://](wrappers.compression.md).

- [Instalação/Configuração](zlib.setup.md)
  - [Dependências](zlib.requirements.md)
  - [Instalação](zlib.installation.md)
  - [Configurações de Execução](zlib.configuration.md)
  - [Tipos de Recurso](zlib.resources.md)
- [Constantes predefinidas](zlib.constants.md)
- [Examples](zlib.examples.md)
- [Funções da Zlib](ref.zlib.md)
  - [deflate\_add](function.deflate-add.md) — Comprime dados incrementalmente
  - [deflate\_init](function.deflate-init.md) — Inicializa um contexto de compressão incremental
  - [gzclose](function.gzclose.md) — Fecha um ponteiro de um arquivo gz aberto
  - [gzcompress](function.gzcompress.md) — Comprime uma string
  - [gzdecode](function.gzdecode.md) — Decodifica uma string comprimida usando o gzip
  - [gzdeflate](function.gzdeflate.md) — Desinfla uma string
  - [gzencode](function.gzencode.md) — Cria uma string comprimida no formato gzip
  - [gzeof](function.gzeof.md) — Testar o EOF em um ponteiro de arquivo gz
  - [gzfile](function.gzfile.md) — Lê todo o arquivo gz em um array
  - [gzgetc](function.gzgetc.md) — Obtém caractere de um ponteiro de arquivo gz
  - [gzgets](function.gzgets.md) — Obtém uma linha de um ponteiro de arquivo
  - [gzgetss](function.gzgetss.md) — Obtém linha de um ponteiro de arquivo gz e remover tags HTML
  - [gzinflate](function.gzinflate.md) — Descomprime uma string comprimida
  - [gzopen](function.gzopen.md) — Abre arquivo gz
  - [gzpassthru](function.gzpassthru.md) — Escreve na saída todos os dados restantes em um ponteiro de arquivo gz
  - [gzputs](function.gzputs.md) — Sinônimo de gzwrite
  - [gzread](function.gzread.md) — Leitura de arquivo gz binária segura
  - [gzrewind](function.gzrewind.md) — Retorna ao início a posição de um ponteiro para um arquivo-gz
  - [gzseek](function.gzseek.md) — Posiciona um ponteiro de arquivo gz
  - [gztell](function.gztell.md) — Indica a posição de leitura/gravação em um ponteiro para arquivo-gz
  - [gzuncompress](function.gzuncompress.md) — Descomprime uma string comprimida
  - [gzwrite](function.gzwrite.md) — Escrita segura para binário em arquivo-gz
  - [inflate\_add](function.inflate-add.md) — Descomprime incrementalmente dados codificados
  - [inflate\_get\_read\_len](function.inflate-get-read-len.md) — Obtém o número de bytes lidos até o momento
  - [inflate\_get\_status](function.inflate-get-status.md) — Obtém o status da descompressão
  - [inflate\_init](function.inflate-init.md) — Inicializa um contexto de descompressão incremental
  - [ob\_gzhandler](function.ob-gzhandler.md) — Função de chamada de retorno de ob\_start para comprimir o buffer de saída com gzip
  - [readgzfile](function.readgzfile.md) — Exibe um arquivo gz
  - [zlib\_decode](function.zlib-decode.md) — Descomprime qualquer dado codificado em raw/gzip/zlib
  - [zlib\_encode](function.zlib-encode.md) — Comprime dados com o codificador especificado
  - [zlib\_get\_coding\_type](function.zlib-get-coding-type.md) — Retorna o tipo de codificação para a compressão de saída
- [DeflateContext](class.deflatecontext.md) — A classe DeflateContext
- [InflateContext](class.inflatecontext.md) — A classe InflateContext

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
