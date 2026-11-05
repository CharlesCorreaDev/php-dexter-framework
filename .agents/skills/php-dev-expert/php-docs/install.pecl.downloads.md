# Baixando extensões PECL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.pecl.downloads.php

---

## Baixando extensões PECL

**Aviso**

PECL está obsoleto.
O PHP Installer for Extensions (PIE) substitui o PECL e é o recomendado para instalar extensões.
Descubra mais em [» https://github.com/php/pie](https://github.com/php/pie)

Existem várias opções para baixar extensões PECL, como:

- O comando **pecl install extname** baixa o código das
  extensões automaticamente, portanto, neste caso, não há necessidade de
  baixar separadamente.
- [» https://pecl.php.net/](https://pecl.php.net/)

  O site do PECL contém informações sobre as extensões que a equipe de
  desenvolvimento do PHP oferece.
  As informações disponíveis aqui incluem changelogs, notas de versão,
  requisitos e outros detalhes semelhantes.
- **pecl download extname**

  As extensões PECL que possuem versões listadas no site do PECL estão
  disponíveis para download e instalação usando o
  [» comando pecl](https://pear.php.net/manual/en/guide.users.commandline.cli.php).
  Revisões específicas também podem ser especificadas.
- git

  Muitas extensões PECL podem ser encontradas no GitHub.
- SVN

  Algumas extensões PECL também podem ser encontradas no SVN.
  Uma visualização web pode ser encontrada em
  [» https://svn.php.net/pecl/](https://svn.php.net/pecl/).
  Para baixar direto do SVN,
  os seguintes comandos podem ser usados:

  ```
  $ svn checkout https://svn.php.net/repository/pecl/extname/trunk extname
  ```
- Downloads do Windows

  O Projeto PHP compila e oferece DLLs do Windows para a maioria das
  extensões PECL na página do pacote.

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
