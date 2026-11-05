# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solr.installation.php

---

## Instalação

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/solr](https://pecl.php.net/package/solr).

Para obter ajuda e suporte, visite o grupo de extensão do Google
[» Apache Solr PHP Extension](https://groups.google.com/forum/#!forum/php-solr).

Binários do Windows (arquivos DLL)
para esta extensão PECL estão disponíveis no site do PECL.

> **Nota**:
>
> O módulo solr pode ser compilado no modo de depuração passando a opção **--enable-solr-debug** para o comando 'configure'.
>
> Ao compilar manualmente, certifique-se de incluir suporte a curl e libxml na compilação.

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
