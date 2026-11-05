# Introdução às Instalações PECL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.pecl.intro.php

---

## Introdução às Instalações PECL

**Aviso**

PECL está obsoleto.
O PHP Installer for Extensions (PIE) substitui o PECL e é o recomendado para instalar extensões.
Descubra mais em [» https://github.com/php/pie](https://github.com/php/pie)

[» PECL](https://pecl.php.net/) é um repositório de extensões PHP disponibilizadas através do
sistema de pacotes [» PEAR](https://pear.php.net/).
Esta seção do manual destina-se a demonstrar como obter e instalar extensões
PECL.

Estas instruções assumem que `/path/to/php/src/dir/` seja o
caminho para o código-fonte do PHP e que `extname`
seja o nome da extensão PECL. Ajuste adequadamente.
Estas instruções também assumem uma familiaridade com o
[» comando pear](https://pear.php.net/manual/en/guide.users.commandline.cli.php).
As informações no manual do PEAR para o comando
**pear**
também se aplicam ao comando
**pecl**.

Uma extensão compartilhada deve ser compilada, instalada e carregada para ser útil.
Os métodos descritos abaixo fornecem várias instruções sobre como criar e
instalar as extensões, mas não as carregam automaticamente.
As extensões podem ser carregadas adicionando
uma diretiva [extension](ini.core.md#ini.extension)
ao arquivo php.ini ou através do uso da
função
[dl()](function.dl.md).

Ao compilar módulos PHP, é importante ter as versões apropriadas das
ferramentas necessárias (autoconf, automake, libtool, etc.).
Consulte as
[» Instruções para Acesso Anônimo ao Git](https://www.php.net/git.php)
para obter detalhes sobre as ferramentas e versões necessárias.

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
