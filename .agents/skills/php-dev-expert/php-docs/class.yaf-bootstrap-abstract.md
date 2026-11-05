# A classe Yaf_Bootstrap_Abstract

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-bootstrap-abstract.php

---

# A classe Yaf\_Bootstrap\_Abstract

(No version information available, might only be in Git)

## Introdução

Bootstrap é um mecanismo usado para fazer algumas configurações iniciais antes da
execução de uma aplicação.

O usuário pode definir sua própria classe de Bootstrap através de herança da classe
**Yaf\_Bootstrap\_Abstract**.

Qualquer método declarado na classe de Bootstrap com o prefixo "\_init" será
chamado por [Yaf\_Application::bootstrap()](yaf-application.bootstrap.md) um por um
na ordem de definição.

## Examples

**Exemplo #1 Exemplo de bootstrap**

```
<?php
   /* a classe de bootstrap deve estar definida em ./application/Bootstrap.php */
   class Bootstrap extends Yaf_Bootstrap_Abstract {
        public function _initConfig(Yaf_Dispatcher $dispatcher) {
            var_dump(__METHOD__);
        }
        public function _initPlugin(Yaf_Dispatcher $dispatcher) {
            var_dump(__METHOD__);
        }
   }

   $config = array(
       "application" => array(
           "directory" => dirname(__FILE__) . "/application/",
       ),
   );

   $app = new Yaf_Application($config);
   $app->bootstrap();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(22) "Bootstrap::_initConfig"
string(22) "Bootstrap::_initPlugin"
```

## Resumo da classe

abstract
class **Yaf\_Bootstrap\_Abstract**
{

/\* Propriedades \*/

/\* Métodos \*/

}

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
