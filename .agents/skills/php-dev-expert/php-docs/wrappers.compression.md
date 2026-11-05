# Fluxos de compactação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.compression.php

---

# zlib://

# bzip2://

# zip://

zlib:// -- bzip2:// -- zip:// — Fluxos de compactação

### Descrição

compress.zlib:// e compress.bzip2://

zlib: funciona como [gzopen()](function.gzopen.md), exceto que
o fluxo pode ser usado com [fread()](function.fread.md) e outras
funções do sistema de arquivos. Isso foi descontinuado devido
a ambiguidades com nomes de arquivos contendo caracteres ':'; use
compress.zlib:// em vez disso.

compress.zlib:// e
compress.bzip2:// são equivalentes para
[gzopen()](function.gzopen.md) e [bzopen()](function.bzopen.md)
respectivamente, e funcionam mesmo em sistemas que não suportam
fopencookie.

A [extensão ZIP](book.zip.md) registra o empacotador zip:. a partir do
PHP 7.2.0 e libzip 1.2.0+, foi adicionado suporte para as senhas para arquivos criptografados, permitindo
que as senhas sejam fornecidas por contextos de fluxo. As senhas podem ser definidas usando `'password'`,
uma opção de contexto de fluxo.

### Uso

- compress.zlib://file.gz
- compress.bzip2://file.bz2
- zip://archive.zip#dir/file.txt

### Opções

**Resumo do Empacotador**

| Atributo | Suportado |
| --- | --- |
| Restringido por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Não |
| Permite leitura | Sim |
| Permite escrita | Sim (exceto `zip://`) |
| Permite adição | Sim (exceto `zip://`) |
| Permite leitura e escrita simultâneas | Não |
| Suporta [stat()](function.stat.md) | Não, use o empacotador `file://` para verificar o "stat" de arquivos compactados. |
| Suporta [unlink()](function.unlink.md) | Não, use o empacotador `file://` para excluir arquivos compactados. |
| Suporta [rename()](function.rename.md) | Não |
| Suporta [mkdir()](function.mkdir.md) | Não |
| Suporta [rmdir()](function.rmdir.md) | Não |

### Veja também

- [Opções de contexto Zlib](context.zlib.md)

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
