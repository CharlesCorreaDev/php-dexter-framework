# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/libxml.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`LIBXML_BIGLINES`** ([int](language.types.integer.md))
:   Permite que números de linha maiores que 65535 sejam reportados corretamente.

    > **Nota**:
    >
    > Disponível somente a partir do PHP 7.0.0 com Libxml >= 2.9.0.

**`LIBXML_COMPACT`** ([int](language.types.integer.md))
:   Ativa a otimização de alocação de nós pequenos. Isto pode acelerar a
    aplicação sem a necessidade de se modificar o código.

    > **Nota**:
    >
    > Somente disponível na Libxml >= 2.6.21

**`LIBXML_DTDATTR`** ([int](language.types.integer.md))
:   Atributos DTD padrões.

    **Cuidado**

    Habilitar o carregamento de atributos DTD irá ativar a busca de entidades externas.
    A constante **`LIBXML_NO_XXE`** pode ser usada para evitar isto (disponível somente na Libxml >= 2.13.0, a partir do PHP 8.4.0).

**`LIBXML_DTDLOAD`** ([int](language.types.integer.md))
:   Carrega o subconjunto externo.

    **Cuidado**

    Habilitar o carregamento de subconjuntos externos ativará a busca de entidades externas.
    A constante **`LIBXML_NO_XXE`** pode ser usada para evitar isto (disponível somente na Libxml >= 2.13.0, a partir do PHP 8.4.0).

**`LIBXML_DTDVALID`** ([int](language.types.integer.md))
:   Valida com o DTD.

    **Cuidado**

    Habilitar a validação do DTD pode facilitar ataques do tipo XXE (Entidade Externa XML).
    A constante **`LIBXML_NO_XXE`** pode ser usada para evitar isto (disponível somente na Libxml >= 2.13.0, a partir do PHP 8.4.0).

**`LIBXML_HTML_NOIMPLIED`** ([int](language.types.integer.md))
:   Define a opção HTML\_PARSE\_NOIMPLIED, que desliga a
    adição automática de elementos html/body... implícitos.

    > **Nota**:
    >
    > Disponível somente na Libxml >= 2.7.7 (a partir do PHP >= 5.4.0)

**`LIBXML_HTML_NODEFDTD`** ([int](language.types.integer.md))
:   Define a opção HTML\_PARSE\_NODEFDTD, que evita que um doctype padrão
    seja adicionado quando um não for encontrado.

    > **Nota**:
    >
    > Disponível somente na Libxml >= 2.7.8 (a partir do PHP >= 5.4.0)

**`LIBXML_LOADED_VERSION`** ([string](language.types.string.md))
:   Versão do módulo core parser da libxml.

**`LIBXML_NOBLANKS`** ([int](language.types.integer.md))
:   Remove nós em branco

**`LIBXML_NOCDATA`** ([int](language.types.integer.md))
:   Funde CDATA como nós de texto

**`LIBXML_NOEMPTYTAG`** ([int](language.types.integer.md))
:   Expande etiquetas vazias (ex.: `<br/>` para
    `<br></br>`)

    > **Nota**:
    >
    > Atualmente, esta opção está disponível somente nas funções
    > [DOMDocument::save](domdocument.save.md) e
    > [DOMDocument::saveXML](domdocument.savexml.md).

**`LIBXML_NOENT`** ([int](language.types.integer.md))
:   Substitui entidades

    **Cuidado**

    Habilitar dubstituição de entidade pode facilitar ataques do tipo XXE (XML External Entity).

**`LIBXML_NOERROR`** ([int](language.types.integer.md))
:   Suprime mensagens de erro

**`LIBXML_NONET`** ([int](language.types.integer.md))
:   Desabilita o acesso à rede ao carregar documentos

**`LIBXML_NOWARNING`** ([int](language.types.integer.md))
:   Suprime mensagens de alerta

**`LIBXML_NOXMLDECL`** ([int](language.types.integer.md))
:   Remove a declaração do XML ao salvar um documento

    > **Nota**:
    >
    > Somente disponível na Libxml >= 2.6.21

**`LIBXML_NO_XXE`** ([int](language.types.integer.md))
:   Desabilita Entidades Externas XML (XXE) ao realizar substituição de entidade

    > **Nota**:
    >
    > Disponível apenas na Libxml >= 2.13.0, a partir do PHP 8.4.0

**`LIBXML_NSCLEAN`** ([int](language.types.integer.md))
:   Remove declarações redundantes de espaço de nomes

**`LIBXML_PARSEHUGE`** ([int](language.types.integer.md))
:   Define a opção XML\_PARSE\_HUGE, que aumenta alguns limites codificados do analisador. Isto afeta
    limites como profundidade máxima de um documento ou de recursão de entidade, assim como limites do
    tamanho dos nós de texto.

    **Cuidado**

    Como esta constante aumenta limites codificados, só deve ser usada com dados confiáveis.
    Aumentar o limite de profundidade com entrada não confiável pode levar a consumo excessivo de recursos,
    como um estouro de pilha ao processar um documento aninhado com muita profundidade.

    > **Nota**:
    >
    > Disponível somente na Libxml >= 2.7.0 (a partir do PHP >= 5.3.2 e do PHP >= 5.2.12)

**`LIBXML_PEDANTIC`** ([int](language.types.integer.md))
:   Defina a opção XML\_PARSE\_PEDANTIC, que habilita relatório pedantes de erros.

    > **Nota**:
    >
    > Disponível a partir do PHP >= 5.4.0

**`LIBXML_RECOVER`** ([int](language.types.integer.md))
:   Habilita modo de recuperação ao analisar um documento.

    > **Nota**:
    >
    > Disponível apenas a partir do PHP 8.4.0

**`LIBXML_XINCLUDE`** ([int](language.types.integer.md))
:   Realiza substituições XInclude (apenas para interpretadores "pull", ou seja [XMLReader](class.xmlreader.md)).

**`LIBXML_ERR_ERROR`** ([int](language.types.integer.md))
:   Um erro recuperável

**`LIBXML_ERR_FATAL`** ([int](language.types.integer.md))
:   Um erro fatal

**`LIBXML_ERR_NONE`** ([int](language.types.integer.md))
:   Sem erros

**`LIBXML_ERR_WARNING`** ([int](language.types.integer.md))
:   Um alerta simples

**`LIBXML_VERSION`** ([int](language.types.integer.md))
:   Versão da libxml como 20605 ou 20617

**`LIBXML_DOTTED_VERSION`** ([string](language.types.string.md))
:   Versão da libxml como 2.6.5 ou 2.6.17

**`LIBXML_SCHEMA_CREATE`** ([int](language.types.integer.md))
:   Cria nós de valores padrões/fixos durante validação do esquema XSD

    > **Nota**:
    >
    > Disponível somente na Libxml >= 2.6.14 (a partir do PHP >= 5.5.2)

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
