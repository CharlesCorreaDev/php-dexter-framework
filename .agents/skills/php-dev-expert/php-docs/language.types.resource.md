# Recursos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.resource.php

---

## Recursos

Um [resource](language.types.resource.md) é uma variável especial, que mantém
uma referência a um recurso externo. Recursos são criados e usados por funções especiais. Veja
o [apêndice](resource.md) para uma lista de todas essas
funções e seus tipos [resource](language.types.resource.md) correspondentes.

Veja também a função [get\_resource\_type()](function.get-resource-type.md).

### Convertendo para recurso

Como as variáveis [resource](language.types.resource.md) mantém manipuladores especiais para arquivos
abertos, conexões de bancos de dados, canvas de imagens e coisas
do tipo, converter para [resource](language.types.resource.md) não faz sentido algum.

### Liberando recursos

Graças ao sistema de contagem de referência introduzido com o mecanismo Zend,
um [resource](language.types.resource.md) que não tem mais nenhuma referência é detectado
automaticamente, e liberado pelo coletor de lixo. Por esta razão, é
rara a necessidade de liberação manual de memória.

> **Nota**:
>
> Conexões persistentes de bancos são exceções à regra. Elas
> *não são* destruídas pelo coletor de lixo. Veja também a seção [conexões
> persistentes](features.persistent-connections.md) para mais informações.

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
