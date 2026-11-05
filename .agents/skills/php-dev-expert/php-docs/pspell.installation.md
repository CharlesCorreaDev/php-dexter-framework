# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pspell.installation.php

---

## Instalação

## PHP 8.4

Esta extensão foi movida para o repositório [» PECL](https://pecl.php.net/)
e não é mais distribuída com o PHP desde a versão 8.4.0

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/pspell](https://pecl.php.net/package/pspell).

## PHP < 8.4

Para habilitar esta extensão, o PHP deve ser compilado com a opção
**--with-pspell[=dir]**.

> **Nota**:
> **Nota para usuários Win32**  
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
> aspell-15.dll da pasta
> bin da instalação do aspell.
>
> O suporte Win32 requer pelo menos a versão 0.50 do aspell.

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
