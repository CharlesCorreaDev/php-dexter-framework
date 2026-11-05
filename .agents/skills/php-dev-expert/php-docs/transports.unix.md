# Domínio Unix: Unix e UDG

> **Fonte / Source:** https://www.php.net/manual/pt_BR/transports.unix.php

---

## Domínio Unix: Unix e UDG

`unix://` e
`udg://`

- `unix:///tmp/mysock`
- `udg:///tmp/mysock`

`unix://` provê acessos a conexão via soquetes
Unix. `udg://` provê
um transporte alternativo para um soquete Unix usando o protocolo
de datagramas de usuário (UDP).

Soquetes Unix, diferentes de soquetes de Internet, não esperam um
número de porta. No caso de [fsockopen()](function.fsockopen.md) o
parâmetro `portno` deve ser o valor 0.

> **Nota**:
>
> Soquetes de domínio Unix não são suportados no Windows.

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
