# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fdf.installation.php

---

## Instalação

Esta extensão é considerada sem manutenção e abandonada. No entanto, o código-fonte
desta extensão ainda está disponível no SVN do
PECL aqui:
[» https://svn.php.net/viewvc/pecl/fdf](https://svn.php.net/viewvc/pecl/fdf).

Esta extensão não está mais incluída no PHP.

> **Nota**:
>
> Se houver problemas ao configurar o PHP com suporte a fdftk, verifique
> se o arquivo de cabeçalho fdftk.h e a biblioteca
> libfdftk.so estão no lugar certo.
> O script **configure** suporta tanto a estrutura de diretório da
> distribuição do FDF SDK quanto o layout usual DIR/include /
> DIR/lib, então pode-se apontá-lo
> diretamente para o diretório de distribuição descompactado ou pode-se colocar o arquivo de
> cabeçalho e a biblioteca apropriada para a plataforma em, por exemplo,
> /usr/local/include e
> /usr/local/lib e configurar com
> **--with-fdftk=/usr/local**.

> **Nota**:
> **Nota para usuários do Win32**  
>
> Para que esta extensão funcione, existem arquivos
> DLL que devem estar disponíveis no
> PATH do sistema Windows. Para saber como fazer isso, veja a
> FAQ intitulada "[Como eu adiciono o meu diretório PHP ao PATH
> do Windows](faq.installation.md#faq.installation.addtopath)". Embora copiar arquivos DLL
> da pasta do PHP para o diretório system do Windows também funcione
> (porque o diretório system está, por padrão, no PATH do sistema),
> isso não é recomendado.
> *Esta extensão requer que os seguintes arquivos estejam no
> PATH:*
> fdftk.dll

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
