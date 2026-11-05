# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zip.installation.php

---

## Instalação

## Sistemas Linux

Para usar estas funções, o PHP deve ser compilado com suporte ZIP
usando-se a opção de configuração
**--with-zip**.

Antes do PHP 7.4.0, libzip era incluída no PHP,
e para compilar a extensão era necessário usar a
opção de configuração
**--enable-zip**.
Compilar com a libzip inclusa era desencorajado a partir do PHP 7.3.0,
mas ainda possível, usando-se
a opção de configuração
**--without-libzip**.

Um opção de configuração **--with-libzip=DIR**
foi adicionada para usar uma instalação libzip de sistema. A
versão 0.11 da libzip é requerida, com 0.11.2 ou posterior recomendada.

## Windows

A partir do PHP 8.2.0, a DLL php\_zip.dll precisa ser
[ativada](install.pecl.windows.md#install.pecl.windows.loading) no
php.ini.
Anteriormente, esta extensão era interna.

## Instalação via PECL

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/zip](https://pecl.php.net/package/zip).

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
