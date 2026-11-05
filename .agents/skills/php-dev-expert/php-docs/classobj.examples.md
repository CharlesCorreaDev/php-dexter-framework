# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/classobj.examples.php

---

# Examples

Neste exemplo, nós primeiramente definiremos uma classe base e uma
extensão da classe. A classe base descreve um vegetal comum,
que é comestível ou não e qual é sua cor. A sub-classe
Espinafre adiciona um método para cozinhá-lo e outro
para descobrir se ele está cozido.

**Exemplo #1 Definições da Classe**

Vegetal

```
<?php

class Vegetal {
    public $comestivel;

    public $cor;

    public function __construct($comestivel, $cor = "verde")
    {
        $this->comestivel = $comestivel;
        $this->cor = $cor;
    }

    public function comestivel()
    {
        return $this->comestivel;
    }

    public function qual_cor()
    {
        return $this->cor;
    }
}

?>
```

Espinafre

```
<?php

class Espinafre extends Vegetal {
    public $cozido = false;

    public function __construct()
    {
        parent::__construct(true, "verde");
    }

    public function cozinhe()
    {
        $this->cozido = true;
    }

    public function esta_cozido()
    {
        return $this->cozido;
    }
}

?>
```

Agora serão instanciados objetos destas classes e exibidas informações
sobre elas, incluindo o parentesco entre elas.
Também serão definidas algumas funções úteis, principalmente para ter
uma saída bem formatada de variáveis.

**Exemplo #2 test\_script.php**

```
<?php

// register autoloader to load classes
spl_autoload_register();

function printProperties($obj)
{
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}

function printMethods($obj)
{
$arr = get_class_methods(get_class($obj));
    foreach ($arr as $metodo) {
        echo "\tfunção $metodo()\n";
    }
}

function objetoPertenceA($obj, $classe)
{
    if (is_subclass_of($obj, $classe)) {
        echo "Objeto pertence à classe " . get_class($obj);
        echo ", uma sub-classe de $classe\n";
    } else {
        echo "Objeto não pertence a uma sub-classe de $classe\n";
    }
}

// instancia 2 objetos

$vegetal = new Vegetal(true, "azul");
$folha = new Espinafre();

// mostra informação sobre os objetos
echo "vegetal: CLASSE " . get_class($vegetal) . "\n";
echo "folha: CLASSE " . get_class($folha);
echo ", CLASSE PAI " . get_parent_class($folha) . "\n";

// mostra propriedades do vegetal
echo "\nvegetal: Propriedades\n";
printProperties($vegetal);

// e métodos de folha
echo "\nfolha: Métodos\n";
printMethods($folha);

echo "\nParentesco:\n";
objetoPertenceA($folha, Espinafre::class);
objetoPertenceA($folha, Vegetal::class);
?>
```

Os exemplos acima produzirão:

```
vegetal: CLASSE Vegetal
folha: CLASSE Espinafre, CLASSE PAI Vegetal

vegetal: Propriedades
        comestivel = 1
        cor = azul

folha: Métodos
        function __construct()
        function cozinhe()
        function esta_cozido()
        function comestivel()
        function qual_cor()

Parentesco:
Objeto não pertence a uma sub-classe de Espinafre
Objeto pertence à classe Espinafre, uma sub-classe de Vegetal
```

Uma nota importante sobre o exemplo acima é que
o objeto $folha é uma instância da classe
**Espinafre** que é uma sub-classe de
**Vegetal**.

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
