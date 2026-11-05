# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ibase.installation.php

---

## Instalação

Esta extensão foi movida para o repositório [» PECL](https://pecl.php.net/)
e não é mais distribuída com o PHP desde a versão 7.4.0

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://github.com/FirebirdSQL/php-firebird](https://github.com/FirebirdSQL/php-firebird).

Para ativar o suporte Firebird/InterBase, configure o PHP com
**--with-interbase[=DIR]**, onde DIR é o
diretório base da instalação do Firebird/InterBase, cujo padrão é
/usr.

> **Nota**:
> **Nota para os usuários de Win32/Win64**  
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
> fbclient.dll,gds32.dll
>
> Caso o servidor do banco de dados Firebird/InterBase esteja
> na mesma máquina onde o PHP esta sendo executado, esta DLL já estará disponível e
> fbclient.dll,gds32.dll (gds32.dll é gerada pelo instalador para aplicações legado) estarão na variável
> PATH.

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
