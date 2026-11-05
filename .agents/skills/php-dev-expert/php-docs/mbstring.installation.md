# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mbstring.installation.php

---

## Instalação

`mbstring` é uma extensão não padrão. Isso significa que
ela não está habilitada por padrão. Você deve habilitar explicitamente o módulo com
a opção `configure`. Veja a seção
[Instalação](install.md) para detalhes.

As seguintes opções de configuração estão relacionadas ao
módulo `mbstring`.

- **--enable-mbstring**: Habilita
  as funções do `mbstring`. Esta opção é
  necessária para usar as funções do `mbstring`.

  libmbfl é necessário para o `mbstring`.
  libmbfl é incluído com o `mbstring`.
  Antes do PHP 7.3.0, se libmbfl já está instalado no sistema,
  **--with-libmbfl[=DIR]** pode ser especificado para usar
  a biblioteca instalada.
- **--disable-mbregex**: Desabilita
  funções de expressão regular com suporte a caracteres multibyte.

  Oniguruma é necessário para as funções de expressão regular
  com suporte a caracteres multibyte.
  A partir do PHP 7.4.0, pkg-config é usado para detectar a biblioteca libonig.
  Antes do PHP 7.4.0, Oniguruma estava incluído com
  o `mbstring`, mas era possível compilá-lo com uma libonig já
  instalada passando **--with-onig[=DIR]**.

  É possível desabilitar a verificação de retrocesso multibyte
  na expressão regular especificando **--disable-mbregex-backtrack**.

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
