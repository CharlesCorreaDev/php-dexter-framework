# Lista de Filtros Disponíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filters.php

---

# Lista de Filtros Disponíveis

## Índice

- [Filtros de String](filters.string.md)
- [Filtros de Conversão](filters.convert.md)
- [Filtros de Compressão](filters.compression.md)
- [Filtros de Criptografia](filters.encryption.md)

A seguir está uma lista de alguns filtros internos de fluxo para
uso com [stream\_filter\_append()](function.stream-filter-append.md).
Sua versão do PHP pode ter mais filtros (ou menos) que os
listados aqui.

Vale notar que existe uma leve assimetria entre
[stream\_filter\_append()](function.stream-filter-append.md)
e [stream\_filter\_prepend()](function.stream-filter-prepend.md).
Todo fluxo no PHP contém um pequeno *buffer de leitura*
onde ele guarda blocos de dados recuperados do
sistema de arquivos ou outro recurso (resource) com o propósito de processar dados
da maneira mais eficiente. Assim que os dados são recuperados
do recurso para o buffer interno do fluxo, eles
são processados imediatamente por qualquer filtro anexo quer esteja
a aplicação PHP preparada para receber os dados ou não.
Se os dados estão esperando no buffer de leitura quando um filtro for
*anexado*, esses dados serão imediatamente
processados através daquele filtro, tornando transparente o fato de eles estarem
esperando no buffer. No entanto, se os dados estão
esperando no buffer de leitura quando um filtro é
*prefixado*, esses dados *NÃO* serão
processados por este filtro. Ao invés disso, eles esperarão até
o próximo bloco de dados ser recuperado do recurso.

Para uma lista dos filtros instalados na sua versão do
PHP use [stream\_get\_filters()](function.stream-get-filters.md).

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
