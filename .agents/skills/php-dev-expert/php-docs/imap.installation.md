# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imap.installation.php

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
[» https://pecl.php.net/package/imap](https://pecl.php.net/package/imap).

## PHP < 8.4

Para fazer estas funções funcionarem, é necessário compilar o PHP com
**--with-imap[=DIR]**, onde DIR é o
prefixo de instalação c-client. Do exemplo acima, seria usada a opção
**--with-imap=/usr/local/imap-2000b**.
Este local depende de onde este diretório foi criado de acordo com a
descrição acima. Usuários do Windows podem incluir a
DLL php\_imap.dll no php.ini.

> **Nota**:
>
> Dependendo de como o c-client foi configurado, talvez também seja necessário
> adicionar **--with-imap-ssl=/path/to/openssl/** e/ou
> **--with-kerberos=/path/to/kerberos**
> à linha de configuração do PHP.

**Aviso**

A extensão IMAP não é segura para threads; ela não deve ser usada com compilações ZTS.

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
