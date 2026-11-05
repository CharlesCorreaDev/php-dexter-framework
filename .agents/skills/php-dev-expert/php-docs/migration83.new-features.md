# Novas Funcionalidades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration83.new-features.php

---

## Novas Funcionalidades

### Núcleo do PHP

#### Propriedades somente leitura

Classes anônimas agora podem ser marcadas como somente leitura.

Propriedades somente leitura agora podem ser reinicializadas durante a clonagem.

#### Constantes de Classe Tipadas

Constantes de classe, interface, trait e enum agora suportam declarações de tipo.

#### Closures criados a partir de métodos mágicos

Closures criados a partir de métodos mágicos agora podem aceitar argumentos nomeados.

#### O modificador final com um método de uma trait

O modificador final agora pode ser usado ao utilizar um método de uma trait.

#### Sobreposição de atributos

Foi adicionado o atributo #[\Override] para verificar se um método existe em uma classe pai ou
interface implementada.

#### Sintaxe para buscar constantes de classe dinamicamente.

Agora é possível acessar constantes de classe de forma dinâmica usando a sintaxe
`C::{$name}`.

#### Inicializadores de variáveis Estáticas

Os inicializadores de variáveis estáticas agora podem conter expressões arbitrárias.

#### Sintaxe de valor de fallback para variáveis ini

O arquivo php.ini agora suporta a sintaxe de valor de fallback/default.

```
<?php
/*
No arquivo /path/to/user.ini estão contidas as seguintes configurações:

listen = localhost:${DRUPAL_FPM_PORT:-9000}
*/

$user_ini = parse_ini_file('/path/to/user.ini');
echo $user_ini['listen']; // localhost:9000
```

### CLI

Agora é possível verificar a sintaxe de vários arquivos.

### DOM

Foram adicionadas as propriedades [DOMElement::$className](class.domelement.md#domelement.props.classname)
e [DOMElement::$id](class.domelement.md#domelement.props.id).
No momento, essas propriedades não são seguras para binários devido a limitações
subjacentes do libxml2.
Isso significa que os valores das propriedades serão truncados em um byte NUL.

Foram adicionadas as propriedades [DOMNode::$isConnected](class.domnode.md#domnode.props.isconnected)
e [DOMNameSpaceNode::$isConnected](class.domnamespacenode.md#domnamespacenode.props.isconnected).

Foram adicionadas as propriedades [DOMNode::$parentElement](class.domnode.md#domnode.props.parentelement) e
[DOMNameSpaceNode::$parentElement](class.domnamespacenode.md#domnamespacenode.props.parentelement).

### FFI

Agora é possível atribuir [FFI\CData](class.ffi-cdata.md) a outros FFI\CData.
Isso significa que CData pode ser atribuído a estruturas e campos.

### Opcache

`opcache_get_status()['scripts'][n]['revalidate']` agora contém
um carimbo de data e hora Unix que indica quando a próxima revalidação do carimbo de
data e hora dos scripts está programada, de acordo
com a diretiva INI
[opcache.revalidate\_freq](opcache.configuration.md#ini.opcache.revalidate-freq);

### POSIX

A função [posix\_getrlimit()](function.posix-getrlimit.md) agora aceita um parâmetro opcional
`resource` para permitir a busca de um único limite de recurso.

A função [posix\_isatty()](function.posix-isatty.md) agora gera avisos de tipo para inteiros,
seguindo as semânticas ZPP usuais.

A função [posix\_ttyname()](function.posix-ttyname.md) agora gera avisos de tipo para inteiros,
seguindo as semânticas ZPP usuais, e avisos de valor para inteiros de
descritor de arquivo inválidos.

### Fluxos

Agora, os fluxos podem emitir a notificação **`STREAM_NOTIFY_COMPLETED`**.
Isso não estava implementado anteriormente.

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
