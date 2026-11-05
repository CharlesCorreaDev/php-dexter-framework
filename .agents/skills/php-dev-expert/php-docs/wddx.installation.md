# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wddx.installation.php

---

## Instalação

## PHP 7.4

Esta extensão foi movida para o repositório [» PECL](https://pecl.php.net/)
e não é mais distribuída com o PHP desde a versão 7.4.0

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/wddx](https://pecl.php.net/package/wddx).

## PHP < 7.4

Depois de instalar a bilioteca expat requerida, compile o PHP com a opção
**--enable-wddx**, e use
**--with-libexpat-dir** para a expat.

A versão do PHP para Windows tem suporte
nativo para esta extensão. Nenhuma extensão adicional precisa ser carregada
para usar essas funções.

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
