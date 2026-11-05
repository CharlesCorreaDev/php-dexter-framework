# Como os formatos são gerados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/about.generate.php

---

## Como os formatos são gerados

Este manual é escrito em XML usando o [» DocBook XML DTD](https://www.oasis-open.org/docbook/xml/) e o [» PhD](https://wiki.php.net/doc/phd/) (The [PH]P based
[D]ocBook renderer) para manutenção e formatação.

Usar XML dá
a capacidade de gerar diversos formatos de saída a partir
dos arquivos fonte, enquanto apenas um documento fonte é mantido para todos os formatos.
A ferramenta usada para formatar o manual online é o [» PhD](https://wiki.php.net/doc/phd/).
O [» Microsoft HTML Help
Workshop](https://msdn.microsoft.com/library/en-us/htmlhelp/html/vsconhh1start.asp) é usado para gerar o formato Windows HTML Help
do manual e, é claro, o próprio PHP é usado
para fazer algumas conversões e formatações.

O manual do PHP é gerado em vários idiomas e formatos, veja
[» https://www.php.net/docs.php](https://www.php.net/docs.php) para maiores detalhes.
O código fonte XML pode ser baixado do Git e
visualizado em [» https://github.com/php/doc-en](https://github.com/php/doc-en) (ou doc-pt\_br para o manual em português do Brasil).

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
