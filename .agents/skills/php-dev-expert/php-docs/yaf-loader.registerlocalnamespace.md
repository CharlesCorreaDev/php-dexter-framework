# Registra prefixo de classe local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-loader.registerlocalnamespace.php

---

# Yaf\_Loader::registerLocalNamespace

(Yaf >=1.0.0)

Yaf\_Loader::registerLocalNamespace — Registra prefixo de classe local

### Descrição

public function **Yaf\_Loader::registerLocalNamespace**([mixed](language.types.mixed.md) `$prefix`): [void](language.types.void.md)

Regitra nome de prefixo de classe local. [Yaf\_Loader](class.yaf-loader.md) pesquisa por
classes em dois diretórios de bibliotecas, um é configurado via [application.library.directory](yaf.appconfig.md#configuration.yaf.library) (no
application.ini) que é o diretório de biblioteca local; o outro é
configurado via [yaf.library](yaf.configuration.md#ini.yaf.library) (no
php.ini) que é o diretório de biblioteca global, já que pode ser compartilhado
por muitas aplicações no mesmo servidor.

Quando o carregamento automático está ativado, [Yaf\_Loader](class.yaf-loader.md)
determinará qual diretório de biblioteca deve ser pesquisado examinando o nome do
prefixo da da classe não encontrada.
Se o prefixo estiver registrado como um namespace local, ele será pesquisado
no diretório de biblioteca local, caso contrário será no global.
> **Nota**:
>
> Se yaf.library não estiver configurada, o diretório global será assumido como
> o global. Neste caso, todo o carregamento automático
> pesquisará no local.
> Para aumentar a robustez da aplicação Yaf, recomenda-se sempre registrar as classes
> da aplicação como locais.

### Parâmetros

`prefix`
:   Uma string ou um array de strings com o prefixo da classe.
    Todos as classes com este prefixo serão carregadas no caminho de biblioteca local.

### Valor Retornado

Um booleano.

### Examples

**Exemplo #1 Exemplo de **Yaf\_Loader::registerLocalNamespace()****

```
<?php
$loader = Yaf_Loader::getInstance('/local/library/', '/global/library');
$loader->registerLocalNamespace("Baidu");
$loader->registerLocalNamespace(array("Sina", "Weibo"));

$loader->autoload("Baidu_Name"); // procura em '/local/library/'
$loader->autoload("Sina");       // procura em '/local/library/'
$loader->autoload("Global_Name");// procura em '/global/library/'
$loader->autoload("Foo_Bar");    // procura em '/global/library/'

?>
```

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
