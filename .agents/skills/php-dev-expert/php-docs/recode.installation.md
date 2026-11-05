# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recode.installation.php

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
[» https://pecl.php.net/package/recode](https://pecl.php.net/package/recode).

## PHP < 7.4

Para poder utilizar as funções definidas neste
módulo você deve compilar seu interpretador PHP utilizando a
opção
**--with-recode[=DIR]**.

**Aviso**

Falhas e problemas de inicialização do PHP podem ser encontrados
ao carregar o recode como extensão **após** carregar qualquer extensão de [mysql](ref.mysql.md) ou [imap](ref.imap.md). Carregar o recode antes dessas
extensões provou resolver o problema. Isto se deve a um problema técnico
de que tanto a biblioteca c-client usada pelo imap quanto pelo recode possuem sua própria função
`hash_lookup()` e tanto o mysql quanto o recode possuem
sua própria função `hash_insert`.

**Aviso**

As extensões [IMAP](book.imap.md), [recode](book.recode.md) e
[YAZ](book.yaz.md)
não podem ser usadas em conjunto, pois
compartilham os mesmos símbolos internos. Observação: a Yaz 2.0 e superiores não sofrem deste problema.

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
