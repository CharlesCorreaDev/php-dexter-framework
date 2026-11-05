# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi.installation.php

---

## Instalação

Esta extensão [» PECL](https://pecl.php.net/) não é distribuída com o PHP.

Um procedimento de exemplo de instalação no Ubuntu 18.04 com PHP 7.2:

```
// Dependências
$ apt install build-essential libprotobuf-dev libboost-dev openssl protobuf-compiler liblz4-tool zstd

// PHP com as extensões desejadas; php7.2-dev é requerido para compilação
$ apt install php7.2-cli php7.2-dev php7.2-mysql php7.2-pdo php7.2-xml

// Compila a extensão
$ pecl install mysql_xdevapi
```

O comando `pecl install` não habilita as extensões PHP (por padrão)
e as habilitações de extensões podem ser feitas de várias formas.
Um outro exemplo do PHP 7.2 no Ubuntu 18.04:

```
// Cria o seu próprio arquivo ini
$ echo "extension=mysql_xdevapi.so" > /etc/php/7.2/mods-available/mysql_xdevapi.ini

// Usa o comando 'phpenmod' (nota: específico para Debian/Ubuntu)
$ phpenmod -v 7.2 -s ALL mysql_xdevapi

// Uma alternativa ao 'phpenmod' é criar uma ligação simbólica manualmente
// $ ln -s /etc/php/7.2/mods-available/mysql_xdevapi.ini /etc/php/7.2/cli/conf.d/20-mysql_xdevapi.ini

// Vejamos agora que extensões do MySQL estão habilitadas
$ php -m |grep mysql

mysql_xdevapi
mysqli
mysqlnd
pdo_mysql
```

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/mysql\_xdevapi](https://pecl.php.net/package/mysql_xdevapi).

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
