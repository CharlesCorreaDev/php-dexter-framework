# Driver PDO do Informix (PDO_INFORMIX)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-informix.php

---

# Driver PDO do Informix (PDO\_INFORMIX)

## Introdução

PDO\_INFORMIX é um driver que implementa a interface aos  [Objetos
de Dados PHP (PDO)](book.pdo.md#intro.pdo) para permitir acesso do PHP a bancos de dados Informix.

## Instalação

Para construir a extensão PDO\_INFORMIX, o Informix Client SDK 2.81 UC1 ou
superior deve ser instalado no mesmo sistema que o PHP. O Informix Client
SDK está disponível no [» site de suporte
do IBM Informix](https://www.ibm.com/support/pages/download-informix-products).

PDO\_INFORMIX é uma extensão [» PECL](https://pecl.php.net/), portanto devem ser seguidas as instruções em
[Instalação das extensões PECL](install.pecl.md) para instalá-la.
Execute o comando **configure** para apontar o caminho dos
arquivos de cabeçalho e bibliotecas do Informix Client SDK, conforme a seguir:

```
   bash$ ./configure --with-pdo-informix=/caminho/para/SDK[,shared]
```

O comando **configure** tem como padrão o valor da
variável de ambiente INFORMIXDIR.

## Cursores roláveis

PDO\_INFORMIX suporta cursores roláveis; no entanto, eles não estão habilitados
por padrão. Para ativar o suporte ao cursor rolável, deve-se definir
**`ENABLESCROLLABLECURSORS=1`** nas configurações de conexão
ODBC correspondentes em odbc.ini ou passar
a opção **`EnableScrollableCursors=1`** na string de
conexão DSN.

## Índice

- [PDO\_INFORMIX DSN](ref.pdo-informix.connection.md) — Conectando-se a bancos de dados Informix

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
