# Define um mecanismo de visualização customizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.setview.php

---

# Yaf\_Dispatcher::setView

(Yaf >=1.0.0)

Yaf\_Dispatcher::setView — Define um mecanismo de visualização customizado

### Descrição

public function **Yaf\_Dispatcher::setView**([Yaf\_View\_Interface](class.yaf-view-interface.md) `$view`): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

Este método fornece uma solução se a intenção for usar um mecanismo de visualização
customizado ao invés de um [Yaf\_View\_Simple](class.yaf-view-simple.md).

### Parâmetros

`view`
:   Uma instância de [Yaf\_View\_Interface](class.yaf-view-interface.md).

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de um mecanismo de visualização customizado**

```
<?php
require "/path/to/smarty/Smarty.class.php";

class Smarty_Adapter implements Yaf_View_Interface
{
    /**
     * Smarty object
     * @var Smarty
     */
    public $_smarty;

    /**
     * Construtor
     *
     * @param string $tmplPath
     * @param array $extraParams
     * @return void
     */
    public function __construct($tmplPath = null, $extraParams = array()) {
        $this->_smarty = new Smarty;

        if (null !== $tmplPath) {
            $this->setScriptPath($tmplPath);
        }

        foreach ($extraParams as $key => $value) {
            $this->_smarty->$key = $value;
        }
    }

    /**
     * Define o caminho para os modelos
     *
     * @param string $path O diretório a ser definido como o caminho.
     * @return void
     */
    public function setScriptPath($path)
    {
        if (is_readable($path)) {
            $this->_smarty->template_dir = $path;
            return;
        }

        throw new Exception('Invalid path provided');
    }

    /**
     * Atribui uma variável ao modelo
     *
     * @param string $key O nome da variável.
     * @param mixed $val O valor da variável.
     * @return void
     */
    public function __set($key, $val)
    {
        $this->_smarty->assign($key, $val);
    }

    /**
     * Permite que testes com empty() e isset() funcionem
     *
     * @param string $key
     * @return boolean
     */
    public function __isset($key)
    {
        return (null !== $this->_smarty->get_template_vars($key));
    }

    /**
     * Permite que unset() funcione em propriedade de objeto
     *
     * @param string $key
     * @return void
     */
    public function __unset($key)
    {
        $this->_smarty->clear_assign($key);
    }

    /**
     * Atribui variáveis ao modelo
     *
     * Permite definir uma chave específica ao valor especificado ou passar
     * um array de pares de chave => valor para definir em massa.
     *
     * @see __set()
     * @param string|array $spec A estratégia de atribuição a ser usada (chave ou
     * array de pares chave => valor)
     * @param mixed $value (Opcional) Se uma variável nomeada estiver serndo atribuída,
     * será usada como o valor.
     * @return void
     */
    public function assign($spec, $value = null) {
        if (is_array($spec)) {
            $this->_smarty->assign($spec);
            return;
        }

        $this->_smarty->assign($spec, $value);
    }

    /**
     * Limpa todas as variáveis atribuídas
     *
     * Limpa todas as variáveis atribuídas a Yaf_View via
     * {@link assign()} ou via sobrecarga de propriedades
     * ({@link __get()}/{@link __set()}).
     *
     * @return void
     */
    public function clearVars() {
        $this->_smarty->clear_all_assign();
    }

    /**
     * Processa um modelo e retorna a saída.
     *
     * @param string $name O modelo a ser processado.
     * @return string A saída.
     */
    public function render($name, $value = NULL) {
        return $this->_smarty->fetch($name);
    }

    public function display($name, $value = NULL) {
        echo $this->_smarty->fetch($name);
    }

}
?>
```

**Exemplo #2 Exemplo de **Yaf\_Dispatcher::setView()****

```
<?php
class Bootstrap extends Yaf_Bootstrap_Abstract {

    /**
     * Algumas configurações para "smarty":
     *
     * smarty.left_delimiter   = "{{"
     * smarty.right_delimiter  = "}}"
     * smarty.template_dir     = APPLICATION_PATH "/views/scripts/"
     * smarty.compile_dir      = APPLICATION_PATH "/views/templates_c/"
     * smarty.cache_dir        = APPLICATION_PATH "/views/templates_d/"
     *
     */
    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set("config", $config);
    }

    public function _initLocalName() {
        /** A classe Smarty_Adapter fica no diretório das bibliotecas locais */
        Yaf_Loader::getInstance()->registerLocalNamespace('Smarty');
    }

    public function _initSmarty(Yaf_Dispatcher $dispatcher) {
        $smarty = new Smarty_Adapter(null, Yaf_Registry::get("config")->get("smarty"));
        $dispatcher->setView($smarty);
        /* agora o mecanismo de visualização do Smarty se torna o padrão do Yaf */
    }
}
?>
```

### Veja também

- [Yaf\_View\_Interface](class.yaf-view-interface.md)
- [Yaf\_View\_Simple](class.yaf-view-simple.md)

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
