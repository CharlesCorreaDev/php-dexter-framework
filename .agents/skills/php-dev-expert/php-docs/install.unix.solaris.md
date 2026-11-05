# Dicas de instalação específicas para o Solaris

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.unix.solaris.php

---

## Dicas de instalação específicas para o Solaris

Essa seção contém notas e dicas específicas para a instalação
do PHP em sistemas Solaris.

### Software Necessário

Instalações do Solaris frequentemente não possuem compiladores C e suas ferramentas relacionadas.
Leia [esse FAQ](faq.build.md#faq.installation.needgnu)
para obter informações sobre porque usar versões GNU para algumas
dessas ferramentas é necessário.

Para descompactar uma distribuição PHP você precisará de:

- tar
- gzip ou
- bzip2

Para compilar o PHP você precisará de:

- gcc (recomendado, outros compiladores C podem funcionar)
- make
- GNU sed

Para compilar extensões extras ou hackear o código do PHP você também precisará de:

- re2c
- bison
- m4
- autoconf
- automake

Além disso, você pode precisar instalar (e talvez até compilar) softwares
específicos à sua configuração, como o Oracle
ou MySQL.

### Utilizando pacotes

Você pode simplificar o processo de instalação no Solaris ao utilizar pkgadd para
instalar os componentes mais comuns. O Image Packaging System (IPS) para
Solaris 11 Express também contém os componentes mais comuns
utilizando-se o comando pkg.

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
