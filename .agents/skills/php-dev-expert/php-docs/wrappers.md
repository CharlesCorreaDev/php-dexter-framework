# Protocolos e empacotadores suportados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.php

---

# Protocolos e empacotadores suportados

O PHP vem com muitos empacotadores para vários protocolos no estilo URL
para uso com as funções do sistema de arquivos, tais como [fopen()](function.fopen.md),
[copy()](function.copy.md), [file\_exists()](function.file-exists.md) e
[filesize()](function.filesize.md).
Além desses empacotadores, é possível registrar empacotadores customizados
usando a função [stream\_wrapper\_register()](function.stream-wrapper-register.md).

> **Nota**:
>
> A sintaxe de URL usada para descrever um empacotadores suporta apenas
> a sintaxe `esquema://...`. As sintaxes `esquema:/`
> e `esquema:` não são suportadas.

## Índice

- [file://](wrappers.file.md) — Acessando o sistema de arquivos local
- [http://](wrappers.http.md) — Acessando URLs HTTP(s)
- [ftp://](wrappers.ftp.md) — Acessando URLs FTP(s)
- [php://](wrappers.php.md) — Acessando vários fluxos de E/S
- [zlib://](wrappers.compression.md) — Fluxos de compactação
- [data://](wrappers.data.md) — Dados (RFC 2397)
- [glob://](wrappers.glob.md) — Encontra caminhos que correspondem a um padrão
- [phar://](wrappers.phar.md) — Arquivo PHP
- [ssh2://](wrappers.ssh2.md) — Shell Seguro 2
- [rar://](wrappers.rar.md) — RAR
- [ogg://](wrappers.audio.md) — Fluxos de áudio
- [expect://](wrappers.expect.md) — Fluxos de Interação entre Processos

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
