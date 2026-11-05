# Suporte ao Windows

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration85.windows-support.php

---

## Suporte ao Windows

### Núcleo

As variáveis ​​de configuração **`PHP_VERSION`**,
**`PHP_MINOR_VERSION`** e
**`PHP_RELEASE_VERSION`** agora são sempre números.
Anteriormente, elas eram strings para compilações do buildconf.

As compilações do **phpize** agora refletem a árvore de origem no
diretório de compilação (como já funcionava para compilações dentro da árvore); algumas compilações de extensão
(especialmente ao usar Makefile.frag.w32) podem precisar de ajustes.

**--enable-sanitizer** agora é compatível
com compilações do MSVC. Isso habilita as asserções ASan e de depuração e é compatível
a partir do MSVC 16.10 e do Windows 10.

A opção de configuração **--with-uncritical-warn-choke**
para compilações do clang não é mais suportada.
Em vez disso, selecione os avisos a serem suprimidos por meio de CFLAGS.

### COM

A extensão agora é compilada de forma compartilhada por padrão; anteriormente, o padrão era uma extensão
estática, embora os binários oficiais do Windows compilassem uma extensão
compartilhada.

### FFI

Não é mais necessário especificar a biblioteca ao usar
[FFI::cdef()](ffi.cdef.md) e [FFI::load()](ffi.load.md).
No entanto, esse recurso de conveniência não deve ser usado em produção.

### Streams

Se apenas fluxos de pipe estiverem contidos no array `read`
e os arrays `write` e
`except` estiverem vazios,
[stream\_select()](function.stream-select.md) agora se comporta de forma semelhante aos sistemas POSIX,
ou seja, a função só retorna se pelo menos um pipe estiver pronto para leitura,
ou após o tempo limite expirar.
Anteriormente, [stream\_select()](function.stream-select.md) retornava imediatamente,
relatando todos os fluxos como prontos para leitura.

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
