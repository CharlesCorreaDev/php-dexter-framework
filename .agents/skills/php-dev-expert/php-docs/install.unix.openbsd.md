# Instalando a partir de pacotes ou portas no OpenBSD

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.unix.openbsd.php

---

## Instalando a partir de pacotes ou portas no OpenBSD

Esta seção contém notas e dicas específicas para a instalação
do PHP no [» OpenBSD](https://www.openbsd.org/).

### Usando Pacotes Binários

Usar pacotes binários para instalar o PHP no OpenBSD é o método recomendado
e o mais simples. O pacote núcleo foi separado dos vários módulos,
e cada um pode ser instalado e removido independentemente dos outros.
Os arquivos necessários podem ser encontrados no CD do OpenBSD ou no FTP do site.

O pacote principal que você precisa instalar é o php,
que contém o engine básico (mais gettext e iconv), e pode estar
disponível dentre várias versões a escolher. Depois, olhe
os pacotes com módulos, como o php-mysqli
ou php-imap. Você precisa usar o comando
**phpxs** para ativar e desativar esses módulos no seu arquivo php.ini.

**Exemplo #1 Exemplo de instalação de pacote no OpenBSD**

```
# pkg_add php
# pkg_add php-apache
# pkg_add php-mysqli
  (install the PEAR libraries)
# pkg_add pear

Siga as instruções de cada pacote!

  (to remove packages)
# pkg_delete php
# pkg_delete php-apache
# pkg_delete php-mysqli
# pkg_delete pear
```

Leia o manual de [» packages(7)](https://www.openbsd.org/cgi-bin/man.cgi?query=packages)
para mais informações sobre pacotes binários no OpenBSD.

### Usando Ports

Você também pode compilar o PHP a partir dos fontes usando a [» árvore ports](https://www.openbsd.org/faq/ports/ports.html).
No entanto, isso só é recomendado para usuários familiarizados com OpenBSD. O port do PHP
é dividido em núcleo e extensões. As
extensões geram sub-pacotes para todos os módulos
suportados pelo PHP. Se você achar que não quer criar alguns dos módulos,
use o comando **no\_\*** FLAVOR. Por exemplo, se você quiser que
o módulo imap seja ignorado, atribua à FLAVOR o valor **no\_imap**.

### Problemas Comuns

- Apache e Nginx não são mais os servidores padrão no OpenBSD, mas eles podem ser facilmente
  encontrados em ports e pacotes. O novo servidor é chamado 'httpd'.
- A instalação padrão do Apache roda dentro de uma
  [» prisão de chroot(2)](https://www.openbsd.org/cgi-bin/man.cgi?query=chroot), que restringe os scripts PHP a
  acessar arquivos abaixo de /var/www. Você irá, portanto, precisar criar um
  diretório /var/www/tmp para que os arquivos de sessão do PHP sejam guardados, ou usar um
  backend alternativo para sessões. Além disso, sockets de bancos de dados devem ser colocados dentro
  da prisão ou escutar na interface localhost. Se você usar funções de rede,
  alguns arquivos do diretório /etc como /etc/resolv.conf e
  /etc/services precisarão ser movidos para /var/www/etc.
  O pacote OpenBSD PEAR se instala automaticamente nos diretórios chroot corretos.
- Os pacotes do OpenBSD package para a extensão [» gd](https://libgd.github.io)
  requer o Xorg para instalação. Isso é realizado na instalação com o acréscimo de
  o file set xbase.tgz, ou pode ser instalado
  posteriormente (veja
  [» OpenBSD FAQ#4](https://www.openbsd.org/faq/faq4.html#FilesNeeded)).

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
