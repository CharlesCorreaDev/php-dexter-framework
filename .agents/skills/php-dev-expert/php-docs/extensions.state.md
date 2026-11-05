# Estado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/extensions.state.php

---

## Estado

Esta seção lista extensões não destinadas ao uso em produção —
elas são ou muito "antigas" (descontinuadas) ou "novas" (experimentais).

## Extensões Descontinuadas

Estas extensões foram descontinuadas, geralmente em favor de
outras extensões.

- [IMAP](book.imap.md)
- [MySQL (Original)](book.mysql.md)
- [Recode](book.recode.md)
- [Estatísticas](book.stats.md)
- [WDDX](book.wddx.md)
- [XML-RPC](book.xmlrpc.md)

## Extensões Experimentais

O comportamento destas extensões — incluindo os nomes de suas
funções e qualquer outra coisa documentada sobre estas extensões —
pode mudar sem aviso prévio em uma futura versão do PHP. Use estas
extensões por sua própria conta e risco.

- [Gmagick](book.gmagick.md)
- [ImageMagick](book.imagick.md)
- [mqseries](book.mqseries.md)
- [Parle](book.parle.md)
- [Rnp](book.rnp.md)
- [SVM](book.svm.md)
- [SVN](book.svn.md)
- [UI](book.ui.md)
- [API de Mensagens 0MQ](book.zmq.md)

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
